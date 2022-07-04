<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
class CategoryIndexComponent extends Component
{
    use WithPagination;
    public $search = "";
    public $prueba = "";
 
    public function delete(Category  $category)
    {
        $category->delete();
        $this->resetPage();
    }
    public function render()
    {
        $category = [];
        if ($this->search) {
            $categories = Category::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $categories = Category::paginate(10);
        }
        return view('livewire.admin.category-index-component',compact('categories'));
    }
}
