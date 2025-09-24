<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    function index() {
        //return view('vehicles.index');
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }
    function create() {
        return view('vehicles.create');
    }

    function store(Request $request) {
        Vehicle::create($request->all());
        return redirect()->route('vehicles.index');
    }

    function edit($id) {
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    function update(Request $request, $id) {
        $vehicle = Vehicle::find($id);
        $vehicle->update($request->all());
        return redirect()->route('vehicles.index');
    }

    function destroy($id) {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect()->route('vehicles.index');
    }
}
