@extends('layouts.app');
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Login.</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="signin.css" rel="stylesheet">
    
  </head>
    @section('navegacao')
    @endsection
    @section('conteudo')
  <body class="text-center">
    <form class="form-signin" role="form"  action="{{url('login')}}">
      <img class="mb-4" src="{{URL::asset('/imagens/logo.png')}}" alt="logo" width="92" height="92">
      <h1 class="h3 mb-3 font-weight-normal">Cadastrar Clientes</h1>
      <label for="inputName" class="sr-only">Nome Cliente</label>
      <input type="name" id="inputName" class="form-control" placeholder="nome do cliente" required autofocus>

      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="email do cliente" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
      <br>
      @endsection
      @section('rodape')
      <button class="btn btn-lg btn-primary btn-block" style ="background-color:#000080" type="submit">Cadastrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> 
      @endsection
    </form>
  </body>
  
  
 
</html>
