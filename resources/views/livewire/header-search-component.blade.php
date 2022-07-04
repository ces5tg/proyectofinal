<div class="flex-1 relative">

    <form action="{{route('product.search')}}">
        <div class="flex">
            <input name="name" wire:model="search" type="text" class="p-2 rounded rounded-lg w-full"
                placeholder="¿estas buscando algun producto?" />
            <input type="submit" class="bg-black px-2 text-white" value="Buscar">
            {{-- <a  wire:click="{{route('prueba')}}" class="ml-1 h-12 w-12  block bg-black flex items-center justify-center rounded-r-md ">
                <i class="fa-solid fa-magnifying-glass text-white"></i>
            </a> --}}
        </div>

    </form>
    <style>
        .posicion {
            position: absolute !important;
        }
    </style>
    @if (count($products))
        <div class="posicion w-full">
            <div class="bg-white rounded-lg shadow mt-1">{{-- away , sia hacemos click guera del div --}}
                <div class="px-4 py-1 space-y-1 divide-y divide-gray-300 ">
                    @forelse ($products as $product)
                        <a href="{{ route('product.details', $product->slug) }}"class="flex  py-1">

                            <div class="ml-4 text-gray-700">
                                <p class="text-md font-semibold leading-5 hover:text-red-500">{{ $product->name }}</p>


                            </div>
                        </a>
                    @empty
                        <p class="text-lg font-semibold leading-5">No se encontraron resultadoss</p>
                    @endforelse
                </div>
            </div>
        </div>
    @endif


</div>



{{-- <div class="w-full bg-red-400">

    <div class=" ">
        <form action="{{ route('product.search') }}">
            <input type="text" name="search" placeholder="Search here..." wire:model="search">
            
            <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

            <div class="">
                <input type="hidden" name="product_cat" value="{{ $product_cat }}" id="product-cate">
                <input type="hidden" name="product_cat_id " value="{{ $product_cat_id }}" id="product-cate">
                <a href="#" class="link-control">{{ str_split($product_cat, 12)[0] }}</a>
                <ul class="list-cate">
                    <li class="level-0">Categorias</li>
                    @foreach ($categories as $category)
                        <li class="level-1" data-id="{{ $category->id }}">{{ $category->name }}</li>
                    @endforeach
                </ul>

            </div>
        </form>
       
       
    </div>
    @if (count($products) > 0)
    <div class="position-relative " >
        
        <div class="position-absolute top-0 start-50">
            <ul class="list-group">
                @forelse ($products as $product)
                    
                <a href="" class="list-group-item"><li style="list-style:none">{{ $product->name }}</li></a>

                @empty
                    <p>no se encontraron coincidencias</p>
                @endforelse
            </ul>
        </div>
    </div>
       

    @endif
   
</div> --}}


{{-- <div class="flex-1 relative "   x-data>
    <form action="{{route('search')}}" autocomplete="off">
        <x-jet-input name="name" wire:model="search" type="text" class="w-full" placeholder="¿estas buscando algun producto?" />
        <button class="absolute top-0 right-0 w-12 h-full bg-orange-500 flex items-center justify-center rounded-r-md">
            <x-search size="35" color="white"/>
        </button>
    </form>
    <div class="absolute w-full">
        <div class="bg-white rounded-lg shadow mt-1 hidden":class="{'hidden':!$wire.open}" @click.away="$wire.open=false">
            <div class="px-4 py-3 space-y-1 divide-y divide-gray-300 ">
                @forelse ($products as $product)
                    <a href="{{route('products.show',$product)}}"class="flex  py-1">
                        <img class="w-16 object-cover h-12" src="{{Storage::url($product->images->first()->url)}}">
                        <div class="ml-4 text-gray-700">
                            <p class="text-lg font-semibold leading-5">{{$product->name}}</p>
                            <p >Categoria : {{$product->subcategory->category->name}}</p>

                        </div>
                    </a>
                @empty
                <p class="text-lg font-semibold leading-5">No se encontraron resultadoss</p>
                @endforelse
            </div>
        </div>
    </div>

    
</div> --}}
