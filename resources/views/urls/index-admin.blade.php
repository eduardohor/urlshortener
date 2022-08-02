@extends('template.admin')
@section('body')
    <div class='shadow-sm p-3 rounded w-100'>
        <div>
            <div class='mx-3'>
                <h1 class="text-info mt-4">Listagem de Urls</h1>
                @if(session()->has('destroy'))
                    <div class="alert alert-danger alert-dismissible fade show w-75" role="alert">
                        <strong>Sucesso!</strong> {{session()->get('destroy')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            
                <form action="{{ route('urls.index.admin') }}" method="get" class='d-flex'>
                        @csrf
                        <div class='form-group w-50 me-3' >
                            <input type="search" id="form1" name='search' class="form-control rounded " placeholder='Pesquisar'/>
                        </div>
                        <button type="submit" class="btn btn-info text-white">
                            Buscar<i class="fas fa-search"></i>
                        </button> 
                </form>
                <table class="table table-striped ">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">ID</th> 
                        <th scope="col">Usuário</th> 
                        <th scope="col">Nome da Url</th> 
                        <th scope="col">Url Normal</th> 
                        <th scope="col">Url encurtada</th> 
                        <th scope="col">Data de Criação</th> 
                        <th scope="col">Ações</th> 
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($urls as $url)
                        <tr>
                            <th scope="row">{{$url->id}}</th>
                            <td>{{$url->user->name}}</td>
                            <td>{{$url->title}}</td>
                            <td><a class="link-dark" href="{{$url->normal_url}}" target="_blanck">{{$url->normal_url}}</td></a>
                            <td><a class="link-dark" href="{{$url->shortened_url}}" target="_blanck">{{$url->shortened_url}}</a></td>
                            <td>{{date('d/m/Y', strtotime($url->created_at))}}</td>
                            <td><a href="{{route('url.show.admin', $url->id)}}" class="btn btn-info text-white">Visualizar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$urls->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
@endsection

