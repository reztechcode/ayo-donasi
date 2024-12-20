@extends('layouts.app')
@section('content')
    <div class="flex justify-center items-center mt-10 text-sky-950 p-4">
        <div class="w-1/4 h-1/2 bg-slate-100 p-6 rounded-xl shadow-lg flex flex-col">
            <h1 class="text-center text-xl font-semibold mb-4">
                Detail Donasi
            </h1>
            <div class="w-full flex p-6">
                <!-- Membuat tabel berada di sisi kiri -->
                <table class="table self-start">
                    <tr>
                        <th class="pr-4">Nama Donatur</th>
                        <td class="pr-4">:</td>
                        <td>Agus Prams</td>
                    </tr>
                    <tr>
                        <th class="pr-4">Nominal</th>
                        <td class="pr-4">:</td>
                        <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                        <th class="pr-4">Pesan</th>
                        <td class="pr-4">:</td>
                        <td>Jazakallah</td>
                    </tr>
                </table>
            </div>
            <div class="flex justify-end mt-4">
                <button type="submit" class="btn rounded-full bg-primaryy hover:bg-sky-950 text-white"> Kirim Donasi</button>
            </div>
        </div>
    </div>
@endsection
