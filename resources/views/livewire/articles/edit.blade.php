<form wire:submit="update">
    <div class="form-floating mb-3">
        <input class="form-control" wire:model.blur="title" type="text">
        <label for="title">Titolo</label>
    </div>
    @error('title')
    {{$message}}
    @enderror
    <div class="form-floating mb-3">
        <input class="form-control" wire:model.blur="subtitle" type="text">
        <label for="subtitle">Sottotitolo</label>
    </div>    
    @error('subtitle')
    {{$message}}
    @enderror
    <div class="mb-3">
        <label for="content" class="form-label">Corpo</label>
        <textarea class="form-control" wire:model.blur="content" id="content" rows="10"></textarea>
    </div>
    @error('content')
    {{$message}}
    @enderror
    <div class="d-grid">
        <button class="btn btn-primary btn-lg"
        type="submit">Aggiorna</button>
    </div>
</form>
