<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class Index extends Component
{
    public $products;
    public function mount()
    {
        $this->products = Product::all()->take(4);
    }
    public function render()
    {
        return view('livewire.index');
    }
}
