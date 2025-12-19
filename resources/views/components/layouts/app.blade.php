<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Freelancer Hours' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-[#FFF9F5] dark:bg-gray-950">

<x-ui.navbar/>

<main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 w-full py-10">
    {{ $slot }}
</main>

<script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>


</body>
</html>
