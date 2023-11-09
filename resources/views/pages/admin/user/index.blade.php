@extends('layout.client.admin')
@section('title', 'User Management')
@section('content')
  <section>
    <div class="flex justify-between mb-5">
      <h1 class="text-4xl font-brandon-bold">User Management</h1>
      <div class="flex items-center bg-gray-400 rounded w-64">
        <form action="{{ route('users') }}" method="GET" id="searchForm">
          <div class="flex items-center bg-culture rounded w-64">
              <input type="text" name="search" id="searchInput" class="py-2 px-4 border-none bg-transparent w-full focus:outline-none focus:ring-0" placeholder="Search...">
              <i class="mt-1 mr-3 bx bx-search cursor-pointer" onclick="document.getElementById('searchForm').submit()"></i>
          </div>
        </form>
      </div>
    </div>
    <div class="relative overflow-x-auto">
      <table class="w-full text-left">
        <thead class="text-gray uppercase bg-gray-400 font-brandon-bold">
          <tr>
            <th scope="col" class="px-6 py-3 rounded-tl-lg rounded-bl-lg">
              User ID
            </th>
            <th scope="col" class="px-6 py-3">
              Username
            </th>
            <th scope="col" class="px-6 py-3">
              Email
            </th>
            <th scope="col" class="px-6 py-3">
              Status
            </th>
            <th scope="col" class="px-6 py-3 rounded-tr-lg rounded-br-lg">
              Actions
            </th>
          </tr>
        </thead>
        <tbody class="text-lg border-b border-gray/20">
          @if(count($users) === 0)
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
              No user found
            </th>
          @else
          @foreach($users as $u)
          <tr class="bg-white border-b border-gray/20">
            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
              {{ $u->id }}
            </th>
            <td class="px-6 py-3">
              {{ $u->username  }}
            </td>
            <td class="px-6 py-3">
              {{ $u->email  }}
            </td>
            <td class="px-6 py-3">
              {{-- <span class="text-sm bg-orange/20 text-orange uppercase font-brandon-black px-3 py-2 rounded">Inactive</span> --}}
              <span class="text-sm bg-blue-100/20 text-blue-100 uppercase font-brandon-black px-3 py-2 rounded">Active</span>
            </td>
            <td class="px-6 py-3">
              <a href="{{ route('view-user') }}"><button><i class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
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
          <p>Inactive: the Account is disabled in the system</p>
        </div>
        <div class="flex items-center">
          <div class="packed h-4 w-4 bg-blue-100 me-2"></div>
          <p>Active: the Account can access the system</p>
        </div>
      </div>
      <div class="flex justify-between pt-3">
        <p>Showing 1 of 5 entries</p>
        <nav aria-label="Page navigation example">
          <ul class="inline-flex -space-x-px text-base h-10">
            <li>
              <a href="#" class="flex items-center justify-center px-4 h-10 ml-0 bg-white border border-gray-400 rounded-l-lg">Previous</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-4 h-10 text-white bg-green-200 border border-gray-400">1</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-4 h-10 bg-white border border-gray-400 rounded-r-lg">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>
@endsection