<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBonusRequest;
use App\Http\Requests\UpdateBonusRequest;
use App\Repositories\BonusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\BrokerReview;
use App\Models\Bonus;

class BonusController extends AppBaseController
{
    /** @var BonusRepository $bonusRepository*/
    private $bonusRepository;

    public function __construct(BonusRepository $bonusRepo)
    {
        $this->bonusRepository = $bonusRepo;
    }

    /**
     * Display a listing of the Bonus.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bonuses = $this->bonusRepository->all();

        return view('bonuses.index')
            ->with('bonuses', $bonuses);
    }

    /**
     * Show the form for creating a new Bonus.
     *
     * @return Response
     */
    public function create()
    {
        $brokerReviews = BrokerReview::pluck('broker_name', 'id');
        
        return view('bonuses.create', compact('brokerReviews'));
    }

    /**
     * Store a newly created Bonus in storage.
     *
     * @param CreateBonusRequest $request
     *
     * @return Response
     */
    public function store(CreateBonusRequest $request)
    {
        $input = $request->all();

        $bonus = $this->bonusRepository->create($input);

        Flash::success('Bonus saved successfully.');

        return redirect(route('bonuses.index'));
    }

    /**
     * Display the specified Bonus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bonus = $this->bonusRepository->find($id);

        if (empty($bonus)) {
            Flash::error('Bonus not found');

            return redirect(route('bonuses.index'));
        }

        return view('bonuses.show')->with('bonus', $bonus);
         
    }

    /**
     * Show the form for editing the specified Bonus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bonus = $this->bonusRepository->find($id);

        $brokerReviews = BrokerReview::pluck('broker_name', 'id');

        if (empty($bonus)) {
            Flash::error('Bonus not found');

            return redirect(route('bonuses.index'));
        }

        return view('bonuses.edit',compact('brokerReviews'))->with('bonus', $bonus);
    }

    /**
     * Update the specified Bonus in storage.
     *
     * @param int $id
     * @param UpdateBonusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBonusRequest $request)
    {
        $bonus = $this->bonusRepository->find($id);

        if (empty($bonus)) {
            Flash::error('Bonus not found');

            return redirect(route('bonuses.index'));
        }

        $bonus = $this->bonusRepository->update($request->all(), $id);

        Flash::success('Bonus updated successfully.');

        return redirect(route('bonuses.index'));
    }

    /**
     * Remove the specified Bonus from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bonus = $this->bonusRepository->find($id);

        if (empty($bonus)) {
            Flash::error('Bonus not found');

            return redirect(route('bonuses.index'));
        }

        $this->bonusRepository->delete($id);

        Flash::success('Bonus deleted successfully.');

        return redirect(route('bonuses.index'));
    }
}
