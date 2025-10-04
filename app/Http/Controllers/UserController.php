<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = Usuarios::all();  
        return view('usuarios.index', compact('users'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {

        Usuarios::create([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        ]);

        return redirect()->route('user.index')->with('success', 'Post criado com sucesso!');

    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $user = Usuarios::findOrFail($id);
        return view('usuarios.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
       
        $user = Usuarios::findOrFail($id);
        $user->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
        ]);
        return redirect()->route('user.index') ->with('success', 'Produto atualizado com sucesso!'); 
    }

    public function destroy(string $id)
    {
        $user = Usuarios::findOrFail($id);

        $user->delete();

         return redirect()->route('user.index')->with('success', 'Produto excluido com sucesso!');
    }
}
