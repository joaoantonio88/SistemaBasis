<?php

use Illuminate\Database\Seeder;
use App\User;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados = [
        'name'=>"Administrador",
        'email'=>'cruz.jasc@gmail',
        'cpf'=>"32783175722",
        'password'=>bcrypt("123456"),
      ];

      if(User::where('cpf','=',$dados['cpf'])->count()){
        $usuario = User::where('cpf','=',$dados['cpf'])->first();
        $usuario->update($dados);
        echo "Usuario Alterado!";
      }else{
        User::create($dados);
        echo "Usuario Criado!";
      }
    }
}
