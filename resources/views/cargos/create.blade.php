@extends('layouts.default')

@section('title','Cadastrar Cargos')

@section('conteudo')

    <div class="bg-light p-5 container-fluid shadow">
    <h1>Cadastrar Cargos</h1>

    <form class="" method="POST" action="{{ route('cargos.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="1" name="id_user">
        <div class="container">
            <label for="nome">Nome</label>
            <input type="text" name="descricao" class="form-control" required id="descricao" value="">
        </div>
        
        <button type="submit" class="btn btn-primary m-2">Cadastrar</button>
        <a href="{{ route('cargos.index') }}"> <button type="button" class="btn btn-danger">Cancelar</button></a>
    </form>
    </div>
@endsection