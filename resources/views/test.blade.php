<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @toastScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-bold">
    <div><livewire:toasts/></div>

    <div class="bg-green-700 text-white my-2"> Tailwind test OK</div>

    <h1 class="bg-green-700 text-white my-2" x-data="{ message: 'Alpine test OK' }" x-text="message"></h1>

    <livewire:livewire-test />
    @livewireScripts
</body>
</html>
