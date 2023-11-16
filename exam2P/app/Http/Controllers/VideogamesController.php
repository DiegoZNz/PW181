<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideogamesController extends Controller
{
    function formulario() {
        return view('formulario');
    }

    function guardarVideoJuego(Request $request){
        
        $request->validate([
            'txtNombre' => 'required|min:5',
            'date' => 'required',
            'nmbVendidos' => 'required|max:7'
        ]);
        return redirect()->route('formulario')->with('key', 'Videojuego guardado con éxito');

    }

}
