<div class="mb-3">
    <label class="form-label">Nome do Produto *</label>
    <input type="text" name="nome" class="form-control" value="{{ old('nome', $produto->nome ?? '') }}">
    @error('nome')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control">{{ old('descricao', $produto->descricao ?? '') }}</textarea>
    @error('descricao')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Preço *</label>
    <input type="number" name="preco" step="0.01" class="form-control" value="{{ old('preco', $produto->preco ?? '') }}">
    @error('preco')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Quantidade *</label>
    <input type="number" name="quantidade" class="form-control" value="{{ old('quantidade', $produto->quantidade ?? '') }}">
    @error('quantidade')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Categoria</label>
    <select name="categoria_id" class="form-select">
        <option value="">{{ $produto->categoria->nome ?? 'Escolha uma Categoria' }}</option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
        @endforeach
    </select>
    @error('categoria_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Status *</label>
    <select name="status" class="form-select" require>
        <option value="ativo" {{ (old('status', $produto->status ?? '') == 'ativo') ? 'selected' : '' }}>Ativo</option>
        <option value="inativo" {{ (old('status', $produto->status ?? '') == 'inativo') ? 'selected' : '' }}>Inativo
        </option>
    </select>
    @error('status')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Imagem Produto</label>
    <input type="file" name="imagem" class="form-control">
    @error('imagem')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    @if (!empty($produto->imagem))
        <img src="{{ asset('storage/' . $produto->imagem) }}" class="mt-2" width="300">
    @endif
</div>