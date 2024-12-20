@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Daftar Kategori</div>
            <div class="card-body">
                @include('components.alert')
                <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row g-2">
                        <div class="form-group col-lg-6 col-md-12">
                            <label for="name">Nama Kategori</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                            <label for="icon">Icon</label>
                            <input type="file" class="form-control" id="icon" name="icon" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="name">Deskripsi</label>
                            <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
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
