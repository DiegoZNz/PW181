<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BookControllerValidator;

class BookController extends Controller
{
    
    public function NewsMethod(){
        return view('Noticia');
    }
    
    public function FormMethod(){
        return view('Forms');
    }

    public function SaveBookMethod(BookControllerValidator $request){
        $titulo = $request->input('txtTitle');
        return redirect('/Form')->with('Exito', 'Libro ' . $titulo . ' guardado con éxito');

        
    
    
    }



}
