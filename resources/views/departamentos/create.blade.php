@extends('layouts.default')

@section('title','Cadastrar Departamento')

@section('conteudo')

    <div class="bg-light p-5 container-fluid shadow">
    <h1>Cadastrar Departamento</h1>
    
    <form method="POST" action="{{ route('departamento.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="1" name="id_user">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="" required>
        </div>

            <button type="submit" class="btn btn-primary m-2">Cadastrar</button>
            <a href="{{ route('departamentos.index') }}"> <button type="button" class="btn btn-danger">Cancelar</button></a>
    </form>
    </div>
@endsection