<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller{
    public function index(){
        $produto = Produto::all();
        //variavel para calcular total de itens
        $total = Produto::all()->count();
        //retornar view com produtos listados
        return view('lista_produtos', compact('produto', 'total'));

    }
    //retornar view de criação
    public function create(){
        return view('incluir_produto');
    }
    //função que pega valores da view para para controller
    public function store(Request $request) {
        $produto = new Produto;
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->preco = $request->preco;
        $produto->save();
        return redirect()->route('produto.index')->with('message', 'Sucesso!');
    }

    public function show($id) {
        //
    }
    //função de ediçao
    public function edit($id) {
        $produto = Produto::findOrFail($id);
        return view('editar_produto', compact('produto'));
    }
    //função de atualização da edição
    public function update(Request $request, $id) {
        $produto = Produto::findOrFail($id); 
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->preco = $request->preco;
        $produto->save();
        return redirect()->route('produto.index')->with('message', 'Sucesso!');
    }
    //função para deletar produto requisitando id e retirando do banco
    public function destroy($id) {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('produto.index')->with('message', 'Sucesso!');
    }

}


