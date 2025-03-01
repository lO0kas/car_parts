<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Part;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\ListRequest;
use App\Http\Requests\PartRequest;
use Illuminate\Http\RedirectResponse;

class PartController extends Controller
{
    public function index(ListRequest $request): RedirectResponse|View
    {
        if ($request->submit) {
            return to_route('parts.index', $request->validated());
        }

        return view('parts.index', [
            'parts' => Part::filtered($request->validated())
        ]);
    }


    public function create(): View
    {
        return view('parts.create', [
            'cars' => Car::all()
        ]);
    }


    public function store(PartRequest $request): RedirectResponse
    {
        Part::create($request->validated())->save();
        return to_route('parts.index');
    }


    public function edit(Part $part): View
    {
        return view('parts.edit', [
            'part' => $part,
            'cars' => Car::all()
        ]);
    }

 
    public function update(PartRequest $request, Part $part): RedirectResponse
    {
        $part->update($request->validated());
        return back();
    }

  
    public function destroy(Part $part): RedirectResponse
    {
        $part->delete();
        return back();
    }
}
