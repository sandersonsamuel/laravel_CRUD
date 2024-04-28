@extends('layout')

<title>Edição dos Produtos</title>

@section('content')

    <div class="flex flex-col items-center justify-center">
        <form class="flex flex-col w-1/3" action="{{route('produto_update', ['id' => $produto->id])}}" method="POST">

            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $produto->id }}">

            <p class="title">Editar Produto</p>

            <label class="label" for="nome">Nome:</label>
            <input class="input" type="text" id="nome" name="nome" value="{{$produto->nome}}" required>

            <label class="label"  for="preco">Preço:</label>
            <input class="input" type="text" id="preco" name="preco" value="{{$produto->preco}}" required>

            <label class="label"  for="descricao">Descrição:</label>
            <input class="input" type="text" id="descricao" name="descricao" value="{{$produto->descricao}}" required>

            <label class="label"  for="quantidade">Quantidade:</label>
            <input class="input" type="text" id="quantidade" name="quantidade" value="{{$produto->quantidade}}" required>

            <button class="button" type="submit">Atualizar Produto</button>

        </form>
    </div>

@endsection
