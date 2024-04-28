<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateordersRequest;
use App\Http\Requests\UpdateordersRequest;
use App\Repositories\ordersRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\customer;
use App\Models\driver;
use App\Models\pizza;
use Illuminate\Http\Request;
use Flash;
use Response;

class ordersController extends AppBaseController
{
    /** @var ordersRepository $ordersRepository*/
    private $ordersRepository;

    public function __construct(ordersRepository $ordersRepo)
    {
        $this->ordersRepository = $ordersRepo;
    }

    /**
     * Display a listing of the orders.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orders = $this->ordersRepository->all();

        return view('orders.index')
            ->with('orders', $orders);
    }

    /**
     * Show the form for creating a new orders.
     *
     * @return Response
     */
    public function create()
    {
        $customers = customer::get();
        $drivers = driver::get();
        $pizzas = pizza::get();
        return view('orders.create',compact("customers","drivers","pizzas"));
    }

    /**
     * Store a newly created orders in storage.
     *
     * @param CreateordersRequest $request
     *
     * @return Response
     */
    public function store(CreateordersRequest $request)
    {
        $input = $request->all();
        $pizza = Pizza::find($request->pizza_id);
        $input['total'] = $pizza->price;
        $orders = $this->ordersRepository->create($input);
        $driver = driver::find($request->driver_id);
        $driver->order_id = $orders->id;
        $driver->save();
        $customer = customer::find($request->customer_id);
        $customer->order_id = $orders->id;
        $customer->save();

        Flash::success('Orders saved successfully.');

        return redirect(route('orders.index'));
    }

    /**
     * Display the specified orders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        return view('orders.invoice')->with('orders', $orders);
    }

    /**
     * Show the form for editing the specified orders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        
    }

    /**
     * Update the specified orders in storage.
     *
     * @param int $id
     * @param UpdateordersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateordersRequest $request)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        $orders = $this->ordersRepository->update($request->all(), $id);

        Flash::success('Orders updated successfully.');

        return redirect(route('orders.index'));
    }

    /**
     * Remove the specified orders from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        $this->ordersRepository->delete($id);

        Flash::success('Orders deleted successfully.');

        return redirect(route('orders.index'));
    }
}
