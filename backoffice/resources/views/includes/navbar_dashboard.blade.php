<nav class="navbar navbar-expand-lg navbar-light shadow bg-light">
    @foreach ($usuarios as $usuario)
        <a class="navbar-brand" href="#">Olá {{$usuario->nome}}</a>
    @endforeach
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        Perfil
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('usuario.edit', $usuario->id)}}">Editar Perfil</a>
                        <a class="dropdown-item" href="{{route('usuario.show', $usuario->id)}}">Deletar perfil</a>
                    </div>
                </div>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.index')}}">Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('usuario.index')}}">Usuários do sistema</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('login.destroy')}}">Sair</a>
            </li>
        </ul>
    </div>
</nav>

