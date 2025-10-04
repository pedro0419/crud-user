@extends('layouts.layout')

@section('content')
    <h1>Editar Usuário</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{ old('nome', $user->nome) }}">
        </div>

        <div>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" value="{{ old('cpf', $user->cpf) }}">
        </div>

        <button type="submit">Salvar</button>
    </form>
@endsection