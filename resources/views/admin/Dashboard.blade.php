@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4">
                    <h3 class="text-center ">Donasi</h3>
                    <h1 class="text-center"> {{ count($donasi)}}</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3 class="text-center ">Penggalangan Dana</h3>
                    <h1 class="text-center"> {{ count($penggalangan)}}</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3 class="text-center ">Kategori</h3>
                    <h1 class="text-center"> {{ count($category)}}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection