<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Prueba extends Component
{
    public $prueba="hola";
    public function render()
    {
        return view('livewire.prueba')->layout('layouts.app');
    }
}
