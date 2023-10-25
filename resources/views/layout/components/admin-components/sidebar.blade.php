<aside class="fixed overflow-hidden w-96 h-full bg-background">
    <nav class="h-full flex flex-col justify-between overflow-hidden text-xl px-8 py-3">
        <div>
            <a href="{{ route('dashboard') }}" class="">
                <img src="{{ asset('images/icons_logos/plantita-logo.svg') }}" class="h-16 mx-auto my-4" alt="Plantita Logo" />
            </a>
            <div class="pt-3">
                <h5 class="font-brandon-bold text-base uppercase">Administrative Portal</h5>
                <hr class="mt-1 mb-4 border-t border-gray-600" />
            </div>
            <ul class="space-y-3">
                <li><a href="{{ route('dashboard') }}" class="{{ request()->is('admin') ? 'bg-green/10' : '' }} p-2 flex items-center rounded-md hover:bg-green/10">
                    <img src="{{ asset('images/icons_logos/dashboard-icon.svg') }}" class="me-3 h-6" />
                    <span>Dashboard</span>
                </a></li>
                <li><a href="{{ route('transactions') }}" class="{{ request()->is('transactions') ? 'bg-green/10' : '' }} p-2 flex rounded-md hover:bg-green/10">
                    <img src="{{ asset('images/icons_logos/transactions-icon.svg') }}" class="me-3 h-6" />
                    <span>Transactions</span>
                </a></li>
                <li><a href="{{ route('products') }}" class="{{ request()->is('products') ? 'bg-green/10' : '' }} p-2 flex rounded-md hover:bg-green/10">
                    <img src="{{ asset('images/icons_logos/product-management-icon.svg') }}" class="me-3 h-6" />
                    <span>Product Management</span>
                </a></li>
                <li><a href="{{ route('plantcare') }}" class="{{ request()->is('plantcare') ? 'bg-green/10' : '' }} p-2 flex rounded-md hover:bg-green/10">
                    <img src="{{ asset('images/icons_logos/plant-care-icon.svg') }}" class="me-3 h-6" />
                    <span>Plant Care Information</span>
                </a></li>
                <li><a href="{{ route('users') }}" class="{{ request()->is('users') ? 'bg-green/10' : '' }} p-2 flex rounded-md hover:bg-green/10">
                    <img src="{{ asset('images/icons_logos/user-management-icon.svg') }}" class="me-3 h-6" />
                    <span>User Management</span>
                </a></li>
            </ul>
        </div>
        <ul class="my-3">
            <li><a href="#" class="p-2 flex items-center justify-between rounded-md hover:bg-green/10">
                <div class="flex items-center">
                    <img src="{{ asset('images/icons_logos/user-profile-icon.svg') }}" class="me-3 h-7" />
                    <div>
                        <p class="text-base font-brandon-bold leading-5">Frank Vincent Gesmundo</p>
                        <p class="text-sm leading-5">Adminisrator</p>
                    </div>
                </div>
                <img src="{{ asset('images/icons_logos/logout-icon.svg') }}" class="h-5" />
            </a></li>
        </ul>
    </nav>
</aside>


