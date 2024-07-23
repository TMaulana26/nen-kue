<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ProductCard extends Component
{
    public $name;
    public $description;
    public $price;
    public $image;
    public $whatsappLink;

    public function mount($name, $description, $price, $image = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image ?? '/api/placeholder/300/200';
        $this->generateWhatsappLink();
    }

    public function generateWhatsappLink()
    {
        $whatsappNumber = '6289648046433';
        $message = urldecode("Halo, saya tertarik dengan produk {$this->name}. Bisakah Anda memberikan informasi lebih lanjut?");
        $this->whatsappLink = "https://wa.me/{$whatsappNumber}?text={$message}";
    }
    public function render()
    {
        return view('livewire.components.product-card');
    }
}
