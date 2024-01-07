<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('icon/terminal.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">
</head>

<body class="bg-black text-white">
    <div class="w-full h-screen">
        <x-navbar></x-navbar>
        {{ $slot }}
    </div>
    @vite('resources/js/app.js')
</body>

</html>
