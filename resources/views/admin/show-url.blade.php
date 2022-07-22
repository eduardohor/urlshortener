@extends('template.admin')
@section('body')
<div class='shadow-sm p-3 rounded w-100'>
    <div>
        <div class='mx-3'>
            <h1 class="text-info mt-4">{{$url->title}}</h1>
                <a href="{{route('urls.index')}}" class="btn btn-info text-white">
                    Voltar<i class="fas fa-search"></i>
                </a>
                @if(session()->has('edit'))
                <div class="alert alert-success alert-dismissible fade show w-75 mt-4" role="alert">
                    <strong>Sucesso!</strong> {{session()->get('edit')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
           
            <table class="table table-striped ">
                <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th> 
                        <th scope="col">Usuário</th> 
                        <th scope="col">Nome da Url</th> 
                        <th scope="col">Url Normal</th> 
                        <th scope="col">Url encurtada</th> 
                        <th scope="col">Data de Criação</th> 
                        <th scope="col" colspan="2">Ações</th> 
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">{{$url->id}}</th>
                        <td>{{$url->user->name}}</td>
                        <td>{{$url->title}}</td>
                        <td>{{$url->normal_url}}</td>
                        <td>{{$url->shortened_url}}</td>
                        <td>{{date('d/m/Y', strtotime($url->created_at))}}</td>
                        <td>
                            <a href="{{route('url.edit', $url->id)}}" class="btn btn-warning text-white">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('url.destroy', $url->id)}}" method="POST">
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