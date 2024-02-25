<h1>Nuova articolo</h1>

<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nome articolo</label>
        <input type="text" class="form-control" id="name" name="name"
            placeholder="Inserisci il nome della categoria">
    </div>
    <button type="submit" class="btn btn-primary">Salva</button>
</form>
