<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = \App\Models\Category::all ();
    }
    public function render()
    {
        return view('livewire.category');
    }
}
