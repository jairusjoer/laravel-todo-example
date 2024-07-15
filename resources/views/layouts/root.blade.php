<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-background text-muted-foreground scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/globals.css', 'resources/js/globals.ts'])
    @livewireStyles
</head>

<body class="text-base font-sans antialiased">
    <div id="root" class="">
        @yield('root')
    </div>

    @livewireScriptConfig
</body>

</html>
