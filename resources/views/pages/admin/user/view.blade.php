@extends('layout.client.admin')
@section('title', 'View User')
@section('content')
    <section>
        <div class="flex mb-5">
            <a href="{{ route('users') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green-200'></i></a>
            <h1 class="text-4xl font-brandon-bold">@frankfn</h1>
        </div>
        <div class="grid grid-cols-5 gap-8 items-start">
            <div class="col-span-5 lg:col-span-2 shadow-leftBottom p-5 rounded-md">
                <div class="flex justify-between mb-3">
                    <h3 class="text-2xl font-brandon-bold">User Details</h3>
                    <span
                        class="text-sm bg-blue-100/20 text-blue-100 uppercase font-brandon-black px-3 py-2 rounded">Active</span>
                </div>
                <div class="grid grid-cols-5 gap-y-3 gap-x-5 items-start text-lg">
                    <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">User ID</div>
                    <p class="col-span-3 mt-1">#123456789</p>
                    <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Username</div>
                    <p class="col-span-3 mt-1">@frankfn</p>
                    <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Email Address</div>
                    <p class="col-span-3 mt-1">frankvincent@gmail.com</p>
                    <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Saved Shipping Info.
                    </div>
                    <span class="col-span-3 mt-1">
                        <p>Frank Vincent Gesmundo</p>
                        <p>09423894723</p>
                        <p>96 Kaliraya St. Cluster 19 G. Araneta Ave. Brgy. Tatalon, Quezon City, 1113</p>
                    </span>
                </div>
            </div>
            <div class="col-span-5 lg:col-span-3 relative overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="text-gray uppercase bg-gray-400 font-brandon-bold">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-tl-lg rounded-bl-lg">
                                Order No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-tr-lg rounded-br-lg">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-lg border-b border-gray/20">
                        <tr class="bg-white border-b border-gray/20">
                            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
                                123456789
                            </th>
                            <td class="px-6 py-3">
                                10/23/2023
                            </td>
                            <td class="px-6 py-3">
                                <span
                                    class="text-sm bg-orange/20 text-orange uppercase font-brandon-black px-3 py-2 rounded">Pending</span>
                            </td>
                            <td class="px-6 py-3 font-brandon-bold">
                                ₱1,500.00
                            </td>
                            <td class="px-6 py-3 space-x-2">
                                <a href="{{ route('view-transaction') }}"><button><i
                                            class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                                <a href="{{ route('pending') }}"><button><i
                                            class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray/20">
                            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
                                123456789
                            </th>
                            <td class="px-6 py-3">
                                10/23/2023
                            </td>
                            <td class="px-6 py-3">
                                <span
                                    class="text-sm bg-yellow-400/20 text-yellow-400 uppercase font-brandon-black px-3 py-2 rounded">Packed</span>
                            </td>
                            <td class="px-6 py-3 font-brandon-bold">
                                ₱1,500.00
                            </td>
                            <td class="px-6 py-3 space-x-2">
                                <a href="{{ route('view-transaction') }}"><button><i
                                            class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                                <a href="{{ route('pending') }}"><button><i
                                            class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray/20">
                            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
                                123456789
                            </th>
                            <td class="px-6 py-3">
                                10/23/2023
                            </td>
                            <td class="px-6 py-3">
                                <span
                                    class="text-sm bg-orange/20 text-orange uppercase font-brandon-black px-3 py-2 rounded">Pending</span>
                            </td>
                            <td class="px-6 py-3 font-brandon-bold">
                                ₱1,500.00
                            </td>
                            <td class="px-6 py-3 space-x-2">
                                <a href="{{ route('view-transaction') }}"><button><i
                                            class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                                <a href="{{ route('pending') }}"><button><i
                                            class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray/20">
                            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
                                123456789
                            </th>
                            <td class="px-6 py-3">
                                10/23/2023
                            </td>
                            <td class="px-6 py-3">
                                <span
                                    class="text-sm bg-green-200/20 text-green-200 uppercase font-brandon-black px-3 py-2 rounded">Shipped</span>
                            </td>
                            <td class="px-6 py-3 font-brandon-bold">
                                ₱1,500.00
                            </td>
                            <td class="px-6 py-3 space-x-2">
                                <a href="{{ route('view-transaction') }}"><button><i
                                            class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                                <a href="{{ route('pending') }}"><button><i
                                            class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray/20">
                            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
                                123456789
                            </th>
                            <td class="px-6 py-3">
                                10/23/2023
                            </td>
                            <td class="px-6 py-3">
                                <span
                                    class="text-sm bg-green-200/20 text-green-200 uppercase font-brandon-black px-3 py-2 rounded">Shipped</span>
                            </td>
                            <td class="px-6 py-3 font-brandon-bold">
                                ₱1,500.00
                            </td>
                            <td class="px-6 py-3 space-x-2">
                                <a href="{{ route('view-transaction') }}"><button><i
                                            class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                                <a href="{{ route('pending') }}"><button><i
                                            class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray/20">
                            <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
                                123456789
                            </th>
                            <td class="px-6 py-3">
                                10/23/2023
                            </td>
                            <td class="px-6 py-3">
                                <span
                                    class="text-sm bg-yellow-400/20 text-yellow-400 uppercase font-brandon-black px-3 py-2 rounded">Packed</span>
                            </td>
                            <td class="px-6 py-3 font-brandon-bold">
                                ₱1,500.00
                            </td>
                            <td class="px-6 py-3 space-x-2">
                                <a href="{{ route('view-transaction') }}"><button><i
                                            class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                                <a href="{{ route('pending') }}"><button><i
                                            class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
