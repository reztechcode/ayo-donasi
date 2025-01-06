@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card p-2 p-lg-5">
                <h1 class="fw-bold fs-5 ">{{ $campaign->title }}</h1>
                <div class="row">
                    <!-- Main Section -->
                    <div class="col-lg-7 px-3">
                        <img src="{{ asset('storage/' . $campaign->image_path) }}" alt="campaign-image"
                            class="rounded img-fluid w-100">
                        <div class="mt-4">
                            <h5 class="fw-bold">Deskripsi</h5>
                            <p>{{ $campaign->description }}</p>
                        </div>
                        <!-- Mobile Rincian Dana -->
                        <div class="bg-light p-3 shadow mt-4 d-lg-none rounded">
                            <h1 class="fw-semibold fs-5 mt-3">{{ $campaign->title }}</h1>
                            <h6 class="mt-2">{{ $campaign->created_at }}</h6>
                            <div class="d-flex gap-3 mt-3">
                                <h6><i class="fas fa-user me-1"></i> {{ $campaign->total_donations }} Donatur</h6>
                                <h6><i class="fas fa-clock me-1"></i> {{ $campaign->days_remaining }} Hari Lagi</h6>
                            </div>
                            <div class="progress mt-3" style="height: 1.5rem;">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                    style="width: {{ $campaign->progress }}%;" aria-valuenow="{{ $campaign->progress }}"
                                    aria-valuemin="0" aria-valuemax="100">
                                    {{ round($campaign->progress, 2) }}%
                                </div>
                            </div>
                            <h2 class="mt-3 fw-bold">Rp {{ number_format($campaign->collected_amount, 0, ',', '.') }}
                                <span class="fs-6 fw-medium">Terkumpul</span>
                            </h2>

                            <div class="mt-4">
                                <h5 class="fw-bold">Deskripsi</h5>
                                <p>{{ $campaign->description }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Section -->
                    <div class="d-none d-lg-block col-lg-5 rounded bg-light p-4 shadow">
                        <h4 class="fw-semibold text-center">Rincian Penggalangan Dana</h4>
                        <h6 class="mt-4">Donasi Terkumpul</h6>
                        <h2 class="fw-bold text-primary mt-2">Rp
                            {{ number_format($campaign->collected_amount, 0, ',', '.') }}</h2>
                        <h6 class="fw-bold text-end"><i class="fas fa-clock me-1"></i>{{ $campaign->days_remaining }} Hari
                            Lagi</h6>
                        <div class="progress mt-3" style="height: 1.5rem;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: {{ $campaign->progress }}%;"
                                aria-valuenow="{{ $campaign->progress }}" aria-valuemin="0" aria-valuemax="100">
                                {{ round($campaign->progress, 2) }}%
                            </div>
                        </div>
                        <h5 class="fw-semibold mt-5">Donatur:</h5>
                        @forelse ($donatur->slice(0, 5) as $data)
                            <div class="d-flex gap-3 mt-3">
                                <i class="fas fa-user fs-4"></i>
                                <div>
                                    <h6>Rp {{ number_format($data->amount, 0, ',', '.') }}</h6>
                                    <p class="text-muted mb-0">Oleh: {{ $data->name ?? 'Anonimus' }} ·
                                        {{ number_format($data->days_ago, 0, ',', '.') == 0 ? 'Hari ini' : number_format($data->days_ago, 0, ',', '.') . ' Hari Yang Lalu' }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted">Belum ada donatur</p>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
