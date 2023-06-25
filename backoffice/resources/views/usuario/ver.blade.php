<!DOCTYPE html>
<html lang="en">
@include('includes.header')

<body>

    <div class="container-fluid">
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
                    <h1>Ver usuario</h1>
                    <div class="row">
                        @foreach ($usuarios as $usuario)

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center aligh-items-center">
                                    <div class="card mt-5 p-3">
                                        <h2>Olá {{$usuario->nome}}</h2>
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
                                            <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <form action="{{route('usuario.destroy', ['usuario' => $usuario->id])}}" method="POST">
                                            @csrf
                                            <input type="hidden"class="" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-primary">Deletar</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <!-- Adicione outros elementos que precisam se adaptar aqui -->
            </div>
        </div>
    </div>




</body>

</html>
