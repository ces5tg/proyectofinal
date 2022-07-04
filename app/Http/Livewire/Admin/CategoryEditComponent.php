<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
class CategoryEditComponent extends Component
{
    use WithFileUploads;
    public $product;
    public $image;
    protected $rules = [
        'category.name' => 'required',
        'category.slug' => 'required',
   

 

    ];
    public function mount(Category $category){
        $this->category=$category;

    }
    public function update(){
        $this->validate();
        if($this->image){
            Storage::delete([$this->category->image]);
        
            $this->category->image = $this->image->store('categories');
        }
        $datos =$this->category->update();
        /* dd($datos); */
        return redirect()->route('admin.categories.index');
    }
    public function render()
    {
        return view('livewire.admin.category-edit-component');
    }
}
