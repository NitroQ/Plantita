@extends('layout.client.admin')
@section('title', 'Dashboard')
@section('content')
<section>
  <h1 class="text-4xl font-brandon-bold mb-5">Dashboard</h1>
  <div class="grid grid-cols-5 gap-5">
    <div class="shadow-leftBottom p-5 rounded-md flex flex-col lg:flex-row items-center justify-center lg:justify-start">
      <img src="{{ asset('images/icons_logos/invoice-icon.svg') }}" class="me-0 mb-2 lg:me-4 lg:mb-0" />
      <span class="text-center lg:text-start">
        <h3 class="text-3xl font-brandon-bold">30</h3>
        <p class="text-gray leading-5">Total Invoices</p>
      </span>
    </div>
    <div class="shadow-leftBottom p-5 rounded-md flex flex-col lg:flex-row items-center justify-center lg:justify-start">
      <img src="{{ asset('images/icons_logos/sold-icon.svg') }}" class="me-0 mb-2 lg:me-4 lg:mb-0" />
      <span class="text-center lg:text-start">
        <h3 class="text-3xl font-brandon-bold">100</h3>
        <p class="text-gray leading-5">Total Sold Items</p>
      </span>
    </div>
    <div class="shadow-leftBottom p-5 rounded-md flex flex-col lg:flex-row items-center justify-center lg:justify-start">
      <img src="{{ asset('images/icons_logos/pack-icon.svg') }}" class="me-0 mb-2 lg:me-4 lg:mb-0" />
      <span class="text-center lg:text-start">
        <h3 class="text-3xl font-brandon-bold">15</h3>
        <p class="text-gray leading-5">To Ship / Packed</p>
      </span>
    </div>
    <div class="shadow-leftBottom p-5 rounded-md flex flex-col lg:flex-row items-center justify-center lg:justify-start">
      <img src="{{ asset('images/icons_logos/pending-icon.svg') }}" class="me-0 mb-2 lg:me-4 lg:mb-0" />
      <span class="text-center lg:text-start">
        <h3 class="text-3xl font-brandon-bold">150</h3>
        <p class="text-gray leading-5">Pending Orders</p>
      </span>
    </div>
    <div class="shadow-leftBottom p-5 rounded-md flex flex-col lg:flex-row items-center justify-center lg:justify-start">
      <img src="{{ asset('images/icons_logos/low-stock-icon.svg') }}" class="me-0 mb-2 lg:me-4 lg:mb-0" />
      <span class="text-center lg:text-start">
        <h3 class="text-3xl font-brandon-bold">2</h3>
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
                <tr class="bg-white border-b border-gray/20">
                  <th scope="row" class="px-6 py-1 font-medium whitespace-nowrap">
                    <div class="bg-green-200 h-2 w-2 rounded-xl"></div>
                  </th>
                  <td class="flex items-center px-6 py-1">
                    <img src="{{ asset('images/products/plant-sample.webp') }}" class="h-10 me-3" />
                    African Mask
                  </td>
                  <td class="px-6 py-1">
                    20
                  </td>
                  <td class="px-6 py-1">
                    1,000
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray/20">
                  <th scope="row" class="px-6 py-1 font-medium whitespace-nowrap">
                    <div class="bg-blue-100 h-2 w-2 rounded-xl"></div>
                  </th>
                  <td class="flex items-center px-6 py-1">
                    <img src="{{ asset('images/products/plant-sample.webp') }}" class="h-10 me-3" />
                    African Mask
                  </td>
                  <td class="px-6 py-1">
                    20
                  </td>
                  <td class="px-6 py-1">
                    1,000
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray/20">
                  <th scope="row" class="px-6 py-1 font-medium whitespace-nowrap">
                    <div class="bg-crimson h-2 w-2 rounded-xl"></div>
                  </th>
                  <td class="flex items-center px-6 py-1">
                    <img src="{{ asset('images/products/plant-sample.webp') }}" class="h-10 me-3" />
                    African Mask
                  </td>
                  <td class="px-6 py-1">
                    20
                  </td>
                  <td class="px-6 py-1">
                    1,000
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray/20">
                  <th scope="row" class="px-6 py-1 font-medium whitespace-nowrap">
                    <div class="bg-orange h-2 w-2 rounded-xl"></div>
                  </th>
                  <td class="flex items-center px-6 py-1">
                    <img src="{{ asset('images/products/plant-sample.webp') }}" class="h-10 me-3" />
                    African Mask
                  </td>
                  <td class="px-6 py-1">
                    20
                  </td>
                  <td class="px-6 py-1">
                    1,000
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray/20">
                  <th scope="row" class="px-6 py-1 font-medium whitespace-nowrap">
                    <div class="bg-yellow h-2 w-2 rounded-xl"></div>
                  </th>
                  <td class="flex items-center px-6 py-1">
                    <img src="{{ asset('images/products/plant-sample.webp') }}" class="h-10 me-3" />
                    African Mask
                  </td>
                  <td class="px-6 py-1">
                    20
                  </td>
                  <td class="px-6 py-1">
                    1,000
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-5">
        <div class="shadow-leftBottom p-5 rounded-md space-y-4">
          <span>
            <p class="text-lg text-gray leading-5">Total Income</p>
            <h3 class="text-4xl font-brandon-bold">$5,405</h3>
          </span>
          <div id="bar-chart"></div>
        </div>
        <div class="shadow-leftBottom p-5 rounded-md space-y-4">
          <span>
            <p class="text-lg text-gray leading-5">Average Daily Sales</p>
            <h3 class="text-4xl font-brandon-bold">200 Sold Items</h3>
          </span>
          <div id="column-chart"></div>
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
        <div class="px-5">
          <h3 class="text-2xl font-brandon-bold">Transactions</h3>
          <p class="text-gray leading-5">Pending Records</p>
        </div>
        <div class="px-5">
          <p class="leading-6 text-lg">Raegan Faith Paguirigan</p>
          <p class="leading-6 text-lg text-gray">#12345678</p>
          <p class="leading-6 text-lg font-brandon-bold">₱12,500.00</p>
        </div>
        <hr class="border-gray/20">
        <div class="px-5">
          <p class="leading-6 text-lg">Raegan Faith Paguirigan</p>
          <p class="leading-6 text-lg text-gray">#12345678</p>
          <p class="leading-6 text-lg font-brandon-bold">₱12,500.00</p>
        </div>
        <hr class="border-gray/20">
        <div class="px-5">
          <p class="leading-6 text-lg">Raegan Faith Paguirigan</p>
          <p class="leading-6 text-lg text-gray">#12345678</p>
          <p class="leading-6 text-lg font-brandon-bold">₱12,500.00</p>
        </div>
        <hr class="border-gray/20">
        <div class="px-5">
          <p class="leading-6 text-lg">Raegan Faith Paguirigan</p>
          <p class="leading-6 text-lg text-gray">#12345678</p>
          <p class="leading-6 text-lg font-brandon-bold">₱12,500.00</p>
        </div>
        <hr class="border-gray/20">
        <div class="px-5">
          <p class="leading-6 text-lg">Raegan Faith Paguirigan</p>
          <p class="leading-6 text-lg text-gray">#12345678</p>
          <p class="leading-6 text-lg font-brandon-bold">₱12,500.00</p>
        </div>
      </div>
      <div class="shadow-leftBottom p-5 rounded-md space-y-3">
        <h3 class="text-2xl font-brandon-bold">Quick Access</h3>
        <div class="space-y-2">
          <button class="text-lg bg-background w-full py-2 hover:bg-green-200/10 rounded"><a href="{{ route('transactions') }}">Check Transactions</a></button>
          <button class="text-lg bg-background w-full py-2 hover:bg-green-200/10 rounded"><a href="{{ route('plantcare') }}">Manage Inventory</a></button>
          <button class="text-lg bg-background w-full py-2 hover:bg-green-200/10 rounded"><a href="{{ route('products') }}">Modify Plant Care</a></button>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
