@extends('template.users')
@section('body')
<section class="container d-flex justify-content-between mt-5">
    <div class="w-50">
        <h1 class="fw-bold display-4" >Mais do que apenas links mais curtos</h1>
        <p style="font-size: 18px">Construa o reconhecimento da sua marca e obtenha informações detalhadas sobre o desempenho dos seus links. Tudo isso e muito mais você encontra aqui.
        </p>
    </div>
    <div>
        <img src="/storage/img/illustration-working.svg" alt="Trabalhando" width="500">
    </div>
</section>
</header>
    <main class="bg-light mt-4">
        @if(session()->has('create'))
            <div class="container alert alert-success alert-dismissible fade show w-75" role="alert">
                <strong>Sucesso!</strong> {{session()->get('create')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="container d-flex justify-content-center bg-secondary w-75 mb-5">      
            <form action="{{route('shorten.shorten')}}" method="POST" class="row g-3 m-3">
                @csrf
                <div class="col-auto">
                <input type="text" name="url" id="url" class="form-control" size="80" placeholder="Coloque seu link aqui..." required>
                </div>
                <div class="col-auto">
                <button type="submit" class="btn btn-info mb-3">Encurtar link</button>
                </div>
            </form>
        </div>
    </main>
@endsection