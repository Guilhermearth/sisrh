<?php

namespace App\Http\Controllers;

use App\Models\cargo;
use App\Models\departamento;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $totalFuncionarios = Funcionario::all()->count();
        $totalCargos = cargo::all()->count();
        $totalDepartamentos = departamento::all()->count();
        return view('dashboard.index', compact('totalFuncionarios', 'totalCargos', 'totalDepartamentos'));
    }
}
