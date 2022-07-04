<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
class CategoryCreateComponent extends Component
{
    use WithFileUploads;
    public $hola = "asfd";
    public $categories = [];
    public $image;
    protected $rules = [
        'categoryCreate.name' => 'required',
        'categoryCreate.slug' => 'required',
        'categoryCreate.image' => 'required',


    ];
    protected $validationAttributes = [
        'categoryCreate.name' => 'nombre',
        'categoryCreate.slug' => 'slug',
        'categoryCreate.image' => 'imagen',


    ];
    public $categoryCreate = [
        'name' => null,
        'slug' => null,
        'image' => null,


    ];
    public function mount(Category $category)
    {
        $this->category = $category;
    }
    public function updatedCategoryCreateName($value)
    {
        $this->categoryCreate['slug'] =  Str::slug($value);
    }

    public function save()
    {
        /* $this->hola= $this->productCreate['category_id']; */
        $this->validate();
        $image = $this->categoryCreate['image']->store('categories');

        $category = new Category();
        $category->name = $this->categoryCreate['name'];
        $category->slug = $this->categoryCreate['slug'];    
        $category->image = $image;
        $category->save();
      /*   dd($category); */
        return redirect()->route('admin.categories.index');
    }
    public function render()
    {
        return view('livewire.admin.category-create-component');
    }
}
