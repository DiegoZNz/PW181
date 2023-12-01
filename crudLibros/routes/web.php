<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//creamos la ruta para el controlador de tipo recurso
//ponemos el nombre como se llama el controlador y el metodo que queremos que se ejecute
Route::resource('home', LibroController::class);