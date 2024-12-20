@extends('layouts.app')
@section('content')
    <div class="mb-11 flex justify-center mt-7">
        <div class="relative w-5/12" id="input">
            <input value="" placeholder="Search..."
                class="block w-full text-sm h-[50px] px-4 text-slate-900 bg-white rounded-full border-2 border-slate-400 appearance-none focus:border-transparent focus:outline focus:outline-2 focus:outline-primary focus:ring-0 hover:border-brand-500-secondary- peer invalid:border-error-500 invalid:focus:border-error-500 overflow-ellipsis overflow-hidden text-nowrap pr-[48px]"
                id="floating_outlined" type="text" />
            <div class="absolute top-3 right-5">
                <i class="fa-solid fa-magnifying-glass text-2xl"></i>
            </div>
        </div>

    </div>
    <div class="grid grid-cols-3 gap-6">
        <a href="/Detail">
            <div class="card bg-slate-50 shadow-xl mb-6">
                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                <div class="p-4">
                    <h1 class="font-semibold h-12">Butuh Cicis</h1>
                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                    <progress class="progress progress-info w-full" value="70" max="100"></progress>
                    <h1>Rp 1.015.000</h1>
                    <div class="flex justify-between lg:mt-8">
                        <h1 class="font-bold text-sm">30 Donatur</h1>
                        <h1 class="font-bold text-sm">23 Hari Lagi</h1>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card bg-slate-50 shadow-xl mb-6">
                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                <div class="p-4">
                    <h1 class="font-semibold h-12">Butuh Cicis</h1>
                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                    <progress class="progress progress-info w-full" value="70" max="100"></progress>
                    <h1>Rp 1.015.000</h1>
                    <div class="flex justify-between lg:mt-8">
                        <h1 class="font-bold text-sm">30 Donatur</h1>
                        <h1 class="font-bold text-sm">23 Hari Lagi</h1>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card bg-slate-50 shadow-xl mb-6">
                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                <div class="p-4">
                    <h1 class="font-semibold h-12">Butuh Cicis</h1>
                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                    <progress class="progress progress-info w-full" value="70" max="100"></progress>
                    <h1>Rp 1.015.000</h1>
                    <div class="flex justify-between lg:mt-8">
                        <h1 class="font-bold text-sm">30 Donatur</h1>
                        <h1 class="font-bold text-sm">23 Hari Lagi</h1>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card bg-slate-50 shadow-xl mb-6">
                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                <div class="p-4">
                    <h1 class="font-semibold h-12">Butuh Cicis</h1>
                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                    <progress class="progress progress-info w-full" value="70" max="100"></progress>
                    <h1>Rp 1.015.000</h1>
                    <div class="flex justify-between lg:mt-8">
                        <h1 class="font-bold text-sm">30 Donatur</h1>
                        <h1 class="font-bold text-sm">23 Hari Lagi</h1>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card bg-slate-50 shadow-xl mb-6">
                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                <div class="p-4">
                    <h1 class="font-semibold h-12">Butuh Cicis</h1>
                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                    <progress class="progress progress-info w-full" value="70" max="100"></progress>
                    <h1>Rp 1.015.000</h1>
                    <div class="flex justify-between lg:mt-8">
                        <h1 class="font-bold text-sm">30 Donatur</h1>
                        <h1 class="font-bold text-sm">23 Hari Lagi</h1>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endsection
