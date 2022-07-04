{{-- <div>
   <p>Aqui iran los resultados de la BUSQUEDA DE productos y categorias</p>
   {{$product.$category.$category_id->id}}
</div> --}}

<div class="mb-4">

<div class="text-3xl">
    <h2>Resultado de la busqueda : <span class="font-bold">{{$search}}</span> </h2>
</div>
 @if ($products->count() > 0)
    <div class="w-full">

        <div class="my-6">
            <div class="grid grid-cols-4 gap-4">
                @foreach ($products as $product)
                    <div class="col-span-1">
                        <div
                            class="rounded rounded-2xl border transition duration-500 ease-in-out   transform hover:-translate-y-1 hover:scale-110 ">
    
                            <figure class="flex rounded rounded-2xl">
                                @if ($product->image)
                                    <img class="object-center object-cover  w-full h-72"
                                        src="{{ Storage::url($product->image) }}" alt="">
                                @else
                                    <img class="object-center object-cover  w-full h-72"
                                        src="data:image/jpeg;base64,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"
                                        alt="">
                                @endif
                            </figure>
                            <div class="text-center my-2">
                                <p class="text-2xl">{{ Str::limit($product->name, 20) }}</p>
                                <p class="text-xl font-bold"><span>S/.</span> {{ $product->price_cost }}</p>
                                <a href="{{ route('product.details', $product->slug) }}"
                                    class="inline-block mt-2 py-2 px-4 bg-red-500 rounded roundedn-lg border-1 border-black text-white font-bold transition duration-500 ease-in-out hover:bg-black  hover:border-red-500">Ver
                                    Mass</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
           
        </div>
        <div>
            @if ($products->links())
                {{$products->links()}}
            @endif
        </div>

    </div>
@else
    <p style="padding-top:30px;">no se encontraron productos</p>
@endif
</div>
