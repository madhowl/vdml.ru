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

    public function mount($id)
    {
        $this->product = \App\Models\Product::find($id);
    }

    public function render()
    {
        return view('livewire.product')
            ->extends('audesk.product')
            ->section('product');
    }
}
