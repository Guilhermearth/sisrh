@extends('layouts.default')

@section('title', 'Alterar Funcionário')

@section('conteudo')

    <div class="bg-light p-5 container-fluid shadow">
        <h1>Alterar Funcionário</h1>

        <form class="row" method="POST" action="{{ route('funcionarios.update', $funcionario->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" value="1" name="id_user">
            <div class="form-group col-md-4 p-2">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{$funcionario->nome}}" required>
            </div>

            <div class="form-group col-md-4 p-2">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" class="form-control" placeholder="dd/mm/aaaa" name="data_nasc" id="data_nasc" value="{{$funcionario->data_nasc}}" required>
            </div>

            <div class="form-group col-md-4 p-2">
                <label for="sexo">Sexo</label>
                <select class="form-select" id="sexo" name="sexo" required>
                    <option value=""></option>
                    <option value="m" @selected($funcionario->sexo == 'm')>Masculino</option>
                    <option value="f" @selected($funcionario->sexo == 'f')>Feminino</option>
                </select>
            </div>

            <div class="col-md-4 p-2">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" value="{{$funcionario->cpf}}" required>
            </div>

            <div class="form-group col-md-4 p-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="{{$funcionario->email}}" required>
            </div>

            <div class="col-md-4 p-2">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" placeholder="(DDD)XXXXX-XXXX" name="telefone" id="telefone" value="{{$funcionario->telefone}}" required>
            </div>

            <div class="form-group col-md-4 p-2">
                <label for="id_departamento">Departamento</label>
                <select class="form-select" id="id_departamento" name="id_departamento">
                    <option></option>
                    @foreach ($departamentos as $departamento)
                        <option value="{{ $departamento->id }}" @selected($departamento->id == $funcionario->id_departamento)>{{ $departamento->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4 p-2">
                <label for="id_cargo">Cargo</label>
                <select class="form-select" id="id_cargo" name="id_cargo">
                    <option></option>
                    @foreach ($cargos as $cargo)
                        <option value="{{ $cargo->id }}" @selected($cargo->id == $funcionario->id_cargo)>{{ $cargo->descricao }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 p-2">
                <label for="salario">Salário</label>
                <input type="text" class="form-control" placeholder="R$" name="salario" id="salario" value="{{$funcionario->salario}}" required>
            </div>

            <div class="col-md-2">
                <img src="/storage/funcionarios/{{$funcionario->foto}}" class="img-thumbnail" alt="{{$funcionario->nome}}">
            </div>

            <div class="form-group col-md-10 p-2">
                <label class="rounded bg-white" for=""></label>
                <input type="file" class="form-control-file rounded form-control" name="foto" id="foto">
            </div>

            <div class="container">
                <button type="submit" class="btn btn-primary">Alterar</button>
                <a href="{{ route('funcionarios.index') }}"> <button type="button" class="btn btn-danger">Cancelar</button></a>
            </div>


        </form>
    </div>
@endsection
