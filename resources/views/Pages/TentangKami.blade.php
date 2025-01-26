@extends('layouts.app')
@section('content')
    <div class="text-center p-4">
        <h1 class="lg:mt-10 mt-4 text-3xl font-bold mb-3 text-center"> Tentang Kami </h1>
        <p class="text-center lg:w-8/12 w-full mx-auto flex justify-center items-center">
            AyoDonasi adalah platform donasi berbasis website yang memudahkan masyarakat untuk berdonasi secara transparan
            dan aman. Bersama AyoDonasi, setiap kontribusi Anda menjadi langkah nyata dalam menciptakan perubahan positif.
            Mari berbagi kebaikan!
        </p>
        {{-- <h1 class="mt-10 font-semibold"> Contact Informasi</h1> --}}
        <div class="flex gap-7 mt-20 justify-center flex-col lg:flex-row items-center">
            <div class="text-center bg-slate-50 p-4 rounded-3xl shadow-md w-56 ">
                <i class="fa-solid fa-phone text-2xl mb-2"></i>
                <h1> +(62) 8123456789 </h1>
            </div>
            <div class="text-center bg-slate-50 p-4 rounded-3xl shadow-md w-56 ">
                <i class="fa-solid fa-envelope text-2xl mb-2"></i>
                <h1> donasi@gmail.com </h1>
            </div>
            <div class="text-center bg-slate-50 p-4 rounded-3xl shadow-md w-56 ">
                <i class="fa-brands fa-instagram text-2xl mb-2"></i>
                <h1> @ayodonasi</h1>
            </div>
        </div>
    </div>
@endsection
