<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class DashboardController extends Controller
{

    public readonly Usuario $usuario;
    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function index()
    {
        $usuarios = $this->usuario->all();
        return view("dashboard/index", ['usuarios' => $usuarios]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Usuario $usuario)
    {

    }

    public function edit(Usuario $usuario)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(Usuario $usuario)
    {



    }
}
