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

        <!-- Content -->
        <div class="gap-y-4 grid grid-cols-1 h-auto p-5 lg:space-x-2 lg:grid-cols-3">

            <!-- Left Div -->
            <div class="p-4 rounded-md bg-white shadow-lg">
                <!-- Display Picture -->
                <div class="flex justify-center ml-auto mr-auto border-4 w-14 h-15">
                    <img class="w-14 h-14" src="{{asset('img/sample-store.png')}}" alt="">
                </div>
                <!-- Store Name -->
                <div class="block mt-3 text-center">
                    <h5 class="text-gray-900">Lorem Impsum</h5>
                    <p class="text-[13px] text-gray-500">Since 2020</p>
                </div>

                <!-- Store Info -->
                <div class="p-3 mt-5 text-sm overflow-auto">
                    <table class="ml-auto mr-auto">
                        <tbody class="text-left">
                            <tr>
                                <th class="px-5 py-2"><span>Owner</span></th>
                                <td class="px-5 py-2">Jane Doe</td>
                            </tr>
                            <tr>
                                <th class="px-5 py-2"><span>Email</span></th>
                                <td class="px-5 py-2">jdoe@cca.edu.ph</td>
                            </tr>
                            <tr>
                                <th class="px-5 py-2"><span>Contact No.</span></th>
                                <td class="px-5 py-2">+(63)9486851842</td>
                            </tr>
                            <tr>
                                <th class="px-5 py-2"><span>Location</span></th>
                                <td class="px-5 py-2">Angeles City, Pampanga</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr>

                <!-- Customer Ratings -->
                <div class="p-7">
                    <h6 class="text-xs font-bold text-[#878a99]">CUSTOMER REVIEWS</h6>
                    <div class="flex justify-between items-center bg-gray-100 p-3 rounded-md w-auto mt-5">
                        <ul class="flex justify-center">
                            <li>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                </svg>
                            </li>
                        </ul>
                        <div class="pr-5">
                            <h6 class="mb-0">3 out of 5</h6>
                        </div>
                    </div>
                    <div class="text-[#999999] text-sm flex justify-center mt-3">Total&nbsp;<span>5.50k&nbsp;</span>Reviews</div>
                </div>

                <hr>

                <!-- Cusomer Reviews -->
                <div class="p-7">
                    <h6 class="text-xs uppercase font-bold text-[#878a99]">Product Reviews</h6>
                    <!-- Review1 -->
                    <div class="border-2 rounded-md mt-5">
                        <div class="flex relative p-4 pb-6">
                            <img class="w-12 h-12 rounded-full" src="{{asset('img/3.jpg')}}" alt="">
                            <p class="mx-5 text-[#999999] italic mb-1">"Aliqua esse dolor irure minim ut labore magna."</p>
                            <div class="absolute bottom-2 left-20">
                                <ul class="flex justify-center">
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h6 class="flex justify-center text-sm text-[#999999]">by:&nbsp;<p class="italic">Nancy Drew</p>
                        </h6>
                    </div>
                    <!-- Review2 -->
                    <div class="border-2 rounded-md mt-5">
                        <div class="flex relative p-4 pb-6">
                            <img class="w-12 h-12 rounded-full" src="{{asset('img/3.jpg')}}" alt="">
                            <p class="mx-5 text-[#999999] italic mb-1">"Aliqua esse dolor irure minim ut labore magna."</p>
                            <div class="absolute bottom-2 left-20">
                                <ul class="flex justify-center">
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h6 class="flex justify-center text-sm text-[#999999]">by:&nbsp;<p class="italic">Nancy Drew</p>
                        </h6>
                    </div>
                    <a href="#" class="underline flex justify-center mt-4 hover:text-blue-400">Read More Reviews</a>
                </div>
            </div>

            <!-- Right Div -->
            <div class="p-4 rounded-md h-auto shadow-lg bg-white lg:col-span-2">
                <h2>Business Hours #</h2>
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