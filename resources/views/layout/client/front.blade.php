<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantita | @yield('title')</title>
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/x-icon">
    {{-- icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased overflow-x-hidden bg-background text-black font-brandon-regular">
    @include('layout.components.front-components.navbar')
    <main class="container mx-auto py-20 px-10">
        @yield('content')
    </main>
    @include('layout.components.front-components.footer')
    @yield('script')
</body>

</html>
