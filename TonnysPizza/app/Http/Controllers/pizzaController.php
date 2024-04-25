<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepizzaRequest;
use App\Http\Requests\UpdatepizzaRequest;
use App\Repositories\pizzaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class pizzaController extends AppBaseController
{
    /** @var pizzaRepository $pizzaRepository*/
    private $pizzaRepository;

    public function __construct(pizzaRepository $pizzaRepo)
    {
        $this->pizzaRepository = $pizzaRepo;
    }

    /**
     * Display a listing of the pizza.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pizzas = $this->pizzaRepository->all();

        return view('pizzas.index')
            ->with('pizzas', $pizzas);
    }

    /**
     * Show the form for creating a new pizza.
     *
     * @return Response
     */
    public function create()
    {
        return view('pizzas.create');
    }

    /**
     * Store a newly created pizza in storage.
     *
     * @param CreatepizzaRequest $request
     *
     * @return Response
     */
    public function store(CreatepizzaRequest $request)
    {
        $input = $request->all();

        $pizza = $this->pizzaRepository->create($input);

        Flash::success('Pizza saved successfully.');

        return redirect(route('pizzas.index'));
    }

    /**
     * Display the specified pizza.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pizza = $this->pizzaRepository->find($id);

        if (empty($pizza)) {
            Flash::error('Pizza not found');

            return redirect(route('pizzas.index'));
        }

        return view('pizzas.show')->with('pizza', $pizza);
    }

    /**
     * Show the form for editing the specified pizza.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pizza = $this->pizzaRepository->find($id);

        if (empty($pizza)) {
            Flash::error('Pizza not found');

            return redirect(route('pizzas.index'));
        }

        return view('pizzas.edit')->with('pizza', $pizza);
    }

    /**
     * Update the specified pizza in storage.
     *
     * @param int $id
     * @param UpdatepizzaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepizzaRequest $request)
    {
        $pizza = $this->pizzaRepository->find($id);

        if (empty($pizza)) {
            Flash::error('Pizza not found');

            return redirect(route('pizzas.index'));
        }

        $pizza = $this->pizzaRepository->update($request->all(), $id);

        Flash::success('Pizza updated successfully.');

        return redirect(route('pizzas.index'));
    }

    /**
     * Remove the specified pizza from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pizza = $this->pizzaRepository->find($id);

        if (empty($pizza)) {
            Flash::error('Pizza not found');

            return redirect(route('pizzas.index'));
        }

        $this->pizzaRepository->delete($id);

        Flash::success('Pizza deleted successfully.');

        return redirect(route('pizzas.index'));
    }
}
