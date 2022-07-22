@extends('template.users')
@section('body')

      <h1 class="text-info mt-4">Minhas Url's</h1>
      
      @if(session()->has('destroy'))
        <div class="alert alert-danger alert-dismissible fade show w-75" role="alert">
            <strong>Sucesso!</strong> {{session()->get('destroy')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <form action="{{ route('users.list.urls') }}" method="get" class='d-flex'>
        @csrf
        <div class='form-group w-50 me-3'>
            <input type="search" id="form1" name='search' class="form-control rounded "
                placeholder='Pesquisar' />
        </div>
        <button type="submit" class="btn btn-info text-white">
            Buscar <i class="fas fa-search"></i>
        </button>
      </form>

     <table class="table table-striped mt-2">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Url normal</th>
                <th scope="col">Url encurtada</th>
                <th scope="col">Data de criação</th>
                <th scope="col" >Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
          @foreach($urls as $url)  
            <tr>
                <th scope="row">{{$url->id}}</th>
                <td>{{$url->title}}</td>
                <td>{{$url->normal_url}}</td>
                <td>{{$url->shortened_url}}</td>
                <td>{{date('d/m/Y', strtotime($url->created_at))}}</td>
                <td><a href="{{route('user.show.urls', $url->id)}}" class="btn btn-info text-white">Visualizar</a></td>
            </tr>
          @endforeach
           
        </tbody>
        </table>
        {{$urls->links('pagination::bootstrap-5')}}
@endsection