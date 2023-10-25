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
  
  <!-- Charts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <!-- Styles -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @yield('css')

</head>

<body class="bg-white font-brandon-regular text-black antialiased">
  @include('layout.components.admin-components.sidebar')
  <main class="ml-96 py-12 p-16">
    @yield('content')
  </main>
  @yield('script')
</body>

</html>