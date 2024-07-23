<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Product;

class ProductList extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.components.product-list', ['products' => $products]);
    }
}
