<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $title = '';

    public function render()
    {
        return view('livewire.form');
    }
}
