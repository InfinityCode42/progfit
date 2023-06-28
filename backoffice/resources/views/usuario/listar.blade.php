<!DOCTYPE html>
<html lang="en">
@include('includes.header')

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 mb-5">
                @include('includes.navbar_dashboard')
            </div>
            <div class="col-lg-9">
                <div class="row mb-5">
                    <div class="col-12">
                        @include('includes.sidebar')
                    </div>
                </div>
                <h1>Usuarios</h1>
                <div class="dados d-flex col-12">
                    <style>
                        table {
                            border-collapse: collapse;
                        }

                        th, td {
                            padding: 8px;
                            text-align: left;
                            border-bottom: 1px solid #ddd;
                        }

                        th {
                            background-color: #f2f2f2;
                        }

                        .btn {
                            display: inline-block;
                            padding: 6px 12px;
                            margin-bottom: 0;
                            font-size: 14px;
                            font-weight: 400;
                            line-height: 1.42857143;
                            text-align: center;
                            white-space: nowrap;
                            vertical-align: middle;
                            cursor: pointer;
                            border: 1px solid transparent;
                            border-radius: 4px;
                        }

                        .btn-ver {
                            background-color: #5cb85c;
                            border-color: #4cae4c;
                            color: #fff;
                        }

                        .btn-remover {
                            background-color: #d9534f;
                            border-color: #d43f3a;
                            color: #fff;
                        }
                    </style>

                    <div class="row">

                        <div class="col-12">
                            <div class="tabela">
                                <table class="bg-white">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Foto</th>
                                            <th>Nome</th>
                                            <th>Sobrenome</th>
                                            <th>Tipo do Usuario</th>
                                            <th>Status</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    @foreach ($usuarios as $usuario)
                                    <tbody>

                                            <tr>
                                                <td>{{$usuario->id}}</td>
                                                <td><img style="width: 40px;border-radius: 32px;" src="{{$usuario->foto}}" alt=""></td>
                                                <td>{{$usuario->nome}}</td>
                                                <td>{{$usuario->sobrenome}}</td>
                                                <td>{{$usuario->tipo_usuario}}</td>
                                                <td>{{$usuario->status}}</td>
                                                <td>
                                                    <a href="{{ route('usuario.edit', $usuario->id) }}" class="text-center" style="text-decoration: none; color: white; background: black; padding: 5px; border-radius: 16px; width: 60px;">
                                                        Ver
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        {{-- @foreach ($usuarios as $usuario)
                        <div class="col-6 col-lg-6 mt-2">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <img src="{{ $usuario->foto }}" alt="Avatar">
                                </div>
                                <div class="user-details">
                                    <h3 class="text-dark">{{ $usuario->nome }} {{$usuario->sobrenome}}</h3>
                                    <p>{{ $usuario->email }}</p>
                                    <span>{{ $usuario->cargo }}</span>
                                </div>

                                <a href="{{ route('usuario.edit', $usuario->id) }}" class="ml-3 mr-3 text-center" style="text-decoration: none; color: white; background: black; padding: 5px; border-radius: 16px; width: 60px;">
                                    Ver
                                </a>
                            </div>
                        </div>
                    @endforeach --}}
                    </div>



                </div>
            </div>
        </div>
    </div>




</body>

</html>
