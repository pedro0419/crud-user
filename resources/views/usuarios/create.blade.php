@extends('layouts.layout')

@section('content')
    <h1>Cadastrar Usuário</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" /><br />

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" /><br />

        <button type="submit">Enviar</button>
    </form>
@endsection