<html>

<head>

    <title>plantilla </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<style>
    .altura {
        height: calc(100vh - 4rem);
    }
</style>

<body class="">
    <div class="h-16 bg-blue-300 shadow-lg shadow-b " x-data="{ open: false, login: false }">

        <div class="max-w-7xl mx-auto px-4 sm: px-6 lg:px-8 relative">
            <div class="">
                <div class="flex  justify-between  items-center h-16 ">
                    {{-- SECCION MOVIL --}}
                    <div class="sm:hidden ">
                        <div x-on:click="open =!open">
                            <span>
                                <i class="fa-solid fa-bars text-3xl"></i>
                            </span>
                        </div>

                    </div>
                    {{-- FIN DE SECCION MOVIL --}}
                    <div class=" hidden sm:flex items-center h-16">

                        <div class="mr-4">
                            <figure>
                                <img class="object-cover object-center h-12 w-12 rounded-1 rounded-xl"
                                    src="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612"
                                    alt="$product->name" />
                            </figure>
                        </div>

                     
                        <div>
                            <a href="{{ route('admin.products.index') }}"
                                class="font-semibold text-md py-1 px-5 hover:text-white hover:bg-blue-500 rounded-lg {{ request()->routeIs('admin.products.*') ? 'bg-blue-500 text-white rounded-lg' : '' }}">Productos</a>
                        </div>
                        <div>
                            <a href="{{ route('admin.categories.index') }}"
                                class="font-semibold text-md py-1 px-5 hover:text-white hover:bg-blue-500 rounded-lg {{ request()->routeIs('admin.categories.*') ? 'bg-blue-500 text-white rounded-lg' : '' }}">Categorias</a>
                        </div>
                        <div>
                            <a href="{{ route('admin.sliders.index') }}"
                                class="font-semibold text-md py-1 px-5 hover:text-white hover:bg-blue-500 rounded-lg {{ request()->routeIs('admin.sliders.*') ? 'bg-blue-500 text-white rounded-lg' : '' }}">Banners</a>
                        </div>
                    </div>
                    <div class=" flex  items-center"{{-- x-on:click="login" --}} x-on:click="login = !login">

                        <div class="mr-4">
                            @auth
                                {{Auth::user()->name}}
                            @endauth
                        </div>
                        <span class=" h-10 w-10 border-black border-4 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-user text-xl"></i>
                        </span>



                    </div>
                </div>
            </div>


            <div class=" hidden sm:hidden absolute botton-0 left-0 w-full" x-show="open" :class="{ 'hidden': !open }">
                <div class="bg-gray-100 altura w-1/2 border-r-2  border-gray-300">
                    <div>
                        <ul class="divide divide-y">
                            
                            <li
                                class=" w-full p-4 hover:bg-black hover:text-white {{ request()->routeIs('admin.products.*') ? 'bg-blue-400 text-white ' : '' }}">
                                <a href="{{ route('admin.products.index') }}">Productos</a></li>
                            <li
                                class=" w-full p-4 hover:bg-black hover:text-white {{ request()->routeIs('admin.categories.*') ? 'bg-blue-400 text-white ' : '' }}">
                                <a href="{{ route('admin.categories.index') }}">Categorias</a></li>
                            <li
                                class=" w-full p-4 hover:bg-black hover:text-white {{ request()->routeIs('admin.sliders.*') ? 'bg-blue-400 text-white ' : '' }}">
                                <a href="{{ route('admin.sliders.index') }}">Banners</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hidden absolute right-0 mr-2" x-show="login" :class="{ 'hidden': !login }">
                <div class=" ">
                    <div class="mt-1 w-36 bg-gray-100 rounded rounded-lg drop-shadow-xl border-2 border-gray-200 ">
                        <div class=" divide-y text-sm  capitalize">

                            @auth
                                <div class="px-5 py-3 hover:bg-gray-200 ">
                                    <a href="{{route('welcome')}}">Home</a>
                                </div>
                                <div class="px-5 py-3 hover:bg-gray-200 ">
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">salir</a>
                                </div>
                                <form id="logout-form" method="POST" class="hidden" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            @else
                                <div class="px-5 py-3 hover:bg-gray-200 ">
                                    <a href="">Registrase</a>
                                </div>
                                <div class="px-5 py-3 hover:bg-gray-200 ">
                                    <a href="">Iniciar Sesion</a>
                                </div>
                            @endauth

                        </div>

                    </div>

                </div>
            </div>

        </div>


    </div>


    <div class=" max-w-7xl mx-auto px-4 sm: px-6 lg:px-8 ">
        @yield('content')
    </div>

    @livewireScripts
</body>

</html>
