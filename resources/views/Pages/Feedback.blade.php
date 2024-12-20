@extends('layouts.app')
@section('content')
<div class="flex justify-center items-center mt-4 text-sky-950 p-4">
    <div class=" bg-slate-100 p-6 rounded-xl shadow-lg flex flex-col justify-center items-center">
        <h1 class=" text-center text-xl font-semibold">
            Hello, Agus Septian
        </h1>
        <img src="{{ asset('image/logo.png') }}" alt="" class="w-40 h-40 mt-7">
        <h1 class="mt-4 font-bold text-xl mb-3 text-center"> Terima Kasih Sudah Berdonasi !</h1>
        <h1 class="text-center"> Kebaikan hati Anda adalah cahaya harapan bagi  mereka  <br> yang membutuhkannya.</h1>
        <a href="" class="btn bg-primaryy text-white mt-5 rounded-full px-7"> Donasiku</a>
    </div>
</div>

@endsection
