@extends('layouts.app')
@section('content')
    <div class="p-4">
        {{-- <h1 class="mt-10 text-lg font-semibold"> Profile </h1> --}}
        <div class="card bg-slate-100 shadow-lg lg:p-5 p-5 lg:w-7/12 w-full text-sky-950 font-semibold mt-4">
            <h1 class="mb-3"> Profile Information </h1>
            <div class="flex gap-4 mt-2">
                <i class="fa-solid fa-user"></i>
                <h1> Nadia Putri Rahmawati</h1>
            </div>
            <div class="flex gap-4 mt-2">
                <i class="fa-solid fa-envelope"></i>
                <h1> Nadiaputri@gmail.com</h1>
            </div>
            <div class="flex gap-4 mt-2">
                <i class="fa-solid fa-phone"></i>
                <h1> 0812811721565</h1>
            </div>
            <div class="flex gap-4">
                <div class="card mt-3 bg-slate-50 p-3 rounded-2xl shadow-lg">
                    <h1 class="font-semibold text-xs"> Dana Di Donasikan</h1>
                    <h1 class="text-xs font-medium text-center"> Rp 100.000</h1>
                </div>
                <a href="/selengkapnya">
                    <div class=" bg-primaryy mt-6 rounded-full p-2 text-white">
                        <h1 class="lg:text-sm text-xs"> Donasikan Sekarang</h1>
                    </div>
                </a>
            </div>

            <a href="donasi/history">
                <div class="card bg-slate-50 p-3 rounded-2xl shadow-md lg:w-1/2 w-full mt-5">
                    <h1> <i class="fa-solid fa-clock-rotate-left"></i> History Donasi</h1>
                </div>
            </a>


        </div>
    </div>
@endsection
