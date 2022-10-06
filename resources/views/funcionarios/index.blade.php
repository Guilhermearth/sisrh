@extends('layouts.default')

@section('title', 'Funcionários')

@section('conteudo')
    <h1>Funcionários</h1>
    <a href="{{ route('funcionarios.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-3"><i
            class="bi bi-person-plus-fill"></i></a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
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

            
            <tr>
                <td>{{$funcionario->id}}</td>
                <td><img src="/images/funcionarios/{{ $funcionario->foto}}" alt="{{$funcionario->nome}}" width="100"></td>
                <td>{{$funcionario->nome}}</td>
                <td>{{$funcionario->cargo->descricao}}</td>
                <td>{{$funcionario->departamento->nome}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
