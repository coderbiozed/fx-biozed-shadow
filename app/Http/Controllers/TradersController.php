<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTradersRequest;
use App\Http\Requests\UpdateTradersRequest;
use App\Repositories\TradersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TradersController extends AppBaseController
{
    /** @var TradersRepository $tradersRepository*/
    private $tradersRepository;

    public function __construct(TradersRepository $tradersRepo)
    {
        $this->tradersRepository = $tradersRepo;
    }

    /**
     * Display a listing of the Traders.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $traders = $this->tradersRepository->all();

        return view('traders.index')
            ->with('traders', $traders);
    }

    /**
     * Show the form for creating a new Traders.
     *
     * @return Response
     */
    public function create()
    {
        return view('traders.create');
    }

    /**
     * Store a newly created Traders in storage.
     *
     * @param CreateTradersRequest $request
     *
     * @return Response
     */
    public function store(CreateTradersRequest $request)
    {
        $input = $request->all();

        $traders = $this->tradersRepository->create($input);

        Flash::success('Traders saved successfully.');

        return redirect(route('traders.index'));
    }

    /**
     * Display the specified Traders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $traders = $this->tradersRepository->find($id);

        if (empty($traders)) {
            Flash::error('Traders not found');

            return redirect(route('traders.index'));
        }

        return view('traders.show')->with('traders', $traders);
    }

    /**
     * Show the form for editing the specified Traders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $traders = $this->tradersRepository->find($id);

        if (empty($traders)) {
            Flash::error('Traders not found');

            return redirect(route('traders.index'));
        }

        return view('traders.edit')->with('traders', $traders);
    }

    /**
     * Update the specified Traders in storage.
     *
     * @param int $id
     * @param UpdateTradersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTradersRequest $request)
    {
        $traders = $this->tradersRepository->find($id);

        if (empty($traders)) {
            Flash::error('Traders not found');

            return redirect(route('traders.index'));
        }

        $traders = $this->tradersRepository->update($request->all(), $id);

        Flash::success('Traders updated successfully.');

        return redirect(route('traders.index'));
    }

    /**
     * Remove the specified Traders from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $traders = $this->tradersRepository->find($id);

        if (empty($traders)) {
            Flash::error('Traders not found');

            return redirect(route('traders.index'));
        }

        $this->tradersRepository->delete($id);

        Flash::success('Traders deleted successfully.');

        return redirect(route('traders.index'));
    }
}
