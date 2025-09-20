<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    function index($nombre='Yom', $id=0) {
        return view('proyecto')
            ->with(['nombre'=>$nombre, 'id'=>$id])
            ->with('hobbies', array('Programar', 'Jugar', 'Dormir'));
    }
}
