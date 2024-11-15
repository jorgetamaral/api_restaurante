<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:8',
        ]);

        $usuario = User::create($validated);
        return response()->json($usuario, 201);
    }

    public function show(User $usuario)
    {
        return $usuario;
    }

    public function update(Request $request, User $usuario)
    {
        $usuario->update($request->all());
        return response()->json($usuario, 200);
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return response()->json(null, 204);
    }
}

