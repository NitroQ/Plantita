<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantita | @yield('title')</title>
    {{-- Favicon --}}
    {{-- <link rel="shortcut icon" href="{{asset('/')}}" type="image/x-icon"> --}}

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body class="antialiased overflow-x-hidden">
    @include('layout.components.front-components.navbar')
    @yield('content')
</body>

</html>
