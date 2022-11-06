<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(request $request)
    {
        $cargos = Cargo::where('descricao', 'like', '%' .$request->buscaCargo.'%')->orderBy('descricao', 'asc')->get();
        $totalCargos = Cargo::all()->count();
        return view('cargos/index', compact('cargos', 'totalCargos'));
    }

    public function create()
    {
        return view('cargos/create');
    }

    public function store(Request $request){

        $cargos = new Cargo;
        $cargos->descricao = $request->descricao;
        $cargos->save();

        return redirect()->route('cargos.index')->with('sucesso', 'Cargo cadastrado com sucesso');
    }
}
