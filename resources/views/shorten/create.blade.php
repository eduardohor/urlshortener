@extends('template.users')
@section('body')

    <form action="{{route('shorten.store')}}" method="POST"  class='rounded shadow p-3 p-md-5 text-start' style='background-color:#fff;'>
        @csrf
        <div>
            <label class='form-label text-info h3 d-block mb-3'>Salvar sua Url</label>
            <label class='form-label'>Id do Usuário(campo temporário)</label>
                <input type="hidden" id="user_id" name="user_id" placeholder='Id do usuário' class='form-control mb-3' required value="{{Auth::user()->id}}">
            <label class='form-label'>Nome da Url</label>
                <input type="text" id="title" name="title" placeholder='Nome da Url' class='form-control mb-3' required>
            <label class='form-label'>Url normal</label>
                <input type="text" id="normal_url" name="normal_url" class='form-control mb-3' required value="{{$full}}"> 
            <label class='form-label'>Url encurtada</label>    
                <input type="text" id="shortened_url" name="shortened_url" class='form-control mb-3' required value="{{$url}}">
        </div>
        <button type='submit' class='btn btn-info d-block w-100'>Salvar</button>
    </form>
@endsection