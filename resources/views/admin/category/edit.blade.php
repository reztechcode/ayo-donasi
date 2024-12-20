@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Kategori - {{ $category->name }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('categories.update', $category->category_id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="name">Nama Kategori:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                    </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="icon">Icon:</label>
                            <input type="file" class="form-control" id="icon" name="icon">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $category->icon) }}" alt="" width="90">
                    </div>
                  </div>
                    <div class="form-group col-md-12 mt-3 mb-3">
                        <label for="description">Deskripsi:</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Deksripsi" id="floatingTextarea2" style="height: 100px" required name="description">{{ $category->description }}</textarea>
                            <label for="floatingTextarea2">Deskripsi</label>
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