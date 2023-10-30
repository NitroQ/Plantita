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

  <!-- Styles -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @yield('css')

</head>

<body class="mx-auto overflow-x-hidden bg-background font-brandon-regular text-black antialiased">
  @include('layout.components.front-components.navbar')
  <main class="relative {{ request()->is('signin', 'signup', 'contact' , 'order-confirmation') ? 'py-0' : 'py-20' }}">
    @yield('content')
 </main>

  @if (!(\Request::is('signin') || \Request::is('signup')))
  @include('layout.components.front-components.footer')
  @endif

  @yield('script')

</body>

</html>

