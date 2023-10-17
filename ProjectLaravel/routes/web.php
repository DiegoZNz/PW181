<?php

use Illuminate\Support\Facades\Route;

// instrucciones para la importacion de controladores
use App\Http\Controllers\diarioController;
 
// Así se declaran las rutas individuales


/*
Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoinicio');

Route::get('/formulario', [diarioController::class, 'metodoFormulario'])->name('apodoformulario');

Route::get('/recuerdos', [diarioController::class, 'metodoRecuerdos'])->name('apodorecuerdos');
*/


//Así se declaran las rutas agrupadas

Route::controller(diarioController::class)->group(function (){


    Route::get('/', 'metodoInicio')->name('apodoinicio');

    Route::get('/formulario', 'metodoFormulario')->name('apodoformulario');

    Route::get('/recuerdos', 'metodoRecuerdos')->name('apodorecuerdos');

});


















/*
Route::get('/', function () {
    return view('welcome');
});

//rutas de tipo petición de welcome, formulario y recuerdos

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/recuerdos', function () {
    return view('recuerdos');
});


#creacion de rutas de tipo vista 

Route::view('/', 'welcome')->name('apodoinicio');
Route::view('/formulario', 'formulario')->name('apodoformulario');
Route::view('/recuerdos', 'recuerdos')->name('apodorecuerdos');
*/