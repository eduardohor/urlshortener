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
                        <input type="text" id="name" name="name" placeholder='Nome completo' class='form-control mb-3' required value="{{$url->name}}">           
                    </div>
                    <button type='submit' class='btn btn-info d-block w-100'>Atualizar</button>
                </form>          
        </div>
    </div>
</div>
@endsection