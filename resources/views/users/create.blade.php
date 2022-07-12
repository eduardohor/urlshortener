<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Encurtador de Url's</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class='d-flex'>
                    <a class="navbar-brand text-primary fw-bold" href="/"><img src="/storage/img/logo.svg" alt="Logo"></a>
                </div>       
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>     

    <div class="container" style='max-width:768px;'>
        <div class="my-4">
            <span>Já possui uma conta?<span>
            <a href="" class="btn text-info">Faça login!</a>
        </div>

        @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error )
                    {{$error}}<br>
            @endforeach
        </div>
        @endif


        <form action="{{route('user.store')}}" method="POST"  class='rounded shadow p-3 p-md-5 text-start' style='background-color:#fff;'>
            @csrf
            <div>
                <label class='form-label text-info h3'>Dados básicos</label>
                <input type="text" id="name" name="name" placeholder='Nome completo' class='form-control mb-3' required>
                <input type="email" id="email" name="email" placeholder='E-mail' class='form-control mb-3' required>
                <input type="password" id="password" name="password" placeholder='Senha' class='form-control mb-3' required>
                <input type="tel" id="tel" name="telephone" placeholder='Telefone' class='form-control mb-3' required>
                <input type="date" id="birth_date" name="birth_date" placeholder='Data de nascimento' class='form-control mb-3' required>
                <input type="text" id="cpf" name="cpf" placeholder='CPF' class='form-control mb-3' required>
               
            </div>
            <div>
                <label class='form-label text-info h3'>Endereço</label>
                <input type="text" id="cep" name="cep" placeholder='CEP' class='form-control mb-3'>
                <input type="text" id="street" name="street" placeholder='Rua' class='form-control mb-3' required>
                <input type="text" id="number" name="number" placeholder='Número' class='form-control mb-3' required>
                <input type="text" id="neighborhood" name="neighborhood" placeholder='Bairro' class='form-control mb-3' required>
                <input type="text" id="city" name="city" placeholder='Cidade' class='form-control mb-3' required>
                <input type="text" id="state" name="state" placeholder='Estado' class='form-control mb-3' required>
            </div>
            <button type='submit' class='btn btn-info d-block w-100'>Cadastrar</button>
        </form>
    </div>
</body>
</html>