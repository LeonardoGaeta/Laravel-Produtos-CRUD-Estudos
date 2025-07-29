@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Adicionar novo produto
            </div>
            <div class="card-body">
                <form action="{{ route('produto.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('produto.form')
                    <button class="btn btn-primary">Salvar</button>
                    <a href="{{ route('produto.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
