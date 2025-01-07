@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header text-primary">Edit Campaign Donasi - {{ $campaign->title }}</h5>
            <div class="card-body">
                @include('components.alert')
                <form method="POST" action="{{ route('campaigns.update', $campaign->campaign_id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ old('title', $campaign->title) }}" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Description">{{ old('description', $campaign->description) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="d-flex align-items-center justify-content-center ">
                                <label for="file"
                                    class="cursor-pointer bg-light w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4 rounded-3 shadow-sm border-dashed">
                                    <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                        <img id="preview-image" class="rounded mb-3 img-thumbnail" alt="Preview Image" 
                                            style="max-width: 18rem; max-height: 18rem; display: {{ $campaign->image_path ? 'block' : 'none' }};"
                                            src="{{ $campaign->image_path ? asset('storage/' . $campaign->image_path) : '' }}">
                                        <i class="fas fa-image display-4"></i>
                                        <p class="text-center mb-1">Click Here To Upload Image</p>
                                        <p class="text-center text-muted mb-2">(Jpeg, Png, Jpg)</p>
                                    </div>
                                    <input type="file" id="file" class="d-none" name="image_path"
                                        onchange="previewImage(event)" />
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="category_id">Kategori</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $campaign->category_id == $category->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="target_amount">Target Rupiah Donasi</label>
                                <input type="number" class="form-control" id="target_amount" name="target_amount"
                                    value="{{ old('target_amount', $campaign->target_amount) }}"
                                    placeholder="Target Amount">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="start_date">Waktu Mulai</label>
                                <input type="date" class="form-control" id="start_date" name="start_date"
                                    value="{{ old('start_date', $campaign->start_date->format('Y-m-d')) }}"
                                    placeholder="Start Date">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="end_date">Waktu Selesai</label>
                                <input type="date" class="form-control" id="end_date" name="end_date"
                                    value="{{ old('end_date', $campaign->end_date->format('Y-m-d')) }}"
                                    placeholder="End Date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status"
                                {{ $campaign->status ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Status Campaign</label>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('campaigns.index') }}" class="btn btn-warning">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<script>
    function previewImage(event) {
        const input = event.target;
        const reader = new FileReader();
        const preview = document.getElementById('preview-image');

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
