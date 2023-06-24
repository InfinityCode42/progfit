<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\AdmModulos;


class DashboardController extends Controller
{

    public readonly Usuario $usuario;
    public readonly AdmModulos $admModulos;


    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->admModulos = new AdmModulos();
        
    }

    public function index()
    {
    
        $usuarios = auth()->user();
        $admModulos = $this->admModulos->all();

        $dadosNecessarios = [
            'usuarios' => $usuarios,
            'adm_modulos' => $admModulos 
        ];

        $dados = compact('dadosNecessarios')['dadosNecessarios'];
        return view("dashboard/index", compact('dados'));
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

    public function pre($dado){
        echo '<pre>';
        
        echo var_dump($dado, true);
        
        echo '</pre>';
    }
}

