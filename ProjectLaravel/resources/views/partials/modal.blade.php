
  <!-- Modal edit-->
  <div class="modal fade" id="editar{{$recuerdo->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">{{$recuerdo->titulo}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/recuerdo/{{$recuerdo->id}}/confirm">
              @csrf
              {!! method_field('PUT') !!}
                <div class="mb-3">
                  <label for="titulo" class="form-label">Título</label>
                  <input type="text" name="txtTitulo" value="{{$recuerdo->titulo}}" class="form-control" id="titulo">
                  <p class="text-danger">{{ $errors-> first('txtTitulo') }}</p>
                </div>
                <div class="mb-3">
                  <label for="recuerdo" class="form-label">Recuerdo</label>
                  <input type="text" name="txtRecuerdo" value="{{$recuerdo->recuerdo}}" class="form-control" id="recuerdo">
                  <p class="text-danger">{{ $errors-> first('txtRecuerdo') }}</p>
                </div>
        </div>
        <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar recuerdo</button>
            </form>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal delete-->
    <div class="modal fade" id="borrar{{$recuerdo->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-danger text-center" id="staticBackdropLabel">¿SEGUR@ QUE QUIERES BORRAR!!!!!!!!!?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="/recuerdo/{{$recuerdo->id}}/delete">
                @csrf
                {!! method_field('PUT') !!}
                  <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <p class="fw-bold text-primary fst-italic">{{$recuerdo->titulo}}</p>
                  </div>
                  <div class="mb-3">
                    <label for="recuerdo" class="form-label">Recuerdo</label>
                    <p class="fw-bold text-primary fst-italic">{{$recuerdo->recuerdo}}</p>
                  </div>
          </div>
          <div class="modal-footer">
                  <button type="submit" class="btn btn-danger">Borrar</button>
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>

              </form>
          </div>
        </div>
      </div>
    </div>