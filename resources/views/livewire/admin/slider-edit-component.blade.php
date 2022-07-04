<div>
    <div class=" my-4 p-5 bg-gray-100 rounded rounded-2xl shadow-2xl border-2 border-gray-200">

        {{-- <form wire:submit.prevent="save"> --}}

        <div class="grid grid-cols-6">
            {{-- NAME --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Nombre :</label>

                <input wire:model="slider.name"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('slider.name')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- SLUG --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Slug :</label>

                <input disabled wire:model="slider.slug"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('slider.slug')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- subtitloe --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Subtitle :</label>
                <input disabled wire:model="slider.subtitle"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('slider.subtitle')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- DESCRIPCION --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Descripcion
                    :</label>
                <textarea wire:model="slider.description" rows="3"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"></textarea>

                @error('slider.description')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>


            {{-- STATUS --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Status :</label>


                <span class="mr-2">Con Stock</span><input checked wire:model="slider.status" class="mr-8"
                    name="status" type="radio" value="1">{{-- con stock --}}
                <span class="mr-2">Sin Stock</span><input wire:model="slider.status" class="" name="status"
                    type="radio" value="2">{{-- sin stock --}}
                @error('slider.status')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>

            {{-- CATEGORIA --}}
            <div class="col-span-6 md:col-span-3 lg:col-span-2  inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Categoria :</label>

                <select name="" id="" wire:model="slider.category_id"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('slider.category_id')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror

            </div>
            {{-- IMAGEN --}}
            <div class="col-span-6  inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">imagen:</label>

                <input wire:model="image"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="file">
                @error('slider.image')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-6 flex justify-center lg:justify-end my-3">
                <button type="submit" wire:click="update()"
                    class="bg-black text-md font-bold text-white py-2 px-4 uppercase hover:bg-blue-500 rounded rounded-2xl">Guardar</button>
            </div>
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" alt="">
            @else
                <img src="{{ Storage::url($slider->image) }}" alt="">
            @endif
        </div>
        {{-- </form> --}}
        <p>{{ $slider['name'] }}</p>

    </div>
</div>
