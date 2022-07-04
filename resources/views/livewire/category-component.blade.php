<main id="main" class="main-site left-sidebar">
    
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Product Categories</span></li>
                <li class="item-link"><span>{{ $category_name }}</span></li>
            </ul>
        </div>
        <div class="grid grid-cols-4 gap-3">

            <div class="col-span-3">

                <div class="">

                    @if ($category->image)
                        <article {{-- data-thumb="{{ asset('assets/images/products') }}/{{ $product->image }}" --}}>
                            <img class="w-full object-cover object-center h-96"
                                src="{{ Storage::url($category->image) }}" alt="$product->name" />
                        </article>
                    @else
                        <article {{-- data-thumb="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612" --}}>
                            <img class="w-full object-cover object-center h-96"
                                src="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612"
                                alt="$product->name" />
                        </article>
                    @endif
                    {{-- <a href="#" class="banner-link">
                        <figure><img src="{{ Storage::url($category->image) }}" alt=""></figure>
                    </a> --}}
                </div>

                <div class="flex items-center justify-between">

                    <h1 class=" mx-5 text-lg">Categoria :<span class="font-bold"> {{ $category_name }}</span></h1>

                    <div class="flex items-center justify-between">

                        <div class="  mx-3">
                            <select name="orderby" class="" wire:model="sorting">
                                <option value="default" selected="selected">filtros</option>
                                <option value="date">fecha</option>
                                <option value="price"> menor a mayor</option>
                                <option value="price-desc"> mayor a menor</option>
                            </select>
                        </div>

                        <div class=" mx-3">
                            <select name="post-per-page" class="" wire:model="pagesize">
                                <option value="12" selected="selected">Numero de Items </option>
                                <option value="16">16 </option>
                                <option value="18">18 </option>
                                <option value="21">21 </option>
                                <option value="24">24 </option>
                                <option value="30">30 </option>
                                <option value="32">32 </option>
                            </select>
                        </div>

                        <div class="">
                            <a href="#" class=""><i class="fa fa-th"></i>Grid</a>
                            <a href="list.html" class=""><i class="fa fa-th-list"></i>List</a>
                        </div>

                    </div>

                </div>
                <!--end wrap shop control-->

                <div class="mt-4">

                    <ul class="grid grid-cols-3 gap-4">
                        @foreach ($products as $product)
                            <li class=" col-span-1 ">
                                <div class=" ">
                                    <div class="">
                                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}"
                                            title="{{ $product->name }}">
                                            <figure>
                                                @if ($product->image)
                                                    <img class="object-center object-cover  w-full h-72"
                                                        src="{{ Storage::url($product->image) }}"
                                                        alt="{{ $product->name }}">
                                                @else
                                                    <img class="object-center object-cover  w-full h-72"
                                                        src="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612" />
                                                @endif
                                            </figure>

                                        </a>
                                    </div>
                                    <div class="text-center my-2">

                                        <p class="text-2xl">{{ Str::limit($product->name, 20) }}</p>
                                        <p class="text-xl font-bold"><span>S/.</span> {{ $product->price_cost }}</p>
                                        <a href="{{ route('product.details', $product->slug) }}"
                                            class="inline-block mt-2 py-2 px-4 bg-red-500 rounded roundedn-lg border-1 border-black text-white font-bold transition duration-500 ease-in-out hover:bg-black  hover:border-red-500">Ver
                                            Mass</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="wrap-pagination-info">
                    {{ $products->links() }}
                    {{-- <ul class="page-numbers"> --}}
                    {{-- <li><span class="page-number-item current" >1</span></li> --}}
                    {{-- <li><a class="page-number-item" href="#" >2</a></li> --}}
                    {{-- <li><a class="page-number-item" href="#" >3</a></li> --}}
                    {{-- <li><a class="page-number-item next-link" href="#" >Next</a></li> --}}
                    {{-- </ul> --}}
                    {{-- <p class="result-count">Showing 1-8 of 12 result</p> --}}
                </div>
            </div>
            <!--end main products area-->

            <div class="col-span-1">
                <div class="ml-4">
                    <div class="">
                        <h2 class="text-2xl font-semibold">Categorias</h2>
                        <div class="widget-content">
                            <ul class="divide divide-y">
                                @foreach ($categories as $category)
                                    <li class="">
                                        <a href="{{ route('product.category', ['category_slug' => $category->slug]) }}"
                                            class="flex py-1 hover:text-red-500"><i class="text-sm mr-2 fa-solid fa-check"></i>{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- Categories widget-->

                    <div class="my-3">
                        <h2 class="text-2xl font-semibold mb-4">Marcas</h2>
                        <div class="">
                            <ul class="divide divide-y" data-show="6">
                                <li class=""><a class="filter-link active" href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Fashion Clothings</a>
                                </li>
                                <li class=""><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Laptop Batteries</a></li>
                                <li class=""><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Printer & Ink</a></li>
                                <li class=""><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>CPUs & Prosecsors</a></li>
                                <li class=""><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Sound & Speaker</a></li>
                                <li class=""><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Shop Smartphone & Tablets</a> </li>
                                <li class=" "><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Printer & Ink</a></li>
                                <li class=" "><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>CPUs & Prosecsors</a></li>
                                <li class=" "><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Sound & Speaker</a></li>
                                <li class=" "><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Shop Smartphone & Tablets</a></li>
                              
                            </ul>
                        </div>
                    </div><!-- brand widget-->

                    <div class="widget mercado-widget filter-widget">
                        <h2 class="text-2xl font-semibold mb-4">Colores</h2>
                        <div class="widget-content">
                            <ul class="divide divide-y
                      ">
                                <li class="list-item"><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Red
                                        <span>(217)</span></a>
                                </li>
                                <li class="list-item"><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Yellow
                                        <span>(179)</span></a></li>
                                <li class="list-item"><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Black
                                        <span>(79)</span></a>
                                </li>
                                <li class="list-item"><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Blue
                                        <span>(283)</span></a>
                                </li>
                                <li class="list-item"><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Grey
                                        <span>(116)</span></a>
                                </li>
                                <li class="list-item"><a class="flex py-1 hover:text-red-500 " href="#"><i class="text-sm mr-2 fa-solid fa-check"></i>Pink
                                        <span>(29)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Color -->

                  
                  
                </div>
            </div>
            <!--end sitebar-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>
