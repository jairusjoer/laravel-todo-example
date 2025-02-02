<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scroll-smooth bg-background text-muted-foreground"
>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/globals.css', 'resources/js/globals.ts'])
        @livewireStyles
    </head>

    <body class="font-sans text-base antialiased">
        <div id="root" class="">
            @yield('root')
        </div>

        @livewireScriptConfig
    </body>
</html>
