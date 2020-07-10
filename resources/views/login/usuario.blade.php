@extends('layout.site')

@section('titulo','Usuarios')

@section('conteudo')
  <div class="container">
    <h3 class="center">Entrar</h3>
    <div class="row">
      <form class="" action="{{route('site.usuario.entrar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
          <label>CPF</label>
          <input type="text" name="cpf">
        </div>

        <div class="input-field">
          <label>Senha</label>
          <input type="password" name="password">
        </div>


        <button class="btn deep-primary">Entrar</button>
      </form>
    </div>
  </div>
@endsection
