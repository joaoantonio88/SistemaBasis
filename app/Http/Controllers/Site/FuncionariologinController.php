<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Funcionario;


class FuncionariologinController extends Controller
{
  public function index()
  {
    return view('login.index');
  }
  public function entrar(Request $req)
  {
    $dados = $req->all();
    if(Funcionario::attempt(['cpf'=>$dados['cpf'],'senha'=>$dados['senha']])){
      return redirect()->route('admin.filiais');
    }

    return redirect()->route('login.index');
  }
  public function sair()
  {
    Funcionario::logout();
    return redirect()->route('site.home');
  }
}
