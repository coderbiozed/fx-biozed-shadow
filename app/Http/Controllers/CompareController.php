<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompareRequest;
use App\Http\Requests\UpdateCompareRequest;
use App\Repositories\CompareRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use App\Models\BrokerReview;
use App\Models\Compare;

class CompareController extends AppBaseController
{
    /** @var  CompareRepository */
    private $compareRepository;

    public function __construct(CompareRepository $compareRepo)
    {
        $this->compareRepository = $compareRepo;
    }

    /**
     * Display a listing of the Compare.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $compares = Compare::orderBy('id', 'desc')->paginate(10);

        return view('compares.index')
            ->with('compares', $compares);
    }

    /**
     * Show the form for creating a new Compare.
     *
     * @return Response
     */
    public function create()
    {
        $brokerReviews = BrokerReview::pluck('broker_name', 'broker_name');
    
        return view('compares.create', compact('brokerReviews'));
    }

    /**
     * Store a newly created Compare in storage.
     *
     * @param CreateCompareRequest $request
     *
     * @return Response
     */
    public function store(CreateCompareRequest $request)
    {
        $input = $request->all();

        $request->validate([
            'slug' => 'required|unique:compare'
          ]);

        $broker = DB::table('broker_review')->Where('broker_name',  $request->broker_name)->first();

        $input['broker_id'] = $broker->id;

        $compare = $this->compareRepository->create($input);

        Flash::success('Compare saved successfully.');

        return redirect(route('compares.index'));
    }

    /**
     * Display the specified Compare.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $compare = $this->compareRepository->find($id);

        if (empty($compare)) {
            Flash::error('Compare not found');

            return redirect(route('compares.index'));
        }

        return view('compares.show')->with('compare', $compare);
    }

    /**
     * Show the form for editing the specified Compare.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $compare = $this->compareRepository->find($id);
        $brokerReviews = BrokerReview::pluck('broker_name', 'broker_name');

        if (empty($compare)) {
            Flash::error('Compare not found');

            return redirect(route('compares.index'));
        }

        return view('compares.edit', compact('brokerReviews'))->with('compare', $compare);
    }

    /**
     * Update the specified Compare in storage.
     *
     * @param int $id
     * @param UpdateCompareRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompareRequest $request)
    {
        $request->validate([
            'slug' => 'required|unique:compare,slug,'.$id,
        ]);
        $compare = $this->compareRepository->find($id);

        $input = $request->all();

        $broker = DB::table('broker_review')->Where('broker_name',  $request->broker_name)->first();

        $input['broker_id'] = $broker->id;

        if (empty($compare)) {
            Flash::error('Compare not found');

            return redirect(route('compares.index'));
        }

        $compare = $this->compareRepository->update($input, $id);

        Flash::success('Compare updated successfully.');

        return redirect(route('compares.index'));
    }

    /**
     * Remove the specified Compare from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $compare = $this->compareRepository->find($id);

        if (empty($compare)) {
            Flash::error('Compare not found');

            return redirect(route('compares.index'));
        }

        $this->compareRepository->delete($id);

        Flash::success('Compare deleted successfully.');

        return redirect(route('compares.index'));
    }
}
