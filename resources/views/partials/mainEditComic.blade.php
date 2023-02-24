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
                                        <h3>Compila il Form per inserire modificare il Comic</h3>
                                        @if ($errors->any())
                                            <div>
                                                @foreach ( $errors->all() as $error )
                                                    <div class="text-danger">{{ $error }}</div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mycard">
                                        <div class="mb-3">
                                            <label class="form-label">Titolo</label>
                                            <input type="text" class="form-control" name="title" placeholder="inserici il titolo" value="{{ old('title', $singleComic) }}">
                                            @error('title')
                                                <div class="text-danger">{{ $message}}</div>
                                            @enderror   
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Immagine</label>
                                            <input class="form-control" type="text" name="thumb" placeholder="inserisci l'url dell'immagine" value="{{ old('thumb', $singleComic) }}">
                                            @error('thumb')
                                                <div class="text-danger">{{ $message}}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Descrizione</label>
                                            <textarea class="form-control" rows="3" name="description" placeholder="inserici la discrizione">{{ old('description', $singleComic) }}</textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message}}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Prezzo</label>
                                            <input type="text" class="form-control" name="price" placeholder="inserici il prezzo (MAX 4 digit and 2 decimals)" value="{{ old('price', $singleComic) }}">
                                            @error('price')
                                                @foreach ($errors->get('price') as $message)  
                                                    <div class="text-danger">{{ $message }}</div>
                                                @endforeach
                                            @enderror
                                        </div>
                                        <div>
                                            <label class="form-label">Seleziona il tipo</label>
                                            <div class="d-flex">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="type" value="comic book" @checked(old('type', $singleComic) === 'comic book')>
                                                    <label class="form-check-label">comic book</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="type" value="graphic novel" @checked(old('type', $singleComic) === 'graphic novel')>
                                                    <label class="form-check-label">graphic novel</label>
                                                </div>
                                            </div>
                                            @error('type')
                                                <div class="text-danger">{{ $message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mycard">
                                        <div class="mb-3">
                                            <label class="form-label">Serie</label>
                                            <input type="text" class="form-control" name="series" placeholder="inserici la serie" value="{{ old('series', $singleComic) }}">
                                            @error('series')
                                                <div class="text-danger">{{ $message}}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Inserisci la data di inizio vendita</label>
                                            <input type="date" class="form-control" name="sale_date" placeholder="inserici la data (Anno-Mese-Giorno)" value="{{ old('sale_date', $singleComic) }}">
                                            @error('sale_date')
                                                <div class="text-danger">{{ $message}}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Inserisci gli artisti</label>
                                            <textarea class="form-control" rows="3" name="artists" placeholder="inserici gli artisti">{{ old('artists', $singleComic) }}</textarea>
                                            @error('artists')
                                                <div class="text-danger">{{ $message}}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Inserisci gli scrittori</label>
                                            <textarea class="form-control" rows="3" name="writers" placeholder="inserisci gli scrittori">{{ old('writers', $singleComic) }}</textarea>
                                            @error('writers')
                                                <div class="text-danger">{{ $message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <div class="mycard text-center">
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