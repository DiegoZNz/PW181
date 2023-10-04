@extends('layouts.plantilla')   
@section('titulo','busqueda')
@section('contenido')
<h1 class="text-center" >Busqueda</h1>

<form action="get" class="text-center">
    <label for="">Busqueda</label>
    <input type="text">
    <br>
    <button type="submit">Buscar</button>
</form> 

@include('partials.card')
@endsection