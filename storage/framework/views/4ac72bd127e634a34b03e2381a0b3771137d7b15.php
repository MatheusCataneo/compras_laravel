;
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
    <?php $__env->startSection('navegacao'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('conteudo'); ?>
  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="<?php echo e(URL::asset('/imagens/logo.png')); ?>" alt="logo" width="92" height="92">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <?php $__env->stopSection(); ?>
      <?php $__env->startSection('rodape'); ?>
      <button class="btn btn-lg btn-primary btn-block" style ="background-color:#000080" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> 
      <?php $__env->stopSection(); ?>
    </form>
  </body>
  
  
 
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>