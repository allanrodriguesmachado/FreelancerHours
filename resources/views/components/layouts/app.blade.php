<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Freelancer Hours' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Adicionei antialiased para fontes mais nítidas -->
</head>
<body class="bg-[#FFF9F5] flex flex-col min-h-full text-slate-600 antialiased selection:bg-orange-400 selection:text-white">

<x-ui.navbar/>

<main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 w-full py-10">
    {{ $slot }}
</main>

</body>
</html>
