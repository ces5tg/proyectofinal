<div class=" my-4 p-5 bg-gray-100 rounded rounded-2xl shadow-2xl border-2 border-gray-200">
    <div class="mt-2 mb-4">
        <div class="flex justify-between h-auto  items-center">
            <div>
                <h2 class="text-3xl font-extralight">
                    Lista de Banners Publicitarios
                </h2>
            </div>
            <div>
                <a href="{{route('admin.sliders.create')}}" class="bg-black text-md font-bold text-white py-2 px-4 uppercase hover:bg-blue-500 rounded rounded-2xl">
                    <i class="fa-solid fa-circle-plus mr-2"></i> <span>Slider</span>
                </a>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <input type="text" wire:model="search"  class="block rounded rounded-xl w-full border border-2xl border-1 border-gray-600 hover:border-blue-400 focus-within:shadow-lg  py-1 px-3">
    </div>
    <div class="p-2 border-2 border-gray-300 rounded rounded-xl">
        <table class="w-full border-separate border-spacing-2  ">
            <thead class="bg-blue-200">
                <tr class="font-bold text-md uppercase">

                    <th class="py-2">Title</th>
                    <th class="py-2">subtitle</th>
                    <th class="py-2">descripcion</th>
                    <th class="py-2">Status</th>
                    <th class="py-2 ">Categoria</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-gray-200">
                @foreach ($homeSliders as $slider )
                <tr class=" text-sm font-semibold capitalize">

                    <td class="py-1 px-2">{{$slider->name}}</td>
                    
                    <td class="py-1 px-2">{{$slider->subtitle}}</td>
                    <td class="py-1 px-2">{{Str::limit($slider->description,30)}}</td>
           
                    <td class="py-1 px-2 text-center">
                       @if ( $slider->status ==2)
                           <span class="bg-green-300 px-3">Bloqueado</span>   
                     @else
                           <span class="bg-red-300 px-3">Activo</span>
                       @endif
                    
                    </td>
                    <td class="py-1 px-2 text-center">  {{$slider->category->name}}</td>
                    <td class=" text-center text-lg">
                        <a href="{{route('admin.sliders.edit', $slider->id )}}"  class=" text-blue-600 w-full bg-gray-400  "><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td class="text-center text-lg">
                        <a  class=" text-red-600" wire:click="delete('{{$slider->id}}')"><i class="fa-solid fa-trash"></i></a>
                    </td>
              
                </tr>
               
                @endforeach
                

            </tbody>
        </table>
    </div>
    @if ($homeSliders->hasPages())
    <div class="px-6 py-4">
        {{ $homeSliders->links() }}
    </div>
    {{$prueba}}
@endif
</div>