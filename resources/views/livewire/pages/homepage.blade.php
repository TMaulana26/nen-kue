@extends('layouts.app')

@section('content')
<div x-data="smoothScroll()" class="bg-gradient-to-b from-green-50 to-white">
    @livewire('components.navbar')

    <main>
        <section id="beranda" class="py-32 bg-gradient-to-r from-green-400 to-blue-500 text-white relative overflow-hidden">
            <div class="container mx-auto px-6 relative z-10 mb-36">
                <h1 class="text-5xl font-bold mb-4 leading-tight">Selamat Datang di <br>Kue Lebaran Nen</h1>
                <p class="text-xl mb-8 max-w-lg">Nikmati kelezatan kue lebaran khas Nusantara untuk momen spesial Anda</p>
                <a href="#produk" @click.prevent="scrollTo('#produk')"
                    class="bg-white text-green-600 py-3 px-8 rounded-full font-bold hover:bg-green-100 transition duration-300 inline-flex items-center">
                    Lihat Produk Kami
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <svg class="absolute bottom-0 left-0 w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </section>

        <section id="tentang-kami" class="py-32">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold mb-12 text-center text-gray-800">Tentang Kami</h2>
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 mb-8 md:mb-0">
                        <img src="{{ asset('img/Kue lebaran.webp') }}" alt="Tentang Kue Lebaran Nusantara"
                            class="rounded-lg shadow-2xl">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12">
                        <p class="text-gray-600 mb-6 text-lg">Kue Lebaran Nusantara adalah produsen kue kering dan basah khas
                            lebaran yang telah berpengalaman selama lebih dari 20 tahun. Kami menghadirkan cita rasa
                            autentik dari berbagai daerah di Indonesia untuk memeriahkan momen Idul Fitri Anda.</p>
                        <p class="text-gray-600 text-lg">Dengan bahan-bahan pilihan dan resep tradisional yang telah diwariskan
                            turun-temurun, kami menjamin kualitas dan kelezatan setiap produk kami.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="produk" class="py-32 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold mb-12 text-center text-gray-800">Produk Unggulan</h2>
                @livewire('components.product-list')
            </div>
        </section>

        <section id="kontak" class="py-32 bg-green-50">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold mb-12 text-center text-gray-800">Hubungi Kami</h2>
                @livewire('components.contact-form')
            </div>
        </section>
    </main>

    <footer class="bg-green-600 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <p class="text-lg">Kue Lebaran Nen - Melayani sejak 2003</p>
            <div class="mt-6 flex justify-center space-x-4">
                <a href="#" class="text-white hover:text-green-200">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.05 6.5 A 1.6 1.6 0 0 1 16.45 8.1 A 1.6 1.6 0 0 1 14.85 6.5 A 1.6 1.6 0 0 1 18.05 6.5 z M 6.8 5.8 L 6.8 18.2 L 10.8 18.2 L 10.8 12.6 L 14.8 18.2 L 19.3 18.2 L 14.6 11.9 L 19 5.8 L 14.6 5.8 L 10.8 11.2 L 10.8 5.8 z"/>
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-green-200">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-green-200">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</div>

<script>
    function smoothScroll() {
        return {
            scrollTo(target) {
                const element = document.querySelector(target);
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        }
    }
</script>
@endsection