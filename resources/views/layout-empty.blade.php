<!doctype html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lien & Yannick</title>

        @vite(['resources/js/site.js', 'resources/scss/site.scss'])
    </head>

    <body class="page-{{$blueprint->value()->handle}}">
        @yield('content')
    </body>
</html>
