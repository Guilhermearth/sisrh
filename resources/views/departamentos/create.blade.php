@extends('layouts.default')

@section('title','Cadastrar Departamento')

@section('conteudo')

    <div class="bg-light p-5">
    <h1>Cadastrar Departamento</h1>
    
    <form action="row">
    
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control">
        </div>

            <button type="button" class="btn btn-primary m-2">Cadastrar</button>
            <button type="button" class="btn btn-danger m-2">Cancelar</button>
    </form>
    </div>
@endsection