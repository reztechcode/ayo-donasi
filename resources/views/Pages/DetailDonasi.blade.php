@extends('layouts.app')
@section('content')
    <h1 class="font-bold text-xl mt-10 p-4 lg:flex hidden">{{ $campaign->title }}</h1>
    <div class="flex gap-10 mt-5 ">
        <div class="w-full lg:w-8/12 px-4 lg:px-0">
            <img src="{{ asset('storage/' . $campaign->image_path) }}" alt="" class="rounded-xl h-96 w-full">

            {{-- Mobile Rincian Dana --}}
            <div class="bg-slate-50 p-1 shadow mt-4 lg:hidden">
                <h1 class="font-semibold text-md mt-3">Tak Miliki Lubang Anus, Bayi Ojol Menangis Kesakitan!</h1>
                <h1 class="mt-3"> {{ $campaign->created_at }}</h1>
                <div class="flex gap-4 mt-3">
                    <h1> <i class="fa-solid fa-user"></i> 37 Donatur</h1>
                    <h1> <i class="fa-solid fa-clock"></i> {{ $campaign->days_remaining }} Hari Lagi</h1>
                </div>
                <progress class="progress progress-info w-56" value="{{ $campaign->progress }}" max="100"></progress>
                <h1 class="mt-2 text-2xl font-bold">Rp {{ number_format($campaign->target_amount, 0, ',', '.') }} <span
                        class="text-sm font-medium"> Terkumpul</span></h1>
                <a href="" class="btn rounded-full text-white bg-primaryy mt-4 w-52 hover:bg-sky-500"> Donasikan</a>
                <a href="" class="btn rounded-full text-white bg-sky-900 mt-4 hover:bg-blue-950 "> Bagikan <i
                        class="fa-solid fa-share-nodes text-lg"></i></a>
            </div>
            <div class="">
                <h1 class="font-bold mt-4 mb-2"> Deskripsi </h1>
                <p> {{ $campaign->description }} </p>
            </div>
            <div class="lg:hidden bg-slate-50 p-1 mt-4">
                <h1 class=" font-semibold"> Para Donatur : </h1>
                <div class="flex gap-5 mt-4">
                    <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                    <div class="text-sm">
                        <h1> Rp 50.000</h1>
                        <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                    </div>
                </div>
                <hr>
                <div class="flex gap-5 mt-2">
                    <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                    <div class="text-sm">
                        <h1> Rp 50.000</h1>
                        <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                    </div>
                </div>
                <hr>
                <div class="flex gap-5 mt-2">
                    <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                    <div class="text-sm">
                        <h1> Rp 50.000</h1>
                        <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                    </div>
                </div>
            </div>
        </div>




        <div class="hidden lg:block rounded-3xl bg-slate-50 w-full lg:w-4/12 p-4 shadow-lg">
            <h1 class="font-semibold text-center text-lg"> Rincian Penggalangan Dana</h1>
            <h1 class="mt-4 text-md"> Donasi Terkumpul</h1>
            <h1 class="text-3xl mt-2 font-bold text-sky-700"> Rp {{ number_format($campaign->target_amount, 0, ',', '.') }}
            </h1>
            <h1 class="font-bold text-xs text-end"> <i class="fa-solid fa-clock px-1"></i> {{ $campaign->days_remaining }}
                Hari Lagi</h1>
            <progress class="progress progress-info w-full mt-3" value="{{ $campaign->progress }}"
                max="100"></progress>
            <a href="" class="btn rounded-full text-white bg-primaryy mt-4 w-52 hover:bg-sky-500"> Donasikan</a>
            <a href="" class="btn rounded-full text-white bg-sky-900 mt-4 hover:bg-blue-950 "> Bagikan <i
                    class="fa-solid fa-share-nodes text-lg"></i></a>
            <h1 class="mt-6 font-semibold"> Donatur : </h1>
            <div class="flex gap-5 mt-4">
                <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                <div class="text-sm">
                    <h1> Rp 50.000</h1>
                    <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                </div>
            </div>
            <hr>
            <div class="flex gap-5 mt-2">
                <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                <div class="text-sm">
                    <h1> Rp 50.000</h1>
                    <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                </div>
            </div>
            <hr>
            <div class="flex gap-5 mt-2">
                <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                <div class="text-sm">
                    <h1> Rp 50.000</h1>
                    <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                </div>
            </div>
            <div class="flex gap-5 mt-2">
                <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                <div class="text-sm">
                    <h1> Rp 50.000</h1>
                    <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                </div>
            </div>
            <div class="flex gap-5 mt-2">
                <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                <div class="text-sm">
                    <h1> Rp 50.000</h1>
                    <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div class="rounded-2xl p-6 bg-slate-50">
            <h1 class="font-bold"> Kamu Juga Bisa Bantu :</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-4 gap-7">
                @foreach ($campaigns as $item)
                    <a href="{{ url('detail/' . $item->slug)}}">
                        <div class="flex bg-slate-50 shadow-xl rounded-2xl gap-0">
                            <img src="{{ asset('storage/' . $item->image_path) }}" alt=""
                                class="rounded-3xl w-32 h-36 lg:w-36 lg:h-44 p-4">
                            <div class="p-4">
                                <h1 class="font-semibold lg:text-sm text-xs"> {{ $item->title }}
                                </h1>
                                <h1 class="mt-3 text-xs"> {{ $item->created_at }}</h1>
                                <h1 class="text-xs lg:mt-4 mt-2">Data Terkumpul</h1>
                                <progress class="progress progress-info w-full" value="{{ $item->progress }}"
                                    max="100"></progress>
                                <h1 class="text-sm">Rp {{ number_format($item->target_amount, 0, ',', '.') }}</h1>
                                <div class="flex justify-between lg:mt-2 mt-4 gap-3 ">
                                    <h1 class="font-bold text-xs">30 Donatur</h1>
                                    <h1 class="font-bold text-xs">{{ $item->days_remaining }} Hari Lagi</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
@endsection
