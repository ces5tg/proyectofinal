@extends('layouts.admin')
@section('content')
    <div>
        @livewire('admin.product-index-component')
    </div>
@endsection

{{--   <div class=" my-4 p-5 bg-gray-100 rounded rounded-2xl drop-shadow-2xl border-2 border-gray-200">
        <div class="mt-2 mb-4">
            <div class="flex justify-between h-auto  items-center">
                <div>
                    <h2 class="text-3xl font-extralight">
                        Lista de Productos
                    </h2>
                </div>
                <div>
                    <a href="{{route('admin.products.create')}}" class="bg-black text-md font-bold text-white py-2 px-4 uppercase hover:bg-blue-500 rounded rounded-2xl">
                        <i class="fa-solid fa-circle-plus mr-2"></i> <span>Producto</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="p-2 border-2 border-gray-300 rounded rounded-xl">
            <table class="w-full border-separate border-spacing-2  ">
                <thead class="bg-blue-200">
                    <tr class="font-bold text-md uppercase">

                        <th class="py-2">title</th>
                        <th class="py-2">title</th>
                        <th class="py-2">title</th>
                        <th class="py-2">title</th>
                        <th class="py-2 ">title</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200">
                    <tr class=" text-sm font-semibold capitalize">

                        <td class="py-1 px-2 ">1961 sdfg sdfg sfdg</td>
                        <td class="py-1 px-2">196 sdfg dsfg 1</td>
                        <td class="py-1 px-2">1961</td>
                        <td class="py-1 px-2">1961</td>
                        <td class="py-1 px-2">1961</td>
                        <td class=" text-center text-lg">
                            <a  class=" text-blue-600  "><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td class="text-center text-lg">
                            <a  class=" text-red-600"><i class="fa-solid fa-trash"></i></a>
                        </td>
                  
                    </tr>

                </tbody>
            </table>
        </div>
    </div> --}}