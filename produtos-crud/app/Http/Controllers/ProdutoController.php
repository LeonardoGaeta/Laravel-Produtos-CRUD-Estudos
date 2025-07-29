<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produto.produto-list', compact('produtos'));
    }

    public function create(){
        $categorias = Categoria::all();
        return view('produto.create', compact('categorias'));
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
        Produto::created($validated);

        return redirect()->route('produto.index')->with('success', 'Produto adicionado com sucesso');
    }
}
