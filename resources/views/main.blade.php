<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        @include('templates.header')

        @yield('content')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <script>
            @if (session('sucesso'))
                M.toast({html: "{{ session('sucesso') }}"})
            @endif

            @if(session('deletado'))
                M.toast({html: "{{ session('deletado') }}"})
            @endif

            @if(session('atualizado'))
                M.toast({html: "{{ session('atualizado') }}"})
            @endif

            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('select');
                var instances = M.FormSelect.init(elems);
             });
        </script>
    </body>
</html>