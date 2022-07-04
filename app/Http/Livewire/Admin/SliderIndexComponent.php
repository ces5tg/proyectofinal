<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;
use Livewire\WithPagination;
class SliderIndexComponent extends Component
{
    use WithPagination;
    public $search = "";
    public $prueba = "";
 
    public function delete(HomeSlider $homeSlider)
    {
        $homeSlider->delete();
        $this->resetPage();
    }
    public function render()
    {
        $homeSliders = [];
        if ($this->search) {
            $homeSliders = HomeSlider::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $homeSliders = HomeSlider::paginate(10);
        }

        return view('livewire.admin.slider-index-component',compact('homeSliders'));
    }
}
