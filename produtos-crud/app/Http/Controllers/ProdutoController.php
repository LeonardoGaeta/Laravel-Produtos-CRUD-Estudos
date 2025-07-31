<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produtos.produto-list', compact('produtos'));
    }

    public function create(){
        $categorias = Categoria::all();
        return view('produtos.create', compact('categorias'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            "nome"=> "required|string",
            "descricao"=> "nullable|string",
            "preco"=> "required|numeric",
            "quantidade"=> "required|numeric",
            "status"=> "required",
            "categoria_id"=> "required",
            "imagem"=> "nullable|image|mimes:jpg,png",
        ]);
        if($request->hasFile('imagem')){
            $validated['imagem'] = $request->file('imagem')->store('produtos','public');
        }
        Produto::create($validated);

        return redirect()->route('produto.index')->with('success', 'Produto adicionado com sucesso');
    }

    public function edit(string $id) {
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::all();

        return view('produtos.update', compact('categorias', 'produto'));
    }

    public function update(Request $request, string $id) {
        $validated = $request->validate([
            "nome"=> "required|string",
            "descricao"=> "nullable|string",
            "preco"=> "required|numeric",
            "quantidade"=> "required|numeric",
            "status"=> "required",
            "categoria_id"=> "required",
            "imagem"=> "nullable|image|mimes:jpg,png",
        ]);

        $produto = Produto::findOrFail($id);

        $produto->update([
            "nome"=> $validated['nome'],
            "descricao"=> $validated['descricao'],
            "preco"=> $validated['preco'],
            "quantidade"=> $validated['quantidade'],
            "status"=> $validated['status'],
            "categoria_id"=> $validated['categoria_id'],
            "imagem"=> $validated['imagem'],
        ]);

        return redirect()->route('produto.index')->with('success', 'Deu certo aq');
    }

}