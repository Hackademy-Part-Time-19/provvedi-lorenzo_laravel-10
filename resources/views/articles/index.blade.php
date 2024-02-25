<h1>Elenco articoli</h1>

<a href="{{ route('articles.create') }}" class="btn btn-primary">Nuova Categoria</a>

<table class="table">
    <thead>
        <tr>

        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->name }}</td>
                <td>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-info">Modifica</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Cancella</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
