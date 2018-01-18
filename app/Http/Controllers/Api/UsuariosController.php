<?php

namespace laravel_tdd\Http\Controllers\Api;

use Illuminate\Http\Request;
use laravel_tdd\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    public function index()
    {
        return response()->json(null, 200);
    }

    public function show(Usuarios $article)
    {
        return response()->json(null, 201);
    }

    public function store(Request $request)
    {

        return response()->json(null, 201);
    }

    public function update(Request $request, Usuarios $article)
    {

        return response()->json(null, 200);
    }

    public function delete(Usuarios $article)
    {

        return response()->json(null, 204);
    }
}