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
                        text: 'Akun Tidak Dapat Dipulihkan setelah Di Hapus!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#0f82fc',
                        cancelButtonColor: '#fc5886',
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
    <div class="container-xxl mt-4 p-lg-3 p-1 m-1">
        <h3 class="mb-4">User Manager</h3>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUsersModal">
            Add Users
        </button>
        <div class="row">
            <div class="col-md-8 col-lg-12 mt-2 px-lg-3 p-0">
                <div class="card mt-3">
                    <div class="card-header">
                        <h5>Daftar Akun Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('userman.index') }}" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" placeholder="Cari Nama atau Email..."
                                    value="{{ $search ?? '' }}">
                                <button class="btn btn-outline-primary" type="submit">Cari</button>
                            </div>
                        </form>
                        <div class="px-3">
                            @if ($search)
                                Menampilkan Pencarian Untuk: {{ $search }}
                            @endif
                        </div>
                        @include('components.alert')
                        <div class="table-responsive rounded-3 mt-2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No Telepon</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <th scope="row">
                                                {{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}
                                            </th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->no_telp ?? '-' }}</td>
                                            <td class="text-primary">{{ $user->email }}</td>
                                            <td>
                                                <div class="d-flex p-2 row g-1">
                                                    <div class="col-auto">
                                                        <form action="{{ route('userman.destroy', $user->user_id) }}" method="POST"
                                                            style="display:inline;" class="delete-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm delete-btn"
                                                                data-id="{{ $user->user_id }}">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak Di temukan Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="justify-content-end">
                            {{ $users->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('components.create-user-modal')
    </div>
@endsection
