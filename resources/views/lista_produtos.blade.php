@extends('layouts.app')
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
    @section('navegacao')
    @endsection
    @section('conteudo')
    <body>
        
        @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message') }}
        </div>
        @endif
        <div id="line-one">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center"> 
                        <h1><b>Produtos</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                        <a href="{{route('produto.create')}}" 
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span> Adicionar</a>           
                </div>
                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>Lista de Produtos ({{$total}})</b></h4>
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
                                    @foreach($produto as $produto)
                                    <tr>
                                        <td id="center">{{$produto->id}}</td>
                                        <td title="Descrição">{{$produto->descricao}}</td>
                                        <td title="Quantidade" id="center">{{$produto->quantidade}}</td>
                                        <td title="Preço">R$ {{number_format($produto->preco * $produto->quantidade, 2,',','.')}}</td> 
                                        <td id="center">
                                            <a href="{{route('produto.edit', $produto->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('produto.destroy', $produto->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button type="submit" style="background-color: #fff">
                                                    <a><i class="fa fa-trash-o"></i></a>                                                    
                                                </button></form></td>               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endsection

            </body>
</html>