@extends('layouts.default')

@section('title','Cadastrar Funcionário')

@section('conteudo')
    
    <div class="bg-light p-5">
    <h1>Cadastrar Funcionário</h1>
    
    <form class="row">
    
    <div class="form-group col-md-4 p-2">
        <label>Nome</label>
        <input type="text" class="form-control">
    </div>

    <div class="form-group col-md-4 p-2">
        <label>Data de Nascimento</label>
        <input type="date" class="form-control" placeholder="dd/mm/aaaa">
    </div>

    <div class="form-group col-md-4 p-2">
        <label for="sexo">Sexo</label>
        <select class="form-select" id="sexo" aria-label="Default select example">
            <option></option>  
            <option>Masculino</option>
            <option>Feminino</option>
        </select>
    </div>

    <div class="col-md-4 p-2">
    <label>CPF</label>
    <input type="text" class="form-control">
    </div>

    <div class="form-group col-md-4 p-2">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>

    <div class="col-md-4 p-2">
    <label>Telefone</label>
    <input type="text" class="form-control" placeholder="(DDD)XXXXX-XXXX">
    </div>

    <div class="form-group col-md-4 p-2">
        <label>Departamento</label>
        <select class="form-select" id="dep">
            <option></option>  
            <option></option>
            <option></option>
        </select>
    </div>

    <div class="form-group col-md-4 p-2">
        <label>Cargo</label>
        <select class="form-select" id="cargo">
            <option></option>  
            <option></option>
            <option></option>
        </select>
    </div>

    <div class="col-md-4 p-2">
        <label>Salário</label>
        <input type="text" class="form-control" placeholder="R$">
    </div>

    <div class="form-group p-2">
        <label class="rounded bg-white" for=""></label>
        <input type="file" class="form-control-file rounded form-control" id="foto">
    </div>

    <div class="container">
        <button type="button" class="btn btn-primary">Cadastrar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
    </div>


    </form>
</div>
@endsection