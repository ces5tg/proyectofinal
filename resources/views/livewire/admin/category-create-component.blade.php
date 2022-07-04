<div>
    <div class=" my-4 p-5 bg-gray-100 rounded rounded-2xl shadow-2xl border-2 border-gray-200">

        {{-- <form wire:submit.prevent="save"> --}}
        <div class="grid grid-cols-6">
            {{-- NAME --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Nombre :</label>

                <input wire:model="categoryCreate.name"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('categoryCreate.name')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- SLUG --}}
            <div class="col-span-6 md:col-span-3 inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">Slug :</label>

                <input disabled wire:model="categoryCreate.slug"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="text">
                @error('categoryCreate.slug')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            
            {{-- IMAGEN --}}
            <div class="col-span-6  inline-block my-2 px-5">
                <label class="block capitalize tracking-wide text-black text-md font-bold mb-2 ">imagen:</label>

                <input wire:model="categoryCreate.image"
                    class="w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3"
                    type="file">
                @error('categoryCreate.image')
                    <span class="text-red-500 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- button --}}
            <div class="col-span-6 flex justify-center lg:justify-end my-3">
                <button type="submit" wire:click="save()"
                    class="bg-black text-md font-bold text-white py-2 px-4 uppercase hover:bg-blue-500 rounded rounded-2xl">Guardar</button>
            </div>
            @if ($categoryCreate['image'])
                <img src="{{ $categoryCreate['image']->temporaryUrl() }}" alt="">
            @endif
        </div>
        {{-- </form> --}}
        <p>{{ $hola }}</p>

    </div>
</div>
