<h1>Editar Produto</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{ old('nome', $user->nome) }}">
        </div>

        <div>
            <label for="preco">Preço:</label>
            <input type="text" name="cpf" value="{{ old('preco', $user->cpf) }}">
        </div>

        <button type="submit">Salvar</button>
    </form>