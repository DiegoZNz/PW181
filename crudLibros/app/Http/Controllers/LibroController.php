<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBooks = libro::all();
        return view('libros.index', compact('allBooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addLibro = new libro();
        $addLibro->titulo = $request->txtTitle; 
        $addLibro->autor = $request->txtAuthor;
        $addLibro->paginas = $request->txtPages;
        $addLibro->anio = $request->txtYearP;
        $addLibro->save();
        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //variable libro, entonces modelo libro buscame el id que me pasan
        $updateLibro = libro::find($id);
        //actualiza el titulo con el valor que me pasan
        $updateLibro->titulo = $request->txtTitle;
        $updateLibro->autor = $request->txtAuthor;
        $updateLibro->paginas = $request->txtPages;
        $updateLibro->anio = $request->txtYearP;
        //ahora actualiza en la base de datos
        $updateLibro->update();
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleteLibro = libro::find($id);
        $deleteLibro->delete();
        return redirect()->back();
    }
}
