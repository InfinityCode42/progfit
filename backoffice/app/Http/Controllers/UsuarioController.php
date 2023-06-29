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

    public function index()
    {
        $usuarios = $this->usuario->all();

        return view("usuario/listar", ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('usuario/cadastrar');
    }

    public function store(Request $request)
    {
        $adicionar = $this->usuario->create(
            [

                'nome' => $request->input('nome'),
                'sobrenome' => $request->input('sobrenome'),
                'email' => $request->input('email'),
                'cpf' => $request->input('cpf'),
                'uf' => $request->input('uf'),
                'celular' => $request->input('celular'),
                'senha' => password_hash($request->input('senha'), PASSWORD_DEFAULT),
                'idade' => $request->input('idade'),
                'sexo' => $request->input('sexo'),
                'status' => $request->input('status'),
                'tipo_usuario' => $request->input('tipo_usuario'),

            ]
        );
        if ($adicionar) {
            return redirect()->back()->with('Sucesso', 'Usuario cadastrado com sucesso');
        }
        return redirect()->back()->with('Erro', 'Erro ao cadastrar um usuario');
    }


    public function edit(Usuario $usuario)
    {
        $usuarios = $this->usuario->find($usuario);

        return view("usuario/editar", ['usuarios' => $usuarios]);
    }

    public function update(Request $request, string $id)
    {
        $dadosAtualizados = $request->except("_token", "_method");

        if (!empty($request->senha)) {
            $dadosAtualizados['senha'] = password_hash($request->senha, PASSWORD_DEFAULT);
        }

        $update = $this->usuario->where('id', $id)->update($dadosAtualizados);

        if ($update) {
            return redirect()->back()->with('Sucesso', 'Dados alterados com sucesso!');
        } else {
            return redirect()->back()->with('Erro', 'Erro ao realizar a alteração das informações!');
        }
    }


    public function destroy(Usuario $usuario)
    {
        $deletar = $this->usuario->where('id', $usuario->id)->delete();
        if ($deletar) {
            return redirect()->route("usuario.index");
        }
        return redirect()->back()->with('Erro', 'erro ao deletar o usuário');
    }
}
