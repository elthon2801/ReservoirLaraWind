<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css\output.css')}}" >
    <link rel="stylesheet" href="{{url('css\input.css')}}" >
    <link rel="stylesheet" href="{{url('css\app.css')}}"> 
    <link href="{{ url('node_modules\fullcalendar\main.css')}}" rel="stylesheet" type="text/css" />
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
            <h2 class="font-semibold uppercase text-[14px]">Product Details</h2>
        </div>

        <!-- Page Content -->
        <div class="p-6">
            <div class="bg-white rounded-md shadow-md p-4 grid md:grid-cols-4">
                <!-- Image -->
                <div class="shadow-md bg-gray-100 p-4 flex items-center justify-center md:col-span-1">
                    <img class="w-auto h-[400px]" src="{{asset('img/mockup1.png')}}" alt="">
                </div>


                <div class="overflow-auto md:pl-5 md:col-span-3">
                    <div class="flex items-center justify-between p-2">
                        <h3 class="text-lg text-gray-700 font-medium">Alkaline Water <small class="text-gray-500">(one container)</small></h3>
                        <i class="fa-solid fa-pen bg-gray-200 p-3 text-[8px] rounded-sm cursor-pointer hover:bg-gray-300"></i>
                    </div>
                    <div class="flex items-center px-2 text-[13px]">
                        <span class="text-blue-400 border-r-2 pr-3">Alkaline</span>
                        <span class="pl-3 flex font-medium border-r-2 pr-2">
                            <p class="text-gray-500">Seller:</p>&nbsp;Reservoir
                        </span>
                        <span class="pl-3 flex font-medium">
                            <p class="text-gray-500">Published:</p>&nbsp;08/23/2022
                        </span>
                    </div>
                    <div class="p-2 text-sm text-[#f7b84b] flex items-center mt-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <p class="text-gray-500 font-light">(5.50k Customer Reviews)</p>
                    </div>
                    <div class="p-2 grid gap-y-3 md:gap-x-8 md:grid-cols-4">
                        <div class="flex py-2 border w-full px-6 items-center">
                            <span class="rounded-full bg-[#0fb49e] p-1 px-2 text-xs text-white mr-5"><i class="fa-solid fa-peso-sign"></i></span>
                            <span class="flex flex-col">
                                <p class="text-sm text-gray-600">Price:</p>
                                <h3 class="text-gray-600 font-medium">₱35.00</h3>
                            </span>
                        </div>
                        <div class="flex py-2 border w-full px-6 items-center">
                            <span class="text-[#0fb49e] mr-5"><i class="fa-solid fa-clone"></i></span>
                            <span class="flex flex-col">
                                <p class="text-sm text-gray-600">No. of Orders:</p>
                                <h3 class="text-gray-600 font-medium">₱35.00</h3>
                            </span>
                        </div>
                        <div class="flex py-2 border w-full px-6 items-center">
                            <span class="text-[#0fb49e] mr-5"><i class="fa-solid fa-layer-group"></i></span>
                            <span class="flex flex-col">
                                <p class="text-sm text-gray-600">Available Stocks:</p>
                                <h3 class="text-gray-600 font-medium">₱35.00</h3>
                            </span>
                        </div>
                        <div class="flex py-2 border w-full px-6 items-center">
                            <span class="text-[#0fb49e] mr-5"><i class="fa-solid fa-sack-dollar"></i></span>
                            <span class="flex flex-col">
                                <p class="text-sm text-gray-600">Total Revenue:</p>
                                <h3 class="text-gray-600 font-medium">₱35.00</h3>
                            </span>
                        </div>
                    </div>
                    <section class="mt-7">
                        <h3 class="text-gray-600 text-sm font-medium">Description:</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quaerat quibusdam tempore maiores pariatur quas quia natus a? Sapiente fugiat non voluptatibus nulla adipisci. Voluptates harum unde laudantium dolor velit.</p>
                    </section>
                </div>
            </div>
        </div>
    </main>


    


    <script src="{{url('node_modules/list.js/dist/list.min.js')}}"></script>
    <script src="{{url('node_modules/chart.js/dist/chart.js')}}"></script>
    <script src="{{url('node_modules/countup.js/dist/countUp.min.js')}}"></script>
    <script type="module" src="{{url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
    <script nomodule src="{{url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js')}}"></script>
</body>
</html>