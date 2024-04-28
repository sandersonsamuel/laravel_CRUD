<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProdutoStoreRequest;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function create()
    {
        return view('produto.create');
    }

    public function store(ProdutoStoreRequest $request)
    {
        Produto::Create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);

        return redirect()->route('produto_create');

    }

    public function show()
    {
        $produtos = Produto::all();
        return view('produto.list', compact('produtos'));

    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produto.edit', compact('produto'));
    }

    public function update(Request $request)
    {
        $produto = Produto::find($request->id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->update();

        echo "<script>alert('Produto atualizado com sucesso!')</script>";

        $produtos = Produto::all();

        return redirect()->route('produto_show', ['produtos' => $produtos]);

    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        echo "<script>alert('Produto excluido com sucesso!')</script>";

        $produtos = Produto::all();

        return redirect()->route('produto_show', ['produtos' => $produtos]);
    }

}
