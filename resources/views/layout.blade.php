<!doctype html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Lien & Yannick' }}</title>

        @vite(['resources/js/site.js', 'resources/scss/site.scss'])

        <script src="https://unpkg.com/@phosphor-icons/web"></script>
    </head>

    <body class="
        @if($blueprint ?? null)
            page-{{$blueprint->value()->handle ?? null}}
        @endif
    ">
        @yield('content')

        @include('main.footer')
    </body>
</html>
