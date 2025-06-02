@extends('layouts.layout')

@section('title')
    Lista Produtos | Página Inicial
@endsection

@section('content')
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h2>Lista de Produtos</h2>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-8">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('produto.create') }}" class="float-end btn btn-success">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection