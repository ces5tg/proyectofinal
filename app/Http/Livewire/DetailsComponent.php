<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class DetailsComponent extends Component
{
    /* public function render()
    {
        return view('livewire.details-component');
    } */
     public $slug;
     public $qty =1;
     public function increment(){
        $this->qty = $this->qty + 1;
     }
     public function decrement(){
        $this->qty = $this->qty - 1;
     }
    public $prueba = "hola esto no funciono";
    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function store( $product_id)/* */
    {
        $product = Product::where('_id',$product_id)->first();
        Cart::add([
        'id' => $product->id, 
        'name' => $product->name, 
        'qty' => $this->qty, 
        'price' => $product->price_cost, 
        'weight' => 0, 
        'options' => [
            'image'=> $product->image ,
            'slug'=> $product->slug
            ]
        ]);
        session()->flash('success_message', 'item agregado');
        $this->emitTo('navigation-menu','render');

       $this->prueba ="asdfasdfasdfdfsa";
        /* return redirect()->route('product.cart'); */
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $popular_products = Product::all()->take(6);
        $related_products = Product::where('category_id', $product->category_id)->get();
        return view('livewire.details-component', ['product' => $product, 'popular_products' => $popular_products, 'related_products' => $related_products, 'pru' => $this->prueba]);
    }
}
