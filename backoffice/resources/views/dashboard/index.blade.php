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
                    <h1>Dashboard</h1>
                    <div class="row">
                        <div class="col-12 col-lg-6 content">
                            <div class="card mb-4" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Quantidade de Usuarios no sistema</h5>
                                    <hr>
                                    <h5>{{$qtd_usuarios}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 content">
                            <div class="card mb-4" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">faturamento mês de Junho</h5>
                                    <hr>
                                    <h5>R$75.456,43</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 content">
                            <div class="card mb-4" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">faturamento mês de Junho</h5>
                                    <hr>
                                    <h5>R$75.456,43</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Adicione outros elementos que precisam se adaptar aqui -->
            </div>
        </div>
    </div>




</body>

</html>