<script>
  // DOUGHNUT CHART
  window.addEventListener("load", function() {
    const getChartOptions = () => {
        return {
          series: [35.1, 23.5, 2.4, 5.4, 3.5],
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
                labels: { show: false },
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

      if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
        chart.render();
      }
  });

  // HORIZONTAL BAR CHART
  window.addEventListener("load", function() {
      var options = {
          series: [
              {
                  name: "Income",
                  data: [2420, 1620, 1820, 4420, 3650, 2120],
                  colors: ["#0A6611", "#E31B42", "#F2441D", "#11485F", "#FECA26", "#65B5FF"],
              },
          ],
          chart: {
              sparkline: { enabled: false },
              type: "bar",
              width: "100%",
              height: "140%",
              toolbar: { show: false },
          },
          fill: { opacity: 1 },
          plotOptions: {
              bar: {
                  horizontal: true,
                  distributed: true,
                  columnWidth: "100%",
                  borderRadiusApplication: "end",
                  borderRadius: 10,
                  dataLabels: {
                      position: "top",
                  },
              },
          },
          legend: { show: false },
          dataLabels: { enabled: false },
          tooltip: {
              shared: true,
              intersect: false,
              formatter: function (value) {
                  return "$" + value;
              },
          },
          xaxis: {
              labels: {
                  show: true,
                  style: {
                      cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400',
                  },
                  formatter: function (value) {
                      return "$" + value;
                  },
              },
              categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
              axisTicks: { show: false },
              axisBorder: { show: false },
          },
          yaxis: {
              labels: {
                  show: true,
                  style: {
                      cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400',
                  },
              },
          },
          grid: {
              show: true,
              strokeDashArray: 4,
              padding: {
                  left: 2,
                  right: 2,
                  top: -20,
              },
          },
      };

      if (document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
          const chart = new ApexCharts(document.getElementById("bar-chart"), options);
          chart.render();
      }
  });

  // VERTICAL BAR CHART
  window.addEventListener("load", function() {
    if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
        const colors = ["#0A6611", "#E31B42", "#F2441D", "#11485F", "#FECA26", "#65B5FF", "#00BDB3"];
        const seriesData = [
            { x: "Mon", y: 25 },
            { x: "Tue", y: 38 },
            { x: "Wed", y: 56 },
            { x: "Thu", y: 70 },
            { x: "Fri", y: 42 },
            { x: "Sat", y: 14 },
            { x: "Sun", y: 60 },
        ];

        const options = {
            chart: {
                type: "bar",
                toolbar: { show: false },
            },
            plotOptions: {
                bar: {
                    columnWidth: "50%",
                    distributed: true,
                    borderRadius: 10,
                    borderRadiusApplication: "end",
                },
            },
            states: { hover: { filter: { type: "darken", value: 1 } },
            },
            stroke: { width: 0, colors: ["transparent"] },
            grid: { show: true, strokeDashArray: 4, padding: { left: 2, right: 2, top: -14 } },
            dataLabels: { enabled: false },
            legend: { show: false },
            xaxis: {
                labels: {
                    show: true,
                },
                axisBorder: { show: false },
                axisTicks: { show: false },
            },
            yaxis: {
              show: true,
              labels: {
                  show: true,
                  formatter: function(value) {
                    return value % 10 === 0 ? value : "";
                  }
              },
              min: 0,
              max: 70,
              tickAmount: 7,
            },
            fill: { opacity: 1 },
            colors: colors,
            series: [
                {
                    name: "Sold Items",
                    data: seriesData,
                },
            ],
        };
        const chart = new ApexCharts(document.getElementById("column-chart"), options);
        chart.render();
    }
  });

</script>

@endsection