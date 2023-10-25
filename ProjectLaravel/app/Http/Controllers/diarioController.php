<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importamos el validador
use App\Http\Requests\validatorFormRecuerdos;

class diarioController extends Controller
{
    //Creacion de funciones para el controlador

    //Lo que va dentro del view es el nombre del archivo blade por ejemplo welcome.blade.php o recuerdos.blade.php o formulario.blade.php que estan dentro de las carpetas resources/views

    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }

    public function metodoGuardarRecuerdo(validatorFormRecuerdos $request){

        //malas practicas
       /*  $validated = $request->validate([
            'txtTitulo' => 'required|max:26',
            'txtRecuerdo' => 'required|min:4',
        ]); */

        //el primer parametro que le pasamos con with es la key y el segundo es el valor
        return redirect('/formulario')->with('Exito', 'Recuerdo guardado con exito');


        /* echo "El titulo es: ".$request->input('txtTitulo')."<br>";
        echo "El recuerdo es: ".$request->input('txtRecuerdo')."<br>";
        echo $request->ip();
        echo " - ";
        echo $request->path();
        echo " - ";
        echo $request->method(); */
    }

}
