@extends('template.admin')
@section('body')
<div class='shadow-sm p-3 rounded w-100'>
    <div>
        <div class='mx-3'>
            <h1 class="text-info mt-4">Editar {{$url->name}}</h1>
                <a href="{{route('urls.index')}}" class="btn btn-info text-white mb-3">
                    Voltar
                </a>
                <form action="{{route('url.update', $url->id)}}" method="POST"  class='rounded shadow p-3 p-md-4 text-start' style='background-color:#fff;'>
                    @method('PUT')
                    @csrf
                    <div>
                        <label class='form-label'>Título da Url</label>
                            <input type="text" id="title" name="title" placeholder='Nome da Url' class='form-control mb-3' value="{{$url->title}}" required>
                        <label class='form-label'>Url normal</label>
                            <input type="text" id="normal_url" name="normal_url" class='form-control mb-3' required value="{{$url->normal_url}}"> 
                        <label class='form-label'>Url encurtada</label>    
                            <input type="text" id="shortened_url" name="shortened_url" class='form-control mb-3' required value="{{$url->shortened_url}}">          
                    </div>
                    <button type='submit' class='btn btn-info d-block w-100'>Atualizar</button>
                </form>          
        </div>
    </div>
</div>
@endsection