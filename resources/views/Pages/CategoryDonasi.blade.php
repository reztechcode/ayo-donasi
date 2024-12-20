@extends('layouts.app')
@section('content')
    <div class="mt-10">
        <h1 class="text-xl font-semibold"> Zakat </h1>
        <p class="text-lg mt-2"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati aliquid tenetur id quo,
            nostrum, repudiandae</p>

        <div class="grid lg:grid-cols-3 grid-cols-2 gap-6 lg:px-0 px-3 mt-5">
            <a href="/Detail">
                <div class="card bg-slate-50 shadow-xl mb-6">
                    <img src="{{ asset('image/datadonasi1.jpg') }}" alt=""
                        class="lg:rounded-t-3xl rounded-t-xl lg:h-60 h-36">
                    <div class="lg:p-4 p-2">
                        <h1 class="font-semibold lg:text-lg  text-sm  overflow-hidden text-ellipsis whitespace-nowrap">
                            Butuh Cicis Haduh Pusing Banget jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
                        </h1>
                        <h1 class="text-sm mt-3">Data Terkumpul</h1>
                        <progress class="progress progress-info w-full" value="70" max="100"></progress>
                        <h1>Rp 1.015.000</h1>
                        <div class="flex lg:justify-between lg:mt-4 mt-4 lg:text-lg text-xs lg:gap-4 gap-2 font-semibold">
                            <h1>30 Donatur</h1>
                            <h1>23 Hari Lagi</h1>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/Detail">
                <div class="card bg-slate-50 shadow-xl mb-6">
                    <img src="{{ asset('image/datadonasi1.jpg') }}" alt=""
                        class="lg:rounded-t-3xl rounded-t-xl lg:h-60 h-36">
                    <div class="lg:p-4 p-2">
                        <h1 class="font-semibold lg:text-lg  text-sm  overflow-hidden text-ellipsis whitespace-nowrap">
                            Butuh Cicis Haduh Pusing Banget jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
                        </h1>
                        <h1 class="text-sm mt-3">Data Terkumpul</h1>
                        <progress class="progress progress-info w-full" value="70" max="100"></progress>
                        <h1>Rp 1.015.000</h1>
                        <div class="flex lg:justify-between lg:mt-4 mt-4 lg:text-lg text-xs lg:gap-4 gap-2 font-semibold">
                            <h1>30 Donatur</h1>
                            <h1>23 Hari Lagi</h1>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/Detail">
                <div class="card bg-slate-50 shadow-xl mb-6">
                    <img src="{{ asset('image/datadonasi1.jpg') }}" alt=""
                        class="lg:rounded-t-3xl rounded-t-xl lg:h-60 h-36">
                    <div class="lg:p-4 p-2">
                        <h1 class="font-semibold lg:text-lg  text-sm  overflow-hidden text-ellipsis whitespace-nowrap">
                            Butuh Cicis Haduh Pusing Banget jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
                        </h1>
                        <h1 class="text-sm mt-3">Data Terkumpul</h1>
                        <progress class="progress progress-info w-full" value="70" max="100"></progress>
                        <h1>Rp 1.015.000</h1>
                        <div class="flex lg:justify-between lg:mt-4 mt-4 lg:text-lg text-xs lg:gap-4 gap-2 font-semibold">
                            <h1>30 Donatur</h1>
                            <h1>23 Hari Lagi</h1>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
@endsection
