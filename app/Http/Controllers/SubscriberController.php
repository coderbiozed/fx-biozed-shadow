<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;
use App\Repositories\SubscriberRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use Flash;
use Response;

class SubscriberController extends AppBaseController
{
    /** @var  SubscriberRepository */
    private $subscriberRepository;

    public function __construct(SubscriberRepository $subscriberRepo)
    {
        $this->subscriberRepository = $subscriberRepo;
    }

    /**
     * Display a listing of the Subscriber.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subscribers = Subscriber::orderBy('id', 'desc')->paginate(10);

        return view('subscribers.index')
            ->with('subscribers', $subscribers);
    }

    /**
     * Show the form for creating a new Subscriber.
     *
     * @return Response
     */
    public function create()
    {
        return view('subscribers.create');
    }

    /**
     * Store a newly created Subscriber in storage.
     *
     * @param CreateSubscriberRequest $request
     *
     * @return Response
     */
    public function store(CreateSubscriberRequest $request)
    {
        $input = $request->all();

        $subscriber = $this->subscriberRepository->create($input);

        Flash::success('Thanks For subscribing.');

        return redirect()->back();
    }

    /**
     * Display the specified Subscriber.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subscriber = $this->subscriberRepository->find($id);

        if (empty($subscriber)) {
            Flash::error('Subscriber not found');

            return redirect(route('subscribers.index'));
        }

        return view('subscribers.show')->with('subscriber', $subscriber);
    }

    /**
     * Show the form for editing the specified Subscriber.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subscriber = $this->subscriberRepository->find($id);

        if (empty($subscriber)) {
            Flash::error('Subscriber not found');

            return redirect(route('subscribers.index'));
        }

        return view('subscribers.edit')->with('subscriber', $subscriber);
    }

    /**
     * Update the specified Subscriber in storage.
     *
     * @param int $id
     * @param UpdateSubscriberRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubscriberRequest $request)
    {
        $subscriber = $this->subscriberRepository->find($id);

        if (empty($subscriber)) {
            Flash::error('Subscriber not found');

            return redirect(route('subscribers.index'));
        }

        $subscriber = $this->subscriberRepository->update($request->all(), $id);

        Flash::success('Subscriber updated successfully.');

        return redirect(route('subscribers.index'));
    }

    /**
     * Remove the specified Subscriber from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subscriber = $this->subscriberRepository->find($id);

        if (empty($subscriber)) {
            Flash::error('Subscriber not found');

            return redirect(route('subscribers.index'));
        }

        $this->subscriberRepository->delete($id);

        Flash::success('Subscriber deleted successfully.');

        return redirect(route('subscribers.index'));
    }
}
