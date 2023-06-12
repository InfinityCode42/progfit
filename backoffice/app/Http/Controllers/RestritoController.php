<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request AS Requisicao;
use Illuminate\Support\Facades\Auth;

class RestritoController extends Controller
{

    public readonly Usuario $usuario;
    public function __construct()
    {

        $this->usuario = new Usuario();
    }
    public function index()
    {;
        return view("login/login");
    }

    public function store(Requisicao $requisicao)
    {

        $requisicao->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ], [
            'email.required' => 'O e-mail é obrigatorio!!!',
            'email.email' => 'Esse campo precisa conter um email valido!!!',
            'senha.required' => 'A senha é obrigatoria!!!',
            'senha.senha' => 'Senha incorreta!!!',
        ]);

        $usuario = Usuario::where('email', $requisicao->input('email'))->first();

        if (!$usuario) {
            return redirect()->route('login.index')->withErrors(['error' => 'E-mail ou senha incorreto!!!']);
        }

        if (!password_verify($requisicao->input('senha'), $usuario->senha)) {
            return redirect()->route('login.index')->withErrors(['error' => 'E-mail ou senha incorreto!!!']);
        }

        Auth::guard('web')->login($usuario);
;

        return redirect()->route('usuario.index');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login.index');

    }





}
