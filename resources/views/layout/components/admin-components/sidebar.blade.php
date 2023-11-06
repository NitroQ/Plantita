<aside id="sidebar" class="fixed overflow-hidden lg:w-96 md:w-20 h-full bg-background transition duration-300 ease-in-out">
  <nav class="h-full flex flex-col justify-between overflow-hidden text-xl md:px-2 lg:px-8 py-3">
    <div>
      <a href="{{ route('dashboard') }}" class="">
        <img src="{{ asset('images/icons_logos/plantita-logo.svg') }}" class="lg:block hidden h-16 mx-auto my-4" alt="Plantita Logo" />
        <img src="{{ asset('images/icons_logos/leaf-logo.svg') }}" class="lg:hidden h-8 mx-auto my-4" alt="Plantita Logo" />
      </a>
      <div class="pt-3 lg:inline hidden">
        <h5 class="font-brandon-bold text-base uppercase">Administrative Portal</h5>
        <hr class="mt-1 mb-4 border-t border-gray-600" />
      </div>
      <ul class="space-y-3">
        <li><a href="{{ route('dashboard') }}" class="{{ request()->is('admin') ? 'bg-green-200/10' : '' }} p-2 flex items-center lg:justify-start justify-center rounded-md hover:bg-green-200/10">
            <img src="{{ asset('images/icons_logos/dashboard-icon.svg') }}" class="m-0 lg:me-3 h-6" />
            <span class="lg:inline hidden">Dashboard</span>
          </a></li>
        <li><a href="{{ route('transactions') }}" class="{{ request()->is('transactions') ? 'bg-green-200/10' : '' }} p-2 flex items-center lg:justify-start justify-center rounded-md hover:bg-green-200/10">
            <img src="{{ asset('images/icons_logos/transactions-icon.svg') }}" class="m-0 lg:me-3 h-6" />
            <span class="lg:inline hidden">Transactions</span>
          </a></li>
        <li><a href="{{ route('products') }}" class="{{ request()->is('products') ? 'bg-green-200/10' : '' }} p-2 flex items-center lg:justify-start justify-center rounded-md hover:bg-green-200/10">
            <img src="{{ asset('images/icons_logos/product-management-icon.svg') }}" class="m-0 lg:me-3 h-6" />
            <span class="lg:inline hidden">Product Management</span>
          </a></li>
        <li><a href="{{ route('plantcare') }}" class="{{ request()->is('plantcare') ? 'bg-green-200/10' : '' }} p-2 flex items-center lg:justify-start justify-center rounded-md hover:bg-green-200/10">
            <img src="{{ asset('images/icons_logos/plant-care-icon.svg') }}" class="m-0 lg:me-3 h-6" />
            <span class="lg:inline hidden">Plant Care Information</span>
          </a></li>
        <li><a href="{{ route('users') }}" class="{{ request()->is('users') ? 'bg-green-200/10' : '' }} p-2 flex items-center lg:justify-start justify-center rounded-md hover:bg-green-200/10">
            <img src="{{ asset('images/icons_logos/user-management-icon.svg') }}" class="m-0 lg:me-3 h-6" />
            <span class="lg:inline hidden">User Management</span>
          </a></li>
      </ul>
    </div>
    <ul class="my-3">
      <li><a href="{{ route('index') }}" class="p-2 flex items-center lg:justify-between justify-center rounded-md hover:bg-green-200/10">
          <div class="flex items-center">
            <img src="{{ asset('images/icons_logos/user-profile-icon.svg') }}" class="m-0 lg:me-3 h-7" />
            <div class="lg:inline hidden">
              <p class="text-base font-brandon-bold leading-5">Frank Vincent Gesmundo</p>
              <p class="text-sm leading-5">Adminisrator</p>
            </div>
          </div>
          <img src="{{ asset('images/icons_logos/logout-icon.svg') }}" class="h-5 lg:inline hidden" />
        </a></li>
    </ul>
  </nav>
</aside>

@section('script')
<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.getElementById("sidebar");
        const sidebarToggle = document.getElementById("sidebar-toggle");

        sidebarToggle.addEventListener("click", function () {
            if (sidebar.classList.contains("md:translate-x-full")) {
                sidebar.classList.remove("md:translate-x-full");
            } else {
                sidebar.classList.add("md:translate-x-full");
            }
        });
    });
</script> -->

@endsection