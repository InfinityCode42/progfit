
@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h1>Usuários</h1>
        <div class="row">
            <div class="col col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="tabela d-flex align-items-center justify-content-center">
                            <div class="table-responsive"> <!-- Adicionado wrapper para tornar a tabela responsiva -->
                                <table class="table bg-white">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Foto</th>
                                            <th>Nome</th>
                                            <th>Sobrenome</th>
                                            <th>Tipo do Usuário</th>
                                            <th>Status</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{$usuario->id}}</td>
                                            <td><img style="width: 40px;border-radius: 32px;" src="{{$usuario->foto}}" alt=""></td>
                                            <td>{{$usuario->nome}}</td>
                                            <td>{{$usuario->sobrenome}}</td>
                                            <td>{{$usuario->tipo_usuario}}</td>
                                            <td>{{$usuario->status}}</td>
                                            <td>
                                                <a href="{{ route('usuario.edit', $usuario->id) }}" class="text-center" style="text-decoration: none; color: white; background: black; padding: 10px; border-radius: 8px; width: 60px;">
                                                    Ver
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
