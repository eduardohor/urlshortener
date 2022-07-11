@extends('template.users')
@section('body')
    <section class="container d-flex justify-content-between mt-5">
        <div class="w-50">
            <h1 class="fw-bold display-4">Mais do que apenas links mais curtos</h1>
            <p>Construa o reconhecimento da sua marca e obtenha informações detalhadas sobre o desempenho dos seus links. Tudo isso e muito mais você encontra aqui.
            </p>
        </div>
        <div >
            <img src="/storage/img/illustration-working.svg" alt="Trabalhando" width="500">
        </div>
    </section>
    <main class="bg-light">
        <div class="container d-flex justify-content-center bg-secondary w-75">
            <form class="row g-3 m-3">
                <div class="col-auto">
                  <input type="text" class="form-control" size="80" placeholder="Coloque seu link aqui...">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-info mb-3">Encurtar link</button>
                </div>
              </form>
        </div>
    </main>
@endsection