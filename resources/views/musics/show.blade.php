<div>
    <li>Nome: {{ $music->name  }}</li>
    <li>Artista: {{ $music->artist  }}</li>
    <li>Album: {{ $music->album  }}</li>
    <li>Duração: {{ $music->duration  }}</li>

    <form action="{{ route('musics.destroy', $music)}} " method="post">
        @csrf
        @method('DELETE')
        <input type="text" name="id" hidden value="{{ $music->id }}"/>
        <button type="submit">X</button>
    </form>
    <a href="{{ route('musics.edit', $music)}}">Editar Música</a>
</div>
