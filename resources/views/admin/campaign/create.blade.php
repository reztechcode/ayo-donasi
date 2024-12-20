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
                                <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="image_path">Image Path</label>
                                <input type="file" class="form-control" id="image_path" name="image_path"
                                    placeholder="Image Path">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
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
    </div>
@endsection
