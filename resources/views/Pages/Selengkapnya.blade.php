@extends('layouts.app')
@section('content')
    <div class="mb-11 flex justify-center mt-7">
        <div class="relative lg:w-5/12 w-full px-3" id="input">
            <input value="" placeholder="Search..."
                class="block w-full text-sm h-[50px] px-4 text-slate-900 bg-white rounded-full border-2 border-slate-400 appearance-none focus:border-transparent focus:outline focus:outline-2 focus:outline-primary focus:ring-0 hover:border-brand-500-secondary- peer invalid:border-error-500 invalid:focus:border-error-500 overflow-ellipsis overflow-hidden text-nowrap pr-[48px]"
                id="floating_outlined" type="text" />
            <div class="absolute top-3 right-8">
                <i class="fa-solid fa-magnifying-glass text-2xl"></i>
            </div>
        </div>

    </div>
    <div class="grid lg:grid-cols-3 grid-cols-2 gap-6 lg:px-0 px-3">
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
@endsection
