<h1>Nuova Categoria</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nome Categoria</label>
        <input type="text" class="form-control" id="name" name="name"
            placeholder="Inserisci il nome della categoria">
    </div>
    <button type="submit" class="btn btn-primary">Salva</button>
</form>
