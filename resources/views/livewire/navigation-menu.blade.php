<header {{-- class="bg-green-400 sticky top-0 " style="z-index: 900" --}}>

    <div class="max-w-7xl mx-auto px-4 sm: px-6 lg:px-8  p-1 relative">

        <div class="flex justify-between my-1">
            <div class="flex ">
                <div class="mr-3">
                    <ul>
                        <li class="menu-item">
                            <a title="Hotline: (+123) 456 789" href="#"><span class="text-red-500 pr-1"><i
                                        class="fa-solid fa-mobile-screen"></span></i></span>Hotline: (+123) 456 789</a>
                        </li>
                    </ul>
                </div>
                {{-- IDIOMA --}}

                <div x-data="{ open: false }">
                    <div @click="open = !open" class="relative border-r-2 border-gray-400  pr-2"
                        x-on:click.away="open = false">
                        <div>
                            <a href="#" class="inline">Español</a>


                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <div class="hidden absolute -ml-6" :class="{ 'hidden ': !open }">
                            <ul class="bg-white w-auto h-auto p-1 divide divide-y">
                                <li class="hover:bg-red-400 capitalize hover:text-white px-2">Namenakusei</li>
                                <li class="hover:bg-red-400 capitalize hover:text-white px-2">Italiano</li>
                                <li class="hover:bg-red-400 capitalize hover:text-white px-2">Germano</li>
                                <li class="hover:bg-red-400 capitalize hover:text-white px-2">Frances</li>

                            </ul>
                        </div>
                    </div>
                </div>
                {{-- MONEDA --}}
                <div class="" x-data="{ moneda: false }">
                    <div @click="moneda = !moneda" class="relative border-r-2 border-gray-400  px-2"
                        x-on:click.away="moneda = false">
                        <div>
                            <a href="#" class="inline">Soles (PEN)</a>


                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <div class="hidden absolute -ml-2" :class="{ 'hidden ': !moneda }">
                            <ul class="bg-white w-auto h-auto p-1 divide divide-y">
                                <li class="hover:bg-red-400 capitalize hover:text-white px-2">Dolar (USD)</li>
                                <li class="hover:bg-red-400 capitalize hover:text-white px-2">Euro (EUR)</li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
           

           
        </div>
        {{-- segunda seccion --}}
        <div class="h-20 bg-red-500 w-full flex items-center "">
            <div>
                <figure>
                    <img class="h-20 w-36  object-cover object-center"
                        src="https://cdn.pixabay.com/photo/2013/07/18/20/26/sea-164989_960_720.jpg" alt="">
                </figure>
            </div>
            {{-- SEARCH --}}
            <div class="mx-4 w-full ">
                @livewire('header-search-component')
            </div>
            {{-- CARRITO --}}
            <div class=" relative hidden md:block">

                <a href="{{ route('product.cart') }}">
                    <span class=" h-10 w-10 border-black  flex items-center justify-center " class="hover:text-white">
                        <i class="text-3xl fa-solid fa-cart-shopping">
                            @if (Cart::count())
                                <span
                                    class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ Cart::count() }}</span>
                            @else
                                <span
                                    class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
                            @endif

                        </i>
                    </span>
                </a>

            </div>
            {{-- LOGIN --}} 
            <div class="mx-4" x-data="{ login: false }">
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
                <div class="hidden absolute right-0 mr-6" x-show="login" :class="{ 'hidden': !login }">
                    <div class=" ">
                        <div class="mt-1 w-36 bg-gray-100 rounded rounded-lg drop-shadow-xl border-2 border-gray-200 ">
                            <div class=" divide-y text-sm  capitalize">
    
                                @auth
                                    <div class="px-4 py-3 hover:bg-gray-200 text-center">
                                        <a href="{{route('admin.products.index')}}">Productos</a>
                                    </div>
                                    <div class="px-4 py-3 hover:bg-gray-200 text-center">
                                        <a href="{{route('admin.categories.index')}}">Categorias</a>
                                    </div>
                                    <div class="px-4 py-3 hover:bg-gray-200 text-center">
                                        <a href="{{route('admin.sliders.index')}}">Banners</a>
                                    </div>
                                    <div class="px-4 py-3 hover:bg-gray-200 ">
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">salir</a>
                                    </div>
                                    <form id="logout-form" method="POST" class="hidden" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                @else
                                    <div class="px-4 py-3 hover:bg-gray-200 ">
                                        <a href="">Registrase</a>
                                    </div>
                                    <div class="px-4 py-3 hover:bg-gray-200 ">
                                        <a href="">Iniciar Sesion</a>
                                    </div>
                                @endauth
    
                            </div>
    
                        </div>
    
                    </div>
                </div>
            </div>

        </div>
        {{-- tercera fila --}}
        <div class="bg-black flex font-semibold text-md capitalize text-white mt-1">
            <div class="py-2 px-4 hover:bg-red-500 hover:text-black"><a href="{{route('welcome')}}"><i
                        class="fa-solid fa-house"></i></a></div>
     
            <div class="py-2 px-4 hover:bg-red-500 hover:text-black"><a href="{{route('product.cart')}}">Carrito</a></div>
            <div class="py-2 px-4 hover:bg-red-500 hover:text-black"><a href="{{route('checkout')}}">checkout</a></div>

        </div>

    </div>



</header>
