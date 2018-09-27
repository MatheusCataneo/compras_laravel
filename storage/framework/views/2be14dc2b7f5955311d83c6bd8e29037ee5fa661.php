<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Cadastrar</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="signin.css" rel="stylesheet">
    
  </head>
  <?php $__env->startSection('navegacao'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('conteudo'); ?>
<body class="text-center">
    <div id="line-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="center">              
                     <h1><b>Incluir produto</b></h1>
                     <br>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">                  
                            <li><a href="<?php echo e(route('produto.index')); ?>" class="btn btn-default btn-sm pull-right">Voltar</a>
                            </li>                  
                        </ol>              
                    </div>          
                </div>

                <div class="row">  
                    <br>
                    <h4 id="center"><b>Cadastrar Produto</b></h4>
                    <br> 
                    <form method="post" 
                          action="<?php echo e(route('produto.store')); ?>" 
                          enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

            
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" name="descricao" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="quantidade">Quantidade</label>
                                <input type="number" name="quantidade" 
                                       class="form-control" 
                                       required>
                            </div>    
                        </div>                 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="preco"> Preço </label>
                                <input type="text" name="preco"                               
                                       class="form-control">
                            </div>
                        </div>                       
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Cadastrar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('rodape'); ?>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p> 
      <?php $__env->stopSection(); ?>
        
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>