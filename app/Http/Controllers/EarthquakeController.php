<?php

namespace App\Http\Controllers;

use App\Http\Requests\EarthquakeRequest;
use App\Models\Earthquake;

class EarthquakeController extends Controller
{
    public function index()
    {
        $earthquakes = Earthquake::orderByDesc('created_at')->get();
        return view('earthquakes.index', compact('earthquakes'));
    }

    public function store(EarthquakeRequest $request)
    {
        Earthquake::create($request->validated());

        $request->session()->flash('status', 'Successfully created!');

        return redirect()->route('earthquake.index');
    }

    public function show(Earthquake $earthquake)
    {
        return $earthquake;
    }

    public function update(EarthquakeRequest $request, Earthquake $earthquake)
    {
        $earthquake->update($request->validated());

        return $earthquake;
    }

    public function destroy(Earthquake $earthquake)
    {
        $earthquake->delete();

        return response()->json();
    }


    public function create() {
        return view('earthquakes.create');
    }
}
