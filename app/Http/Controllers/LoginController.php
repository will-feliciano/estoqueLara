<?php

namespace estoqueLara\Http\Controllers;

use estoqueLara\Http\Controllers\Controller;

use Request;
use Auth;

class LoginController extends Controller{
    
    public function form(){
        return view('form_login');
    }

    public function login(){
        $dados = Request::only('email', 'password');

        if(Auth::attempt($dados)){
            return 'usuário logado';
        }
        return 'usuário não existe';
    }
}
