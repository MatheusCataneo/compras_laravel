@extends('layouts.app')
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
    @section('navegacao')
    @endsection
    @section('conteudo')
    <body class="text-center">
    <div id="line-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center">              
                        <h1><b>Produto</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="">Panel</a></li>                  
                            <li><a href="{{route('produto.index')}}">Produtos</a></li>                  
                        </ol>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>Alterar dados do Produto</b></h4>
                    <br> 
                    <form method="post" 
                          action="{{route('produto.update', $produto->id)}}" 
                          enctype="multipart/form-data">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" name="descricao" 
                                       class="form-control" 
                                       value="{{$produto->descricao or old('descricao')}}"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="quantidade">Quantidade</label>
                                <input type="number" name="quantidade" 
                                       class="form-control" 
                                       value="{{$produto->quantidade or old('quantidade')}}"
                                       required>
                            </div>    
                        </div>                 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="preco">Preço</label>
                                <input type="text" name="preco"                               
                                       class="form-control"
                                       value="{{$produto->preco or old('preco')}}"
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
            </div>
        </div>

  </body>
 </html>