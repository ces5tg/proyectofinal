<div>
    <div class=" my-4 p-5 bg-gray-100 rounded rounded-2xl shadow-2xl border-2 border-gray-200">

        {{-- <form wire:submit.prevent="save"> --}}
        <div class="grid grid-cols-6">
            {{-- NAME --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Nombre :</label>

                <input wire:model="productCreate.name"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('productCreate.name')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- SLUG --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Slug :</label>

                <input disabled wire:model="productCreate.slug"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('productCreate.slug')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- DETALLE --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Detalle :</label>
                <textarea wire:model="productCreate.short_description" rows="3"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"></textarea>

                @error('productCreate.short_description')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- DESCRIPCION --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Descripcion
                    :</label>
                <textarea wire:model="productCreate.description" rows="3"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"></textarea>

                @error('productCreate.description')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- PRICE --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2  inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Price :</label>

                <input wire:model="productCreate.price_cost"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="number">
                @error('productCreate.price_cost')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- CANTIDAD --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2  inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Cantidad :</label>

                <input wire:model="productCreate.quantity"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="number">
                @error('productCreate.quantity')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- STATUS --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Status :</label>


                <span class="mr-2">Con Stock</span><input checked wire:model="productCreate.status" class="mr-8"
                    name="status" type="radio" value="1">{{-- con stock --}}
                <span class="mr-2">Sin Stock</span><input wire:model="productCreate.status" class=""
                    name="status" type="radio" value="2">{{-- sin stock --}}
                @error('productCreate.status')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- COLOR --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2  inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Color :</label>

                <select name="" id="" wire:model="productCreate.color"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3">
                    <option value="" selected>Seleccione un color</option>
                    <option value="red">Rojo</option>
                    <option value="blue">Azul</option>
                </select>
                @error('productCreate.color')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror

            </div>
            {{-- TAMAÑO --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Tamaño:</label>

                <select name="" id="" wire:model="productCreate.size"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3">
                    <option value="" selected>Seleccione una talla</option>
                    <option value="s">S</option>
                    <option value="l">L</option>
                    <option value="m">M</option>
                    <option value="xl">Xl</option>
                </select>
                @error('productCreate.size')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- PRICE_DESCUENTO --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Precio/Descuento
                    :</label>

                <input wire:model="productCreate.price_desc"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('productCreate.price_desc')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- CATEGORIA --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2  inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Categoria :</label>

                <select name="" id="" wire:model="productCreate.category_id"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('productCreate.category_id')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror

            </div>
            {{-- IMAGEN --}}
            <div class="col-span-6  inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">imagen:</label>

                <input wire:model="productCreate.image"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="file">
                @error('productCreate.image')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-6 flex justify-center lg:justify-end my-3">
                {{-- boton save --}}
                <button type="submit" wire:click="save()"
                    class="bg-black text-md font-bold text-white py-2 px-4 uppercase hover:bg-blue-500 rounded rounded-2xl">Guardar</button>
            </div>
            @if ($productCreate['image'])
            {{-- impotante --}}
                <img src="{{ $productCreate['image']->temporaryUrl() }}" alt="">
            @endif
        </div>
        {{-- </form> --}}
        <p>{{ $hola }}</p>

    </div>
</div>
