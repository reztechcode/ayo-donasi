@extends('layouts.app')
@section('content')
    <div class="mt-10">


        @if ($campaigns->isEmpty())
            <div class="flex flex-col justify-center items-center mt-20 text-xl">
                <h1> Mohon Maaf 🙏 </h1>
                <p>Tidak ada Campaign untuk kategori <strong>{{ $category->name }}</strong>.</p>
            </div>
        @else
            <h1 class="text-xl font-semibold"> {{ $category->name }} </h1>
            <p class="text-lg mt-2"> {{ $category->description }} </p>
            <div class="grid lg:grid-cols-3 grid-cols-2 gap-6 lg:px-0 px-3 mt-5">
                @foreach ($campaigns as $data)
                    <a href="{{ url('donasi/detail/' . $data->slug) }}">
                        <div class="card bg-slate-50 shadow-xl mb-6">
                            <img src="{{ asset('storage/' . $data->image_path) }}" alt=""
                                class="lg:rounded-t-3xl rounded-t-xl lg:h-60 h-36">
                            <div class="lg:p-4 p-2">
                                <h1
                                    class="font-semibold lg:text-lg  text-sm  overflow-hidden text-ellipsis whitespace-nowrap">
                                    {{ $data->title }}
                                </h1>
                                <h1 class="text-sm mt-3">Data Terkumpul</h1>
                                <progress class="progress progress-info w-full" value="{{ $data->progress }}"
                                    max="100"></progress>
                                <div class="flex justify-between lg:text-lg font-semibold text-xs">
                                    <h1>Rp {{ number_format($data->collected_amount, 0, ',', '.') }}</h1>
                                    <h1>Rp {{ number_format($data->target_amount, 0, ',', '.') }}</h1>
                                </div>
                                <div
                                    class="flex lg:justify-between lg:mt-4 mt-4 lg:text-lg text-xs lg:gap-4 gap-2 font-semibold">
                                    <h1>{{ $data->total_donations }} Donatur</h1>
                                    <h1>{{ $data->days_remaining }} Hari Lagi</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
        @endif


    </div>
    </div>
@endsection
