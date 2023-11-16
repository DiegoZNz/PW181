@extends('layouts.plantilla')   

@section('titulo','Forms')
@section('contenido')



<h1 class="display-1 text-center text-danger" >Forms</h1>
<div class="container mt-5 col-md-6">


  {{-- Mostramos el mensaje con la key --}}
  @if(session()->has('Exito'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
      
      <strong>{{session('Exito')}}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

{{-- Manejo de TODOS los errores, por lo que iteramos los errores que haya --}}
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{$error}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif


    <div class="card">
        <div class="card-header fs-4 fw-medium text-primary text-center">
        Introduce aqui tus memorias...
        </div>
        <div class="card-body">
            
            <form method="POST" action="/recuerdo/store">
              @csrf
                <div class="mb-3">
                  <label for="titulo" class="form-label">Título</label>
                  <input type="text" name="txtTitulo" value="{{old('txtTitulo')}}" class="form-control" id="titulo">
                  <p class="text-danger">{{ $errors-> first('txtTitulo') }}</p>
                </div>
                <div class="mb-3">
                  <label for="recuerdo" class="form-label">Recuerdo</label>
                  <input type="text" name="txtRecuerdo" value="{{old('txtRecuerdo')}}" class="form-control" id="recuerdo">
                  <p class="text-danger">{{ $errors-> first('txtRecuerdo') }}</p>
                </div>
            
                
                </div>
                <div class="card-footer text-body-secondary">
                <button type="submit" class="btn btn-primary">Guardar recuerdo</button>
            </form>
        </div>
    </div>  
</div>

@endsection

