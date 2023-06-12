<!DOCTYPE html>
<html lang="pt-br">
@include('includes.header')

<body style="background: url(img/fundo_site.svg);background-size: cover; background-repeat: no-repeat;">
@include('includes.navbar_restrito')

<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1920&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=c0d43804e2c7c93143fe8ff65398c8e9);">




    <div class="container-fluid mt-5">
        <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
            <div class="col-12 col-md-4 col-lg-3   h-50 ">
                @error('error')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                <div class="card shadow">
                    <div class="card-body mx-auto">
                        <form action="{{route('login.store')}}" method="POST">
                            @csrf

                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                <span class="d-flex text-danger">{{ $message }}</span>
                            </div>
                            @enderror

                            @error('senha')
                            <div class="alert alert-danger" role="alert">
                                <span class="d-flex text-danger">{{ $message }}</span>
                            </div>
                            @enderror

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                </div>
                                <input name="email" class="form-control" placeholder="Digite seu e-mail" type="email">

                            </div>

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input name="senha" class="form-control" placeholder="Digite sua senha" type="password">
                            </div>

                            <div class="form-group ">
                                <button type="submit" class="btn background_cards btn-block" style="color: #DED8BD; border-radius: 16px;"> Login </button>
                            </div>

                            <p class="text-center">Deseja voltar para o site?
                                <a href="/" class="text-dark">Clique aqui</a>
                            </p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
</html>
