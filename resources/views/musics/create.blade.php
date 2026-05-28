<form method="post" action="/musics">
    @csrf
    <input type="text" name="name">
    <input type="text" name="artist">
    <input type="text" name="album">
    <input type="text" name="duration">
    <button type="submit">Criar</button>
</form>