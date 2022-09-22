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
            <h2 class="font-semibold uppercase text-[14px]">Chat</h2>
        </div>

        <div class="p-3 grid md:p-6 md:grid-cols-5">
            <!-- Left Side -->
            <div class="hidden h-72 p-5 md:grid md:space-y-4 md:col-span-2">
                <!-- chat header -->
                <div class="flex items-center justify-between">
                    <span class="flex-col leading-4">
                        <h2 class="font-medium text-xl">Chats</h2>
                        <small class="text-gray-500">Recent Chats</small>
                    </span>
                    <span class="bg-gradient-to-r from-blue-300 to-blue-500 p-3 rounded-md text-white text-sm cursor-pointer relative hover:bottom-2 hover:shadow-lg hover:font-bold hover:text-[15px]"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Create New Chat</span>
                </div>
                <!-- search -->
                <div class="p-2 flex items-center gap-x-2 bg-white rounded-md mt-5">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="outline-0 w-full" placeholder="Search">
                </div>
                <!-- Convos -->
                <div class="h-[450px] space-y-4 gap-4 scrollbar overflow-auto">
                    <!-- conversations -->
                    <div class="p-4 rounded-md bg-white shadow-md shadow-stone-200 relative hover:right-2 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{asset('img/3.jpg')}}" class="h-8 w-8 rounded-full" alt="">
                                <div class="flex-col leading-3 ml-2">
                                    <h2 class="font-semibold text-sm">Etlhon John</h2>
                                    <span class="flex items-center space-x-1 text-blue-400 font-semibold md:hidden lg:flex">
                                        <i class="fa-solid fa-ellipsis"></i>
                                        <small>writes</small>
                                    </span>
                                </div>
                            </div>
                            <small class="text-[10px] font-semibold text-gray-500">1 Minute ago</small>
                        </div>
                        <section class="text-left mt-2 text-sm text-gray-500 font-medium md:hidden lg:flex">
                            <p>Voluptate quis ex sit aute velit do irure officia ullamco. Incididunt ut eiusmod pariatur id consequat est duis reprehenderit eu duis ex laborum.</p>
                        </section>
                    </div>
                    <div class="p-4 rounded-md bg-white shadow-md shadow-stone-200 relative hover:right-2 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{asset('img/3.jpg')}}" class="h-8 w-8 rounded-full" alt="">
                                <div class="flex-col leading-3 ml-2">
                                    <h2 class="font-semibold text-sm">Brian Galang</h2>
                                    <span class="flex items-center space-x-1 text-blue-400 font-semibold md:hidden lg:flex">
                                        <i class="fa-solid fa-circle text-[8px]"></i>
                                        <small>records voice message</small>
                                    </span>
                                </div>
                            </div>
                            <small class="text-[10px] font-semibold text-gray-500">1 Minute ago</small>
                        </div>
                        <section class="text-left mt-2 text-sm md:hidden lg:flex">
                            <p><i class="fa-solid fa-microphone text-xs"></i> Voice message (01:15)</p>
                        </section>
                    </div>
                    <div class="p-4 rounded-md bg-white shadow-md shadow-stone-200 relative hover:right-2 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{asset('img/3.jpg')}}" class="h-8 w-8 rounded-full" alt="">
                                <div class="flex-col leading-3 ml-2">
                                    <h2 class="font-semibold text-sm">Ilah Zamora</h2>
                                    <span class="flex items-center space-x-1 text-blue-400 font-semibold md:hidden lg:flex">
                                        <small>last online 5 hours ago</small>
                                    </span>
                                </div>
                            </div>
                            <small class="text-[10px] font-semibold text-gray-500">1 Minute ago</small>
                        </div>
                        <section class="text-left mt-2 text-sm md:hidden lg:flex">
                            <p>Voluptate quis ex sit aute velit do irure officia ullamco. Incididunt ut eiusmod pariatur id consequat est duis reprehenderit eu duis ex laborum.</p>
                        </section>
                    </div>
                    <div class="p-4 rounded-md bg-white shadow-md shadow-stone-200 relative hover:right-2 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{asset('img\3.jpg')}}" class="h-8 w-8 rounded-full" alt="">
                                <div class="flex-col leading-3 ml-2">
                                    <h2 class="font-semibold text-sm">Bhrandel Perez</h2>
                                    <span class="flex items-center space-x-1 text-blue-400 font-semibold md:hidden lg:flex">
                                        <i class="fa-solid fa-ellipsis"></i>
                                        <small>writes</small>
                                    </span>
                                </div>
                            </div>
                            <small class="text-[10px] font-semibold text-gray-500">1 Minute ago</small>
                        </div>
                        <section class="text-left mt-2 text-sm md:hidden lg:flex">
                            <p>Voluptate quis ex sit aute velit do irure officia ullamco. Incididunt ut eiusmod pariatur id consequat est duis reprehenderit eu duis ex laborum.</p>
                        </section>
                    </div>
                    <div class="p-4 rounded-md bg-white shadow-md shadow-stone-200 relative hover:right-2 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{asset('img/3.jpg')}}" class="h-8 w-8 rounded-full" alt="">
                                <div class="flex-col leading-3 ml-2">
                                    <h2 class="font-semibold text-sm">Jeffrey Canlas</h2>
                                    <span class="flex items-center space-x-1 text-blue-400 font-semibold md:hidden lg:flex">
                                        <i class="fa-solid fa-ellipsis"></i>
                                        <small>writes</small>
                                    </span>
                                </div>
                            </div>
                            <small class="text-[10px] font-semibold text-gray-500">1 Minute ago</small>
                        </div>
                        <section class="text-left mt-2 text-sm md:hidden lg:flex">
                            <p>Voluptate quis ex sit aute velit do irure officia ullamco. Incididunt ut eiusmod pariatur id consequat est duis reprehenderit eu duis ex laborum.</p>
                        </section>
                    </div>
                    <div class="p-4 rounded-md bg-white shadow-md shadow-stone-200 relative hover:right-2 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{asset('img/3.jpg')}}" class="h-8 w-8 rounded-full" alt="">
                                <div class="flex-col leading-3 ml-2">
                                    <h2 class="font-semibold text-sm">Jay-r Avellana</h2>
                                    <span class="flex items-center space-x-1 text-blue-400 font-semibold md:hidden lg:flex">
                                        <i class="fa-solid fa-ellipsis"></i>
                                        <small>writes</small>
                                    </span>
                                </div>
                            </div>
                            <small class="text-[10px] font-semibold text-gray-500">1 Minute ago</small>
                        </div>
                        <section class="text-left mt-2 text-sm md:hidden lg:flex">
                            <p>Voluptate quis ex sit aute velit do irure officia ullamco. Incididunt ut eiusmod pariatur id consequat est duis reprehenderit eu duis ex laborum.</p>
                        </section>
                    </div>
                </div>
            </div>

            <!-- Right Side -->
            <div class="h-[600px] relative bg-white rounded-md shadow-md col-span-3">
                <!-- Chat Pane header -->
                <div class="flex items-center justify-between">
                    <div class="flex p-5 items-center">
                        <img src="{{asset('img/3.jpg')}}" class="h-8 w-8 rounded-full cursor-pointer" alt="">
                        <div class="flex-col leading-3 ml-2">
                            <h2 class="font-semibold text-sm">Ilah Zamora</h2>
                            <span class="flex items-center text-xs space-x-1 text-blue-400 font-semibold">
                                <small>last online 5 hours ago</small>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <i class="fa-solid fa-ellipsis-vertical px-3 py-2 rounded-full bg-white shadow-md cursor-pointer"></i>
                    </div>
                </div>
                <hr>

                <!-- Chat Bubbles - Di ko pa alam pano gawin -->



                <!-- Chat Pane Input -->
                <div class="absolute bottom-0 w-full">
                    <div class="flex border-t">

                        <div class="p-5 w-full">
                            <input type="text" class="outline-0 w-full" placeholder="Type a message here">
                        </div>
                        <div class="bg-[#479cf6] flex items-center justify-center p-5 cursor-pointer hover:bg-blue-500">
                            <i class="fa-solid fa-paper-plane text-white"></i>
                        </div>
                    </div>
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