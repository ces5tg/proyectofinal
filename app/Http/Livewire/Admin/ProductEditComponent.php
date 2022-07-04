<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
class ProductEditComponent extends Component
{
    use WithFileUploads;
    public $product;/* rebiendo es imformacion ,  */
    public $image;
    protected $rules = [
        'product.name' => 'required',
        'product.slug' => 'required',
        'product.description' => 'required',
        'product.short_description' => 'required',
        'product.price_cost' => 'required',
        'product.quantity' => 'required',
        'product.status' => 'required',
        'product.color' => 'required',
        'product.size' => 'required',
        'product.promotion' => '',
        'product.price_desc' => 'required',
    
        'product.category_id' => 'required',

    ];
    public function mount(Product $product){
        $this->product=$product;
        $this->categories = Category::all();
    }
    public function update(){
        $this->validate();
        if($this->image){
            Storage::delete([$this->product->image]);/* elimnando la imgaen anterior */
        
            $this->product->image = $this->image->store('products');
        }
        $datos =$this->product->update();
        /* dd($datos); */
        return redirect()->route('admin.products.index');
    }
    public function render()
    {
        return view('livewire.admin.product-edit-component');
    }
}
