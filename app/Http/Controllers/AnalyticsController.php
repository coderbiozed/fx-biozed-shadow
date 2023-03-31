<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnalyticsRequest;
use App\Http\Requests\UpdateAnalyticsRequest;
use App\Repositories\AnalyticsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AnalyticsController extends AppBaseController
{
    /** @var  AnalyticsRepository */
    private $analyticsRepository;

    public function __construct(AnalyticsRepository $analyticsRepo)
    {
        $this->analyticsRepository = $analyticsRepo;
    }

    /**
     * Display a listing of the Analytics.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $analytics = $this->analyticsRepository->all();

        return view('analytics.index')
            ->with('analytics', $analytics);
    }

    /**
     * Show the form for creating a new Analytics.
     *
     * @return Response
     */
    public function create()
    {
        return view('analytics.create');
    }

    /**
     * Store a newly created Analytics in storage.
     *
     * @param CreateAnalyticsRequest $request
     *
     * @return Response
     */
    public function store(CreateAnalyticsRequest $request)
    {
        $input = $request->all();

        $analytics = $this->analyticsRepository->create($input);

        Flash::success('Analytics saved successfully.');

        return redirect(route('analytics.index'));
    }

    /**
     * Display the specified Analytics.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $analytics = $this->analyticsRepository->find($id);

        if (empty($analytics)) {
            Flash::error('Analytics not found');

            return redirect(route('analytics.index'));
        }

        return view('analytics.show')->with('analytics', $analytics);
    }

    /**
     * Show the form for editing the specified Analytics.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $analytics = $this->analyticsRepository->find($id);

        if (empty($analytics)) {
            Flash::error('Analytics not found');

            return redirect(route('analytics.index'));
        }

        return view('analytics.edit')->with('analytics', $analytics);
    }

    /**
     * Update the specified Analytics in storage.
     *
     * @param int $id
     * @param UpdateAnalyticsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnalyticsRequest $request)
    {
        $analytics = $this->analyticsRepository->find($id);

        if (empty($analytics)) {
            Flash::error('Analytics not found');

            return redirect(route('analytics.index'));
        }

        $analytics = $this->analyticsRepository->update($request->all(), $id);

        Flash::success('Analytics updated successfully.');

        return redirect(route('analytics.index'));
    }

    /**
     * Remove the specified Analytics from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $analytics = $this->analyticsRepository->find($id);

        if (empty($analytics)) {
            Flash::error('Analytics not found');

            return redirect(route('analytics.index'));
        }

        $this->analyticsRepository->delete($id);

        Flash::success('Analytics deleted successfully.');

        return redirect(route('analytics.index'));
    }
}
