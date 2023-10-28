<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Biblioteca</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{request ()-> routeIS('NewsNickName')?'text-light fw-bold':''}}" href="{{route ('NewsNickName')}}">Noticia literaria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request ()-> routeIS('FormNickName')?'text-light fw-bold':''}}" href="{{route ('FormNickName')}}">Registro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>