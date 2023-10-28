<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/Noticia', [BookController::class, 'NewsMethod'])->name('NewsNickName');

Route::get('/Form', [BookController::class, 'FormMethod'])->name('FormNickName');

Route::post('/SaveBook', [BookController::class, 'SaveBookMethod'])->name('SaveBook');