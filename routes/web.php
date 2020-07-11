<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);



Route::group(['middleware'=>'auth'],function(){

  Route::get('/admin/filiais',['as'=>'admin.filiais','uses'=>'Admin\FilialController@index']);
  Route::get('/admin/filiais/adicionar',['as'=>'admin.filiais.adicionar','uses'=>'Admin\FilialController@adicionar']);
  Route::post('/admin/filiais/salvar',['as'=>'admin.filiais.salvar','uses'=>'Admin\FilialController@salvar']);
  Route::get('/admin/filiais/editar/{id}',['as'=>'admin.filiais.editar','uses'=>'Admin\FilialController@editar']);
  Route::put('/admin/filiais/atualizar/{id}',['as'=>'admin.filiais.atualizar','uses'=>'Admin\FilialController@atualizar']);
  Route::get('/admin/filiais/deletar/{id}',['as'=>'admin.filiais.deletar','uses'=>'Admin\FilialController@deletar']);

  Route::get('/admin/funcionarios',['as'=>'admin.funcionarios','uses'=>'Admin\FuncionarioController@index']);
  Route::get('/admin/funcionarios/adicionar',['as'=>'admin.funcionarios.adicionar','uses'=>'Admin\FuncionarioController@adicionar']);
  Route::post('/admin/funcionarios/salvar',['as'=>'admin.funcionarios.salvar','uses'=>'Admin\FuncionarioController@salvar']);
  Route::get('/admin/funcionarios/editar/{id}',['as'=>'admin.funcionarios.editar','uses'=>'Admin\FuncionarioController@editar']);
  Route::put('/admin/funcionarios/atualizar/{id}',['as'=>'admin.funcionarios.atualizar','uses'=>'Admin\FuncionarioController@atualizar']);
  Route::get('/admin/funcionarios/deletar/{id}',['as'=>'admin.funcionarios.deletar','uses'=>'Admin\FuncionarioController@deletar']);

  Route::get('/admin/automoveis',['as'=>'admin.automoveis','uses'=>'Admin\AutomovelController@index']);
  Route::get('/admin/automoveis/adicionar',['as'=>'admin.automoveis.adicionar','uses'=>'Admin\AutomovelController@adicionar']);
  Route::post('/admin/automoveis/salvar',['as'=>'admin.automoveis.salvar','uses'=>'Admin\AutomovelController@salvar']);
  Route::get('/admin/automoveis/editar/{id}',['as'=>'admin.automoveis.editar','uses'=>'Admin\AutomovelController@editar']);
  Route::put('/admin/automoveis/atualizar/{id}',['as'=>'admin.automoveis.atualizar','uses'=>'Admin\AutomovelController@atualizar']);
  Route::get('/admin/automoveis/deletar/{id}',['as'=>'admin.automoveis.deletar','uses'=>'Admin\AutomovelController@deletar']);

  Route::get('/admin/usuarios',['as'=>'admin.usuarios','uses'=>'Admin\UsuarioController@index']);
  Route::get('/admin/usuarios/adicionar',['as'=>'admin.usuarios.adicionar','uses'=>'Admin\UsuarioController@adicionar']);
  Route::post('/admin/usuarios/salvar',['as'=>'admin.usuarios.salvar','uses'=>'Admin\UsuarioController@salvar']);
  Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar','uses'=>'Admin\UsuarioController@editar']);
  Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar','uses'=>'Admin\UsuarioController@atualizar']);
  Route::get('/admin/usuarios/deletar/{id}',['as'=>'admin.usuarios.deletar','uses'=>'Admin\UsuarioController@deletar']);
});
