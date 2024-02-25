<h1>Elenco Categorie</h1>

<a href="{{ route('categories.create') }}" class="btn btn-primary">Nuova Categoria</a>

<table class="table">
    <thead>
        <tr>

        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-info">Modifica</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Cancella</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
