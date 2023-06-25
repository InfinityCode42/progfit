<!DOCTYPE html>
<html lang="pt-br">
@include('includes.header')

<body>

    <div class="container-fluid mb-5">
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
                <div class="dados">
                    <h1>Cadastrar Usuario</h1>
                    <div class="row">
                        <div class="col-10">
                            <div class="card p-3">
                                <form action="{{ route('usuario.store') }}" method="POST" id="cadastroForm">
                                    @csrf
                                    @if (!session()->has('Sucesso'))
                                        {{ session()->get('Erro') }}
                                    @else
                                        {{ session()->get('Sucesso') }}
                                    @endif
                                    <style>
                                        .form-control,
                                        .custom-select {
                                            border-radius: 8px;
                                        }
                                    </style>

                                    <div class="mb-3 form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                                        <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
                                        <input type="text" name="sobrenome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label>Tipo Usuario</label>
                                            <select class="custom-select" name="tipo_usuario">
                                                <option value="admin">Admin</option>
                                                <option value="cliente">Cliente</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">CPF</label>
                                            <input type="tel" name="cpf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">UF</label>
                                            <input type="text" name="uf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Celular</label>
                                            <input type="tel" name="celular" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                                            <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Idade</label>
                                            <input type="tel" name="idade" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label>Sexo</label>
                                            <select class="custom-select" name="sexo">
                                                <option value="M">Masculino</option>
                                                <option value="F">Feminino</option>
                                                <option value="O">Outro</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-sucess" style="background: green; color: white;" data-toggle="modal" data-target="#confirmModal">Cadastrar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
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


</body>
<script>
    $(document).ready(function () {
        $('#confirmCadastrar').on('click', function () {
            $('#cadastroForm').submit();
        });
    });
</script>
</html>
