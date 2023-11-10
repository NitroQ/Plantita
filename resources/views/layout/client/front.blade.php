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
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @yield('css')

</head>

<body class="mx-auto overflow-x-hidden font-brandon-regular text-black antialiased {{ request()->is('checkout','checkout/create') ? 'bg-white' : 'bg-gray-400' }}">
  @include('layout.components.front-components.navbar')
  <main class="{{ request()->is('signin','signup','contact','checkout/create') ? 'px-0 py-0' : 'px-24 pt-44 pb-12' }}">
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
                    console.log(response);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
        $('.add-to-likes').click(function() {
          var productId = $(this).data('product-id');
          console.log(productId);

          $.ajax({
              type: 'POST',
              url: "{{ route('add-likes') }}",
              data: { id: productId, _token: "{{ csrf_token() }}" },
              success: function(response) {
                  alert(response.message);
                  console.log(response);
              },
              error: function(error) {
                  console.error(error);
                  alert(error.message);
              }
          });
      });
    });
  </script>

</body>

</html>
