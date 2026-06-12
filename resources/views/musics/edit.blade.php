<form method="post" action="{{ route('musics.update', $music) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $music->name }}">
    <input type="text" name="artist" value="{{ $music->artist }}">
    <input type="text" name="album" value="{{ $music->album }}">
    <input type="text" name="duration" value="{{ $music->duration }}">
    <button type="submit">Atualizar</button>
</form>