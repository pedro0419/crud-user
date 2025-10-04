@extends('layouts.layout')

@section('content')
    <h1>Usuários</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        
        <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nome }}</td>
                        <td>{{ $user->cpf }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id)}}"><button>Editar</button></a>
                            <form action="{{ route('user.delete', $user->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Excluir" >
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('user.create') }}">Cadastrar</a></button>
@endsection