<main>
    
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
        @endif
        @if (session('delete'))
            <div class="alert alert-danger" role="alert">
                {{session('delete')}}
            </div>
        @endif
        <div class="container mt-5">
            <div
            class="align-middle gap-2 d-flex justify-content-between">
            <h3>Elenco Articoli inseriti</h3>
            <form class="d-flex">
                <input class="form-control me-2"  wire:model.live="search" name="search" type="search" placeholder="Cerca Articolo" aria-label="Search">
            </form>
        <a href="{{route('articles.create')}}" class="btn btn btn-success me-md-2">
            Crea Nuovo Articolo
        </a>
    </div>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Sottotitolo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($articles as $article)    
            <tr>
                <th scope="row">#{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>
                    
                    <div
                    class="d-grid gap-2 d-md-flex justify-content-md-end">
                    
                    <a href="#"
                    class="btn btn-primary me-md-2">
                    Visualizza
                </a>
                <a href="{{route('articles.edit', ['article' => $article])}}"
                    class="btn btn-warning me-md-2">
                    Modifica
                </a>
                <a href="#" wire:click.prevent="destroy({{$article}})"
                    class="btn btn-danger me-md-2">
                    Elimina
                </a>
            </div>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>

</main>