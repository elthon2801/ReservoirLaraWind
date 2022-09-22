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
            <h2 class="font-semibold uppercase text-[14px]">Products</h2>
        </div>

        <div class="gap-y-4 grid grid-cols-1 h-auto p-5 lg:space-x-5 lg:grid-cols-4">
            <!-- Left Div -->
            <div class="rounded-md bg-white shadow-lg">
                <div class="p-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-gray-900">Filters</h2>
                        <a class="underline text-sm text-blue-400" href="">Clear All</a>
                    </div>
                    <div class="border rounded-md py-2 px-3 mt-5 mb-1">
                        <input class="w-full border-0 outline-none" type="text" placeholder="Alkaline">
                    </div>
                </div>
                <hr>
                <div class="p-4">
                    <div class="flex flex-col gap-y-1 font-light">
                        <span class="uppercase text-sm text-gray-400 mb-1 font-normal">Products</span>
                        <span class="flex items-center justify-between">
                            <a class="hover:text-blue-400" href="#">
                                <h3>Alkaline</h3>
                            </a>
                            <div class="bg-gray-400 flex items-center justify-center text-xs w-3 h-3 rounded-sm text-gray-200 font-medium">5</div>
                        </span>
                        <span class="flex items-center justify-between">
                            <a class="hover:text-blue-400 active" href="#">
                                <h3>Mineral</h3>
                            </a>
                            <div class="bg-gray-400 flex items-center justify-center text-xs w-3 h-3 rounded-sm text-gray-200 font-medium">5</div>
                        </span>
                        <span class="flex items-center justify-between">
                            <a class="hover:text-blue-400" href="#">
                                <h3>Distilled</h3>
                            </a>
                            <div class="bg-gray-400 flex items-center justify-center text-xs w-3 h-3 rounded-sm text-gray-200 font-medium">5</div>
                        </span>
                        <span class="flex items-center justify-between">
                            <a class="hover:text-blue-400" href="#">
                                <h3>Purified</h3>
                            </a>
                            <div class="bg-gray-400 flex items-center justify-center text-xs w-3 h-3 rounded-sm text-gray-200 font-medium">5</div>
                        </span>
                    </div>
                </div>
                <hr>
                <div class="p-4">
                    <div class="flex flex-col gap-y-1 font-light">
                        <span class="uppercase text-sm text-gray-400 mb-1 font-normal">Price</span>
                    </div>
                    <div class="flex items-center gap-2 justify-center mt-2">
                        <input type="text" class="border w-1/2 pl-2 text-sm outline-none" value="0">
                        <span class="text-xs text-gray-600 font-medium">to</span>
                        <input type="text" class="border w-1/2 pl-2 text-sm outline-none" value="0">
                    </div>
                </div>
            </div>

            <!-- Right Div -->
            <div class="p-4 rounded-md h-auto shadow-lg bg-white lg:col-span-3">
                <div class="flex items-center gap-x-2 justify-between">
                    <button class="bg-[#0ab39c] rounded-md text-sm text-white py-2 px-5 hover:bg-[#099885]">Add Product</button>
                    <div class="border py-2 text-sm px-3 flex items-center justify-center gap-2 rounded-md">
                        <i class="fa-solid fa-magnifying-glass text-sm"></i><input class="w-full placeholder:text-sm border-0 outline-none" type="text" name="search" id="search" placeholder="Search products..">
                    </div>
                </div>
                <!-- Table -->
                <div class="flex flex-col">
                    <div class="overflow-x-auto">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-x-auto mt-5">
                                <div class="flex items-center justify-end text-sm">
                                    <div id="selection-element">
                                        <div class="my-n1 flex items-center text-gray-600">
                                            Selected
                                            <div id="select-content" class="text-body font-semibold px-1">1</div>
                                            Result
                                            <button type="button" class="p-2 underline text-[#f27d5c]" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <table class="min-w-full" id="orderTable">
                                    <thead class="border-b bg-gray-100">
                                        <tr>
                                            <th scope="col" class="px-6 py-4"><input type="checkbox" id="selectAll"></th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Product ID
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Product
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Price
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Published
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Stock
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b">
                                            <td class="px-6 py-4 flex items-center justify-center"><input type="checkbox" name="checkbox"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                            <td class="text-sm font-light px-6 py-4 whitespace-nowrap underline text-blue-400 hover:text-blue-500"><a href="product-details.php">Alkaline</a>

                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                ₱35.00
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                08/22/2022
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <span class="bg-[#0ab39c] py-1 px-2 text-[10px] font-medium text-white rounded-md">Available</span>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 flex items-center justify-center"><input type="checkbox"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                            <td class="text-sm font-light px-6 py-4 whitespace-nowrap underline text-blue-400 hover:text-blue-500">
                                                <a href="product-details.php">Distilled</a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                ₱35.00
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                08/22/2022
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <span class="bg-[#f27d5c] py-1 px-2 text-[10px] font-medium text-white rounded-md">Unavailable</span>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 flex items-center justify-center"><input type="checkbox"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                            <td class="text-sm font-light px-6 py-4 whitespace-nowrap underline text-blue-400 hover:text-blue-500">
                                                <a href="product-details.php">Purified</a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                ₱35.00
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                08/22/2022
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <span class="bg-[#0ab39c] py-1 px-2 text-[10px] font-medium text-white rounded-md">Available</span>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 flex items-center justify-center"><input type="checkbox"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                            <td class="text-sm font-light px-6 py-4 whitespace-nowrap underline text-blue-400 hover:text-blue-500">
                                                <a href="product-details.php">Mineral</a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                ₱35.00
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                08/22/2022
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <span class="bg-[#f27d5c] py-1 px-2 text-[10px] font-medium text-white rounded-md">Unavailable</span>
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
    </main>

    


    <script src="{{asset('node_modules/list.js/dist/list.min.js')}}"></script>
    <script src="{{asset('node_modules/chart.js/dist/chart.js')}}"></script>
    <script src="{{asset('node_modules/countup.js/dist/countUp.min.js')}}"></script>
    <script type="module" src="{{url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
    <script nomodule src="{{url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js')}}"></script>
</body>
</html>