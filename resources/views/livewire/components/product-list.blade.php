<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
    @foreach($products as $product)
        @livewire('components.product-card', [
            'name' => $product->name, 
            'description' => $product->description, 
            'price' => 'Rp ' . number_format($product->price, 0, ',', '.') . '/kg', 
            'image' => 'storage/'.$product->image
        ])
    @endforeach
</div>
