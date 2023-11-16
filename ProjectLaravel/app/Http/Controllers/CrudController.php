<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validatorFormRecuerdos;

//importamos el query builder

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //este metodo nos permite obtener todos los registros de la tabla tb_recuerdos
        //y los almacena en la variable $consR
        $consR = DB::table('tb_recuerdos')->get();

        //con el metodo compact se envia la variable $consR a la vista recuerdos
        return view('recuerdos', compact('consR'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //se prepara un array con los datos que se van a insertar
        DB::table('tb_recuerdos')->insert([
            'titulo' => $request->input('txtTitulo'),
            'recuerdo' => $request->input('txtRecuerdo'),
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/recuerdo/create')->with('Exito', 'Recuerdo guardado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
