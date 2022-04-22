<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Asman Dictionary</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/asman2.png') }}">
        <meta name="title" content="Asman Dictionary">
        <meta name="description" content="Asman Dictionary">

        <!-- Open Graph / Facebook -->
        <meta property="og:title" content="Asman Dictionary" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}" />
        <!-- Twitter -->
        <meta property="twitter:description" content="Asman Dictionary">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="Asman Dictionary">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@1.21.0/dist/full.css" rel="stylesheet" type="text/css" />      

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased overflow-hidden">
            {{ $slot }}
        </div>
    </body>
</html>
