@extends("layouts.layout")

@section("title")
    Categorias
@endsection

@section("content")
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h2>Lista de Categorias</h2>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-8">
                                <form role="search" class="d-flex">
                                    <input type="search" placeholder="Search" aria-label="Search" class="form-control me-2">
                                    <button type="submit" class="btn btn-outline-success">Pesquisar</button>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('categoria.create') }}" class="float-end btn btn-success">Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (Session::has('error'))
                <span>
                    {{ Session::get('error') }}
                </span>
            @endif

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($categorias) > 0)
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->id }}</td>
                                    <td>{{ $categoria->nome }}</td>
                                    <td>{{ $categoria->status }}</td>
                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <td class="text-center" scope="row" colspan="3">
                                    Nenhuma categoria encontrada '-'
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection