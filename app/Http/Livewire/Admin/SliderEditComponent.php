<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\HomeSlider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class SliderEditComponent extends Component
{
    use WithFileUploads;
    public $slider;
    public $image;
    protected $rules = [
        'slider.name' => 'required',
        'slider.slug' => 'required',
        'slider.subtitle' => 'required',
        'slider.description' => 'required',
        'slider.status' => 'required',
     
        'slider.category_id' => 'required',

    ];
    public function mount(HomeSlider $slider){
        $this->slider=$slider;
        $this->categories = Category::all();
    }
    public function update(){
        $this->validate();
        if($this->image){
            Storage::delete([$this->slider->image]);
        
            $this->slider->image = $this->image->store('sliders');
        }
        $datos =$this->slider->update();
       /*  dd($datos); */
        return redirect()->route('admin.sliders.index');
    }
    public function render()
    {
        return view('livewire.admin.slider-edit-component');
    }
}
