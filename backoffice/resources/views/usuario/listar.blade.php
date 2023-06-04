@extends("../layouts/layout")

@section('content')
<ul>
    <h2>Usuarios</h2>
    @foreach ($usuarios as $usuario)
        <li>{{$usuario->nome}} |
            <a href="{{route('usuario.edit', $usuario->id)}}">Editar</a> |
            <a href="{{route('usuario.show', $usuario->id)}}">Mostrar</a>
        </li>
    @endforeach
</ul>

@endsection
