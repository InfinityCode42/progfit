<?php

namespace App\Http\Apis;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestritoApi extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ], [
            'email.required' => 'O e-mail é obrigatório!!!',
            'email.email' => 'Esse campo precisa conter um email válido!!!',
            'senha.required' => 'A senha é obrigatória!!!',
        ]);

        $usuario = Usuario::where('email', $request->input('email'))->first();


        if (!$usuario) {
            return response()->json(['error' => 'E-mail ou senha incorreto!!!'], 401);
        }

        if (!password_verify($request->input('senha'), $usuario->senha)) {
            return response()->json(['error' => 'E-mail ou senha incorreto!!!'], 401);
        }

        if ($usuario->status == 'ativo') {
            Auth::guard('web')->login($usuario);
            return response()->json(['message' => 'Login bem-sucedido'], 200);
        } else {
            return response()->json(['error' => 'Usuário inativo.'], 401);
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Logout bem-sucedido'], 200);
    }
}
