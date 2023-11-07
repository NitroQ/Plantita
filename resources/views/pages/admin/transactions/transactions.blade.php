@extends('layout.client.admin')
@section('title', 'Transactions')
@section('content')
    <section>
        <h1 class="text-4xl font-brandon-bold mb-5">Transactions</h1>
        <div class="relative overflow-x-auto">
            <table class="w-full text-left">
                <thead class="text-gray-500 uppercase bg-gray-400 font-brandon-bold">
                    <tr>
                        <th scope="col" class="px-6 py-3 rounded-tl-lg rounded-bl-lg">
                            Order No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Order Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Customer Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Order Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Order Total
                        </th>
                        <th scope="col" class="px-6 py-3 rounded-tr-lg rounded-br-lg">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="text-lg border-b border-gray-500/20">
                    <tr class="bg-white border-b border-gray-500/20">
                        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
                            123456789
                        </th>
                        <td class="px-6 py-3">
                            October 13, 2023
                        </td>
                        <td class="px-6 py-3">
                            Frank Vincent Gesmundo
                        </td>
                        <td class="px-6 py-3">
                            <span
                                class="text-sm bg-orange/20 text-orange uppercase font-brandon-black px-3 py-2 rounded">Pending</span>
                        </td>
                        <td class="px-6 py-3 font-brandon-bold">
                            ₱1,500.00
                        </td>
                        <td class="px-4 lg:px-6 py-3 space-x-2">
                            <a href="{{ route('view-transaction') }}"><button><i
                                        class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                            <a href="{{ route('pending') }}"><button><i
                                        class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-500/20">
                        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
                            123456789
                        </th>
                        <td class="px-6 py-3">
                            October 13, 2023
                        </td>
                        <td class="px-6 py-3">
                            Frank Vincent Gesmundo
                        </td>
                        <td class="px-6 py-3">
                            <span
                                class="text-sm bg-yellow-400/20 text-yellow-400 uppercase font-brandon-black px-3 py-2 rounded">Packed</span>
                        </td>
                        <td class="px-6 py-3 font-brandon-bold">
                            ₱1,500.00
                        </td>
                        <td class="px-4 lg:px-6 py-3 space-x-2">
                            <a href="{{ route('view-transaction') }}"><button><i
                                        class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                            <a href="{{ route('pack') }}"><button><i
                                        class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-500/20">
                        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
                            123456789
                        </th>
                        <td class="px-6 py-3">
                            October 13, 2023
                        </td>
                        <td class="px-6 py-3">
                            Frank Vincent Gesmundo
                        </td>
                        <td class="px-6 py-3">
                            <span
                                class="text-sm bg-green-200/20 text-green-200 uppercase font-brandon-black px-3 py-2 rounded">Shipped</span>
                        </td>
                        <td class="px-6 py-3 font-brandon-bold">
                            ₱1,500.00
                        </td>
                        <td class="px-4 lg:px-6 py-3 space-x-2">
                            <a href="{{ route('view-transaction') }}"><button><i
                                        class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                            <a href="{{ route('shipped') }}"><button><i
                                        class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-500/20">
                        <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap">
                            123456789
                        </th>
                        <td class="px-6 py-3">
                            October 13, 2023
                        </td>
                        <td class="px-6 py-3">
                            Frank Vincent Gesmundo
                        </td>
                        <td class="px-6 py-3">
                            <span
                                class="text-sm bg-blue-100/20 text-blue-100 uppercase font-brandon-black px-3 py-2 rounded">Done</span>
                        </td>
                        <td class="px-6 py-3 font-brandon-bold">
                            ₱1,500.00
                        </td>
                        <td class="px-4 lg:px-6 py-3 space-x-2">
                            <a href="{{ route('view-transaction') }}"><button><i
                                        class='bx bxs-show bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                            <a href=""><button><i
                                        class='bx bxs-pencil bg-gray-400 p-2 rounded hover:bg-green-200/20'></i></button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex items-center space-x-3 my-5">
                <p class="uppercase font-brandon-bold">Legends:</p>
                <div class="flex items-center">
                    <div class="pending h-4 w-4 bg-orange me-2"></div>
                    <p>Pending: Product is for Preparation</p>
                </div>
                <div class="flex items-center">
                    <div class="packed h-4 w-4 bg-yellow-400 me-2"></div>
                    <p>Packed: Product is ready to be Shipped</p>
                </div>
                <div class="flex items-center">
                    <div class="shipped h-4 w-4 bg-green-200 me-2"></div>
                    <p>Shipped: Product is Shipped</p>
                </div>
            </div>
            <div class="flex justify-between pt-3">
                <p>Showing 1 of 5 entries</p>
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px text-base h-10">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 ml-0 bg-white border border-gray-400 rounded-l-lg">Previous</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 text-white bg-green-200 border border-gray-400">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 bg-white border border-gray-400 rounded-r-lg">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection
