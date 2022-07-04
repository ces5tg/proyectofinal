<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $search;
    public $open =false;
    public function updatedSearch($value){
        if ($value) {
            $this->open=true;
        }else{
            $this->open =false;
        }
    }
    public function render()
    {

        if ($this->search) {
            $products = Product::where('name',"like","%".$this->search."%")
            ->where('status',2)
            ->take(2)->get();
        } else {
            $products =[];
        }
        
        return view('livewire.header-search-component',compact('products'));
    }
}
