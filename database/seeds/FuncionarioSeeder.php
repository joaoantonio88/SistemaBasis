<?php

use Illuminate\Database\Seeder;
use App\Funcionario;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados = [
        'nome'=>"Administrador",
        'filial_id'=>"1",
        'cpf'=>"32783175722",
        'senha'=>bcrypt("123456"),
      ];

      if(Funcionario::where('cpf','=',$dados['cpf'])->count()){
        $usuario = Funcionario::where('cpf','=',$dados['cpf'])->first();
        $usuario->update($dados);
        echo "Usuario Alterado!";
      }else{
        Funcionario::create($dados);
        echo "Usuario Criado!";
      }


    }
}
