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
      <div class="container" >
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/storage/img/logo.svg" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
              </ul>
              <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a href="" class="nav-link me-3 " style="font-size: 18px">Entrar</a>
                  </li>
                  <li>
                    <a href="{{route('users.create')}}" class="btn btn-info" style="font-size: 18px">Cadastrar</a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
        <section class="container d-flex justify-content-between mt-5">
            <div class="w-50">
                <h1 class="fw-bold display-4" >Mais do que apenas links mais curtos</h1>
                <p style="font-size: 18px">Construa o reconhecimento da sua marca e obtenha informações detalhadas sobre o desempenho dos seus links. Tudo isso e muito mais você encontra aqui.
                </p>
            </div>
            <div >
                <img src="/storage/img/illustration-working.svg" alt="Trabalhando" width="500">
            </div>
        </section>
        <div>
            <div class="col-auto ">
              <a href="{{route('shorten.index')}}" type="submit" class="btn btn-info mb-3 btn-lg"> Ir para o encurtador de link</a>
            </div>
        </div>
    </header>
   
</body>
</html>