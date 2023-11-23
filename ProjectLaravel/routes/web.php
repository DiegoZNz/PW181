<?php
use Illuminate\Support\Facades\Route;
// instrucciones para la importacion de controladores
use App\Http\Controllers\diarioController;
use App\Http\Controllers\CrudController;


// controladoro de crud

Route::get('/recuerdo/create', [CrudController::class, 'create'])->name('recuerdo.create');

Route::post('/recuerdo/store', [CrudController::class, 'store'])->name('recuerdo.store');

Route::get('/recuerdo/index', [CrudController::class, 'index'])->name('recuerdo.index');

Route::put('/recuerdo/{id}/confirm', [CrudController::class, 'update'])->name('recuerdo.update');

Route::put('/recuerdo/{id}/delete', [CrudController::class, 'destroy'])->name('recuerdo.destroy');




Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoinicio');

//Route::get('/formulario', [diarioController::class, 'metodoFormulario'])->name('apodoformulario');

//Route::get('/recuerdos', [diarioController::class, 'metodoRecuerdos'])->name('apodorecuerdos');

//Route::post('/guardarRecuerdo', [diarioController::class, 'metodoGuardarRecuerdo'])->name('guardarRecuerdo');

//Así se declaran las rutas agrupadas
/*
Route::controller(diarioController::class)->group(function (){
    Route::get('/', 'metodoInicio')->name('apodoinicio');

    Route::get('/formulario', 'metodoFormulario')->name('apodoformulario');

    Route::get('/recuerdos', 'metodoRecuerdos')->name('apodorecuerdos');
});
*/
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