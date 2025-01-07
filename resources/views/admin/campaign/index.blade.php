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
                        text: 'Link Tidak Dapat Dipulihkan setelah DIhapus!',
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
        <h3 class="mb-3">Daftar Campaign / Kampanye Donasi</h3>
        <div class="card">
            <div class="card-header">Daftar Donasi</div>
            <div class="card-body">
                <a href="{{ route('campaigns.create') }}" class="btn btn-sm btn-primary rounded-3 px-3">Tambah Campaign
                    Donasi</a>
                @include('components.alert')
                <div class="table-responsive rounded-3 mt-2">
                    <table class="table table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Nama Campaign</th>
                                <th scope="col">Tercapai/Target</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($campaigns as $item)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>
                                        <a data-lightbox="blog-cover" href="{{ asset('storage/' . $item->image_path) }}">
                                            <img src="{{ asset('storage/' . $item->image_path) }}"
                                                class="img-fluid rounded" alt="campaign-image" width="100" />
                                        </a>
                                    </td>
                                    <td>{{ $item->title }}</td>

                                    <td>
                                        {{ 'Rp. ' . number_format($item->target_amount, 0, ',', '.') }} /
                                        {{ 'Rp. ' . number_format($item->collected_amount, 0, ',', '.') }}
                                    </td>
                                    <td>
                                        <div class="row g-1">
                                            <div class="col-auto">
                                                <a href="{{ route('campaigns.edit', $item->campaign_id) }}"
                                                    class="btn btn-sm rounded-3 px-3 btn-primary">Edit</a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="{{ route('campaigns.show', $item->campaign_id) }}"
                                                    class="btn btn-sm rounded-3 px-3 btn-warning">Detail</a>
                                            </div>
                                            <div class="col-auto">
                                                <form action="{{ route('campaigns.destroy', $item->campaign_id) }}"
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
                    {{ $campaigns->links('pagination::bootstrap-5') }}
                </div>

            </div>
        </div>
    </div>
@endsection
