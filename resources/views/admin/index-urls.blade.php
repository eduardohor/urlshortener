@extends('template.admin')
@section('body')
    <div class='shadow-sm p-3 rounded w-100'>
        <div>
            <div class='mx-3'>
                <h1 class="text-info mt-4">Listagem de Urls</h1>
            
                <form action="{{ route('users.index') }}" method="get" class='d-flex'>
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
                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

