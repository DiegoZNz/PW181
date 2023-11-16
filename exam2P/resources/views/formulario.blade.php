

@extends('layouts.plantilla')
@section('titulo','Formulario')
@section('contenido')
<h1 class="display-1 text-center text-danger">VideoJuegos</h1>
<div class="container mt-5 mb-5 col-md-6">


@if(session()->has('key'))
    <script>
        Swal.fire(
            'Boostrap siempre me da problemas en los EXAMENES!',
            'You clicked the button!',
            'success'
        )
    </script>
  @endif

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
    Introduce tus datos
  </div>
  <div class="card-body">

    <form method="POST" action="/guardarVideoJuego">
      @csrf

      <div class ="mb-3">
        <label for="txtNombre" class="form-label">Nombre:</label>
        <div class="input-group">
            <input type="text" name="txtNombre" value="{{ old('txtNombre') }}" class="form-control" id="txtNombre" placeholder="Ejemplo: Fortnite">
        </div>
        <p class="text-danger">{{ $errors->first('txtNombre') }}</p>
    </div>

    
    <div class ="mb-3">
        <label for="date" class="form-label">Fecha Publicación:</label>
        <div class="input-group">
            <input type="date" name="date" value="{{ old('date') }}" class="form-control" id="date" placeholder="">
        </div>
        <p class="text-danger">{{ $errors->first('date') }}</p>
    </div>


    <div class ="mb-3">
        <label for="nmbVendidos" class="form-label">Videojuegos Vendidos:</label>
        <div class="">
            <input type="text" name="nmbVendidos" value="{{ old('nmbVendidos') }}" class="form-control" id="nmbVendidos" placeholder="Ejemplo: 666">
        </div>
        <p class="text-danger">{{ $errors->first('nmbVendidos') }}</p>
    </div>
    
</div>
      <div class="card-footer text-body-secondary">
        <button type="submit" class="btn btn-primary">Guardar Juego</button>
      </form>
    </div>
  </div>
</div>



@endsection