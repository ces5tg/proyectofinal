<div>
    <div class="mt-4">


        <div class="grid grid-cols-9 gap-4">
            {{-- ITEMS - IZQUIERDA --}}
            <div class="col-span-7">
                <div class="grid grid-cols-2 gap-4">
                    {{-- IMAGEN --}}
                    <div>
                        <div class="">
                            <ul class="">
                                @if ($product->image)
                                    <li {{-- data-thumb="{{ asset('assets/images/products') }}/{{ $product->image }}" --}}>
                                        <img src="{{ Storage::url($product->image) }}" alt="$product->name" />
                                    </li>
                                @else
                                    <li {{-- data-thumb="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612" --}}>
                                        <img src="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612"
                                            alt="$product->name" />
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    {{-- DESCRIPCION --}}
                    <div>
                        <div class="detail-info">

                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <h2 class="product-name">{{ $product->name }}</h2>
                            <div class="short-desc">
                                {{ $product->short_description }}
                            </div>

                            <div class="my-3">
                                <a class="" href="#"><img
                                        src="{{ asset('assets/images/social-list.png') }}" alt=""></a>
                            </div>

                            <div class=""><span class="text-2xl">S/. {{ $product->price_cost }}</span>
                            </div>
                            <div class="">
                                <p class="">Estado: <b>
                                        @if ($product->status)
                                            Disponible
                                        @else
                                            Bloqueado
                                        @endif
                                    </b></p>
                            </div>
                            <div class="my-3">
                                <span>Cantidad:</span>
                                <div class="flex">

                                    <a class=" flex items-center justify-center w-12" wire:click="decrement()">
                                        <span
                                            class="rounded rounded-full border-2 border-black px-2 hover:bg-red-500 font-black hover:text-white"><i
                                                class="fa-solid fa-circle-minus"></i></span>
                                    </a>

                                    <input type="number"
                                        class="w-16 border-2 text-center border-black rounded rounded-xl"
                                        wire:model="qty">
                                    <a class=" flex items-center justify-center w-12" wire:click="increment()">
                                        <span
                                            class="rounded rounded-full border-2 border-black px-2 hover:bg-red-500 font-black hover:text-white">
                                            <i class="fa-solid fa-circle-plus"></i></span>
                                    </a>
                                </div>
                            </div>
                            {{-- agregar --}}
                            <div class="my-3">
                                <a class="border-2 px-4 py-1 capitalize border-black rounded rounded-lg hover:bg-red-500 hover:text-white font-bold"
                                    wire:click.prevent="store('{{ $product->id }}')">Agregar</a>

                            </div>
                        </div>
                    </div>
                    {{-- TECERA CAJA --}}
                    <div class="col-span-2">
                        <div x-data="{ descripcion: true, detalles: false }">
                            {{-- botones --}}
                            <div class="flex font-bold text-lg">
                                <div x-on:click="descripcion = ! descripcion , detalles = false"
                                    :class="{ 'bg-red-500 text-white': descripcion }"
                                    {{-- x-on:click.away="descripcion = false" --}}
                                    class="bg-red-500 px-3 py-1 border-2 border-black">
                                    Descripcion

                                </div>
                                <div x-on:click="detalles = ! detalles , descripcion = false" :class="{ 'bg-red-500 text-white': detalles }"
                                    {{-- x-on:click.away="detalles = false" --}}
                                    class="bg-red-500 px-3 py-1 border-2 border-black">
                                    Detalles

                                </div>
                            </div>
                            {{-- fin botonoes --}}
                            {{-- muestra --}}
                            <div class="border border-black p-3 ">
                                <div class="hidden" :class="{ 'hidden': !descripcion }">
                                    DESCRIPCION
                                    {{ $product->description }}
                                </div>
                                <div class="hidden" :class="{ 'hidden': !detalles }">
                                    <div class="p-2 border-2 border-gray-300 rounded rounded-xl">
                                        <table class="w-full border-separate border-spacing-2 ">
                                            <thead class="bg-red-300">
                                                <tr class="font-bold text-md uppercase">
                                                    <th class="py-2 text-center">Campo</th>
                                                    <th class="py-2 text-center">Descripcion</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-gray-200">
                                                <tr class=" text-sm font-semibold capitalize">
                                                    <th class="py-1 px-2 text-center">Color </th>
                                                    <th class="py-1 px-2 text-center">
                                                        @if ($product->color)
                                                            {{ $product->color }}
                                                        @else
                                                            null
                                                        @endif
                                                    </th>

                                                </tr>
                                                <tr class=" text-sm font-semibold capitalize">
                                                    <th class="py-1 px-2 text-center">Tamaño</th>
                                                    <th class="py-1 px-2 text-center">
                                                        @if ($product->size)
                                                            {{ $product->size}}
                                                        @else
                                                            null
                                                        @endif
                                                    </th>

                                                </tr>
                                                <tr class=" text-sm font-semibold capitalize">
                                                    <th class="py-1 px-2 text-center">cantidad </th>
                                                    <th class="py-1 px-2 text-center">
                                                        @if ($product->quantity)
                                                            {{ $product->quantity }}
                                                        @else
                                                            null
                                                        @endif
                                                    </th>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



                        </div>
                      
                    </div>
                </div>

            </div>
            {{-- ITEMS - DERECHO --}}
            <div class="col-span-2">
                {{-- 3 ITEMS LISTA --}}
                <div>
                    <ul class="">

                        <li class=" border-b-2 pb-3">
                            <a class="flex items-center " href="#">
                                <span class="text-3xl h-16 inline-block text-red-500"><i class="fa fa-truck"></i></span>
                                <div class="">
                                    <b class="">Free Shipping</b>
                                    <span class="">On Oder Over $99</span>
                                    <p class="">Lorem Ipsum is simply dummy text of the printing...</p>
                                </div>
                            </a>
                        </li>

                        <li class="border-b-2 pb-3 pt-2">
                            <a class="flex items-center " href="#">
                                <span class="text-3xl mr-2 text-red-500"><i class="fa fa-gift"></i></span>
                                <div class="">
                                    <b class="">Free Shipping</b>
                                    <span class="">On Oder Over $99</span>
                                    <p class="">Lorem Ipsum is simply dummy text of the printing...</p>
                                </div>
                            </a>
                        </li>
                        <li class="border-b-2 pb-3 pt-2">
                            <a class="flex items-center " href="#">
                                <span class="text-3xl mr-2 text-red-500"><i class="fa fa-reply"></i></span>
                                <div class="">
                                    <b class="">Free Shipping</b>
                                    <span class="">On Oder Over $99</span>
                                    <p class="">Lorem Ipsum is simply dummy text of the printing...</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- RECOMENDACIOND DE PRODUCT --}}
                <div>
                    <p class="my-4 text-center text-2xl ">Productos Populares</p>
                    <div>
                        @foreach ($popular_products as $product)
                            <div class="flex my-2 items-center">
                                <div class="w-20">
                                    @if ($product->image)
                                        <figure {{-- data-thumb="{{ asset('assets/images/products') }}/{{ $product->image }}" --}}>
                                            <img src="{{ Storage::url($product->image) }}" alt="$product->name" />
                                        </figure>
                                    @else
                                        <figure {{-- data-thumb="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612" --}}>
                                            <img src="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612"
                                                alt="$product->name" />
                                        </figure>
                                    @endif
                                </div>
                                <div class="ml-2">
                                    <a href="{{ route('product.details', $product->slug) }}">
                                        <p>{{ Str::limit($product->name, 15) }}</p>
                                        <p><span>S/.</span>{{ $product->price_cost }}</p>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        {{-- FINNNNN --}}

    </div>
    <!--end container-->

</div>
