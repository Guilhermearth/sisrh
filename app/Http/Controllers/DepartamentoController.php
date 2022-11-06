<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(request $request)
    {
        $departamentos = Departamento::where('nome', 'like', '%' .$request->buscaDepartamento.'%')->orderBy('nome', 'asc')->get();
        $totalDepartamentos = Departamento::all()->count();
        return view('departamentos.index', compact('departamentos', 'totalDepartamentos'));
    }

    public function create()
    {
        return view('departamentos.create');
    }

    public function store(Request $request){

        $departamentos = new Departamento;
        $departamentos->nome = $request->nome;
        $departamentos->save();

        return redirect()->route('departamentos.index')->with('sucesso', 'Departamento cadastrado com sucesso');
    }
}
