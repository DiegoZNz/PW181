@extends('layouts.plantilla')   
@section('titulo','Memories')
@section('contenido')
<h1 class="display-1 text-center text-danger" >Memories</h1>

@include('partials.pagination')
<x-mensaje nombre="Diego recuerdos" correo="diegozamora@gmail.com" mensaje="Hola mundo"></x-mensaje>
@endsection