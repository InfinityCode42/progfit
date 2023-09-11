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

        $usuario = Usuario::where('tipo_usuario', 'cliente')->count();

        return view("dashboard/index", ['qtd_clientes' => $usuario]);
    }

}

