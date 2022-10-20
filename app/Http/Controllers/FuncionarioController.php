<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use App\Models\funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index(request $request){

        $funcionarios = Funcionario::where('nome', 'like', '%' .$request->buscaFuncionario.'%')->orderBy('nome', 'asc')->get();
        $totalFuncionarios = Funcionario::all()->count();
        return view('/funcionarios/index', compact('funcionarios', 'totalFuncionarios'));
    }

    public function departamento($id, Request $request){
        $departamento = departamento::find($id);
        $funcionarios = Funcionario::where('id_departamento', $id)->where('nome', 'like', '%' .$request->buscaFuncionario.'%')->orderBy('nome', 'asc')->get();
        $totalFuncionarios = Funcionario::where('id_departamento', $id)->count();
        return view('/funcionarios/index', compact('funcionarios', 'totalFuncionarios', 'departamento'));

    }
    
    public function create(){
        return view ('funcionarios/create');
    }
}
