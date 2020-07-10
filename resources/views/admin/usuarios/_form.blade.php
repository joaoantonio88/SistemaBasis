<div class="input-field">
  <label>Nome</label>
  <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
</div>

<div class="input-field">
  <label>CPF</label>
  <input type="text" name="cpf" value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
</div>

<div class="input-field">
  <label>Senha</label>
  <input type="text" name="password" value="{{isset($registro->password) ? $registro->password : ''}}">
</div>
