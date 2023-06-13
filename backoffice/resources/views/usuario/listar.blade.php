<!DOCTYPE html>
<html>
@include('includes.header')
<body>
    @include('includes.navbar_dashboard')

    <div class="container-fluid">
        <div class="row">
            @foreach ($usuarios as $usuario)
                <ul>
                    <li>{{$usuario->nome}} <a href="{{route('usuario.show', $usuario->id)}}">Ver</a></li>
                </ul>
            @endforeach
        </div>
    </div>

</body>


</html>
