@extends('layouts.layout')

@section('title')
    Cadastrar Categoria
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header fw-bold">
                Adicionar nova categoria
            </div>
            <div class="card-body">
                <form action="{{ route('categoria.store') }}" method="post">
                    @csrf
                    @include('categoria.form')
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection