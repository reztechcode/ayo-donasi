@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4">
                    <h3 class="text-center ">Donasi</h3>
                    <h1 class="text-center"> {{ count($donasi) }}</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3 class="text-center ">Penggalangan Dana</h3>
                    <h1 class="text-center"> {{ count($penggalangan) }}</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3 class="text-center ">Kategori</h3>
                    <h1 class="text-center"> {{ count($category) }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mt-2">
                <h5> Statictic Campaign Per Bulan</h5>
                <div class="card p-3">
                    <h6>Januari</h6>
                </div>
            </div>
            <div class="col-md-5">
                <h5> Campaign Terbaru</h5>
                <div class="row">
                    @forelse ($campaign as $data)
                        <div class="col-md-6 mt-2">
                            <a href="{{ route('campaigns.show', $data->campaign_id) }}">
                                <div class="card p-1" style="height: 16rem">
                                    <img src="{{ asset('storage/' . $data->image_path) }}" class="img-fluid"
                                        alt="campaign-image" style="border-radius: 20px">
                                    <div class="p-2 ">
                                        <h5> {{ $data->title }}</h5>
                                        {{-- <h1> {{ $data->category->title}}</h1> --}}
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6>Rp. {{ number_format($data->collected_amount, 0, ',', '.') }}</h6>
                                            <h6>{{ $data->total_donations }} Orang</h6>
                                        </div>
                                        @php
                                            $progress =
                                                $data->target_amount > 0
                                                    ? ($data->collected_amount / $data->target_amount) * 100
                                                    : 0;
                                        @endphp
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: {{ $progress }}%;">
                                                {{ round($progress, 2) }}%
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </a>
                        </div>

                    @empty
                    @endforelse
                </div>

            </div>

        </div>
    </div>
@endsection
