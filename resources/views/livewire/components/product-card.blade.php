<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset($image) }}" alt="{{ $name }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h3 class="text-xl font-semibold mb-2">{{ $name }}</h3>
        <p class="text-gray-600 mb-4">{{ $description }}</p>
        <div class="flex justify-between items-center">
            <span class="text-green-600 font-bold">{{ $price }}</span>
            <a href="{{ $whatsappLink }}" target="_blank" rel="noopener noreferrer" 
               class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">
                Pesan Sekarang
            </a>
        </div>
    </div>
</div>