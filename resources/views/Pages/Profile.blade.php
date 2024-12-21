@extends('layouts.app')
@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-200 rounded-2xl">
        <div class="card bg-slate-100 shadow-lg p-6 w-full lg:w-8/12 xl:w-6/12 rounded-lg">
            <h1 class="text-2xl font-semibold text-center text-sky-950 mb-6">Profile Information</h1>

            <div class="flex gap-4 items-center mb-4">
                <i class="fa-solid fa-user text-sky-950"></i>
                <h2 class="text-lg font-medium">Nadia Putri Rahmawati</h2>
            </div>

            <div class="flex gap-4 items-center mb-4">
                <i class="fa-solid fa-envelope text-sky-950"></i>
                <h2 class="text-lg font-medium">Nadiaputri@gmail.com</h2>
            </div>

            <div class="flex gap-4 items-center mb-4">
                <i class="fa-solid fa-phone text-sky-950"></i>
                <h2 class="text-lg font-medium">0812811721565</h2>
            </div>

            <div class="flex gap-4 justify-between mb-6">
                <div class="card bg-slate-50 p-4 rounded-xl shadow-md w-1/2">
                    <h2 class="font-semibold text-xs">Dana Di Donasikan</h2>
                    <h3 class="text-xs font-medium text-center text-sky-950">Rp 100.000</h3>
                </div>
                <a href="/selengkapnya">
                    <div class="bg-primaryy mt-2 rounded-full p-3 text-white text-center w-32">
                        <h1 class="text-sm">Donasikan Sekarang</h1>
                    </div>
                </a>
            </div>

            <a href="donasi/history">
                <div class="card bg-slate-50 p-4 rounded-xl shadow-md w-full mt-5 text-center">
                    <h2><i class="fa-solid fa-clock-rotate-left text-sky-950 mr-2"></i> History Donasi</h2>
                </div>
            </a>
        </div>
    </div>
@endsection
