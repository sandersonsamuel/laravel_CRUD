<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/ff98f8ebe6.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    @vite('public/js/app.js')
</head>

<body>

<div class="h-screen">

    <div class="w-full h-[90px] px-10 flex items-center justify-between">

        <a href="/" class="text-2xl font-semibold">
            Controle de Produtos
        </a>

        <div>
            <ul class="flex gap-5 text-xl font-semibold">
                <li>
                    <a href="{{ route('produto_create') }}">Cadastrar Produto</a>
                </li>

                <li>
                    <a href="{{ route('produto_show') }}">Listar Produtos</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="p-5">

        <!-- Se ouver erro na aplicação, ele vai aparecer por essa div abaixo:  -->
        @if ($errors->any())
            <div id="error-message" class="w-full bg-red-400 p-3 rounded text-neutral-100 flex justify-between">
                <p>{{$errors->first()}}</p>
                <a id="close-error" class="mr-1 cursor-pointer"><i class="fa-solid fa-xmark"></i></a>
            </div>
        @endif

        <!-- Content que vai ser substituido pelas outras views -->
        @yield('content')

    </div>

</div>

@yield('scripts')

</body>
</html>
