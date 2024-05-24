<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta description="Dit is de Lego land site van Doetinchem">

        <title>LegoLand Doetinchem</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        {{-- container --}}
        <div class="w-full">
            {{-- nav-bar --}}

            @auth
            {{-- navbar admin page --}}
            <nav class="relative px-4 py-4 flex justify-between items-center bg-customYellow uppercase w-full">
                {{-- image --}}
               <div>
                   <a href="/"><img class="w-1/3" src="{{ Vite::asset('resources/images/LEGOLAND_PARKS_LOGO.svg') }}" alt="LegoLand logo"></a>
               </div>
               <div class="xl:hidden">
                   <button class="navbar-burger flex items-center text-black p-3">
                       <svg class="block h-6 w-6  fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <title>Menu</title>
                           <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                       </svg>
                   </button>
               </div>
               <ul class="hidden absolute top-1/2 left-1/2 customLg:mx-auto customLg:flex customLg:items-center customLg:w-auto customLg:space-x-6">
                   <li class="text-gray-300">
                       <a href="/dashboard"><li>Dashboard</li></a>
                   </li>
                   <li class="text-gray-300">
                       <a href="/attracties"><li>Attracties</li></a>
                   </li>
                   <li> 
                       <a href="/openingstijden"><li>Openingstijden</li></a>
                   </li>
                   <li class="text-gray-300">
                       <a href="/bestellingen"><li>Prijzen</li></a>
                   </li>
                   <li>
                        <a href="/contact"><li>Contact</li></a>
                    </li>
                   <li>
                        <a href="/accomdatie"><li>Accomdatie</li></a>
                    </li>
                    <li>
                        <a href="/logout">Logout</a>
                    </li>
                   
               </ul>
            </nav>
            {{-- hamburger admin menu --}}
            <div class="navbar-menu relative z-50 hidden">
                {{-- Hamburger menu --}}
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 bg-customMediumDarkYellow px-6 border-r overflow-y-auto">
                    <div class="flex items-center mb-8">
                        <a class="mr-auto text-3xl font-bold leading-none" href="#">
                
                        </a>
                        <button class="navbar-close">
                            <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul class="uppercase">
                            <li class="mb-1 text-m font-medium ">
                                <a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/dashboard">Dashboard</a>
                            </li>
                            <li class="mb-1 text-m font-medium ">
                                <a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/attracties">Attracties</a>
                            </li>
                            <li class="mb-1">
                            </li><a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/openingstijden">Openingstijden</a>
                            <li class="mb-1">
                            </li><a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/bestellingen">Prijzen</a>
                            <li class="mb-1">
                            </li><a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/contact">Contact</a>                        </ul>
                            <li class="mb-1">
                            </li><a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/accomdatie">Accomdatie</a>                        </ul>
                            <li class="mb-1">
                            </li><a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/logout">Logout</a>                        </ul>
                    </div>
                </nav>
            </div>
              
            @else
            <nav class="relative px-4 py-4 flex justify-between items-center bg-customYellow uppercase w-full">
                 {{-- image --}}
                <div>
                    <a href="/"><img class="w-1/3" src="{{ Vite::asset('resources/images/LEGOLAND_PARKS_LOGO.svg') }}" alt="LegoLand logo"></a>
                </div>
                <div class="customLg:hidden">
                    <button class="navbar-burger flex items-center text-black p-3">
                        <svg class="block h-6 w-6  fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <ul class="hidden absolute top-1/2 customLg:left-[23%] xl:left-[26%]  customLg:mx-auto customLg:flex customLg:items-center customLg:w-auto customLg:space-x-6">
                    <li class="text-gray-300">
                        <a href="/"><li>Home</li></a>
                    </li>
                    <li class="text-gray-300">
                        <a href="/attracties"><li>Attracties</li></a>
                    </li>
                    <li> 
                        <a href="/openingstijden"><li>Openingstijden</li></a>
                    </li>
                    <li class="text-gray-300">
                        <a href="/bestellingen"><li>Prijzen</li></a>
                    </li>
                    <li><a href="/contact"><li>Contact</li></a></li>
                    <li><a href="/accomodaties"><li>Accomodatie</li></a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                </ul>
             </nav> 
            <div class="navbar-menu relative z-50 hidden">
                {{-- Hamburger menu --}}
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 bg-customMediumDarkYellow px-6 border-r overflow-y-auto">
                    <div class="flex items-center mb-8">
                        <a class="mr-auto text-3xl font-bold leading-none" href="#">
                
                        </a>
                        <button class="navbar-close">
                            <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul class="uppercase">
                            <li class="mb-1 text-m font-medium ">
                                <a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/">Home</a>
                            </li>
                            <li class="mb-1 text-m font-medium ">
                                <a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/attracties">Attracties</a>
                            </li>
                            <li class="mb-1">
                            </li><a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/openingstijden">Openingstijden</a>
                            <li class="mb-1">
                            </li><a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/bestellingen">Prijzen</a>
                            <li class="mb-1">
                            </li><a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/contact">Contact</a>
                            <li class="mb-1">
                            </li><a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/login">Login</a>
                            <li class="mb-1">
                            </li><a class="block p-4 text-sm font-semibold text-black hover:bg-blue-50 hover:text-customYellow rounded" href="/register">Register</a>
                        </ul>
                    </div>
                </nav>
            </div>
           @endauth
            @yield('content')
            {{-- footer --}}
            @auth
            <div class="bg-customYellow py-5 w-full flex mt-20">
                <div class="md:w-[65%] flex">
                    <a href="/"><img class="w-1/2 lg:w-1/3 mx-7" src="{{ Vite::asset('resources/images/LEGOLAND_PARKS_LOGO.svg') }}" alt="LegoLand Logo"></a>
                </div>
                <div class="lg:w-auto lg:mx-auto lg:flex lg:items-center lg:space-x-6 list-none">
                    <ul class="lg:flex justify-between space-x-4">
                        <a href="/dashboard"><li>Dashboard</li></a>
                        <a href="/attracties"><li>Attracties</li></a>
                        <a href="/openingstijden"><li>Openingstijden</li></a>
                        <a href="/bestellingen"><li>Prijzen</li></a>
                        <a href="/contact"><li>Contact</li></a>
                        <a href="/accomodaties"><li>Accomodatie</li></a>
                    </ul>
                </div>
            </div>
            @else
            <div class="bg-customYellow py-5 w-full flex mt-20">
                <div class="md:w-[65%] flex">
                    <a href="/"><img class="w-1/2 lg:w-1/3 mx-7" src="{{ Vite::asset('resources/images/LEGOLAND_PARKS_LOGO.svg') }}" alt="LegoLand Logo"></a>
                </div>
                <div class="lg:w-auto lg:mx-auto lg:flex lg:items-center lg:space-x-6 list-none">
                    <ul class="lg:flex justify-between space-x-4">
                        <a href="/"><li>Home</li></a>
                        <a href="/attracties"><li>Attracties</li></a>
                        <a href="/openingstijden"><li>Openingstijden</li></a>
                        <a href="/bestellingen"><li>Prijzen</li></a>
                        <a href="/contact"><li>Contact</li></a>
                        <a href="/accomodaties"><li>accomodaties</li></a>
                    </ul>
                </div>
            </div>
            
            @endauth
        </div>
    </body>
</html>