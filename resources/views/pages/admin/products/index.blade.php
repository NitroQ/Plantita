@extends('layout.client.admin')
@section('title', 'Product Management')
@section('content')
  <section>
    <div class="flex justify-between mb-5">
      <h1 class="text-4xl font-brandon-bold">Product Management</h1>
      <div class="more-actions space-x-3 flex items-center">
        <form action="{{ route('admin.products.index') }}" method="GET" id="searchForm">
          <div class="flex items-center rounded w-64 bg-gray-400">
              <input type="text" name="search" id="searchInput" class="py-2 px-4 border-none bg-transparent w-full focus:outline-none focus:ring-0">
              <i class="mt-1 mr-3 bx bx-search cursor-pointer" onclick="document.getElementById('searchForm').submit()"></i>
          </div>
        </form>
        <a href="{{ route('admin.products.create') }}"><button class="bg-green-200 text-white py-2 px-5 rounded hover:bg-green-200/90">Add Inventory</button></a>
      </div>
    </div>
    <div class="relative overflow-x-auto">
      <table class="w-full text-left">
        <thead class="text-gray-500 uppercase bg-gray-400 font-brandon-bold">
          <tr>
            <th scope="col" class="px-6 py-3 rounded-tl-lg rounded-bl-lg">
              Item ID
            </th>
            <th scope="col" class="px-6 py-3">
              Item Name
            </th>
            <th scope="col" class="px-6 py-3">
              Type
            </th>
            <th scope="col" class="px-6 py-3">
              Stock
            </th>
            <th scope="col" class="px-6 py-3">
              Status
            </th>
            <th scope="col" class="px-6 py-3 rounded-tr-lg rounded-br-lg">
              Actions
            </th>
          </tr>
        </thead>
        <tbody class="text-lg border-b border-gray-500/20">
          @if(count($products) === 0)
          <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
            No product found
          </th>
        @else
        @foreach($products as $p)
        <tr class="bg-white border-b border-gray-500/20">
          <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
            {{ $p->id  }}
          </th>
          <td class="px-6 py-3">
            {{ $p->name  }}
          </td>
          <td class="px-6 py-3">
            {{ $p->category }}
          </td>
          <td class="px-6 py-3">
            {{ $p->quantity }}
          </td>
          <td class="px-6 py-3">
            <span class="text-sm uppercase font-brandon-black px-3 py-2 rounded 
            {{ $p->status ? 'bg-blue-100/20 text-blue-100' : 'bg-orange/20 text-orange' }}"
            >{{ $p->status ? 'Active' : 'Inactive' }}</span>
          </td>
          <td class="px-6 py-3 space-x-2">
            <a href="{{ route('admin.products.view',[$p->id]) }}"><button><i class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
            <a href="{{ route('admin.products.edit',[$p->id]) }}"><button><i class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
          </td>
        </tr>
        @endforeach
        @endif
        </tbody>
      </table>
      <div class="flex items-center space-x-3 my-5">
        <p class="uppercase font-brandon-bold">Legends:</p>
        <div class="flex items-center">
          <div class="pending h-4 w-4 bg-orange me-2"></div>
          <p>Inactive: the Product is hidden in the Shop</p>
        </div>
        <div class="flex items-center">
          <div class="packed h-4 w-4 bg-blue-100 me-2"></div>
          <p>Active: the Product is viewable in the shop</p>
        </div>
      </div>
      <div class="flex justify-between pt-3">
        <p>Showing 1 of 5 entries</p>
        <nav aria-label="Page navigation example">
          <ul class="inline-flex -space-x-px text-base h-10">
            <li>
              <a href="#" class="flex items-center justify-center px-4 h-10 ml-0 bg-white border border-gray-500-400 rounded-l-lg">Previous</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-4 h-10 text-white bg-green-200 border border-gray-500-400">1</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-4 h-10 bg-white border border-gray-500-400 rounded-r-lg">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    {{-- @endif --}}
  </section>
@endsection