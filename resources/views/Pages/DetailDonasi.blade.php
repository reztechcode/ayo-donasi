@extends('layouts.app')
@section('content')
    <div class="mb-11 flex justify-center mt-7">
        <div class="relative w-5/12" id="input">
            <input value="" placeholder="Search..."
                class="block w-full text-sm h-[50px] px-4 text-slate-900 bg-white rounded-full border-2 border-slate-400 appearance-none focus:border-transparent focus:outline focus:outline-2 focus:outline-primary focus:ring-0 hover:border-brand-500-secondary- peer invalid:border-error-500 invalid:focus:border-error-500 overflow-ellipsis overflow-hidden text-nowrap pr-[48px]"
                id="floating_outlined" type="text" />
            <div class="absolute top-3 right-5">
                <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="slate-300" viewBox="0 0 24 24" height="24" width="24">
                    <path
                        d="M10.979 16.8991C11.0591 17.4633 10.6657 17.9926 10.0959 17.9994C8.52021 18.0183 6.96549 17.5712 5.63246 16.7026C4.00976 15.6452 2.82575 14.035 2.30018 12.1709C1.77461 10.3068 1.94315 8.31525 2.77453 6.56596C3.60592 4.81667 5.04368 3.42838 6.82101 2.65875C8.59833 1.88911 10.5945 1.79039 12.4391 2.3809C14.2837 2.97141 15.8514 4.21105 16.8514 5.86977C17.8513 7.52849 18.2155 9.49365 17.8764 11.4005C17.5979 12.967 16.8603 14.4068 15.7684 15.543C15.3736 15.9539 14.7184 15.8787 14.3617 15.4343C14.0051 14.9899 14.0846 14.3455 14.4606 13.9173C15.1719 13.1073 15.6538 12.1134 15.8448 11.0393C16.0964 9.62426 15.8261 8.166 15.0841 6.93513C14.3421 5.70426 13.1788 4.78438 11.81 4.34618C10.4412 3.90799 8.95988 3.98125 7.641 4.55236C6.32213 5.12348 5.25522 6.15367 4.63828 7.45174C4.02135 8.74982 3.89628 10.2276 4.28629 11.6109C4.67629 12.9942 5.55489 14.1891 6.75903 14.9737C7.67308 15.5693 8.72759 15.8979 9.80504 15.9333C10.3746 15.952 10.8989 16.3349 10.979 16.8991Z">
                    </path>
                    <rect transform="rotate(-49.6812 12.2469 14.8859)" rx="1" height="10.1881" width="2"
                        y="14.8859" x="12.2469"></rect>
                </svg> --}}
            </div>
        </div>

    </div>
    <div class="grid grid-cols-3 gap-6">
        <a href="#">
            <div class="card bg-slate-100 shadow-xl mb-6">
                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                <div class="p-4">
                    <h1 class="font-semibold h-12">Butuh Cicis</h1>
                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                    <progress class="progress progress-primaryy w-full" value="70" max="100"></progress>
                    <h1>Rp 1.015.000</h1>
                    <div class="flex justify-between lg:mt-8">
                        <h1 class="font-bold text-sm">30 Donatur</h1>
                        <h1 class="font-bold text-sm">23 Hari Lagi</h1>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card bg-slate-100 shadow-xl mb-6">
                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                <div class="p-4">
                    <h1 class="font-semibold h-12">Butuh Cicis</h1>
                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                    <progress class="progress progress-primaryy w-full" value="70" max="100"></progress>
                    <h1>Rp 1.015.000</h1>
                    <div class="flex justify-between lg:mt-8">
                        <h1 class="font-bold text-sm">30 Donatur</h1>
                        <h1 class="font-bold text-sm">23 Hari Lagi</h1>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card bg-slate-100 shadow-xl mb-6">
                <img src="{{ asset('image/3.png') }}" alt="" class="rounded-t-3xl">
                <div class="p-4">
                    <h1 class="font-semibold h-12">Butuh Cicis</h1>
                    <h1 class="text-sm mt-4">Data Terkumpul</h1>
                    <progress class="progress progress-primaryy w-full" value="70" max="100"></progress>
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
