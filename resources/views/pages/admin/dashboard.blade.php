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
            <div class="" id="donut-chart-container">
              <canvas id="donut-chart"></canvas>
            </div>
          </div>
          <div class="col-span-3">
            <table class="w-full text-left">
              <thead class="text-gray uppercase bg-culture font-brandon-bold">
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
                    <div class="bg-green h-2 w-2 rounded-xl"></div>
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
                    <div class="bg-blue h-2 w-2 rounded-xl"></div>
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
          <div class="" id="hbar-chart-container">
            <canvas id="hbar-chart"></canvas>
          </div>
          <!-- <div class="space-y-3">
            <?php
            $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
            $colors = ['bg-blue', 'bg-green', 'bg-crimson', 'bg-orange', 'bg-yellow', 'bg-sky'];
            $dataValues = [2470, 4800, 1000, 800, 2470, 1200]; // Example data values for each month

            for ($i = 0; $i < count($months); $i++) {
              $month = $months[$i];
              $color = $colors[$i];
              $dataValue = $dataValues[$i];
            ?>
              <div class="grid grid-cols-12 items-center">
                <p><?= $month ?></p>
                <div id="<?= strtolower($month) ?>-bar" class="col-span-11 <?= $color ?> h-6 rounded-tr-lg rounded-br-lg relative group" style="width: <?= ($dataValue / 5000) * 100 ?>%;">
                  <div class="opacity-0 group-hover:opacity-100 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 text-white px-2 py-1 rounded">
                    <?= $dataValue ?>₱
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-12 items-center">
                <div></div>
                <hr class="col-span-11 border border-dashed border-lavender">
              </div>
            <?php
            }
            ?>
          </div> -->
        </div>
        <div class="shadow-leftBottom p-5 rounded-md space-y-4">
          <span>
            <p class="text-lg text-gray leading-5">Average Daily Sales</p>
            <h3 class="text-4xl font-brandon-bold">200 Sold Items</h3>
          </span>
          <div class="" id="bar-chart-container">
            <canvas id="bar-chart"></canvas>
          </div>
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
          <button class="text-lg bg-background w-full py-2 hover:bg-green/10 rounded"><a href="{{ route('transactions') }}">Check Transactions</a></button>
          <button class="text-lg bg-background w-full py-2 hover:bg-green/10 rounded"><a href="{{ route('admin.plantcare.index') }}">Manage Inventory</a></button>
          <button class="text-lg bg-background w-full py-2 hover:bg-green/10 rounded"><a href="{{ route('admin.products.index') }}">Modify Plant Care</a></button>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
<script>
  // doughnut chart
  var ctx = document.getElementById('donut-chart').getContext('2d');

  var donutData = {
    datasets: [{
      data: [5, 10, 20, 15, 50],
      backgroundColor: ["#E31B42", "#F2441D", "#11485F", "#FECA26", "#0A6611"],
    }],
  };

  var myDonutChart = new Chart(ctx, {
    type: 'doughnut',
    data: donutData,
    options: {
      cutout: '70%',
    },
  });

  // bar graph horizontal
  const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
  const dataValues = [2470, 4800, 1000, 800, 2470, 1200]; // Example data values for each month

  // Create a canvas element for the chart
  const hBarCtx = document.getElementById('hbar-chart').getContext('2d');

  // Create the bar chart
  const hBarChart = new Chart(hBarCtx, {
    type: 'bar',
    data: {
      labels: months,
      datasets: [{
        borderRadius: 8,
        barThickness: 25,
        data: dataValues,
        backgroundColor: ["#0A6611", "#E31B42", "#F2441D", "#11485F", "#FECA26", "#65B5FF"],
      }],
    },
    options: {
      indexAxis: 'y',
      plugins: {
        legend: {
          display: false
        }
      }
    },
  });

  // bar graph vertical
  const days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
  const values = [20, 30, 50, 20, 10, 65, 45];

  // Create a canvas element for the chart
  const barCtx = document.getElementById('bar-chart').getContext('2d');

  // Create the bar chart
  const barChart = new Chart(barCtx, {
    type: 'bar',
    data: {
      labels: days,
      datasets: [{
        borderRadius: 8,
        barThickness: 35,
        data: values,
        backgroundColor: ["#0A6611", "#E31B42", "#F2441D", "#11485F", "#FECA26", "#65B5FF"],
      }],
    },
    options: {
      plugins: {
        legend: {
          display: false
        }
      }
    },
  });
</script>

@endsection