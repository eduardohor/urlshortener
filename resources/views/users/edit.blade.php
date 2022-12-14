@extends('template.admin')
@section('body')
    <div class='shadow-sm p-3 rounded w-100'>
        <div>
            <div class='mx-3'>
                <h1 class="text-info mt-4">Editar {{ $user->name }}</h1>
                <a href="{{ route('user.show', $user->id) }}" class="btn btn-info text-white mb-3">
                    Voltar
                </a>

                <form action="{{ route('user.update', $user->id) }}" method="POST"
                    class='rounded shadow p-3 p-md-4 text-start' style='background-color:#fff;' enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif
                    <div>
                        <label class='form-label text-info h3'>Dados básicos</label>
                        <input type="text" id="name" name="name" placeholder='Nome completo'
                            class='form-control mb-3' required value="{{ $user->name }}">
                        <input type="email" id="email" name="email" placeholder='E-mail' class='form-control mb-3'
                            required value="{{ $user->email }}">
                        <input type="password" id="password" name="password" placeholder='Senha' class='form-control mb-3'>
                        <label for="photo" class="form-label">Selecione uma foto para o seu perfil.</label>
                        <input type="file" id="photo" name="photo" class="form-control form control-md mb-3"
                            value="{{ $user->photo }}">

                        <label>Administrador</label>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="is_admin" value="1"
                                id="flexRadioDefault1" @if ($user->is_admin == '1') checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Sim
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_admin" value="0"
                                id="flexRadioDefault2" @if ($user->is_admin == '0') checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Não
                            </label>
                        </div>
                    </div>
                    <button type='submit' class='btn btn-info d-block w-100'>Atualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
