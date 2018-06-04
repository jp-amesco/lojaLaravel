@extends('layout.app')

@section('content')
<div class="container">  
  <form method="POST" action="http://localhost:8000/criaUsuario">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email">
    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha">
    <label for="confirmasenha">Confirma senha</label>
    <input type="password" name="confirmasenha" id="confirmasenha">
    <input class="btn" type="submit" value="enviar">
  </form>
</div>
@endsection
