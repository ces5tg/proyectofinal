<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;
class SearchComponent extends Component
{
    /* public $product */ /* recibimos la infomracion */

use WithPagination;

    public $search;
/*    public $price,$orden; */
  
    public function mount(Product $product)
    {
        $this->product = $product;
       
    }

    public function store( $product_id)/* */
    {
        $product = Product::where('_id',$product_id)->first();
        Cart::add([
        'id' => $product->id, 
        'name' => $product->name, 
        'qty' => 1, 
        'price' => $product->price_cost, 
        'weight' => 0, 
        'options' => [
            'image'=> $product->image ,
            'slug'=> $product->slug
            ]
        ]);
        session()->flash('success_message', 'Item added in Cart');
       
        /* return redirect()->route('product.cart'); */
    }

//    use WithPagination;
    public function render()
    {
        /* $products =  Product::orwhere('name','LIKE','%'.$this->search.'%')->orwhere('price_cost',$this->price)->orderBy('name',$this->orden)->paginate(8); */
       $products = Product::where('name','LIKE','%'.$this->search.'%')->paginate(8);

        return view('livewire.search-component',['products' => $products]);
    }
}
