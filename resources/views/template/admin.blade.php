<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
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
                  <li class="nav-item">
                    <a href="" class="nav-link">Olá, {{Auth::user()->name}}</a>
                  </li>
                  <li>
                    <form action="{{route('logout')}}" method="POST">
                      @csrf
                      <button class="btn btn-info">Sair</button>
                    </form>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
        <main class='m-5'>
            <div class='d-flex justify-content-between'>
                <div>
                    <span class='h1 text-info'>Painel de Controle</span>
                </div>
            </div>           
            <hr class='text-info'>           
            <div class='d-flex gap-3 mt-3'>
                <div class='d-flex flex-column w-25 shadow-sm p-3 rounded'>
                    <a href="{{route('users.index')}}" class='btn btn-outline-info mb-1'><i class="fa-solid fa-user-large"></i> Usuários</a>
                    <a href="{{route('urls.index.admin')}}" class='btn btn-outline-info'><i class="fa-solid fa-basket-shopping"></i> Urls</a>
                </div>
                @yield('body')
            </div>  
        </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>