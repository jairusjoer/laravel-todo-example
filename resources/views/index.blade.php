<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/globals.css', 'resources/js/globals.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1 class="text-red-500">Tailwind</h1>
    </body>
</html>
