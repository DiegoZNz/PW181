@extends('layouts.plantilla')
   
@section('titulo','Home')
@section('contenido')
<h1 class="display-1 text-center text-danger" >Home</h1>
<x-offcanvas></x-offcanvas>

<x-mensaje nombre="Juan" correo="diegozamora@gmail.com" mensaje="Hola mundo"></x-mensaje>
@endsection

