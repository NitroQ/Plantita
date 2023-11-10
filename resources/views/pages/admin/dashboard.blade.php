@extends('layout.client.admin')
@section('title', 'Dashboard')
@section('content')
    <section>
        <h1 class="text-4xl font-brandon-bold mb-5">Dashboard</h1>
        <div class="grid grid-cols-5 gap-5">
            <div
                class="shadow-leftBottom p-5 rounded-md flex flex-col lg:flex-row items-center justify-center lg:justify-start">
                <img src="{{ asset('images/icons_logos/invoice-icon.svg') }}" class="me-0 mb-2 lg:me-4 lg:mb-0" />
                <span class="text-center lg:text-start">
                    <h3 class="text-3xl font-brandon-bold">{{ $totalProducts }}</h3>
                    <p class="text-gray leading-5">Total Products</p>
                </span>
            </div>
            <div
                class="shadow-leftBottom p-5 rounded-md flex flex-col lg:flex-row items-center justify-center lg:justify-start">
                <img src="{{ asset('images/icons_logos/sold-icon.svg') }}" class="me-0 mb-2 lg:me-4 lg:mb-0" />
                <span class="text-center lg:text-start">
                    <h3 class="text-3xl font-brandon-bold">{{ $totalQuantityInTransactions }}</h3>
                    <p class="text-gray leading-5">Total Sold Items</p>
                </span>
            </div>
            <div
                class="shadow-leftBottom p-5 rounded-md flex flex-col lg:flex-row items-center justify-center lg:justify-start">
                <img src="{{ asset('images/icons_logos/pack-icon.svg') }}" class="me-0 mb-2 lg:me-4 lg:mb-0" />
                <span class="text-center lg:text-start">
                    <h3 class="text-3xl font-brandon-bold">{{ $countActiveProducts }}</h3>
                    <p class="text-gray leading-5">Active Products</p>
                </span>
            </div>
            <div
                class="shadow-leftBottom p-5 rounded-md flex flex-col lg:flex-row items-center justify-center lg:justify-start">
                <img src="{{ asset('images/icons_logos/pending-icon.svg') }}" class="me-0 mb-2 lg:me-4 lg:mb-0" />
                <span class="text-center lg:text-start">
                    <h3 class="text-3xl font-brandon-bold">{{ $totalPendingTransactions }}</h3>
                    <p class="text-gray leading-5">Pending Orders</p>
                </span>
            </div>
            <div
                class="shadow-leftBottom p-5 rounded-md flex flex-col lg:flex-row items-center justify-center lg:justify-start">
                <img src="{{ asset('images/icons_logos/low-stock-icon.svg') }}" class="me-0 mb-2 lg:me-4 lg:mb-0" />
                <span class="text-center lg:text-start">
                    <h3 class="text-3xl font-brandon-bold">{{ $countLowQuantity }}</h3>
                    <p class="text-gray leading-5">Low Stock Items</p>
                </span>
            </div>
            <div class="lg:col-span-4 col-span-5 space-y-5">
                <div class="shadow-leftBottom p-5 rounded-md space-y-4">
                    <span>
                        <h3 class="text-2xl font-brandon-bold">Top Products</h3>
                        <p class="text-gray leading-5">Best-selling Products</p>
                    </span>
                    <div class="grid grid-cols-5 items-center pb-3">
                        <div class="col-span-2 mx-10">
                            <!-- <div class="" id="donut-chart-container">
                  <canvas id="donut-chart"></canvas>
                </div> -->
                            <div id="donut-chart"></div>
                        </div>
                        <div id="legend-table" class="col-span-3">
                            <table class="w-full text-left">
                                <thead class="text-gray uppercase bg-gray-400 font-brandon-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-1 rounded-tl-lg rounded-bl-lg"></th>
                                        <th scope="col" class="px-6 py-1">
                                            Product
                                        </th>
                                        <th scope="col" class="px-6 py-1">
                                            Sales
                                        </th>
                                        <th scope="col" class="px-6 py-1 rounded-tr-lg rounded-br-lg">
                                            Stocks
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-lg border-b border-gray/20">
                                    @foreach ($bestSellingProductsDetails as $bestSellingProductDetails)
                                    <tr class="bg-white border-b border-gray/20">
                                        <th scope="row" class="px-6 py-1 font-medium whitespace-nowrap">
                                            <div class="bg-green-200 h-2 w-2 rounded-xl"></div>
                                        </th>
                                        <td class="flex items-center px-6 py-1">
                                            {{-- <img src="{{ asset('images/products/plant-sample.webp') }}" class="h-10 me-3" /> --}}
                                            {{ $bestSellingProductDetails['product']->name }}
                                        </td>
                                        <td class="px-6 py-1">
                                            {{ $bestSellingProductDetails['total_sold'] }}
                                        </td>
                                        <td class="px-6 py-1">
                                            {{ $bestSellingProductDetails['product']->quantity }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-5">
                    <div class="shadow-leftBottom p-5 rounded-md space-y-4">
                        <span>
                            <p class="text-lg text-gray leading-5">Total Income</p>
                            <h3 class="text-4xl font-brandon-bold">₱ {{ number_format($totalIncome, 2) }}</h3>
                        </span>
                        <div id="bar-chart"></div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1 col-span-5 space-y-5">
                <div class="shadow-leftBottom p-5 rounded-md">
                    <span>
                        <h3 class="text-3xl font-brandon-bold uppercase">Tuesday</h3>
                        <p class="text-2xl">October 19, 2023</p>
                    </span>
                </div>
                <div class="shadow-leftBottom py-5 rounded-md space-y-3">
                    @foreach($pendingTransactions as $pendingTransaction)
                        <div class="px-5">
                            <h3 class="text-2xl font-brandon-bold">Transactions</h3>
                            <p class="text-gray leading-5">Pending Records</p>
                        </div>
                        <div class="px-5">
                            <p class="leading-6 text-lg">{{ $pendingTransaction->name }}</p>
                            <p class="leading-6 text-lg text-gray">#{{ mb_strimwidth($pendingTransaction->id, 0, 8, '...') }}</p>
                            <p class="leading-6 text-lg font-brandon-bold">₱{{ number_format($pendingTransaction->total, 2) }}</p>
                        </div>
                        <hr class="border-gray/20">
                    @endforeach
                </div>
                <div class="shadow-leftBottom p-5 rounded-md space-y-3">
                    <h3 class="text-2xl font-brandon-bold">Quick Access</h3>
                    <div class="space-y-2">
                        <button class="text-lg bg-background w-full py-2 hover:bg-green-200/10 rounded"><a
                                href="{{ route('admin.transactions.index') }}">Check Transactions</a></button>
                        <button class="text-lg bg-background w-full py-2 hover:bg-green-200/10 rounded"><a
                                href="{{ route('admin.plantcare.index') }}">Manage Inventory</a></button>
                        <button class="text-lg bg-background w-full py-2 hover:bg-green-200/10 rounded"><a
                                href="{{ route('admin.products.index') }}">Modify Plant Care</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        // DOUGHNUT CHART
        const bestSellingProductsData = @json($bestSellingProductsDetails);
        document.addEventListener("DOMContentLoaded", function() {
            if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
                const getChartOptions = (data) => {
                    const totalValue = 100; 

                    const ratios = data.map(item => item.total_sold / totalValue);

                    return {
                        series: ratios,
                        colors: ["#0A6611", "#E31B42", "#F2441D", "#11485F", "#FECA26"],
                        chart: {
                            width: "100%",
                            type: "donut",
                        },
                        stroke: {
                            colors: ["transparent"],
                            lineCap: "",
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    labels: {
                                        show: false
                                    },
                                    size: "70%",
                                },
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        legend: {
                            show: false,
                        },
                    }
                }

                const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions(bestSellingProductsData));
                chart.render();
            }
        });
    </script>

@endsection
