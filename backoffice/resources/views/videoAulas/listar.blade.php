@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <h2>Video Aulas</h2>
            <div class="row">
                <div class="col col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="tabela d-flex align-items-center justify-content-center">
                                <div class="table-responsive">
                                    <table class="table text-center bg-white">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Nome do video</th>
                                                <th>Descrição</th>
                                                <th>Data de envio</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($videoaulas as $videoaula)
                                                <tr>
                                                    <td>{{ $videoaula->id }}</td>
                                                    <td>{{ $videoaula->nome_video }}</td>
                                                    <td>{{ $videoaula->descricao_video }}</td>
                                                    <td>{{ $videoaula->data_envio }}</td>
                                                    <td>{{ $videoaula->status }}</td>
                                                    <td>
                                                        <a href="{{ route('videoAulas.edit', $videoaula->id) }}"
                                                            class="text-center btn-primary"
                                                            style="text-decoration: none; color: white; padding: 10px; border-radius: 8px; width: 60px;">
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
