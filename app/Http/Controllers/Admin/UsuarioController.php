<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Funcionario;


class UsuarioController extends Controller
{
    public function index()
    {
      $registros = Funcionario::all();
      return view('admin.usuarios.index',compact('registros'));
    }
    public function adicionar()
    {
      return view('admin.usuarios.adicionar');
    }
    public function salvar(Request $req)
    {
      $dados = $req->all();

      Funcionario::create($dados);

      return redirect()->route('admin.usuarios');

    }

    public function editar($id)
    {
      $registro = User::find($id);
      return view('admin.usuarios.editar',compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      Funcionario::find($id)->update($dados);

      return redirect()->route('admin.usuarios');
    }

    public function deletar($id)
    {
      Funcionario::find($id)->delete();
      return redirect()->route('admin.usuarios');
    }

}
