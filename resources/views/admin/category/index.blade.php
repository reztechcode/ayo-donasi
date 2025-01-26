@extends('layouts.admin')
@push('js')
    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                const linkId = this.getAttribute('data-id');
                const form = this.closest('form.delete-form');
                if (form) {
                    Swal.fire({
                        title: 'Apakah Yakin?',
                        text: 'Data Tidak Dapat Dipulihkan setelah Dihapus!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                } else {
                    console.error('Form tidak ditemukan!');
                }
            });
        });
    </script>
@endpush
@section('content')
    <div class="container">
        <h3 class="mb-3">Daftar Kategori</h3>
        <div class="card">
            <div class="card-header">Daftar Kategori</div>
            <div class="card-body">
                <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary rounded-3 px-3">Tambah Kategori</a>
                @include('components.alert')
                <div class="table-responsive rounded-3 mt-2">
                    <table class="table table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $item)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $item->icon) }}" class="img-fluid rounded-top"
                                            alt="icon-category" width="60" />
                                    </td>
                                    <td>
                                        <div class="row g-1">
                                            <div class="col-auto">
                                                <a href="{{ route('categories.edit', $item->category_id) }}"
                                                    class="btn btn-sm rounded-3 px-3 btn-primary">Edit</a>
                                            </div>
                                            <div class="col-auto">
                                                <form action="{{ route('categories.destroy', $item->category_id) }}"
                                                    method="POST" class="delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm delete-btn rounded-3 px-3"
                                                        data-id="{{ $item->category_id }}">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <h5 class="text-danger">Data Kategori Kosong</h5>
                            @endforelse
                        </tbody>
                    </table>
                    
                </div>

            </div>
        </div>
    </div>
@endsection
