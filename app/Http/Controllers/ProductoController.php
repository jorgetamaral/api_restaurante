<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Trabajador;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return Producto::with('categoria')->get();
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'nombre' => 'required|string',
        //     'email' => 'required|email|unique:usuarios,email',
        //     'password' => 'required|string|min:8',
        // ]);

        // $usuario = User::create($validated);
        // return response()->json($usuario, 201);
    }

    public function show(Trabajador $trabajador)
    {
        return $trabajador;
    }

    public function update(Request $request, Trabajador $trabajador)
    {
        $trabajador->update($request->all());
        return response()->json($trabajador, 200);
    }

    public function destroy(Trabajador $trabajador)
    {
        $trabajador->delete();
        return response()->json(null, 204);
    }
}
