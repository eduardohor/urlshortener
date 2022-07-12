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
            <a class="navbar-brand" href="#"><img src="/storage/img/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Minhas Url's</a>
                  </li>
              </ul>
              <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="" class="nav-link me-3">Entrar</a>
                  </li>
                  <li>
                    <a href="" class="btn btn-info">Cadastrar</a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
    <main class="bg-light mt-4">
      <div class="container d-flex justify-content-center bg-secondary w-75">
          <form class="row g-3 m-3">
              <div class="col-auto">
                <input type="text" class="form-control" size="80" placeholder="Coloque seu link aqui...">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-info mb-3">Encurtar link</button>
              </div>
            </form>
      </div>
  </main>
  >
  
  
    @yield('body')
</body>
</html>