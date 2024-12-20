@extends('layouts.app')
@section('content')
    <div class="p-4">
        <div class="carousel  lg:rounded-3xl rounded-lg lg:h-f" id="carousel">
            <div class="carousel-item w-full  transition-opacity duration-500">
                <img src="{{ asset('image/2.png') }}" alt="Burger" class="lg:h-full h-32" />
            </div>
            <div class="carousel-item w-full  transition-opacity duration-500">
                <img src="{{ asset('image/3.png') }}" alt="Burger" class="lg:h-full h-32" />
            </div>
            <div class="carousel-item w-full  transition-opacity duration-500">
                <img src="{{ asset('image/4.png') }}" alt="Burger" class="lg:h-full h-32" />
            </div>
            <div class="carousel-item w-full  transition-opacity duration-500">
                <img src="{{ asset('image/7.png') }}" alt="Burger" class="lg:h-full h-32" />
            </div>
        </div>
    </div>


    <div class="flex justify-center items-center mt-6">
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-5 justify-center lg:w-2/3 w-4/5">
            <div class="card bg-slate-100 p-4 text-center items-center rounded-3xl shadow-xl">
                <img src="{{ asset('image/zakat.png') }}" alt="" class="mt-2 lg:w-4/5 w-20">
                <h1 class="font-semibold text-lg"> Zakat </h1>
            </div>
            <div class="card bg-slate-100 p-4 text-center items-center rounded-3xl shadow-xl">
                <img src="{{ asset('image/donastion.png') }}" alt="" class="mt-2 lg:w-4/5 w-20">
                <h1 class="font-semibold text-lg"> Donasi </h1>
            </div>
            <div class="card bg-slate-100 p-4 text-center items-center rounded-3xl shadow-xl">
                <img src="{{ asset('image/donasi15.png') }}" alt="" class="mt-2 lg:w-4/5 w-20">
                <h1 class="font-semibold text-lg"> Kesehatan </h1>
            </div>
            <div class="card bg-slate-100 p-4 text-center items-center rounded-3xl shadow-xl">
                <img src="{{ asset('image/gempa.png') }}" alt="" class="mt-2 lg:w-4/5 w-20">
                <h1 class="font-semibold text-lg"> Bencana </h1>
            </div>
        </div>
    </div>

    <div class="lg:rounded-xl md:rounded-none p-3  bg-slate-50 mt-10 lg:shadow shadow-none">
        <div class="flex justify-between">
            <h1 class="font-bold text-lg">Penggalangan Dana</h1>
            <a href="/Selengkapnya" class="bg-primaryy py-2 px-7 text-white rounded-full"> Lihat Lainnya</a>
        </div>
        <div id="splide" class="splide mt-7">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide shadow-none">
                        <a href="/Detail">
                            <div class="card bg-slate-100 shadow-xl mb-6 lg:h-80 h-72">
                                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                                <div class="p-4">
                                    <h1 class="font-semibold h-12">Tak Miliki Lubang Anus, Bayi Ojol Menangis Kesakitan!
                                    </h1>
                                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                                    <progress class="progress progress-info w-full" value="70"
                                        max="100"></progress>
                                    <h1>Rp 1.015.000</h1>
                                    <div class="flex justify-between lg:mt-8 mt-4 ">
                                        <h1 class="font-bold text-sm">30 Donatur</h1>
                                        <h1 class="font-bold text-sm">23 Hari Lagi</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide shadow-none">
                        <a href="#">
                            <div class="card bg-slate-100 shadow-xl mb-6  lg:h-80 h-72">
                                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                                <div class="p-4">
                                    <h1 class="font-semibold h-12">Butuh Cicis</h1>
                                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                                    <progress class="progress progress-info w-full" value="70"
                                        max="100"></progress>
                                    <h1>Rp 1.015.000</h1>
                                    <div class="flex justify-between lg:mt-8 mt-4 ">
                                        <h1 class="font-bold text-sm">30 Donatur</h1>
                                        <h1 class="font-bold text-sm">23 Hari Lagi</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    
                    <li class="splide__slide shadow-none">
                        <a href="#">
                            <div class="card bg-slate-100 shadow-xl mb-6 lg:h-80 h-72">
                                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                                <div class="p-4">
                                    <h1 class="font-semibold h-12">Tak Miliki Lubang Anus, Bayi Ojol Menangis Kesakitan!
                                    </h1>
                                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                                    <progress class="progress progress-info w-full" value="70"
                                        max="100"></progress>
                                    <h1>Rp 1.015.000</h1>
                                    <div class="flex justify-between lg:mt-8 mt-4 ">
                                        <h1 class="font-bold text-sm">30 Donatur</h1>
                                        <h1 class="font-bold text-sm">23 Hari Lagi</h1>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <style>
        .carousel-item {
            display: none;
        }

        .owl-carousel .owl-item {
            box-shadow: none;
            /* Menghapus shadow */
        }

        .carousel-item-visible {
            display: block;
        }
    </style>



    <script>
        const carousel = document.getElementById('carousel');
        const items = carousel.querySelectorAll('.carousel-item');
        let currentIndex = 0;

        function showNextSlide() {
            items[currentIndex].classList.remove('carousel-item-visible');
            currentIndex = (currentIndex + 1) % items.length;
            items[currentIndex].classList.add('carousel-item-visible');
        }

        items[currentIndex].classList.add('carousel-item-visible');
        setInterval(showNextSlide, 3000);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Splide("#splide", {
                type: "loop",
                perPage: 3,
                perMove: 1,
                gap: "2rem",
                arrows: false, // Menghilangkan tombol navigasi
                pagination: false, // Menghilangkan dots
                breakpoints: {
                    768: {
                        perPage: 1, // Responsif di layar kecil
                    },
                    1024: {
                        perPage: 2,
                    },
                },
            }).mount();
        });
    </script>




    @vite('resources/js/app.js')
@endsection
