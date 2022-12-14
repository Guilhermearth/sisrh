@extends('layouts.default')

@section('title', 'Funcionários')

@section('conteudo')
    <h1 class="mb-4">Funcionários</h1>

    @if (Session::get('sucesso'))
        <div class="alert alert-success text-center">{{ session::get('sucesso')}}</div>
    @endif

    <a href="{{ route('funcionarios.create') }}" class="btn btn-primary position-absolute top-0 end-0 m-4 rounded-circle fs-3"><i
            class="bi bi-person-plus-fill"></i></a>

    <p>Total funcionarios: {{ $totalFuncionarios }}</p>        

            <form action="" method="get" class="mb-3 d-flex justify-content-end">
                <div class="input-group me-3">
                    <input type="text" name="buscaFuncionario" class="form-control form-control-lg" placeholder="Nome do funcionario">
                    <button class="btn btn-primary btn-lg" type="submit">Procurar</button>
                </div>
                <a href="{{route('funcionarios.index')}}" class="btn btn-light border btn-lg">Limpar</a>

            </form>
    <table class="table table-responsive">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Cargos</th>
                <th>Departamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)

            <tr class="text-center">
                <td class="align-middle">{{$funcionario->id}}</td>
                <td class="align-middle"><img src="/storage/funcionarios/{{ $funcionario->foto}}" alt="{{$funcionario->nome}}" width="100"></td>
                <td class="align-middle">{{$funcionario->nome}}</td>
                <td class="align-middle">{{$funcionario->cargo->descricao}}</td>
                <td class="align-middle">{{$funcionario->departamento->nome}}</td>
                <td class="align-middle text-center"> 
                    <a href="{{ route('funcionarios.edit', $funcionario->id)}}" class="btn btn-primary" title="Editar"><i class="bi bi-pen"></i></a>
                    <a href="" class="btn btn-danger " title="Excluir" data-bs-toggle="modal" data-bs-target="#modal-deletar-{{$funcionario->id}}"><i class="bi bi-trash"></i></i></a></td>
                    
                    @include('funcionarios.delete')
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <style>
            .pagination{
                justify-content: center;
            }
        </style>
        {{$funcionarios->links()}};
    </div>

@endsection
