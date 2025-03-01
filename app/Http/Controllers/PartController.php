<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Part;
use Illuminate\Http\Request;
use App\Http\Requests\ListRequest;
use App\Http\Requests\PartRequest;

class PartController extends Controller
{
    public function index(ListRequest $request)
    {
        if ($request->submit) {
            return to_route('cars.index', $request->validated());
        }

        return view('parts.index', [
            'parts' => Part::filtered($request->validated())
        ]);
    }


    public function create()
    {
        return view('parts.create', [
            'cars' => Car::all()
        ]);
    }


    public function store(PartRequest $request)
    {
        Part::create($request->validated())->save();
        return to_route('parts.index');
    }


    public function edit(Part $part)
    {
        return view('parts.edit', [
            'part' => $part,
            'cars' => Car::all()
        ]);
    }

 
    public function update(PartRequest $request, Part $part)
    {
        $part->update($request->validated());
        return back();
    }

  
    public function destroy(Part $part)
    {
        $part->delete();
        return back();
    }
}
