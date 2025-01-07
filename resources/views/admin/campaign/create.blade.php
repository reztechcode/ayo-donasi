@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header text-primary">Tambah Campaign Donasi</h5>
            <div class="card-body">
                @include('components.alert')
                <form method="POST" action="{{ route('campaigns.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row g-3">
                        <div class="col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Description" style="height: 70px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="d-flex align-items-center justify-content-center ">
                                <label for="file"
                                    class="cursor-pointer bg-light w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4 rounded-3 shadow-sm border-dashed">
                                    <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                        <img id="preview-image" class="rounded mb-3 img-thumbnail d-none"
                                            alt="Preview Image" style="max-width: 150px; max-height: 150px;">
                                        <i class="fas fa-image display-4"></i>
                                        <p class="text-center mb-1">Click To Upload Image</p>
                                        <p class="text-center text-muted mb-2">Jpeg, Png, Jpg</p>
                                        <button type="button" class="btn btn-dark">Browse File</button>
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
                                <label for="category_id">Category</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="target_amount">Target Amount</label>
                                <input type="number" class="form-control" id="target_amount" name="target_amount"
                                    placeholder="Target Amount">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date"
                                    placeholder="Start Date">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date"
                                    placeholder="End Date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status">
                            <label class="form-check-label" for="status">Status Campaign</label>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-warning">Kembali</a>
                    </div>
                </form>
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
                preview.classList.remove('d-none');
            };

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
