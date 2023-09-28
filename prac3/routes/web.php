<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


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
*/

#creacion de rutas de tipo vista 

Route::view('/', 'welcome')->name('apodoinicio');
Route::view('/formulario', 'formulario')->name('apodoformulario');
Route::view('/recuerdos', 'recuerdos')->name('apodorecuerdos');
