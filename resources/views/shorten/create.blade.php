@extends('template.users')
@section('body')
    <section class="container  w-75">
        
            <a href="{{route('shorten.index')}}" class="btn btn-info text-white">
                Voltar
            </a>

        <form action="{{route('shorten.store')}}" method="POST"  class='rounded shadow p-3 mt-3 p-md-5 text-start' style='background-color:#fff;'>
            @csrf
            <div>
                <h3 class='text-info h3 d-block mb-3'>Salvar sua Url</h3>
                <input type="hidden" id="user_id" name="user_id" placeholder='Id do usuário' class='form-control mb-3' required value="{{Auth::user()->id}}">
                <label class='form-label'>Url normal</label>
                <input type="text" id="normal_url" name="normal_url" class='form-control mb-3' readonly value="{{$full}}"> 
                <label class='form-label'>Url encurtada</label> 
                <div class="input-group rounded w-50 mb-3">
                    <input type="text" id="shortened_url" name="shortened_url" class="form-control rounded " readonly value="{{$url}}" />
                    <a onclick="copyText()" title="Copiar" class="input-group-text border-0 ">
                        <i class="fa-solid fa-copy"></i>
                    </a>
                </div>                
                <label class='form-label'>Título da Url</label>
                    <input type="text" id="title" name="title" placeholder='Nome da Url' class='form-control w-50 mb-3' required>
            </div>
            <button type='submit' class='btn btn-info d-block w-100'>Salvar</button>
        </form>
    </section>

    <script>
        function copyText() {
            let textoCopiado = document.getElementById("shortened_url");
            textoCopiado.select();
            textoCopiado.setSelectionRange(0, 99999)
            document.execCommand("copy");
        }
    </script>

@endsection