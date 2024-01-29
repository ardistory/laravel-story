<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (Request::routeIs('login'))
        <title>Edp Lebak | Login Page</title>
    @else
        <title>Edp Lebak | {{ $title ?? 'Edp Lebak' }}</title>
    @endif

    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('icon/terminal.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">
</head>

<body class="bg-black text-white">
    @auth
        @if (Hash::check('password', Auth::user()->password))
            <livewire:if-default-password>
        @endif
        <div class="w-full h-auto">
            <livewire:navbar>
                {{ $slot }}
        </div>
        <div class="w-full h-auto">
            <x-footer></x-footer>
        </div>
    @endauth
    @guest
        {{ $slot }}
    @endguest
    @vite('resources/js/app.js')
</body>

</html>
