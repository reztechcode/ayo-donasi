@extends('layouts.app')

@section('content')
    <div class="lg:mt-10 lg:p-0 p-4">
        <h1 class="font-bold text-xl mb-6">History Donasi</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @forelse ($donasi as $data)
                <div class="bg-slate-50 p-4 rounded-lg shadow-md">
                    <table class=" w-full table ">
                        <tr>
                            <th class="text-xs">Donasi</th>
                            <td class="text-xs">:</td>
                            <td class="text-xs"> {{ $data->campaign->title }} </td>
                        </tr>
                        <tr>
                            <th class="text-xs">Nominal</th>
                            <td class="text-xs">:</td>
                            <td class="text-xs"> Rp {{ number_format($data->amount, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th class="text-xs">Pesan</th>
                            <td class="text-xs">:</td>
                            <td class="text-xs"> {{ $data->message }}</td>
                        </tr>
                    </table>
                    {{-- </div> --}}
                </div>
            @empty
                <h1 class="p-4"> Tidak ada data</h1>
            @endforelse

        </div>
    </div>
@endsection
