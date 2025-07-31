<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()  {
        $categorias = Categoria::all();
        return view('categorias.categoria-list', compact("categorias"));
    }

    public function create() {
        $categorias = Categoria::all();
        return view('categorias.create', compact('categorias'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nome' => 'required|string',
            'status' => 'required',
        ]);

        Categoria::create($validated);

        return redirect()->route('categoria.index')->with('success','Categoria adicionada com sucesso');
    }

}
