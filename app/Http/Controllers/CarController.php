<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Http\Requests\ListRequest;
use Illuminate\Http\RedirectResponse;

class CarController extends Controller
{

    public function index(ListRequest $request): RedirectResponse|View
    {
        if ($request->submit) {
            return to_route('cars.index', $request->validated());
        }

        return view('cars.index', [
            'cars' => Car::filtered($request->validated())
        ]);
    }


    public function create(): View
    {
        return view('cars.create'); 
    }


    public function store(CarRequest $request): RedirectResponse
    {
        Car::create($request->validated())->save();
        return to_route('cars.index');
    }


    public function edit(Car $car): View
    {
        return view('cars.edit', [
            'car' => $car
        ]);
    }


    public function update(CarRequest $request, Car $car): RedirectResponse
    {
        $car->update($request->validated());
        return back();
    }


    public function destroy(Car $car): RedirectResponse
    {
        $car->delete();
        return back();
    }
}
