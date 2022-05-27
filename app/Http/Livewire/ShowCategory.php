<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ShowCategory extends Component
{
    public $parentCategories;
    public function render()
    {
        $this->parentCategories = Category::where('parent_id',0)->get();
        return view('livewire.show-category');
    }
}
