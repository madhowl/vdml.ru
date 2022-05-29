<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class Product extends Component
{
    public  $product;


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
    }

    public function render()
    {
        return view('livewire.product',['page_title'=>$this->product->name])
            ->extends('audesk.product')
            ->section('product');
    }
}
