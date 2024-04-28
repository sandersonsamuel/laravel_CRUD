@extends('layout')

<title>Cadastro de Produtos</title>

@section('content')

    <div class="flex flex-col items-center justify-center">

        <form class="flex flex-col w-1/3" action="{{route('produto_store')}}" method="POST">

            @csrf

            <p class="title">Cadastrar Produto</p>

            <label class="label" for="nome">Nome:</label>
            <input class="input" type="text" id="nome" name="nome" required autocomplete="off">

            <label class="label"  for="preco">Preço:</label>
            <input class="input" type="text" id="preco" name="preco" required autocomplete="off">

            <label class="label"  for="descricao">Descrição:</label>
            <input class="input" type="text" id="descricao" name="descricao" required autocomplete="off">

            <label class="label"  for="quantidade">Quantidade:</label>
            <input class="input" type="text" id="quantidade" name="quantidade" required autocomplete="off">

            <button class="button" id="btnCad" type="submit">Cadastrar</button>

        </form>
    </div>

@endsection

@section('scripts')

    <script>
        document.getElementById('close-error').addEventListener('click', function() {
            document.getElementById('error-message').style.display = 'none';
        });
    </script>

@endsection
