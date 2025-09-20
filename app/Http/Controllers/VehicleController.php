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
}
