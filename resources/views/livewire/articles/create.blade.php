<form wire:submit="store">
    <div class="form-floating mb-3">
        <input class="form-control" wire:model="title" type="text">
        <label for="title">Titolo</label>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" wire:model="subtitle" type="text">
        <label for="subtitle">Sottotitolo</label>
    </div>    
    <div class="mb-3">
        <label for="content" class="form-label">Corpo</label>
        <textarea class="form-control" wire:model="content" id="content" rows="10"></textarea>
      </div>
    <div class="d-grid">
        <button class="btn btn-primary btn-lg"
            type="submit">Salva</button>
    </div>
</form>
