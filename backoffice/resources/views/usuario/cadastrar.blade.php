@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="">Cadastrar usuário</h2>
                <a href="/usuario" class="d-sm-inline-block btn shadow btn-primary" style=" border-radius: 16px;"><i
                        class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
            </div>
            <div class="row">
                <div class="col col-md-12 col-sm-12 col-lg-12 col-xl-12">

                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('usuario.store') }}" method="POST" id="cadastroForm"
                                enctype="multipart/form-data">
                                @csrf

                                <style>
                                    .form-control,
                                    .custom-select {
                                        border-radius: 8px;
                                    }
                                </style>


                                <div class="mb-3 form-group">
                                    <label for="">Foto de perfil</label>
                                    <div>
                                        <img width="200" src="/img/user.jpg" id="imgimagem"
                                            style="cursor: pointer; border-radius: 16px" /><br><br>
                                        <input hidden type="file" name="foto_perfil" id="foto"
                                            class="form-control hidden">
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

                                <div class="mb-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label">Nome*</label>
                                    <input type="text" name="nome" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Digite o nome do usuário...">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sobrenome*</label>
                                    <input type="text" name="sobrenome" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Digite o sobrenome do usuário...">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">E-mail*</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Digite o e-mail do usuário...">
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Tipo do usuário*</label>
                                        <select class="custom-select" name="tipo_usuario">
                                            <option value="admin">Admin</option>
                                            <option value="cliente">Cliente</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">CPF*</label>
                                        <input type="tel" name="cpf" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Digite o CPF do usuário...">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">UF*</label>
                                        <input type="text" name="uf" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Digite o UF do usuário...">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Celular*</label>
                                        <input type="tel" name="celular" class="form-control" id="exampleInputPassword1"
                                            placeholder="Digite o celular do usuário...">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Senha*</label>
                                        <input type="password" name="senha" class="form-control"
                                            id="exampleInputPassword1" placeholder="Digite uma senha para o usuário...">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Idade*</label>
                                        <input type="tel" name="idade" class="form-control"
                                            id="exampleInputPassword1" placeholder="Digite a idade do usuário...">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Sexo</label>
                                        <select class="custom-select" name="sexo"
                                            placeholder="Escolha o sexo do usuário...">
                                            <option value="M">Masculino</option>
                                            <option value="F">Feminino</option>
                                            <option value="O">Outro</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Status</label>
                                        <select class="custom-select" name="status">
                                            <option selected value="ativo">Ativo</option>
                                            <option value="inativo">Inativo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-sucess"
                                            style="background: green; color: white;" data-toggle="modal"
                                            data-target="#confirmModal">Cadastrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Confirmação de Cadastro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja cadastrar um novo usuário?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="confirmCadastrar">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#confirmCadastrar').on('click', function() {
                $('#cadastroForm').submit();
            });
        });
    </script>
@endsection
