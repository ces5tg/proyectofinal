<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndexComponent extends Component
{
    use WithPagination;
    public $search = "";
    public $prueba = "";
 



    public function deleted( Product $product)
    {
     
   $product->delete();
    
        $this->resetPage();
    }
    public function render()
    {
        $products = [];
        if ($this->search) {
            $products = Product::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $products = Product::paginate(10);
        }

        return view('livewire.admin.product-index-component', compact('products'));
    }
}
