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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-black text-white font-inter">
    @auth
        @if (Hash::check('password', Auth::user()->password))
            <livewire:if-default-password>
        @endif
        <div class="w-full min-h-screen flex flex-col justify-between">
            <livewire:navbar>
                {{ $slot }}
                <x-footer></x-footer>
        </div>
    @endauth
    @guest
        {{ $slot }}
    @endguest
    @vite('resources/js/app.js')
</body>

</html>
