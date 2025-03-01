<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Http\Requests\ListRequest;

class CarController extends Controller
{

    public function index(ListRequest $request)
    {
        if ($request->submit) {
            return to_route('cars.index', $request->validated());
        }

        return view('cars.index', [
            'cars' => Car::filtered($request->validated())
        ]);
    }


    public function create()
    {
        return view('cars.create'); 
    }


    public function store(CarRequest $request)
    {
        Car::create($request->validated())->save();
        return to_route('cars.index');
    }


    public function edit(Car $car)
    {
        return view('cars.edit', [
            'car' => $car
        ]);
    }


    public function update(CarRequest $request, Car $car)
    {
        $car->update($request->validated());
        return back();
    }


    public function destroy(Car $car)
    {
        $car->delete();
        return back();
    }
}
