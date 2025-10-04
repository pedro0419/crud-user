<h1>cadastrar</h1>

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <label>nome:</label>
    <input type="text" name="nome"><br>

    <label>cpf:</label>
    <textarea name="cpf"></textarea><br>

    <button type="submit">enviar</button>
</form>