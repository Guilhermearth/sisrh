@extends('layouts.default')

@section('title', 'Cargos')

@section('conteudo')
    <h1>Cargos</h1>
    <a href="{{ route('cargos.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-3"><i
        class="bi bi-plus"></i></a>
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cargos as $cargo)
        <tr>
            <td>{{$cargo->id}}</td>
            <td>{{$cargo->nome}}</td>
            <td><button type="button" class="btn btn-success m-2"><i class="bi bi-person-fill"></i></button><button type="button" class="btn btn-primary m-2"><i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></i></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
