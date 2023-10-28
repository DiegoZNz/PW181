@extends('layouts.plantilla')
@section('titulo','Formulario')
@section('contenido')

<div class="form-body container">
  <div class="row">
      <div class="form-holder">
          <div class="form-content">
              <div class="form-items">
                @if(session()->has('Exito'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: "{{ session('Exito') }}",
                    });
                </script>
                @endif
                
                @if($errors->any())
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se envió el formulario, por favor verifique los datos',
                    });
                </script>
                @endif
                

                  <h3>Formulario</h3>
                  <p>Rellena los datos a continuación.</p>
                  <form method="POST" action="/SaveBook">
                      @csrf
                      <div class="col-md-12">
                          <label for="txtIsnb" class="form-label">ISBN</label>
                          <div class="input-group">
                              <span class="input-group-text"><i class="fa fa-barcode"></i></span>
                              <input class="form-control" type="number" name="txtIsnb" value="{{ old('txtIsnb') }}" class="form-control" id="txtIsnb" placeholder="Ejemplo: 9780123456789">
                          </div>
                          <p class="text-warning">{{ $errors->first('txtIsnb') }}</p>
                      </div>

                      <div class="mb-3">
                          <label for="txtTitle" class="form-label">Título</label>
                          <div class="input-group">
                              <span class="input-group-text"><i class="fa fa-book"></i></span>
                              <input type="text" name="txtTitle" value="{{ old('txtTitle') }}" class="form-control" id="txtTitle" placeholder="Ejemplo: El Gran Gatsby">
                          </div>
                          <p class="text-warning">{{ $errors->first('txtTitle') }}</p>
                      </div>
                      
                      <div class="mb-3">
                          <label for="txtAuthor" class="form-label">Autor</label>
                          <div class="input-group">
                              <span class="input-group-text"><i class="fa fa-user"></i></span>
                              <input type="text" name="txtAuthor" value="{{ old('txtAuthor') }}" class="form-control" id="txtAuthor" placeholder="Ejemplo: F. Scott Fitzgerald">
                          </div>
                          <p class="text-warning">{{ $errors->first('txtAuthor') }}</p>
                      </div>
                      
                      <div class="mb-3">
                          <label for="txtPages" class="form-label">Páginas</label>
                          <div class="input-group">
                              <span class="input-group-text"><i class="fa fa-file"></i></span>
                              <input type="text" name="txtPages" value="{{ old('txtPages') }}" class="form-control" id="txtPages" placeholder="Ejemplo: 350">
                          </div>
                          <p class="text-warning">{{ $errors->first('txtPages') }}</p>
                      </div>
                      
                      <div class="mb-3">
                          <label for="txtEditorial" class="form-label">Editorial</label>
                          <div class="input-group">
                              <span class="input-group-text"><i class="fa fa-building"></i></span>
                              <input type="text" name="txtEditorial" value="{{ old('txtEditorial') }}" class="form-control" id="txtEditorial" placeholder="Ejemplo: Penguin Random House">
                          </div>
                          <p class="text-warning">{{ $errors->first('txtEditorial') }}</p>
                      </div>
                      
                      <div class="mb-3">
                          <label for="txtEmailEditorial" class="form-label">Email de la Editorial</label>
                          <div class="input-group">
                              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                              <input type="text" name="txtEmailEditorial" value="{{ old('txtEmailEditorial') }}" class="form-control" id="txtEmailEditorial" placeholder="Ejemplo: editorial@example.com">
                          </div>
                          <p class="text-warning">{{ $errors->first('txtEmailEditorial') }}</p>
                      </div>

                      <div class="form-button mt-3">
                          <button type="submit" class="btn btn-primary">Guardar libro</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection