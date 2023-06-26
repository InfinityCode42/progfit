<!DOCTYPE html>
@include('includes.header')
<html>
@foreach ($usuarios as $usuario)
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
                    <h1>Editar</h1>
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

                    <style>
                        .form-control,
                        .custom-select {
                            border-radius: 8px;
                        }
                    </style>

                    <div class="row">
                        <div class="col-12">
                            <div class="card p-3">
                                <form action="{{ route('usuario.update', ['usuario' => $usuario->id]) }}"
                                    method="POST">
                                    @csrf
                                    <input type="hidden" class="" name="_method" value="PUT">

                                    <div class="mb-3 form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                                        <input type="text" value="{{ $usuario->nome }}" name="nome"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
                                        <input type="text" value="{{ $usuario->sobrenome }}" name="sobrenome"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" value="{{ $usuario->email }}" name="email"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                                                class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">UF</label>
                                            <input type="text" value="{{ $usuario->uf }}" name="uf"
                                                class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
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
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-sucess mb-5"
                                                style="background: green; color: white;">Alterar</button>
                                        </div>
                                    </div>
                                </form>

                                <form id="deleteForm" action="{{ route('usuario.destroy', ['usuario' => $usuario->id]) }}" method="POST">
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
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
@endforeach
</body>
<!-- Modal -->


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
            // Ação a ser executada quando a requisição for bem-sucedida
            $('#deleteModal').modal('hide');
            // Exibir uma nova modal de sucesso aqui, se desejar
            console.log('Usuário deletado com sucesso');
        })
        .catch(error => {
            // Ação a ser executada quando ocorrer um erro na requisição
            console.error('Erro ao enviar a requisição:', error);
        });
    });
</script>
</html>