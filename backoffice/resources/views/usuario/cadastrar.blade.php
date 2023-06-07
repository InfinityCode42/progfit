@extends("../layouts/layout")

@section('content')


    <div class="col-6">
        <div class="card mt-5 p-3">
            <h1>Cadastrar Usuarios</h1>
            <form action="{{route("usuario.store")}}" method="POST">
                @csrf
                @if (!session()->has('Sucesso'))

                    {{ session()->get('Erro')}}
                @else
                    {{ session()->get('Sucesso')}}
                @endif

    
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CPF</label>
                    <input type="tel" name="cpf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">UF</label>
                    <input type="text" name="uf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Celular</label>
                    <input type="tel" name="celular" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Idade</label>
                    <input type="tel" name="idade" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label>Sexo</label>
                    <select class="form-select" aria-label="Default select example">
                        
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Endereço</label>
                    <input type="text" name="endereco" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Bairro</label>
                    <input type="tel" name="bairro" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Número</label>
                    <input type="number" name="numero" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </form>
        </div>
    </div>

@endsection
