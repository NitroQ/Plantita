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
  <script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"></script>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @yield('css')

</head>

<body class="mx-auto overflow-x-hidden bg-background font-brandon-regular text-black antialiased">
  @include('layout.components.front-components.navbar')
  <main class="relative {{ request()->is('signin', 'signup', 'contact' , 'order-confirmation' ,
    'product-failed', 'product-cancelled', 'error404') ? 'py-0' : 'py-20' }}">
    @yield('content')
  </main>

  @if (!(\Request::is('signin') || \Request::is('signup')))
    @include('layout.components.front-components.footer')
  @endif

  @yield('script')

  <script>
      $(document).ready(function() {
        $('.add-to-cart').submit(function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: "{{ route('add-cart') }}",
                data: formData,
                success: function(response) {
                    alert(response.message);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    });
  </script>

</body>

</html>
