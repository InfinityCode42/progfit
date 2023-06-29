@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <h1>Editar video aulas</h1>
            <div class="row">
                <div class="col col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="card shadow">
                        @foreach ($videoaulas as $videoaula)
                        <div class="card-body">

                                <form action="{{ route('video_aulas.update', ['video_aulas' => $videoaula->id]) }}" method="POST">
                                    @csrf

                                    <div class="mb-3 form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nome do video</label>
                                        <input type="text" value="{{ $videoaula->nome_video }}" name="nome"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
                                        <input type="text" value="{{ $videoaula->descricao_video }}" name="sobrenome"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" value="{{ $videoaula->link_video }}" name="email"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Status do video</label>
                                        <select value="{{ $videoaula->status }}" class="custom-select" name="status">
                                            <option value="Ativo">Ativo</option>
                                            <option value="Inativo">Inativo</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" value="{{ $videoaula->data_envio }}" name="email"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
