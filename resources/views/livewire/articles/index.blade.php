<main>

    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

        <div class="container mt-5">
            <div
                class="align-middle gap-2 d-flex justify-content-between">
                <h3>Elenco Articoli inseriti</h3>
                <form class="d-flex" role="search" action="#"
                    method="POST">
                    <input class="form-control me-2" name="search"
                        type="search" placeholder="Cerca Articolo"
                        aria-label="Search">
                </form>
                <a href="{{route('articles.create')}}" class="btn btn btn-success me-md-2">
                    Crea Nuovo Articolo
                </a>
            </div>
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Titolo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($articles as $article)    
                    <tr>
                        <th scope="row">#{{$article->id}}</th>
                        <td>
                            <img class="card-img-top" style="width:3rem"
                                src="https://images.freeimages.com/images/large-previews/83c/barn-silo-detail-5-1210478.jpg"
                                alt="..." />
                        </td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->subtitle}}</td>
                        <td>

                            <div
                                class="d-grid gap-2 d-md-flex justify-content-md-end">

                                <a href="#"
                                    class="btn btn-primary me-md-2">
                                    Visualizza
                                </a>
                                <a href="#"
                                    class="btn btn-warning me-md-2">
                                    Modifica
                                </a>
                                <button type="button"
                                    class="btn btn-danger me-md-2">Elimina</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</main>