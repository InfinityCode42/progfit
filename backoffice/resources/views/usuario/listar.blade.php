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
                <h1>Usuarios</h1>
                <div class="dados d-flex">
                    <style>
                        .user-card {
                            display: flex;
                            align-items: center;
                            padding: 10px;
                            border: 1px solid #ddd;
                            border-radius: 5px;
                            transition: background-color 0.3s ease;
                            background: #FFFFFF;
                            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
                        }

                        .user-card:hover {
                            background-color: #0000;
                            color: #FFFF;
                        }

                        .user-avatar {
                            width: 50px;
                            height: 50px;
                            overflow: hidden;
                            border-radius: 50%;
                            margin-right: 10px;
                        }

                        .user-avatar img {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                        }

                        .user-details h3 {
                            margin: 0;
                            font-size: 16px;
                            font-weight: bold;
                        }

                        .user-details p {
                            margin: 5px 0;
                            font-size: 14px;
                            color: #888;
                        }

                        .user-details span {
                            font-size: 12px;
                            color: #999;
                        }
                    </style>
                    <div class="row">
                        @foreach ($usuarios as $usuario)
                        <div class="col-6 col-lg-6 mt-2">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <img src="{{ $usuario->foto }}" alt="Avatar">
                                </div>
                                <div class="user-details">
                                    <h3 class="text-dark">{{ $usuario->nome }} {{$usuario->sobrenome}}</h3>
                                    <p>{{ $usuario->email }}</p>
                                    <span>{{ $usuario->cargo }}</span>
                                </div>

                                <a href="{{ route('usuario.edit', $usuario->id) }}" class="ml-3 mr-3 text-center" style="text-decoration: none; color: white; background: black; padding: 5px; border-radius: 16px; width: 60px;">
                                    Ver
                                </a>
                            </div>
                        </div>
                    @endforeach
                    </div>



                </div>
            </div>
        </div>
    </div>




</body>

</html>
