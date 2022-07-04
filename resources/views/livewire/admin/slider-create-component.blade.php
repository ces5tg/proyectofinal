<div>
    <div class=" my-4 p-5 bg-gray-100 rounded rounded-2xl shadow-2xl border-2 border-gray-200">

        {{-- <form wire:submit.prevent="save"> --}}
        <div class="grid grid-cols-6">
            {{-- NAME --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">title:</label>

                <input wire:model="sliderCreate.name"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('sliderCreate.name')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- SLUG --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Slug :</label>

                <input disabled wire:model="sliderCreate.slug"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('sliderCreate.slug')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- SUBTITLE --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Sub Titulo:</label>

                <input wire:model="sliderCreate.subtitle"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('sliderCreate.subtitle')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>

            {{-- DESCRIPCION --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Descripcion
                    :</label>
                <textarea wire:model="sliderCreate.description" rows="3"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"></textarea>

                @error('sliderCreate.description')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
  
      
            {{-- STATUS --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Status :</label>


                <span class="mr-2">Activo</span><input checked wire:model="sliderCreate.status" class="mr-8"
                    name="status" type="radio" value="1">{{-- con stock --}}
                <span class="mr-2">Bloqueado</span><input wire:model="sliderCreate.status" class=""
                    name="status" type="radio" value="2">{{-- sin stock --}}
                @error('sliderCreate.status')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
           
            {{-- CATEGORIA --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2  inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Categoria :</label>

                <select name="" id="" wire:model="sliderCreate.category_id"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('sliderCreate.category_id')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror

            </div>
            {{-- IMAGEN --}}
            <div class="col-span-6  inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">imagen:</label>

                <input wire:model="sliderCreate.image"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="file">
                @error('sliderCreate.image')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-6 flex justify-center lg:justify-end my-3">
                <button type="submit" wire:click="save()"
                    class="bg-black text-md font-bold text-white py-2 px-4 uppercase hover:bg-blue-500 rounded rounded-2xl">Guardar</button>
            </div>
            @if ($sliderCreate['image'])
                <img src="{{ $sliderCreate['image']->temporaryUrl() }}" alt="">
            @endif
        </div>
        {{-- </form> --}}
        <p>{{ $hola }}</p>

    </div>
</div>
