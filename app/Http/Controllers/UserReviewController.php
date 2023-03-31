<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserReviewRequest;
use App\Http\Requests\UpdateUserReviewRequest;
use App\Repositories\UserReviewRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\UserReview;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\BrokerReview;

class UserReviewController extends AppBaseController
{
    /** @var  UserReviewRepository */
    private $userReviewRepository;

    public function __construct(UserReviewRepository $userReviewRepo)
    {
        $this->userReviewRepository = $userReviewRepo;
    }

    /**
     * Display a listing of the UserReview.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $userReviews = UserReview::orderBy('id', 'desc')->paginate(10);

        return view('user_reviews.index')
            ->with('userReviews', $userReviews);
    }

    /**
     * Show the form for creating a new UserReview.
     *
     * @return Response
     */
    public function create()
    {
        $brokerReviews = BrokerReview::pluck('broker_name', 'id');
        return view('user_reviews.create', compact('brokerReviews'));
    }

    /**
     * Store a newly created UserReview in storage.
     *
     * @param CreateUserReviewRequest $request
     *
     * @return Response
     */
    public function store(CreateUserReviewRequest $request)
    {
        $input = $request->all();

        $userReview = $this->userReviewRepository->create($input);

        Flash::success('Thanks for submitting your Review.');

        return redirect()->back();
    }

    /**
     * Display the specified UserReview.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userReview = $this->userReviewRepository->find($id);

        if (empty($userReview)) {
            Flash::error('User Review not found');

            return redirect(route('userReviews.index'));
        }

        return view('user_reviews.show')->with('userReview', $userReview);
    }

    /**
     * Show the form for editing the specified UserReview.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userReview = $this->userReviewRepository->find($id);

        if (empty($userReview)) {
            Flash::error('User Review not found');

            return redirect(route('userReviews.index'));
        }

        return view('user_reviews.edit')->with('userReview', $userReview);
    }

    /**
     * Update the specified UserReview in storage.
     *
     * @param int $id
     * @param UpdateUserReviewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserReviewRequest $request)
    {
        $userReview = $this->userReviewRepository->find($id);

        if (empty($userReview)) {
            Flash::error('User Review not found');

            return redirect(route('userReviews.index'));
        }

        $userReview = $this->userReviewRepository->update($request->all(), $id);

        Flash::success('User Review updated successfully.');

        return redirect(route('userReviews.index'));
    }

    /**
     * Remove the specified UserReview from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userReview = $this->userReviewRepository->find($id);

        if (empty($userReview)) {
            Flash::error('User Review not found');

            return redirect(route('userReviews.index'));
        }

        $this->userReviewRepository->delete($id);

        Flash::success('User Review deleted successfully.');

        return redirect(route('userReviews.index'));
    }
}
