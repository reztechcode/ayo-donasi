@extends('layouts.app')
@section('content')
    <div class="flex justify-center items-center  bg-white rounded-2xl lg:p-0 p-4">
        <div class="card bg-slate-100 shadow-lg p-6 w-full lg:w-8/12 xl:w-6/12 lg:mt-10  rounded-lg ">
            <h1 class="text-2xl font-semibold text-center text-sky-950 mb-6">Profile Information</h1>

            <div class="flex gap-4 items-center mb-4">
                <i class="fa-solid fa-user text-sky-950"></i>
                <h2 class="text-lg font-medium"> {{ Auth::user()->name}}</h2>
            </div>

            <div class="flex gap-4 items-center mb-4">
                <i class="fa-solid fa-envelope text-sky-950"></i>
                <h2 class="text-lg font-medium">{{ Auth::user()->email}}</h2>
            </div>

            <div class="flex gap-4 items-center mb-4">
                <i class="fa-solid fa-phone text-sky-950"></i>
                <h2 class="text-lg font-medium">{{ Auth::user()->phone ?? '-'}}</h2>
            </div>

            <div class="flex gap-4 justify-between mb-6 mt-4">
                <div class="card bg-white p-4 rounded-xl shadow-md w-1/2">
                    <h2 class="font-semibold lg:text-sm text-xs text-center">Dana Di Donasikan</h2>
                    <h3 class="lg:text-sm text-xs font-medium text-center text-sky-950">Rp {{ number_format($donasi, 0, ',', '.') }}</h3>
                </div>
                <a href="/selengkapnya">
                    <div class="bg-primaryy mt-2 rounded-full lg:p-3 p-2 text-white text-center lg:w-full w-32">
                        <h1 class="text-sm">Donasikan Sekarang</h1>
                    </div>
                </a>
            </div>

            <a href="donasi/history">
                <div class="card bg-white p-4 rounded-xl shadow-md w-full mt-5 text-center">
                    <h2><i class="fa-solid fa-clock-rotate-left text-sky-950 mr-2"></i> History Donasi</h2>
                </div>
            </a>
            <a href="/logout" class="flex justify-center items-center ">
                <div class="card bg-red-400 p-3 rounded-3xl shadow-md w-1/2 text-white mt-5 text-center ">
                    <h2><i class="fa-solid fa-right-from-bracket"></i></i> Logout</h2>
                </div>
            </a>
        </div>
    </div>
@endsection
