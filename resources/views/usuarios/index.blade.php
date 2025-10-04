 <h1>Produtos</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>editar</th>
                <th>excluir</th>
            </tr>
        </thead>
        
        <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nome }}</td>
                        <td>{{ $user->cpf }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id)}}"><button>editar</button></a>
                        </td>
                        <td>
                            <form action="{{ route('user.delete', $user->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="excluir" >
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('user.create') }}">cadastrar</a></button>