;
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Editar</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="signin.css" rel="stylesheet">
    
  </head>
    <?php $__env->startSection('navegacao'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('conteudo'); ?>
    <body class="text-center">
    <div class="row">  
        <br>
        <h4 id="center"><b>Alterar</b></h4>
        <br> 
        <form method="post" 
            action="<?php echo e(route('produto.update', $produto->id)); ?>" 
            enctype="multipart/form-data">
            <?php echo method_field('put'); ?>

            <?php echo e(csrf_field()); ?>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" 
                    class="form-control" 
                    value="<?php echo e($produto->descricao or old('descricao')); ?>"
                    required>
                 </div>
            </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="quantidade">Quantidade</label>
                            <input type="number" name="quantidade" 
                            class="form-control" 
                            value="<?php echo e($produto->quantidade or old('quantidade')); ?>"
                            required>
                        </div>    
                    </div>                 
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="preco">Preço</label>
                        <input type="text" name="preco"                               
                        class="form-control"
                        value="<?php echo e($produto->preco or old('preco')); ?>"
                        required>
                        </div>
                    </div>                       
                        <div class="col-md-12">                   
                        <button type="reset" class="btn btn-default">
                        Limpar
                        </button>
                        <button type="submit" 
                        class="btn btn-warning" id="black">
                        Alterar
                        </button>
                    </div>               
        </form>  
    </div>

  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('rodape'); ?>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p> 
      <?php $__env->stopSection(); ?>
  </body>
 </html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>