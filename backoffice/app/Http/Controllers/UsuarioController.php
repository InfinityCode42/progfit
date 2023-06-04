<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    public readonly Usuario $usuario;
    public function __construct()
    {
        $this->usuario = new Usuario();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = $this->usuario->all();
        return view("usuario/listar", ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario/cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $adicionar = $this->usuario->create(
            [
                'nome' => $request->input('nome'),
                'sobrenome' => $request->input('sobrenome'),
                'email' => $request->input('email'),
                'senha' => password_hash($request->input('senha'), PASSWORD_DEFAULT),
            ]
        );
        if($adicionar){
            return redirect()->back()->with('Sucesso', 'Usuario cadastrado com sucesso');
        }
        return redirect()->back()->with('Erro', 'Erro ao cadastrar um usuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        $usuario = $this->usuario->find($usuario);

        return view ("usuario/ver", ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        $usuario = $this->usuario->find($usuario);

        return view ("usuario/editar", ['usuario' => $usuario]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = $this->usuario->where('id', $id)->update($request->except("_token", "_method"));

        if($update){
            return redirect()->back()->with('Sucesso', 'update realizado com sucesso');
        }
        return redirect()->back()->with('Erro', 'erro ao realizar o update das informações');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $deletar = $this->usuario->where('id', $usuario->id)->delete();
        if($deletar){
            return redirect()->route("usuario.index");
        }
        return redirect()->back()->with('Erro', 'erro ao deletar o usuário');


    }
}
