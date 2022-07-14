@extends('template.users')
@section('body')
     <table class="table table-striped mt-5">
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
@endsection