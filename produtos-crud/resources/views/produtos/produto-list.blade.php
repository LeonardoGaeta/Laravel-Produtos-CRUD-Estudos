@extends('layouts.layout')
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

            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show p-2"  role="alert">
                    {{ Session::get('success')}}
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if(Session::has('error'))
                <span>{{ Session::get('error') }}</span>
            @endif

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome Produto</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Status</th>
                            <th scope="col">Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($produtos) > 0)
                            @foreach($produtos as $produto)
                                <tr>
                                    <th scope="row">{{ $produto->id }}</th>
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ $produto->categoria->nome }}</td>
                                    <td>{{ $produto->quantidade }}</td>
                                    <td>{{ $produto->preco }}</td>
                                    <td>{{ $produto->status }}</td>
                                    <td>{{ $produto->descricao }}</td>
                                    <td><a href="{{ route("produto.edit", $produto->id) }}">Edição</a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">Nenhum produto encontrado!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
