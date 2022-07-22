@extends('template.users')
@section('body')
    <form action="{{route('user.update.url', $url->id)}}" method="POST"  class='rounded shadow p-3 p-md-5 text-start' style='background-color:#fff;'>
        @method('put')
        @csrf
        <div>
            <label class='form-label text-info h3 d-block mb-3'>Editar url {{$url->title}}</label>
            <label class='form-label'>Título da Url</label>
                <input type="text" id="title" name="title" placeholder='Nome da Url' class='form-control mb-3' value="{{$url->title}}" required>
            <label class='form-label'>Url normal</label>
                <input type="text" id="normal_url" name="normal_url" class='form-control mb-3' required value="{{$url->normal_url}}" disabled="disabled"> 
            <label class='form-label'>Url encurtada</label>    
                <input type="text" id="shortened_url" name="shortened_url" class='form-control mb-3' required value="{{$url->shortened_url}}" disabled="disabled">
        </div>
        <button type='submit' class='btn btn-info d-block w-100'>Atualizar</button>
    </form>
@endsection