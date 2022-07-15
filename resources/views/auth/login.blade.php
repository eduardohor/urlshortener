<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Login</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="/storage/img/logo.svg" alt=""></a>
            </nav>
        </div>
    </header>

    <main class="container d-flex gap-5 align-items-center flex-lg-row flex-column justify-content-center">
        <div class='w-50'>
           <div class="">
               <div class="text-center">
                <i class="fa-solid fa-diamond h1 text-primary"></i>
                <h1 class="text-info h1 my-5">Entrar</h1>
            </div>

           
        </div>
            <form action="{{ route('login') }}" class="rounded shadow p-3" method="POST">
                @csrf
                <input type="email" placeholder="E-mail" class="form-control mb-3" name="email" required>
                <input type="password" placeholder="Senha" class="form-control mb-3" name="password" required>
                <button type='submit' class='btn btn-info d-block w-100'> {{ __('Log in') }}</button>
                  <div class="d-flex justify-content-between pt-2">
                    @if (Route::has('password.request'))
                        <a class="nav-link text-info p-0" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <a href="/register" class='nav-link text-info p-0'>Cadastre-se!</a>
                 </div> 
            </form>
            </div>                                 
       </main>

    
</body>
</html>

