@extends('layouts.app')
@section('titulo','Listado de Libros')
@section('content')
{{-- incluimos el modal --}}
@include('libros.create')
<h3 class="display-1 text-center text-danger mt-4"> Listado Libros</h3>
<div class="container">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <div class="table-responsive">
        <table class="table ">
            <button type="button" class="btn btn-success m-5" data-bs-toggle="modal" data-bs-target="#create">
                <i class="bi bi-floppy"></i>  Nuevo Libro
            </button>
            <thead class="bg-dark text-white ">
                <tr>
                    <th scope="col">Id: </th>
                    <th scope="col">Titulo: </th>
                    <th scope="col">Autor: </th>
                    <th scope="col">Paginas: </th>
                    <th scope="col">Año Publicación: </th>
                    <th scope="col"> </th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    @foreach ($allBooks as $item)
                    <tr>
                        <td scope="row"> {{$item -> id}} </td>
                        <td> {{$item -> titulo}} </td>
                        <td> {{$item -> autor}} </td>
                        <td> {{$item -> paginas}} </td>
                        <td> {{$item -> anio}} </td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-list-stars"></i> Opciones
                                </button>
                                <ul class="dropdown-menu">
                                    <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$item->id}}">
                                        <i class="bi bi-pencil-square"></i> - Editar 
                                      </button>
                                    <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">
                                        <i class="bi bi-trash"></i> - Borrar 
                                      </button>
                                </ul>
                              </div>                            
                        </td>                        
                    </tr>
                    @include('libros.options')
                    @endforeach
            </tbody>
        </table>
    </div>{{-- cierre tableresp --}}   
</div> {{-- cierre col-8 --}}
</div>{{-- cierre row --}}
</div>
@endsection
