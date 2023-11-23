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
    public function store(validatorFormRecuerdos $request) 
    {
        $validated = $request->validated();
        DB::table('tb_recuerdos')->insert([
            'titulo' => $validated['txtTitulo'],
            'recuerdo' => $validated['txtRecuerdo'],
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

    /**
     * Update the specified resource in storage.
     */
    public function update(validatorFormRecuerdos $request, string $id)  
    {
    
      $validated = $request->validated();  
    
      DB::table('tb_recuerdos')
        ->where('id', $id)
        ->update([
            'titulo' => $validated['txtTitulo'],
            'recuerdo' => $validated['txtRecuerdo'],  
            'updated_at' => Carbon::now()
        ]);
    
      return redirect("/recuerdo/index")->with('Exito', 'Recuerdo actualizado con exito');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    /** 
 * Remove the specified resource from storage.
*/

    public function destroy(string $id) {

        DB::table('tb_recuerdos')
        ->where('id', '=', $id)
        ->delete();
    
        return redirect('/recuerdo/index')
        ->with('Exito', 'Recuerdo eliminado con éxito'); 
    }
}
