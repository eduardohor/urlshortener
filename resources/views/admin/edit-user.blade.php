@extends('template.admin')
@section('body')
<div class='shadow-sm p-3 rounded w-100'>
    <div>
        <div class='mx-3'>
            <h1 class="text-info mt-4">Editar {{$user->name}}</h1>
                <a href="{{route('users.index')}}" class="btn btn-info text-white mb-3">
                    Voltar
                </a>
                <form action="{{route('user.update', $user->id)}}" method="POST"  class='rounded shadow p-3 p-md-4 text-start' style='background-color:#fff;' enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div>
                        <label class='form-label text-info h3'>Dados básicos</label>
                        <input type="text" id="name" name="name" placeholder='Nome completo' class='form-control mb-3' required value="{{$user->name}}">
                        <input type="email" id="email" name="email" placeholder='E-mail' class='form-control mb-3' required value="{{$user->email}}">
                        <input type="password" id="password" name="password" placeholder='Senha' class='form-control mb-3'>
                        <input type="tel" id="tel" name="telephone" placeholder='Telefone' class='form-control mb-3' required value="{{$user->telephone}}">
                        <input type="date" id="birth_date" name="birth_date" placeholder='Data de nascimento' class='form-control mb-3' required value="{{$user->birth_date}}">
                        <input type="text" id="cpf" name="cpf" placeholder='CPF' class='form-control mb-3' required value="{{$user->cpf}}">
                        <label for="photo" class="form-label">Selecione uma foto para o seu perfil.</label>
                        <input type="file" id="photo" name="photo" class="form-control form control-md mb-3" value="{{$user->photo}}">
                       
                    </div>
                    <div>
                        <label class='form-label text-info h3'>Endereço</label>
                        <input type="text" id="cep" name="cep" placeholder='CEP' class='form-control mb-3' value="{{$user->cep}}">
                        <input type="text" id="street" name="street" placeholder='Rua' class='form-control mb-3' required value="{{$user->street}}">
                        <input type="text" id="number" name="number" placeholder='Número' class='form-control mb-3' required value="{{$user->number}}">
                        <input type="text" id="neighborhood" name="neighborhood" placeholder='Bairro' class='form-control mb-3' required value="{{$user->neighborhood}}">
                        <input type="text" id="city" name="city" placeholder='Cidade' class='form-control mb-3' required value="{{$user->city}}">
                        <input type="text" id="state" name="state" placeholder='Estado' class='form-control mb-3' required value="{{$user->state}}">
                    </div>
                    <button type='submit' class='btn btn-info d-block w-100'>Atualizar</button>
                </form>          
        </div>
    </div>
</div>
@endsection