<?php

namespace App\Http\Controllers\Site;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Funcionario;

class UsuarioController extends Controller
{
  public function index()
  {
    return view('usuario.index');
  }

  public function entrar(Request $req)
  {
    $dados = $req->all();
    if(Funcionario::attempt(['cpf'=>$dados['cpf'],
     'password'=>$dados['password']])){
      return redirect()->route('admin.filiais');
    }

    return redirect()->route('usuario.index');
  }

  public function sair()
  {
    Funcionario::logout();
    return redirect()->route('site.home');
  }

}
