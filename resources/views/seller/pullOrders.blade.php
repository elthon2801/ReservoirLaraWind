<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css\output.css')}}" >
    <link rel="stylesheet" href="{{asset('css\input.css')}}" >
    <link rel="stylesheet" href="{{asset('css\app.css')}}"> 
    <link href="{{asset('node_modules\fullcalendar\main.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200')}}" />
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css')}}" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Chat</title>
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
        <!-- Header -->
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

        <!-- Page Title -->
        <div class="m-0 p-4 w-full bg-gray-100 shadow-md">
            <h2 class="font-semibold uppercase text-[14px]">Pull Orders</h2>
        </div>
        <div class="p-6">
            <div class="bg-white w-full rounded-md shadow-md h-auto">
                <div class="p-3">

                    <div class="flex mb-5 items-center justify-between">
                        <h2 class="text-gray-800 font-semibold">Order History</h2>
                        <div class="flex md:flex-row space-x-1">
                            <button class="px-3 py-2 bg-[#0ab39c] text-[14px] w-36 rounded-md font-medium text-white hover:bg-[#099885]">+ &nbsp;Create Order</button>
                            <button class="px-3 py-2 bg-[#299cdb] text-[14px] w-24 rounded-md font-medium text-white hover:bg-[#2385ba] flex items-center justify-center"><i class="fas fa-file-download"></i>
                                &nbsp;Import</button>
                            <button class="px-3 py-2 bg-[#feefec] text-[14px] w-12 rounded-md font-medium text-white hover:bg-[#f06548] flex items-center justify-center"><i class="delete fa-solid fa-trash-can text-[#f27d5c]"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="p-1 mt-3">
                        <form action="">
                            <div class="flex flex-col items-center gap-y-3 lg:gap-x-4 lg:grid lg:grid-cols-6">
                                <div class="p-1 flex items-center border-solid border w-full border-gray-400 rounded-md lg:col-span-2">
                                    <i class="fa-solid fa-magnifying-glass mr-3"></i><input class="w-full placeholder:text-sm outline-none" type="text" name="search" id="search" placeholder="Search for order ID, customer, order status or something...">
                                </div>
                                <div class="p-1 flex items-center border-solid border w-full border-gray-400 rounded-md">
                                    <input class="w-full text-sm text-gray-700 ml-1" type="date" name="" id="demo-datepicker">
                                </div>
                                <div class="p-1 flex items-center border-solid border w-full border-gray-400 rounded-md">
                                    <select class="border-none w-full text-sm text-gray-700" name="status" id="idStatus">
                                        <option value="" class="bg-gray-200" selected>Status</option>
                                        <option value="All">All</option>
                                        <option value="Cancelled">Cancelled</option>
                                        <option value="Delivered">Delivered</option>
                                        <option value="Inprogress">Inprogress</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </div>
                                <div class="p-1 flex items-center border-solid border w-full border-gray-400 rounded-md">
                                    <select class="border-none w-full text-sm text-gray-700" name="status" id="idPayment">
                                        <option value="" class="bg-gray-200" selected>Select Payment</option>
                                        <option value="All">All</option>
                                        <option value="Cancelled">GCASH</option>
                                        <option value="Delivered">COD</option>
                                        <option value="Inprogress">E-Wallet</option>
                                    </select>
                                </div>
                                <div class="p-1 cursor-pointer flex items-center space-x-1 justify-center bg-[#405189] text-white w-full hover:bg-[#364574] rounded-md">
                                    <i class="fa-solid fa-sliders"></i>
                                    <button>Filters</button>
                                        </select>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div>

                    </div>
                </div>

                <!-- Table -->
                <div class="flex flex-col">
                    <div class="overflow-x-auto">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-x-auto">
                                <table class="min-w-full" id="orderTable">
                                    <thead class="border-b">
                                        <tr>
                                            <th scope="col" class="px-6 py-4"><input type="checkbox" id="selectAll"></th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Order ID
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Customer
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Product
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Order Date
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Amount
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Payment Method
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Delivery Status
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b">
                                            <td class="px-6 py-4 flex items-center justify-center"><input type="checkbox" name="checkbox"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Ilah Zamora
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Alkaline
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                08/22/2022
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                5
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                GCASH
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <span class="bg-[#feefec] text-[#f27d5c] font-semibold text-[10px] py-1 px-2 uppercase rounded">
                                                    Cancelled
                                                </span>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center justify-center gap-x-4">
                                                    <i class="fa-solid fa-eye cursor-pointer text-[#405189]"></i>
                                                    <i class="fa-solid fa-pen cursor-pointer text-[#405189]"></i>
                                                    <i class="fa-solid fa-trash-can cursor-pointer text-[#f06548]"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 flex items-center justify-center"><input type="checkbox"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Brian Galang
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Purified
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                08/22/2022
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                10
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                E-Wallet
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <span class="bg-[#e6f7f5] text-[#4ecbdb] font-semibold text-[10px] py-1 px-2 uppercase rounded">
                                                    Delivered
                                                </span>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center justify-center gap-x-4">
                                                    <i class="fa-solid fa-eye cursor-pointer text-[#405189]"></i>
                                                    <i class="fa-solid fa-pen cursor-pointer text-[#405189]"></i>
                                                    <i class="fa-solid fa-trash-can cursor-pointer text-[#f06548]"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 flex items-center justify-center"><input type="checkbox"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Elthon Cayetano
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Mineral
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                08/22/2022
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                8
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                COD
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <span class="bg-[#eaf1fe] text-[#438af3] font-semibold text-[10px] py-1 px-2 uppercase rounded">
                                                    Inprogress
                                                </span>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center justify-center gap-x-4">
                                                    <i class="fa-solid fa-eye cursor-pointer text-[#405189]"></i>
                                                    <i class="fa-solid fa-pen cursor-pointer text-[#405189]"></i>
                                                    <i class="fa-solid fa-trash-can cursor-pointer text-[#f06548]"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 flex items-center justify-center"><input type="checkbox"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Bhrandel Jeff
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Distilled
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                08/22/2022
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                13
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                E-Wallet
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <span class="bg-[#fff8ec] text-[#f9c96b] font-semibold text-[10px] py-1 px-2 uppercase rounded">
                                                    Pending
                                                </span>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center justify-center gap-x-4">
                                                    <i class="fa-solid fa-eye cursor-pointer text-[#405189]"></i>
                                                    <i class="fa-solid fa-pen cursor-pointer text-[#405189] hover:"></i>
                                                    <i class="fa-solid fa-trash-can cursor-pointer text-[#f06548]"></i>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Page Content -->
    </main>

    


    <script src="{{asset('node_modules/list.js/dist/list.min.js')}}"></script>
    <script src="{{asset('node_modules/chart.js/dist/chart.js')}}"></script>
    <script src="{{asset('node_modules/countup.js/dist/countUp.min.js')}}"></script>
    <script type="module" src="{{asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
    <script nomodule src="{{asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js')}}"></script>
</body>
</html>