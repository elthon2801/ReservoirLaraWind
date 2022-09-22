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


    <title>Wallet</title>
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

        <div class="grid gap-y-5 p-3 md:p-7 lg:gap-x-6 lg:grid-cols-4">
            <!-- Left Div -->
            <div class="md:col-span-3">
                <!-- Card -->
                <div class="bg-[#005a8a] shadow-lg p-7 rounded-3xl">
                    <!-- Card Top -->
                    <div class="flex items-center justify-between">
                        <span class="flex flex-col">
                            <h2 class="text-white font-medium text-lg">My Card</h2>
                            <p class="text-xs text-gray-400">Reservoir</p>
                        </span>
                        <span class="flex items-center gap-x-3">
                            <i class="fa-solid fa-gear bg-white px-2 py-2 rounded-lg text-xl cursor-pointer hover:bg-[#0d4266] hover:text-white"></i>
                            <div class="bg-white px-4 py-2 rounded-lg text-sm cursor-pointer hover:bg-[#0d4266] hover:text-white">View All</div>
                        </span>
                    </div>
                    <!-- Card body -->
                    <div class="gap-x-3 grid lg:grid-cols-6">
                        <!--Card Body Left -->
                        <div class="mt-6 col-span-3">
                            <div class="bg-sky-200 rounded-2xl">
                                <div class="h-[70px] inline-block"></div>
                                <div class="border-t p-5 inline-block w-full">
                                    <h2 class="text-w text-[#005a8a] text-lg">7812 2139 0823 XXXX</h2>
                                    <div class="flex gap-x-5">
                                        <span class="flex flex-col text-[#005a8a]">
                                            <small class="uppercase mt-3 text-[10px] font-extralight">Valid Thru</small>
                                            <h6 class="text-center text-sm">08/24</h6>
                                        </span>
                                        <span class="flex flex-col text-[#005a8a]">
                                            <small class="uppercase mt-3 text-[10px] font-extralight">CW</small>
                                            <h6 class="text-center text-sm">09X</h6>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Card body-right -->
                        <div class="col-span-3 p-3 ml-6 mt-3">
                            <small class="font-medium text-gray-400">Available Amount</small>
                            <h2 class="font-semibold text-xl text-white"><i class="fa-solid fa-peso-sign"></i>55,000</h2>
                            <div class="flex gap-x-16 mt-5">
                                <span class="flex flex-col">
                                    <small class="font-medium text-gray-400">Card Balance</small>
                                    <h2 class="font-semibold text-white"><i class="fa-solid fa-peso-sign"></i>53,817.30</h2>
                                </span>
                                <span class="flex flex-col">
                                    <small class="font-medium text-gray-400">Credit Limit</small>
                                    <h2 class="font-semibold text-white"><i class="fa-solid fa-peso-sign"></i>60,000</h2>
                                </span>
                            </div>
                            <div class="flex gap-x-3 mt-10">
                                <span class="border px-2 py-1 rounded-md text-gray-300 text-xs"><i class="fa-regular fa-paper-plane"></i></span>
                                <span class="border px-2 py-1 rounded-md text-gray-300 text-xs"><i class="fa-solid fa-sliders"></i></span>
                                <span class="border px-2 py-1 rounded-md text-gray-300 text-xs"><i class="fa-solid fa-arrows-rotate"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-7 bg-white pb-10 rounded-xl shadow-lg mt-5">
                    <div class="flex items-center justify-between">
                        <span class="flex flex-col">
                            <h2 class="text-black font-semibold tracking-tight text-lg">Transactions</h2>
                            <p class="text-xs text-gray-400">Reservoir</p>
                        </span>
                        <span class="flex items-center gap-x-3">
                            <div class="bg-[#005a8a] text-white px-4 py-2 rounded-lg text-sm cursor-pointer hover:bg-[#bae6fd] hover:text-black">View All</div>
                        </span>
                    </div>
                    <table class="table-auto mt-10 flex items-center justify-center">
                        <tbody>
                            <tr>
                                <td class=""><i class="fa-solid fa-arrow-up-right-from-square mr-4 p-2 bg-[#bae6fd] rounded-xl text-[#005a8a]"></i>Sent Money To</td>
                                <td class="pl-10">Elthon Ceyetano</td>
                                <td class="pl-10">-<i class="fa-solid fa-peso-sign"></i>51,500</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="pt-3"><i class="fa-regular fa-square-caret-down mr-4 p-2 bg-[#725ffe] rounded-xl text-white"></i>Received Money From</td>
                                <td class="pl-10 pt-3">Jeffrey Canlas</td>
                                <td class="pl-10 pt-3"><i class="fa-solid fa-peso-sign"></i>55,000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="pt-3"><i class="fa-solid fa-arrow-up-right-from-square mr-4 p-2 bg-[#bae6fd] rounded-xl text-[#005a8a]"></i>Sent Money To</td>
                                <td class="pl-10 pt-3">Ilah Zamora</td>
                                <td class="pl-10 pt-3">-<i class="fa-solid fa-peso-sign"></i>14,500</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <!-- Right Div -->
            <div class="p-7 bg-white rounded-xl shadow-lg md:col-span-3 lg:col-span-1">
                <h2 class="font-bold text-xl tracking-tight">Quick Action</h2>
                <div class="flex items-center justify-center">
                    <div class="inline p-10 md:p-6 lg:p-5">
                        <i class="fa-solid fa-plus  w-[60px] p-5 rounded-xl cursor-pointer text-center bg-[#bae6fd] text-[#005a8a ] hover:bg-[#005a8a] hover:text-white"></i>
                        <h2 class="flex items-center justify-center mb-6 mt-3 text-gray-500 tracking-tighter font-medium">Top up</h2>
                        <i class="fa-regular fa-paper-plane w-[60px] p-5 rounded-xl cursor-pointer text-center bg-[#bae6fd] text-[#005a8a ] hover:bg-[#005a8a] hover:text-white"></i>
                        <h2 class="flex items-center justify-center mt-3 text-gray-500 tracking-tighter font-medium">Pay</h2>
                    </div>
                    <div class="inline p-10 md:p-6 lg:p-5">
                        <i class="fa-solid fa-arrow-up-right-from-square w-[60px] p-5 rounded-xl cursor-pointer text-center bg-[#bae6fd] text-[#005a8a ] hover:bg-[#005a8a] hover:text-white"></i>
                        <h2 class="flex items-center justify-center mb-6 mt-3 text-gray-500 tracking-tighter font-medium">Send</h2>
                        <i class="fa-regular fa-square-caret-down w-[60px] p-5 rounded-xl cursor-pointer text-center bg-[#bae6fd] text-[#005a8a ] hover:bg-[#005a8a] hover:text-white"></i>
                        <h2 class="flex items-center justify-center mt-3 text-gray-500 tracking-tighter font-medium">Request</h2>
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