@extends('layouts.app')

@section('content')
    <div class="mt-10 lg:p-0 p-4">
        <h1 class="font-bold text-xl mb-6">History Donasi</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-slate-50 p-4 rounded-lg shadow-md">
                <h2 class="font-medium text-lg text-center overflow-hidden text-ellipsis whitespace-nowrap p-3">Donasi Maju</h2>
                    <table class=" w-full table">
                        <tr>
                            <th class="">Kategori</th>
                            <td class="">:</td>
                            <td> Hallo </td>
                        </tr>
                        <tr>
                            <th class="">Nominal</th>
                            <td class="">:</td>
                            <td> Rp 10.000.000</td>
                        </tr>
                        <tr>
                            <th class="">Pesan</th>
                            <td class="">:</td>
                            <td> Jazakallah</td>
                        </tr>
                    </table>
                {{-- </div> --}}
            </div>
        </div>
    </div>
@endsection
