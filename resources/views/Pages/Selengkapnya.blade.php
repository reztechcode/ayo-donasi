@extends('layouts.app')
@section('content')
    <form>
        <div class="mb-11 flex justify-center mt-7">
            <div class="relative lg:w-5/12 w-full px-3" id="input">
                <input placeholder="Search..." name="q"
                    class="block w-full text-sm h-[50px] px-4 text-slate-900 bg-white rounded-full border-2 border-slate-400 appearance-none focus:border-transparent focus:outline focus:outline-2 focus:outline-primary focus:ring-0 hover:border-brand-500-secondary- peer invalid:border-error-500 invalid:focus:border-error-500 overflow-ellipsis overflow-hidden text-nowrap pr-[48px]"
                    id="floating_outlined" type="text" value="{{ $search ?? '' }}" />
                <div class="absolute top-3 right-8">
                    <button type="submit"> <i class="fa-solid fa-magnifying-glass text-2xl"></i></button>
                </div>
            </div>

        </div>
    </form>

    <div class="px-3">
        @if ($search)
            Menampilkan Pencarian Untuk: {{ $search }}
        @endif
    </div>
    <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-6 gap-2 lg:px-0 px-3">
        @foreach ($campaigns as $item)
            <a href="{{ url('donasi/detail/' . $item->slug) }}">
                <div class="card bg-slate-50 shadow-xl mb-6">
                    <img src="{{ asset('storage/' . $item->image_path) }}" alt=""
                        class="lg:rounded-t-3xl rounded-t-xl lg:h-60 h-36">
                    <div class="lg:p-4 p-2">
                        <h1 class="font-semibold lg:text-lg  text-sm  overflow-hidden text-ellipsis whitespace-nowrap">
                            {{ $item->title }}
                        </h1>

                        <h1 class="text-sm mt-3">Dana Terkumpul</h1>
                        <progress class="progress progress-info w-full" value="{{ $item->progress }}"
                            max="100"></progress>
                        <div class="flex justify-between lg:text-lg font-semibold text-xs">
                            <h1>Rp {{ number_format($item->collected_amount, 0, ',', '.') }}</h1>
                            <h1>Rp {{ number_format($item->target_amount, 0, ',', '.') }}</h1>
                        </div>
                        <div class="flex gap-4 mt-3 flex-wrap lg:flex-nowrap flex-col lg:flex-row lg:text-md text-sm">
                            <h1 class="flex items-center gap-2">
                                <i class="fa-solid fa-user"></i> {{ $item->total_donations}} Donatur
                            </h1>
                            <h1 class="flex items-center gap-2">
                                <i class="fa-solid fa-clock"></i> {{ $item->days_remaining }} Hari Lagi
                            </h1>
                        </div>

                    </div>
                </div>
            </a>
        @endforeach

    </div>
@endsection
