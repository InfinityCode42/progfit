@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="">Cadastrar video aula</h2>
                <a href="/video_aulas" class="d-sm-inline-block btn shadow btn-primary" style=" border-radius: 16px;"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
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
                            <form action="{{ route('videoAulas.store') }}" method="POST" id="cadastroForm">
                                @csrf

                                <style>
                                    .form-control,
                                    .custom-select {
                                        border-radius: 8px;
                                    }
                                </style>

                                <div class="mb-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label">Titulo do video*</label>
                                    <input type="text" name="nome_video" class="form-control required" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Digite o titulo do video...">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Descrição do video*</label>
                                    <input type="text" name="descricao_video" class="form-control required" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Digite uma descrição para o video...">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Link do video*</label>
                                    <input type="email" name="link_video" class="form-control required" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Digite o e-mail do usuário...">
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Status do video*</label>
                                        <select class="custom-select required" name="status">
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

    <script>
        $(document).ready(function () {
            $('#confirmCadastrar').on('click', function () {
                $('#cadastroForm').submit();
            });
        });
    </script>
@endsection
