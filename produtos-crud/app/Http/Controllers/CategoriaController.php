<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()  {
        return view('categoria.categoria-list');
    }

    public function create() {
        $categorias = Categoria::all();

        return view('categoria.create', compact('categorias'));
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
