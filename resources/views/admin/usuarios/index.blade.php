@extends('layout.site')

@section('titulo','Usuarios')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Usuários</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Senha</th>

            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->nome }}</td>
              <td>{{ $registro->cpf }}</td>
              <td>{{ $registro->password }}</td>

              <td>
                <a class="btn deep-primary" href="{{ route('admin.usuarios.editar',$registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.usuarios.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.usuarios.adicionar') }}">Adicionar</a>

    </div>

  </div>




@endsection
