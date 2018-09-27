;
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>upload imagens</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="signin.css" rel="stylesheet">
    
  </head>
  <?php $__env->startSection('navegacao'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('conteudo'); ?>
    <body class="text-center">
<form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
  </div>
  <form>
  <div class="form-group">
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('rodape'); ?>
      <button class="btn btn-lg btn-primary btn-block" style ="background-color:#5F9EA0" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> 
      <?php $__env->stopSection(); ?>
    </form>
  </body>
  
  
 
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>