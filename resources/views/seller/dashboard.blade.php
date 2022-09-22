<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css\output.css')}}" >
    <link rel="stylesheet" href="{{asset('css\app.css')}}"> 
    <link rel="stylesheet" href="{{asset('css\style.css')}}"> 
    <link href="{{asset('\node_modules\fullcalendar\main.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200')}}" />
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css')}}" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Dashboard</title>
</head>
<body>
        <!-- SideNav -->
    <aside id="sidebar" class="hidden md:overflow-y-scroll md:scrollbar md:fixed overflow-auto md:h-full md:block md:w-48 lg:w-64 bg-sky-100 md:rounded-sm">
        <div id="icons" class="px-6 pt-8">
            <div class="flex justify-between">
                <span class="material-symbols-outlined bg-blue-500 text-white p-1 rounded-md">
                    water_drop
                </span>
                <span class="material-symbols-outlined text-black cursor-pointer" onclick="closeNav()">
                    arrow_back
                </span>
            </div>
        </div>
        <div id="searchBar" class="px-6 pt-4">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <span class="material-symbols-outlined text-black" style="font-size: 20px;">
                        search
                    </span>
                </div>
                <input type="text" class="w-full rounded pl-8 px-4 py-2.5 text-xs font-light bg-gray-100 text-[#969798] placeholder-[#666666]" placeholder="Search">
            </div>
        </div>
        <div id="line" class="px-6 pt-4">
            <hr class="border-[#353535] px-6 pt-4">
        </div>
        <div id="navItems" class="px-6 pt-4">
            <ul class="flex flex-col space-y-2">
                <li id="dashboard" class="relative text-[#666666] hover:text-white">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                    </div><a href="dashboard" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400">Dashboard</a>
                </li>
                <li id="store" class="">
                    <div class="relative text-[#666666] hover:text-white flex justify-between">
                        <div class="flex items-center w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <span class="material-symbols-outlined">
                                    store
                                </span>
                            </div><a href="#" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400">Store</a>
                        </div>
                        <button class="absolute right-0 p-1">
                            <span class="material-symbols-outlined flex items-center" style="font-size: 18px;">
                                expand_more
                            </span>
                        </button>
                    </div>
                    <div class="pt-2 pl-4">
                        <ul class="flex flex-col pl-2 text-[#666666] border-l border-[#353535]">
                            <li><a href="storeprofile" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Store Profile</a></li>
                            <li><a href="pushschedule" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Push Schedule</a></li>
                            <li><a href="pullorders" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Pull Orders</a></li>
                            <li><a href="pointofsale" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Point of Sale</a></li>
                            <li><a href="subscription" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Subscription</a></li>
                            <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Advertise</a></li>
                        </ul>
                    </div>
                </li>
                <li id="products" class="">
                    <div class="relative text-[#666666] hover:text-white flex justify-between">
                        <div class="flex items-center w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <span class="material-symbols-outlined">
                                    inventory_2
                                </span>
                            </div><a href="#" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400">Products</a>
                        </div>
                        <button class="absolute right-0 p-1">
                            <span class="material-symbols-outlined flex items-center" style="font-size: 18px;">
                                expand_more
                            </span>
                        </button>
                    </div>
                    <div class="pt-2 pl-4">
                        <ul class="flex flex-col pl-2 text-[#666666] border-l border-[#353535]">
                            <li><a href="productlist" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Products List</a></li>
                        </ul>
                    </div>
                </li>
                <li id="finance" class="">
                    <div class="relative text-[#666666] hover:text-white flex justify-between">
                        <div class="flex items-center w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <span class="material-symbols-outlined">
                                    payments
                                </span>
                            </div><a href="finance" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400">Finance</a>
                        </div>

                </li>
                <li id="chat" class="relative text-[#666666] hover:text-white">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                        <span class="material-symbols-outlined">
                            chat
                        </span>
                    </div><a href="chat" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400 active">Chat</a>
                </li>
                <li id="insights" class="">
                    <div class="relative text-[#666666] hover:text-white flex justify-between">
                        <div class="flex items-center w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <span class="material-symbols-outlined">
                                    insights
                                </span>
                            </div><a href="#" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400">Insights</a>
                        </div>
                        <button class="absolute right-0 p-1">
                            <span class="material-symbols-outlined flex items-center" style="font-size: 18px;">
                                expand_more
                            </span>
                        </button>
                    </div>
                    <div class="pt-2 pl-4">
                        <ul class="flex flex-col pl-2 text-[#666666] border-l border-[#353535]">
                            <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Dashboard</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div id="hr" class="px-6 pt-4 mb-2 pb-5">
            <hr class="border-[#353535]" />
        </div>
    </aside>

    <main class="md:ml-[190px] lg:ml-[255px]">
        <header class="w-full p-[20px] bg-sky-100 shadow-md shadow-sky-200 justify-between">
            <div id="navItems" class="flex space-x-10 items-center justify-between">
                <img class="w-7 h-7" src="{{asset('img/logo.png')}}" alt="">
                <span class="flex font-Righteous absolute justify-start font-bold text-xl">RESERVOIR</span>
                <div class="w-11 h-11 flex flex-row-reverse items-center">
                    <span class=" material-symbols-outlined cursor-pointer">
                        notifications
                    </span>
                </div>
            </div>
        </header>
        

        <div id="content" class="space-y-4 md:gap-x-2 md:mr-5 md:grid md:grid-cols-4 md:mx-4 lg:gap-4 lg:mt-5">
            <!-- Weekly Sales -->
            <div class="h-[120px] flex justify-between items-center relative mt-4 bg-white rounded-lg shadow-slate-350 shadow-lg">
                <div class="absolute z-10 p-5 m-7 mt-12 sm:p-0">
                    <p class="text-sm bottom-4 relative">Weekly Sales</p>
                    <div id="weeklySales" class="text-center text-3xl text-gray-600">₱20k</div>
                </div>
                <div class="absolute w-28 right-0 m-6 md:hidden md:w-2 lg:flex lg:items-center lg:m-6 lg:w-28">
                    <img src="{{asset('img/sales.svg')}}" alt="">
                </div>
            </div>
            <!-- Total Orders -->
            <div class="h-[120px] flex items-center relative mt-4 bg-white rounded-lg shadow-slate-350 shadow-lg">
                <div class="absolute z-10 p-5 m-7 mt-12 sm:p-0">
                    <p class="text-sm relative bottom-4">Total Orders</p>
                    <div id="totalOrders" class="text-center text-3xl text-gray-600">10.4K</div>
                </div>
                <div class="absolute w-24 right-0 m-6 md:hidden lg:flex lg:items-center lg:m-6 lg:w-24">
                    <img src="{{asset('img/orders.svg')}}" alt="">
                </div>
            </div>
            <!-- Total Sales -->
            <div class="h-[120px] flex items-center relative mt-4 bg-white rounded-lg shadow-slate-350 shadow-lg">
                <div class="absolute z-10 p-5 m-7 mt-12 sm:p-0">
                    <p class="text-sm relative bottom-4">Total Sales</p>
                    <div id="totalSales" class="text-center text-3xl text-gray-600">₱90.4K</div>
                </div>
                <div class="absolute w-[95px] right-0 m-6 md:hidden lg:flex lg:items-center lg:m-6 lg:w-24">
                    <img src="{{asset('img/totalSales.svg')}}" alt="">
                </div>
            </div>
            <!-- Total Customers -->
            <div class="h-[120px] flex items-center relative mt-4 bg-white rounded-lg shadow-slate-350 shadow-lg">
                <div class="absolute z-10 p-5 m-7 mt-12 sm:p-0">
                    <p class="text-sm relative bottom-4">Total Customers</p>
                    <div id="totalCustomers" class="text-center text-3xl text-gray-600">₱5.4K</div>
                </div>
                <div class="absolute w-24 right-0 m-6 md:hidden lg:flex lg:items-center lg:m-6 lg:w-24">
                    <img src="{{asset('img/customers.svg')}}" alt="">
                </div>
            </div>
            <!-- Line Chart -->
            <div id="chart1" class="relative h-auto w-full col-span-2 bg-white rounded-lg shadow-slate-350 shadow-lg">
                <canvas id="lineChart" style="width:100%;max-width:700px;"></canvas>
            </div>
            <!-- Bar Chart -->
            <div id=" chart2" class="h-auto col-span-2 bg-white rounded-lg shadow-slate-350 shadow-lg">
                <canvas id="weeklySalesChart" style="width:100%;max-width:700px;"></canvas>
            </div>
            <!-- Table Orders Sumamry -->
            <div class="h-auto overflow-x-hidden col-span-4 relative bg-white rounded-lg shadow-slate-350 shadow-lg">
                <div class="flex justify-center p-5 bg-[#e0f2fe]">
                    <h2 class="font-bold text-gray-600 text-xl">Orders Summary</h2>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead class="border-b">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Order#
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Name
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Order
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Quantity
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Address
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Payment
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b hover:bg-blue-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Jeffrey Canlas
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Alkaline
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                4
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Sta. Teresita
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                COD
                                            </td>
                                        </tr>
                                        <tr class="border-b hover:bg-blue-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Elthon Cayetano
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Distilled
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                5
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Sapang Bato
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                E-Wallet
                                            </td>
                                        </tr>
                                        <tr class="border-b hover:bg-blue-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Ilah Zamora
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Mineral
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                10
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Lourdes Sur
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                GCASH
                                            </td>
                                        </tr>
                                        <tr class="border-b hover:bg-blue-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Brian Galang
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Purified
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                14
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Lourdes Sur East
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                E-Wallet
                                            </td>
                                        </tr>
                                        <tr class="border-b hover:bg-blue-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Bhrandel Perez
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Alkaline
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                6
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Pulung Bulu
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                COD
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="h-auto w-full relative text-center justify-center bg-white rounded-lg p-5 shadow-slate-350 shadow-lg">
                <span class="mb-40">Products Sales</span>
                <canvas id="pieChart" style="width:100%;max-width:600px;"></canvas>
            </div>

            <div class="h-auto w-auto col-span-3 relative text-center justify-center bg-white rounded-lg p-5 shadow-slate-350 shadow-lg">
                <canvas id="revenueChart" style="width:100%;max-width:800px;"></canvas>
            </div>
        </div>

    </main>

    <!----------------- SCRIPTS ----------------->
    <!-- chart.js script -->
    <script>
        const bar = document.getElementById('weeklySalesChart');
        const weeklySalesChart = new Chart(bar, {
            type: 'bar',
            data: {
                labels: ['Monday', 'Tueday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                datasets: [{
                    label: 'Weekly Sales',
                    data: [12, 19, 13, 25, 22, 16, 19],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 102, 85, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 102, 85, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const line = document.getElementById('lineChart');
        const lineChart = new Chart(line, {
            type: 'line',
            data: {
                labels: ['Monday', 'Tueday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                datasets: [{
                    label: 'Weekly Customers',
                    data: [32, 26, 35, 22, 40, 15, 20],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 102, 85, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 102, 85, 0.2)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const pie = document.getElementById('pieChart');
        const pieChart = new Chart(pie, {
            type: 'pie',
            data: {
                labels: ['Alkaline', 'Distilled', 'Purified', 'Mineral'],
                datasets: [{
                    data: [32, 26, 35, 22],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {}
        });

        const ctx = document.getElementById('revenueChart');
        const revenueChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Orders',
                    data: [1500, 1400, 1200, 1550, 1100, 1000, 1500, 1400, 1200, 1550, 1100, 1000],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }, {
                    label: 'Earnings',
                    data: [23000, 20000, 15000, 17000, 13000, 20000, 23000, 18000, 15000, 7000, 15000, 10000],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }, {
                    label: 'Refunds',
                    data: [5000, 4000, 5000, 7000, 3000, 2000, 3000, 8000, 5000, 1000, 5000, 4000],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


    <!-- CountUp,js script comment this if not needed -->
    <script>
        const weeklySales = new CountUp("weeklySales", 0, 20000);
        weeklySales.start();

        const totalOrders = new CountUp("totalOrders", 0, 12456);
        totalOrders.start();

        const totalSales = new CountUp("totalSales", 0, 94456);
        totalSales.start();

        const totalCustomers = new CountUp("totalCustomers", 0, 12589);
        totalCustomers.start();
    </script>

    <!-- googleMaps js Uncomment if needed add div with id="map" to show
    <script>
        function initMap() {
            var location = {
                lat: 15.165380,
                lng: 120.608398
            };
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script> -->
    <!--Google Map API <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDibHljaeCzRvVZwduIJpCV4lcX6zhuy2k&callback=initMap"></script> -->



    <script src="{{asset('node_modules/list.js/dist/list.min.js')}}"></script>
    <script src="{{asset('node_modules/chart.js/dist/chart.js')}}"></script>
    <script src="{{asset('node_modules/countup.js/dist/countUp.min.js')}}"></script>
    <script type="module" src="{{url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
    <script nomodule src="{{url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js')}}"></script>

</body>
</html>