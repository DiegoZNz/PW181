@extends('layouts.plantilla')   
@section('titulo','login')
@section('contenido')
<h1 class="text-center" >login</h1>

<form action="get" class="text-center">
    <label for="">Correo</label>
    <input type="email">
    <br>
    <label for="">Contraseña</label>
    <input type="password">
    <br>
    <button type="submit">Enviar</button>
</form> 
@endsection

