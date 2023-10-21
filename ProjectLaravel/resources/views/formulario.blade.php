@extends('layouts.plantilla')   

@section('titulo','Forms')
@section('contenido')



<h1 class="display-1 text-center text-danger" >Forms</h1>
<div class="container mt-5 col-md-6">
    <div class="card">
        <div class="card-header fs-4 fw-medium text-primary text-center">
        Introduce aqui tus memorias...
        </div>
        <div class="card-body">
            
            <form method="POST" action="/guardarRecuerdo">
              @csrf
                <div class="mb-3">
                  <label for="titulo" class="form-label">Título</label>
                  <input type="text" name="txtTitulo" class="form-control" id="titulo">
                </div>
                <div class="mb-3">
                  <label for="recuerdo" class="form-label">Recuerdo</label>
                  <input type="text" name="txtRecuerdo" class="form-control" id="recuerdo">
                </div>
            
                
                </div>
                <div class="card-footer text-body-secondary">
                <button type="submit" class="btn btn-primary">Guardar recuerdo</button>
            </form>
        </div>
    </div>  
</div>

@endsection

