<div class="mb-3">
    <label for="nome" class="form-label">Nome da categoria *</label>
    <input type="text" name="nome" id="nome" class="form-control">
    @error('nome')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status *</label>
    <select name="status" id="status" class="form-select">
        <option value="ativo">Ativo</option>
        <option value="inativo">Inativo</option>
    </select>
    @error('status')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
