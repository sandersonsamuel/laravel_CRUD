@extends('layout')

<title>Produtos Cadastrados</title>

@section('content')

    <div class="flex flex-col items-center">

        <p class="title">Produtos Cadastrados</p>

        <table class="table-auto w-6/12">

            <thead class="border-b-2 border-neutral-300 bg-gray-50">
                <tr>
                    <th class="text-start p-3">Nome</th>
                    <th class="text-start p-3">Descrição</th>
                    <th class="text-start p-3">Preço</th>
                    <th class="text-start p-3">Quantidade</th>
                    <th class="text-start p-3">Ações</th>
                </tr>
            </thead>

            <tbody>

                @foreach($produtos as $produto)

                    <tr class="border-b-2">
                        <td class="text-left text-sm p-3">{{ $produto->nome }}</td>
                        <td class="text-left text-sm p-3">{{ $produto->descricao }}</td>
                        <td class="text-left text-sm p-3">{{ $produto->preco }}</td>
                        <td class="text-left text-sm p-3">{{$produto->quantidade}}</td>

                        <td class="text-left">

                            <div class="flex gap-2 mt-3">

                                <a href="{{url('produto/edit/'.$produto->id)}}" class="size-8 flex items-center justify-center text-xl bg-blue-500 hover:bg-blue-600 text-white rounded"><i class="fa-solid fa-pen-to-square"></i></a>

                                <form action="{{route('produto_destroy', $produto->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $produto->id }}">
                                    <button onclick="return confirm('tem certeza que deseja excluir?')" type="submit" class="flex size-8 items-center justify-center bg-red-500 hover:bg-red-600 text-white rounded"><i class="fa-solid fa-trash"></i></button>
                                </form>

                            </div>

                        </td>

                    </tr>

                @endforeach

            </tbody>
        </table>

    </div>

@endsection
