<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login.index");
    }

    public function auth(Request $request){
        $creedenciais = $request->validate(
        [
        'email'=> ['required', 'email'], 
        'password' => ['required']
      ],
    [
        'email.required' => 'O campo e-mail é obrigatorio',
        'email.email' => 'O e-mail informado não é valido',
        'password.required' => 'O campo senha é obrigatorio'
    ]);

    if(Auth::attempt($creedenciais)){
        $request->session()->regenerate();
        return redirect()->intended(route('dashboard.index'));
    }else{
        return redirect()->back()->with('erro', 'E-mail ou senha invalidos');
    }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index');
    }
}
