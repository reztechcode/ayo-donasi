@extends('layouts.app')
@section('content')
    <div class="p-4">
        <div class="carousel  lg:rounded-3xl rounded-lg lg:h-f" id="carousel">
            <div class="carousel-item w-full  transition-opacity duration-500">
                <img src="{{ asset('image/1.png') }}" alt="Burger" class="lg:h-full h-32" />
            </div>
            <div class="carousel-item w-full  transition-opacity duration-500">
                <img src="{{ asset('image/2.png') }}" alt="Burger" class="lg:h-full h-32" />
            </div>
            <div class="carousel-item w-full  transition-opacity duration-500">
                <img src="{{ asset('image/3.png') }}" alt="Burger" class="lg:h-full h-32" />
            </div>
            <div class="carousel-item w-full  transition-opacity duration-500">
                <img src="{{ asset('image/4.png') }}" alt="Burger" class="lg:h-full h-32" />
            </div>
        </div>
    </div>


    <div class="flex justify-center items-center mt-6">
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-5 justify-center lg:w-2/3 w-4/5">
            @foreach ($category as $data)
                <a href="{{ url('category/' . $data->category_id) }}">
                    <div class="card bg-slate-100 p-4 text-center items-center rounded-3xl shadow-xl lg:h-56 h-40">
                        <img src="{{ asset('storage/' . $data->icon) }}" alt="" class="mt-2 lg:w-4/5 w-20">
                        <h1 class="font-semibold text-lg"> {{ $data->name }} </h1>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="lg:rounded-xl md:rounded-none p-3  bg-slate-50 mt-10 lg:shadow shadow-none">
        <div class="flex justify-between">
            <h1 class="font-bold text-lg">Penggalangan Dana</h1>
            <a href="{{ url('selengkapnya') }}"
                class="bg-primaryy lg:py-2 lg:px-7 py-1 px-4 text-md text-white rounded-full"> Lihat Lainnya</a>
        </div>
        <div id="splide" class="splide mt-7">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($campaign as $item)
                        <li class="splide__slide shadow-none">
                            <a href="{{ url('donasi/detail/' . $item->slug )  }}">
                                <div class="card bg-slate-100 shadow-xl mb-6  lg:h-auto h-auto">
                                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Tidak Ada Image"
                                        class="rounded-t-3xl lg:h-60 h-40">
                                    <div class="p-4">
                                        <h1
                                            class="font-semibold lg:text-lg  text-sm  overflow-hidden text-ellipsis whitespace-nowrap">
                                            {{ $item->title }} </h1>
                                        <h1 class="text-sm mt-4">Dana Terkumpul</h1>
                                        @php
                                            $progress =
                                                $item->target_amount > 0
                                                    ? ($item->collected_amount / $item->target_amount) * 100
                                                    : 0;
                                        @endphp
                                        <progress class="progress progress-info w-full" value="{{ $progress }}"
                                            max="100"></progress>

                                        <div class="flex justify-between ">
                                            <h1>Rp {{ number_format($item->collected_amount, 0, ',', '.') }}</h1>
                                            <h1>Rp {{ number_format($item->target_amount, 0, ',', '.') }}</h1>
                                        </div>
                                        <div class="flex justify-between lg:mt-8 mt-4 ">
                                            <h1 class="font-bold text-sm">{{ $item->total_donations }} Donatur</h1>
                                            <h1 class="font-bold text-sm">{{ $item->days_remaining }} Hari Lagi</h1>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach

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
