<!DOCTYPE html>
<html>
    @include('includes.header')
    <body>
        @include('includes.navbar_dashboard')
    @foreach ($usuarios as $usuario)
        <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1920&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=c0d43804e2c7c93143fe8ff65398c8e9);">
            <div class="container-fluid mt-5">
                <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
                    <div class="col-12 col-md-4 col-lg-3   h-50 ">

                        @if(session('Sucesso'))
                            <div class="alert alert-success mt-3 ">
                                {{ session('Sucesso') }}
                            </div>
                        @endif
                        @if(session('Erro'))
                            <div class="alert alert-danger mt-3 ">
                                {{ session('Erro') }}
                            </div>
                        @endif

                        <div class="card shadow">
                            <div class="card-body mx-auto">
                                <h3 class="ont-weight-bold text-dark mb-3">Olá {{$usuario->nome}}</h3>
                                {{-- <div class="col-md-12 text-center bg-dark">
                                    <img width="150" height="150" src="{{$usuario->foto}}" id="imgavatar"
                                        class="mb-3 rounded-circle img-avatar" />
                                    <input type="file" name="foto" id="avatar"
                                        class="form-control d-none" accept=".jpg, .png, .jpeg">
                                    <script>
                                        $('#imgavatar').click(function () {
                                            $('#avatar').trigger('click');
                                        });
                                        $('#avatar').change(function () {
                                            var file = this.files[0];
                                            var img = new Image();
                                            var objectURL = URL.createObjectURL(file);
                                            $('#imgavatar').attr('src', objectURL);
                                        });
                                    </script>
                                </div> --}}
                                <form action="{{route('usuario.update', ['usuario' => $usuario->id])}}" method="POST">
                                    @csrf

                                    <input type="hidden"class="" name="_method" value="PUT">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Nome</span>
                                        </div>
                                        <input type="text" value="{{$usuario->nome}}" name="nome" class="form-control" placeholder="Digite seu nome..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Sobrenome</span>
                                        </div>
                                        <input type="text" value="{{$usuario->sobrenome}}" name="sobrenome" class="form-control" placeholder="Digite seu sobrenome..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">E-mail</span>
                                        </div>
                                        <input name="email" value="{{$usuario->email}}" class="form-control" placeholder="Digite seu e-mail" type="email">
                                    </div>

                                    <div class="form-group ">
                                        <button type="submit" class="btn background_cards btn-block" style="color: #DED8BD; border-radius: 16px;"> Alterar Dados </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    </body>
</html>
