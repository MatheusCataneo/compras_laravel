<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Listar</title>

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
                    <div class="col-md-12">
                        <ol class="breadcrumb">                  
                            <li class="active">Produtos</li>
                        </ol>
                        <br>
                        <a href="<?php echo e(route('produto.create')); ?>" 
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span> Adicionar</a>
                       
                    </div>           
                </div>

        <div class="row">
                            <div class="col-md-12">   
                                <br />
                                <h4 id="center"><b>Produtos no Carrinho de compras (<?php echo e($total); ?>)</b></h4>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th id="center">Código</th>
                                                <th>Descrição</th>
                                                <th id="center">Quantidade</th>
                                                <th>Preço</th>             
                                                <th id="center">Ações</th>   
                                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $produto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td id="center"><?php echo e($produto->id); ?></td>
                                                <td title="Descrição"><?php echo e($produto->descricao); ?></td>
                                                <td title="Quantidade" id="center"><?php echo e($produto->quantidade); ?></td>
                                                <td title="Preço">R$ <?php echo e(number_format($produto->preco * $produto->quantidade, 2,',','.')); ?></td> 
                                                <td id="center">
                                                
                                                    <a href="<?php echo e(route('produto.edit', $produto->id)); ?>" 
                                                    data-toggle="tooltip" 
                                                    data-placement="top"
                                                    title="Alterar">
                                                    <i class="fa fa-pencil"></i></a>
                                                    &nbsp;<form style="display: inline-block;" method="POST" 
                                                                action="<?php echo e(route('produto.destroy', $produto->id)); ?>"                                                        
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Excluir" 
                                                                onsubmit="return confirm('Confirma exclusão?')">
                                                        <?php echo e(method_field('DELETE')); ?><?php echo e(csrf_field()); ?>                                                
                                                        <button type="submit" style="background-color: #fff">
                                                            <a><i class="fa fa-trash-o"></i></a>                                                    
                                                        </button></form></td>               
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $__env->stopSection(); ?>
         
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>