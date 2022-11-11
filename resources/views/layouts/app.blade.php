<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LiveWire</title>

        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto">
            <header class="my-5 border-b-2">
                <h1 class="font-bold text-3xl text-center m-3 text-violet-500">
                    Livewire
                </h1>
            </header>

            @yield('content')
        </div>

        @livewireScripts
    </body>
</html>
