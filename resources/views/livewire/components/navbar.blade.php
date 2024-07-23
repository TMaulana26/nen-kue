<div>
    <header class="bg-gradient-to-r from-green-600 to-blue-600 text-white">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="text-xl font-bold">Kue Lebaran Nen</div>
                <div class="hidden md:flex space-x-4">
                    <a href="#beranda" @click.prevent="scrollTo('#beranda')">Beranda</a>
                    <a href="#tentang-kami" @click.prevent="scrollTo('#tentang-kami')">Tentang Kami</a>
                    <a href="#produk" @click.prevent="scrollTo('#produk')">Produk</a>
                    <a href="#kontak" @click.prevent="scrollTo('#kontak')">Kontak</a>
                </div>
                <div x-data="{ open: false }" class="md:hidden">
                    <button @click="open = !open" class="text-white focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5h18v2H3V5zm0 6h18v2H3v-2zm0 6h18v2H3v-2z" />
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                    <div x-show="open" class="mt-2 py-2 bg-green-700 rounded shadow-lg">
                        <a href="#beranda" class="block px-4 py-2 hover:bg-green-600">Beranda</a>
                        <a href="#tentang-kami" class="block px-4 py-2 hover:bg-green-600">Tentang Kami</a>
                        <a href="#produk" class="block px-4 py-2 hover:bg-green-600">Produk</a>
                        <a href="#kontak" class="block px-4 py-2 hover:bg-green-600">Kontak</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
