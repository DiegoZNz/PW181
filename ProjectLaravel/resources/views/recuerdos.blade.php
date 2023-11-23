@extends('layouts.plantilla')   
@section('titulo','Memories')
@section('contenido')
<h1 class="display-1 text-center text-danger">Memories</h1>
@if(session()->has('Exito'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  
  <strong>{{session('Exito')}}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@foreach ($consR as $recuerdo)
  
  <div class="card w-50 mx-auto">
      <div class="card-body text-center">
          <h4 class="card-title fw-bold"> {{$recuerdo->titulo}} </h4>
        <h5 class="card-title"> {{$recuerdo->fecha}} </h5>
        <p class="card-text fw-lighter">{{$recuerdo->recuerdo}}</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar{{$recuerdo->id}}">
          Editar
        </button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#borrar{{$recuerdo->id}}">
          Borrar
        </button>
      </div>
  </div>
  @include('partials.modal')
@endforeach
@endsection