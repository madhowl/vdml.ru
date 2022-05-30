<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class Product extends Component
{
    public  $product;
    public $page_title;

    public function submit()
    {
        $this->validate();
        // Execution doesn't reach here if validation fails.
        Order::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }

    public function mount($slug)
    {
        $this->product = \App\Models\Product::where('slug',$slug)->first();
        $this->page_title = $this->product->name;
    }

    public function render()
    {
        session()->put('page_title',$this->page_title);
        return view('livewire.product',['page_title'=>$this->product->name])
            ->extends('audesk.product')
            ->section('product');
    }
}
