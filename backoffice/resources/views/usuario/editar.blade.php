@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h1 class="h2">Editar usuário</h1>
                <a href="/usuario" class="d-sm-inline-block btn shadow btn-primary" style=" border-radius: 16px;"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
            </div>
            <div class="row">
                <div class="col col-md-12 col-sm-12 col-lg-12 col-xl-12">


                    @if (session('Sucesso'))
                        <div class="alert alert-success mt-3 ">
                            {{ session('Sucesso') }}
                        </div>
                    @endif
                    @if (session('Erro'))
                        <div class="alert alert-danger mt-3 ">
                            {{ session('Erro') }}
                        </div>
                    @endif


                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('usuario.update', ['usuario' => $usuario->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="" name="_method" value="PUT">

                                <div class="mb-3 form-group">
                                    <label for="">Foto de perfil</label>
                                    <div>
                                        <img width="200" src="{{$usuario->foto}}" id="imgimagem"
                                            style="cursor: pointer; border-radius: 16px" /><br><br>
                                        <input hidden type="file" name="foto_perfil" id="foto" class="form-control hidden" >
                                    </div>
                                    <script>
                                        $('#imgimagem').click(function() {
                                            $('#foto').trigger('click');
                                        });

                                        $('#foto').change(function() {
                                            var fileUpload = this.files[0];
                                            var img = new Image();
                                            var objectURL = URL.createObjectURL(fileUpload);
                                            $('#imgimagem').attr('src', objectURL);
                                        });
                                    </script>
                                </div>
                                <div class="row">
                                    <div class="mb-6 col-md-6 form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                                        <input type="text" value="{{ $usuario->nome }}" name="nome"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-6 col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
                                        <input type="text" value="{{ $usuario->sobrenome }}" name="sobrenome"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" value="{{ $usuario->email }}" name="email" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Tipo Usuario</label>
                                        <select value="{{ $usuario->tipo_usuario }}" class="custom-select"
                                            name="tipo_usuario">
                                            <option value="admin">Admin</option>
                                            <option value="cliente">Cliente</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">CPF</label>
                                        <input type="tel" value="{{ $usuario->cpf }}" name="cpf"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">UF</label>
                                        <input type="text" value="{{ $usuario->uf }}" name="uf"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Celular</label>
                                        <input type="tel" value="{{ $usuario->celular }}" name="celular"
                                            class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                                        <input type="password" name="senha" class="form-control"
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Idade</label>
                                        <input type="tel" value="{{ $usuario->idade }}" name="idade"
                                            class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Sexo</label>
                                        <select value="{{ $usuario->sexo }}" class="custom-select" name="sexo">
                                            <option value="M">Masculino</option>
                                            <option value="F">Feminino</option>
                                            <option value="O">Outro</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Status</label>
                                        <select value="{{ $usuario->status }}" class="custom-select" name="status">
                                            <option selected value="ativo">Ativo</option>
                                            <option value="inativo">Inativo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-sucess mb-5"
                                            style="background: green; color: white;">Alterar</button>
                                    </div>
                                </div>
                            </form>

                            <form id="deleteForm" action="{{ route('usuario.destroy', ['usuario' => $usuario->id]) }}"
                                method="POST">
                                @csrf
                                <input type="hidden" class="" name="_method" value="DELETE">
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" id="deletarBtn" class="btn btn-primary">Deletar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmação de exclusão</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Você tem certeza que deseja excluir o usuário?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('deletarBtn').addEventListener('click', function() {
            $('#deleteModal').modal('show');
        });

        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            var form = document.getElementById('deleteForm');

            fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    $('#deleteModal').modal('hide');
                    window.location.href = {{ route('dashboard.index') }};
                })
                .catch(error => {
                    console.error('Erro ao enviar a requisição:', error);
                });
        });
    </script>
@endsection
