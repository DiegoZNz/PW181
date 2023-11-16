<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideogamesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [VideogamesController::class, "formulario"])->name("formulario");

Route::post("/guardarVideoJuego", [VideogamesController::class, "guardarVideoJuego"])->name("guardarVideoJuego");