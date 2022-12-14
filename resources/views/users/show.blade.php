@extends('template.admin')
@section('body')
    <div class='shadow-sm p-3 rounded w-100'>
        <div>
            <div class='mx-3'>
                <h1 class="text-info mt-4">{{ $user->name }}</h1>
                <a href="{{ route('users.index') }}" class="btn btn-info text-white">
                    Voltar<i class="fas fa-search"></i>
                </a>
                @if (session()->has('edit'))
                    <div class="alert alert-success alert-dismissible fade show w-75 mt-4" role="alert">
                        <strong>Sucesso!</strong> {{ session()->get('edit') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <table class="table table-striped ">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data de Cadastro</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            @if ($user->image)
                                <th><img src="{{ asset('storage/' . $user->image) }}" width="60px" height="60px"
                                        class="border rounded-circle"></th>
                            @else
                                <th><img src="{{ asset('storage/profile/avatar.png') }}" width="60px" height="60px"
                                        class="border rounded-circle"></th>
                            @endif
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning text-white">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger text-white">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
