<main>
    <section class="form-newComic">
        <div class="mycontainer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <form action="{{ route('comics.update', ['comic' => $singleComic->id]) }}" method="POST" class="card p-4">
                            @csrf
                            @method('PUT')
                            <div class="row mb-5">
                                <div class="col">
                                    <div class="mycard text-center">
                                        <h5>Compila il Form per inserire modificare il Comic</h5>
                                        <h1>{{ var_dump(old('title')) }}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mycard">
                                        <div class="mb-3">
                                            <label class="form-label">Titolo</label>
                                            <input type="text" class="form-control" name="title" placeholder="inserici il titolo" value="{{ old('title') ? '' : $singleComic->title }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Immagine</label>
                                            <input class="form-control" type="text" name="thumb" placeholder="inserici l'url dell'immagine">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Descrizione</label>
                                            <textarea class="form-control" rows="3" name="description" placeholder="inserici la discrizione"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Prezzo</label>
                                            <input type="text" class="form-control" name="price" placeholder="inserici il prezzo (MAX 4 digit and 2 decimals)">
                                        </div>
                                        <div>
                                            <label class="form-label">Seleziona il tipo</label>
                                            <div class="d-flex">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="type" value="comic book">
                                                    <label class="form-check-label">comic book</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="type" value="graphic novel">
                                                    <label class="form-check-label">graphic novel</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mycard">
                                        <div class="mb-3">
                                            <label class="form-label">Serie</label>
                                            <input type="text" class="form-control" name="series" placeholder="inserici la serie">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Inserisci la data di inizio vendita</label>
                                            <input type="date" class="form-control" name="sale_date" placeholder="inserici la data (Anno-Mese-Giorno)">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Inserisci gli artisti</label>
                                            <textarea class="form-control" rows="3" name="artists" placeholder="inserici gli artisti"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Inserisci gli scrittori</label>
                                            <textarea class="form-control" rows="3" name="writers" placeholder="inserisci gli scrittori"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <div class="mycard text-center">
                                        <button type="reset" class="btn btn-secondary mb-3">Reset</button>
                                        <button type="submit" class="btn btn-primary mb-3">Conferma la modifica</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>