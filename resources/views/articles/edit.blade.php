<h1>Modifica articolo</h1>

<form action="{{ route('articles.update', $article->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nome articolo</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $article->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Salva Modifiche</button>
</form>
