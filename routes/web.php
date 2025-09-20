<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('primerproyecto1/{nombre?}/{id?}', function ($nombre='Yom', $id=10) {
    /*return "<h1>Mi primer proyecto de Laravel</h1>
    <h3>
        <ul>
            <li>Introducción a Laravel</li>
            <li>Nombre: $nombre</li>
            <li>ID: $id</li>
        </ul>
    </h3>
    ";
    return (['nombre'=>$nombre, 'id'=>$id]);*/
    /*return view('proyecto')
        ->with(['nombre'=>$nombre, 'id'=>$id])
        ->with(['hobbies', array('Programar', 'Jugar', 'Dormir')]);*/


});
# Vista tipo array: return (['nombre'=>$nombre, 'id'=>$id]);

Route::get('primerproyecto/{nombre?}/{id?}', [ProyectoController::class, 'index']);

Route::get('vehicles',[VehicleController::class, 'index']);