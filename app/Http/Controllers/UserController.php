<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Listar usuários
    public function index()
    {
        $users = User::orderByDesc('id')->get();
        return view('users.index', compact('users'));
    }

    // Mostrar o formulário de criação
    public function create()
    {
        return view('users.create');
    }

    // Armazenar um novo usuário
    public function store(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    // Mostrar detalhes de um usuário
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Mostrar o formulário de edição
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Atualizar um usuário
    public function update(UserRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('user.show', $user)->with('success', 'Usuário editado com sucesso!');
    }

    // Deletar um usuário
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Usuário apagado com sucesso!');
    }
}
