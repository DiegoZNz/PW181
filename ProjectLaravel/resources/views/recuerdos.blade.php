@extends('layouts.plantilla')   
@section('titulo','Memories')
@section('contenido')
<h1 class="display-1 text-center text-danger" >Memories</h1>

@foreach ($consR as $recuerdo)
<div class="card w-50 mx-auto">
    <div class="card-body text-center">
        <h4 class="card-title fw-bold"> {{$recuerdo->titulo}} </h4>
      <h5 class="card-title"> {{$recuerdo->fecha}} </h5>
      <p class="card-text fw-lighter">{{$recuerdo->recuerdo}}</p>
      <a href="#" class="btn btn-warning">Actualizar</a>
      <a href="#" class="btn btn-danger">Eliminar</a>
    </div>
  </div>
@endforeach
@endsection