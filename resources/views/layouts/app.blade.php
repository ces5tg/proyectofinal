<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <title>KD3Store</title>
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}"> --}}
{{--     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}"> --}}

    {{-- <script src="https://cdn.tailwindcss.com" defer></script> --}}


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendor/FlexSlider/flexslider.css') }}" defer>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous" defer>
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('vendor/FlexSlider/jquery.flexslider-min.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css"
        integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
        integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireStyles
</head>

<body>
    @livewire('navigation-menu')
    <div class="max-w-7xl mx-auto px-4 sm: px-6 lg:px-8">
        @yield('content')
    </div>
    {{-- SECCION FOOTER --}}
    <footer>
        <div class="mb-4">
            <div class="bg-red-500">
                <div class="max-w-7xl mx-auto px-4 sm: px-6 lg:px-8">
                    <div class="grid grid-cols-4 gap-4 text-white py-4">
                        <div class="sm:col-span-1 md:col-span-1 col-span-4  flex items-center">
                            <i class="fa fa-truck text-3xl mr-2"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Envio rapido y fiable</h4>
                            </div>
                        </div>
                        <div class="sm:col-span-1 col-span-4 md:col-span-1 flex items-center">
                            <i class="fa fa-recycle text-3xl mr-2"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Garantia de 30 dias</h4>

                            </div>
                        </div>
                        <div class="sm:col-span-1 col-span-4 md:col-span-1 flex items-center">
                            <i class="fa fa-credit-card-alt text-3xl mr-2"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Sistema de pago seguro</h4>

                            </div>
                        </div>
                        <div class="sm:col-span-1 col-span-4 md:col-span-1 flex items-center">
                            <i class="fa fa-life-ring text-3xl mr-2"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Soporte Online</h4>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm: px-6 lg:px-8">
            <div class="grid grid-cols-6 gap-4">
                {{-- grid 1 --}}
                <div class="col-span-6 md:col-span-2 sm:col-span-3">
                    <div class="wrap-footer-item">
                        <h3 class="item-header">Detalles de contacto</h3>
                        <div class="item-content">
                            <div class="wrap-contact-detail">
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="contact-txt">Cercado Arequipa</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="contact-txt">987456123</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="contact-txt">KD3Music@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- grid 2 --}}
                <div class="col-span-6 md:col-span-2 sm:col-span-3">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                        <div class="wrap-footer-item">
                            <h3 class="item-header">Linea rapida</h3>
                            <div class="item-content">
                                <div class="wrap-hotline-footer">
                                    <span class="desc">Contactarse</span>
                                    <b class="phone-number">987456123</b>
                                </div>
                            </div>
                        </div>

                        <div class="wrap-footer-item footer-item-second">
                            <h3 class="item-header">Regístrese para recibir promociones</h3>
                            <div class="item-content">
                                <div class="wrap-newletter-footer">
                                    <form action="#" class="frm-newletter" id="frm-newletter">
                                        <input type="email" class="input-email" name="email" value=""
                                            placeholder="Ingrese su correo electronico">
                                        <button class="btn-submit">Subscribirse</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- grid 3 --}}
                <div class="col-span-6 md:col-span-1 sm:col-span-3">

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                        <div class="row">
                            <div class="wrap-footer-item twin-item">
                                <h3 class="item-header">KD3Music</h3>
                                <div class="item-content">
                                    <div class="wrap-vertical-nav">
                                        <ul>
                                            <li class="menu-item"><a href="index.html" class="link-term">KD3Music</a>
                                            </li>
                                            <li class="menu-item"><a href="about-us.html"
                                                    class="link-term">Nosotros</a>
                                            </li>
                                            <li class="menu-item"><a href="contact-us.html"
                                                    class="link-term">Contacto</a></li>
                                            <li class="menu-item"><a href="shop.html" class="link-term"></a>Tienda
                                            </li>
                                            <li class="menu-item"><a href="cart.html" class="link-term">Carrito</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- grid 3 --}}
                <div class="col-span-6 md:col-span-1 sm:col-span-3">
                    <div class="wrap-footer-item twin-item">
                        <h3 class="item-header">El equipo de KD3Music comparte su pasión por la música,
                            ofreciendo instrumentos y productos de calidad.</h3>

                    </div>
                </div>
                {{-- grid 5 --}}
                <div class="col-span-6 md:col-span-2 sm:col-span-3">
                    <div class="flex">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Metodos de pago seguros:</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item wrap-gallery">
                                        <img src="{{ asset('assets/images/payment.png') }}"
                                            style="max-width: 260px;">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- grid 6 --}}
                <div class="col-span-6 md:col-span-2 sm:col-span-3">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="">
                            <h3 class="">Redes Sociales</h3>
                            <div class="">
                                <div class="">
                                    <ul class="flex text-xl ">
                                        <li class="mr-2 "><a href="#" class=""><i
                                                    class="fa-brands fa-twitter"></i></a></li>
                                        <li class="mr-2"><a href="#"><i
                                                    class="fa-brands fa-facebook"></i></a></li>
                                        <li class="mr-2"><a href="#"><i
                                                    class="fa-brands fa-pinterest"></i></a></li>
                                        <li class="mr-2"><a href="#"><i
                                                    class="fa-brands fa-instagram-square"></i></a></li>
                                        <li class="mr-2"><a href="#"><i class="fa-brands fa-vimeo"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="my-3">
            <div class="max-w-7xl mx-auto px-4 sm: px-6 lg:px-8">
                <div class="">
                    <h3 class="">Enlaces Rapidos</h3>
                    <hr class="my-2">
                    <div class="back-link-row">
                        <ul class="flex text-black">

                            <li class="border-r-2 px-3"><a href="" class="" title="Tienda">Tienda </a>
                            </li>

                            <li class="border-r-2 px-3"><a href="" class="" title="Inicio">Inicio</a>
                            </li>
                            <li class="border-r-2 px-3"><a href="" class="" title="Login">Login </a>
                            </li>
                            <li class="border-r-2 px-3"><a href="" class=""
                                    title="Registro">Registro</a></li>
                            <li class="border-r-2 px-3"><a href="" class=""
                                    title="Contacto">Contacto</a>
                            </li>
                            <li class="border-r-2 px-3"><a href="l" class=""
                                    title="Terminos y condiciones">Terminos y Condiciones</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>



        <div class="bg-black w-full">
            <div class="max-w-7xl mx-auto px-4 sm: px-6 lg:px-8">
                <div class="flex justify-between py-2">
                    <div class="text-white">
                        <p class="coppy-right-text">Copyright © 2021 KD3Music</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul class="flex text-white">
                                <li class="border-r-2 px-2"><a href="about-us.html" class="link-term">Nosotros</a>
                                </li>
                                <li class="border-r-2 px-2"><a href="privacy-policy.html" class="link-term">Politica
                                        de
                                        privacidad</a></li>
                                <li class="border-r-2 px-2"><a href="terms-conditions.html"
                                        class="link-term">Terminos y
                                        condiciones</a></li>
                                <li class="border-r-2 px-2"><a href="return-policy.html" class="link-term">Politica
                                        de
                                        devolución</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </footer>
    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToScroll: 1,
            slidesToShow: 1.5,
            draggable: true,
            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    </script>
    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.js"
        integrity="sha512-6vo59lZMHB6GgEySnojEnfhnugP7LR4qm6akxptNOw/KW+i9o9MK4Gaia8f/eJATjAzCkgN3CWlIHWbVi2twpg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    @livewireScripts

</body>

</html>
