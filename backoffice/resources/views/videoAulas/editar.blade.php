@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <h1>Editar video aulas</h1>
            <div class="row">
                <div class="col col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="card shadow">

                        <div class="card-body">
                            <form action="{{ route('videoAulas.update', ['videoAula' => $videoAula->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" class="" name="_method" value="PUT">
                                <div>
                                    <iframe width="250" height="180" src="{{$videoAula->link_video}}" title="YouTube video player" frameborder="50" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="border-radius: 16px"></iframe>
                                </div>
                                <div class="mb-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label">Nome do video*</label>
                                    <input type="text" value="{{ $videoAula->nome_video }}" name="nome_video"
                                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Descrição do video</label>
                                    <input type="text" value="{{ $videoAula->descricao_video }}" name="descricao_video"
                                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Link do video*</label>
                                    <input type="text" value="{{ $videoAula->link_video }}" name="link_video"
                                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label>Status do video*</label>
                                    <select value="{{ $videoAula->status }}" class="custom-select" name="status">

                                        <option>{{ $videoAula->status }}</option>
                                        <option value="Ativo">Ativo</option>
                                        <option value="Inativo">Inativo</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Data de envio</label>
                                    <input readonly type="tel" value="{{ $videoAula->data_envio }}" name="data_envio"
                                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-12 d-flex">
                                    <div class="row mr-2">
                                        <div class="col-6">
                                            <button type="submit" id="editar" class="btn btn-sucess"
                                                style="background: green; color: white;" data-toggle="modal"
                                                data-target="#confirmModal">Alterar</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <form id="deleteForm" action="{{ route('videoAulas.destroy', ['videoAula' => $videoAula->id]) }}"
                                method="POST">
                                @csrf
                                <input type="hidden" class="" name="_method" value="DELETE">

                                <div class="col-md-12 mt-3 d-flex">
                                    <div class="row mr-2">
                                        <div class="col-6">
                                            <button type="submit" id="deletar" class="btn btn-sucess"
                                                style="background: red; color: white;" data-toggle="modal"
                                                data-target="#confirmModal">Excluir</button>
                                        </div>
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
                    <p>Você tem certeza que deseja excluir este video? Esta ação não poderá ser reversível</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('deletar').addEventListener('click', function() {
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
