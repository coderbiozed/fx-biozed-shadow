<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContestsRequest;
use App\Http\Requests\UpdateContestsRequest;
use App\Repositories\ContestsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\BrokerReview;
use App\Models\Contests;

class ContestsController extends AppBaseController
{
    /** @var ContestsRepository $contestsRepository*/
    private $contestsRepository;

    public function __construct(ContestsRepository $contestsRepo)
    {
        $this->contestsRepository = $contestsRepo;
    }

    /**
     * Display a listing of the Contests.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contests = $this->contestsRepository->all();

        return view('contests.index')
            ->with('contests', $contests);
    }

    /**
     * Show the form for creating a new Contests.
     *
     * @return Response
     */
    public function create()
    {
        $brokerReviews = BrokerReview::pluck('broker_name', 'id');

        return view('contests.create', compact('brokerReviews'));
    }

    /**
     * Store a newly created Contests in storage.
     *
     * @param CreateContestsRequest $request
     *
     * @return Response
     */
    public function store(CreateContestsRequest $request)
    {
        $input = $request->all();

        $contests = $this->contestsRepository->create($input);

        Flash::success('Contests saved successfully.');

        return redirect(route('contests.index'));
    }

    /**
     * Display the specified Contests.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contests = $this->contestsRepository->find($id);

        if (empty($contests)) {
            Flash::error('Contests not found');

            return redirect(route('contests.index'));
        }

        return view('contests.show')->with('contests', $contests);
    }

    /**
     * Show the form for editing the specified Contests.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contests = $this->contestsRepository->find($id);
        
        $brokerReviews = BrokerReview::pluck('broker_name', 'id');

        if (empty($contests)) {
            Flash::error('Contests not found');

            return redirect(route('contests.index'));
        }

        return view('contests.edit',compact('brokerReviews'))->with('contests', $contests);
    }

    /**
     * Update the specified Contests in storage.
     *
     * @param int $id
     * @param UpdateContestsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContestsRequest $request)
    {
        $contests = $this->contestsRepository->find($id);

        if (empty($contests)) {
            Flash::error('Contests not found');

            return redirect(route('contests.index'));
        }

        $contests = $this->contestsRepository->update($request->all(), $id);

        Flash::success('Contests updated successfully.');

        return redirect(route('contests.index'));
    }

    /**
     * Remove the specified Contests from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contests = $this->contestsRepository->find($id);

        if (empty($contests)) {
            Flash::error('Contests not found');

            return redirect(route('contests.index'));
        }

        $this->contestsRepository->delete($id);

        Flash::success('Contests deleted successfully.');

        return redirect(route('contests.index'));
    }
}
