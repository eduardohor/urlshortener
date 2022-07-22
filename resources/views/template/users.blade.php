<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    
    <title>Encurtador de Url</title>
</head>
<body>
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/storage/img/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              </ul>
              <ul class="navbar-nav">
                @if(Auth::user())
                  <li class="nav-item">
                    <a href="" class="nav-link">Olá, {{Auth::user()->name}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('shorten.index')}}">Encurtar Url</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('users.list.urls')}}">Minhas Url's</a>
                  </li>
                  <li>
                    <form action="{{route('logout')}}" method="POST">
                      @csrf
                      <button class="btn btn-info">Sair</button>
                    </form>
                  </li>
                @endif
                  
              </ul>
            </div>
          </div>
        </nav>
    @yield('body')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>