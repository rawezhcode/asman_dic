<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-100" data-theme='dark'>
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
        <meta property="og:image" content="{{ asset('assets/img/a.png') }}" />
        
        <!-- Twitter -->
        <meta property="twitter:description" content="Asman Dictionary">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="Asman Dictionary">
        <meta property="twitter:image" content="{{ asset('assets/img/a.png') }}">
        <meta name="twitter:card" content="summary_large_image">


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        
      
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/argon.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@1.21.0/dist/full.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="https://code.responsivevoice.org/responsivevoice.js?key=mKxKIREN"></script>
        {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}

        @livewireStyles


    </head>
    <body class="font-sans antialiased  bg-slate-50">
        <div class=" ">
            @include('layouts.navigation')

              
            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                {{-- {{ $slot }} --}}
                @yield('content')
            </main>
        </div>


        @livewire('livewire-ui-modal')
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
    </body>
</html>
