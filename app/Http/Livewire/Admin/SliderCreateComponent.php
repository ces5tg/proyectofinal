<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\HomeSlider;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
class SliderCreateComponent extends Component
{
    use WithFileUploads;
    public $hola = "asfd";
    public $categories = [];
    public $image;
    protected $rules = [
        'sliderCreate.name' => 'required',
        'sliderCreate.slug' => 'required',
        'sliderCreate.subtitle' => 'required',
        'sliderCreate.description' => 'required',
        'sliderCreate.status' => 'required',
        'sliderCreate.image' => 'required',
        'sliderCreate.category_id' => 'required',

    ];
    protected $validationAttributes = [
        'sliderCreate.title' => 'nombre',
        'sliderCreate.slug' => 'slug',
        'sliderCreate.subtitle' => 'subtitle',
        'sliderCreate.description' => 'descripcion',
        'sliderCreate.status' => 'status',
        'sliderCreate.image' => 'image',
        'sliderCreate.category_id' => 'catgory',

    ];
    public $sliderCreate = [
        'name' => null,
        'slug' => null,
        'subtitle' => null,
        'description' => null,
        'status' => null,
        'image' => null,
        'category_id' => null,
  

    ];
    public function mount(HomeSlider $slider)
    {
        $this->slider = $slider;
        $this->categories = Category::all();
    }
    public function updatedSliderCreateName($value)
    {
        $this->sliderCreate['slug'] =  Str::slug($value);
    }

    public function save()
    {
        $this->hola= $this->sliderCreate['image'];
        /* $this->hola= $this->productCreate['category_id']; */
        $this->validate();
        $image = $this->sliderCreate['image']->store('sliders');

        $slider = new HomeSlider();
        $slider->name = $this->sliderCreate['name'];
        $slider->slug = $this->sliderCreate['slug'];
        $slider->subtitle = $this->sliderCreate['subtitle'];
        $slider->description = $this->sliderCreate['description'];
        $slider->status = $this->sliderCreate['status'];

        $slider->category_id = $this->sliderCreate['category_id'];

        $slider->image = $image;
        $slider->category_id = $this->sliderCreate['category_id'];
        $slider->save();
       /*  dd($product); */
        return redirect()->route('admin.sliders.index');
    }
    public function render()
    {
        return view('livewire.admin.slider-create-component');
    }
}
