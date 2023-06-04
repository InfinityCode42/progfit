@extends("../layouts/layout")

@section('content')

@foreach ($usuario as $usuario)

<div class="col-6">
    <div class="card mt-5 p-3">
        <h2>Olá {{$usuario->nome}}</h2>
        <form action="{{route('usuario.destroy', ['usuario' => $usuario->id])}}" method="POST">
            @csrf

            <input type="hidden"class="" name="_method" value="DELETE">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" name="nome" value="{{$usuario->nome}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
                <input type="text" name="sobrenome" value="{{$usuario->sobrenome}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" value="{{$usuario->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" name="senha" value="{{$usuario->senha}}" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Deletar</button>
            </form>

    </div>
</div>


@endforeach

@endsection
