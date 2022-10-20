<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(request $request)
    {
        $departamentos = departamento::where('nome', 'like', '%' .$request->buscaDepartamentos.'%')->orderBy('nome', 'asc')->get();
        $totalDepartamentos = departamento::all()->count();
    return view('departamentos.index', compact('departamentos', 'totalDepartamentos'));
    }

    public function create()
    {
        return view('departamentos.create');
    }
}
