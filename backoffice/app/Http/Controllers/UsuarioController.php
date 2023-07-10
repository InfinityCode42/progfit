<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
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
        $imageName = null;

        if ($request->hasFile('foto_perfil') && $request->file('foto_perfil')->isValid()) {
            $requestImage = $request->file('foto_perfil');
            $extension = $requestImage->getClientOriginalExtension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . strtolower($extension);
            $requestImage->move(public_path('img/fotos_usuarios'), $imageName);
        }

        $adicionar = $this->usuario->create(
            [
                'foto' => '/img/fotos_usuarios/' . $imageName,
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


    public function edit($usuario_id)
    {
        $usuario = $this->usuario->find($usuario_id);

        return view("usuario/editar", ['usuario' => $usuario]);
    }

    public function update(Request $request, string $id)
    {
        $usuario = $this->usuario->find($id);

        if ($request->hasFile('foto_perfil') && $request->file('foto_perfil')->isValid()) {

            if ($usuario->foto) {
                $fotoAnterior = public_path($usuario->foto);
                if (File::exists($fotoAnterior)) {
                    File::delete($fotoAnterior);
                }
            }

            $requestImage = $request->file('foto_perfil');
            $extension = $requestImage->getClientOriginalExtension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . strtolower($extension);
            $requestImage->move(public_path('img/fotos_usuarios'), $imageName);
            $usuario->foto = '/img/fotos_usuarios/' . $imageName;
        }

        if (!empty($request->input('senha'))) {
            $usuario->senha = password_hash($request->input('senha'), PASSWORD_DEFAULT);
        }


        $usuario->nome              = $request->input('nome') == '' ? $usuario->nome : $request->input('nome');
        $usuario->sobrenome         = $request->input('sobrenome') == '' ? $usuario->sobrenome : $request->input('sobrenome');
        $usuario->email             = $request->input('email') == '' ? $usuario->email : $request->input('email');
        $usuario->cpf               = $request->input('cpf') == '' ? $usuario->cpf : $request->input('cpf');
        $usuario->uf                = $request->input('uf') == '' ? $usuario->uf : $request->input('uf');
        $usuario->celular           = $request->input('celular') == '' ? $usuario->celular : $request->input('celular');
        $usuario->idade             = $request->input('idade') == '' ? $usuario->idade : $request->input('idade');
        $usuario->sexo              = $request->input('sexo') == '' ? $usuario->sexo : $request->input('sexo');
        $usuario->status            = $request->input('status') == '' ? $usuario->status : $request->input('status');
        $usuario->tipo_usuario      = $request->input('tipo_usuario') == '' ? $usuario->tipo_usuario : $request->input('tipo_usuario');

        $update = $usuario->save();

        if ($update) {
            $retorno = redirect()->back()->with('Sucesso', 'Dados alterados com sucesso!!!');
        } else {
            $retorno = redirect()->back()->with('Erro', 'Erro ao realizar a alteração das informações!!!');
        }
        $retorno = $this->edit($usuario->id);

        return $retorno;
    }

    public function destroy($usuario)
    {
        $deletar = $this->usuario->where('id', $usuario)->delete();
        if ($deletar) {
            if ($usuario->foto) {
                $fotoAnterior = public_path($usuario->foto);
                if (File::exists($fotoAnterior)) {
                    File::delete($fotoAnterior);
                }
            }

            return redirect()->back()->with('Sucesso', 'Usuário deletado com sucesso!!!');
        }
        return redirect()->back()->with('Erro', 'Erro ao deletar o usuário!!!');
    }
}
