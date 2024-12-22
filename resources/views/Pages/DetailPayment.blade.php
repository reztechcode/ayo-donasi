@extends('layouts.app')
@push('js')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        // For example trigger on button clicked, or any time you need
        payButton.addEventListener('click', function() {
            //   var snapToken = document.getElementById('snap-token').value;
            const snapToken = "{{ $transaction->snap_token }}";
            // snap.pay(snapToken);
            snap.pay(snapToken, {
                onSuccess: function(result) {
                    console.log("Transaction success:", result);
                    window.location.reload();
                },

                // Callback jika transaksi tertunda
                onPending: function(result) {
                    console.log("Transaction pending:", result);
                    window.location.reload();
                },

                // Callback jika transaksi gagal
                onError: function(result) {
                    window.location.reload();
                },

                // Callback jika user menutup popup pembayaran
                onClose: function() {
                    alert("Pembayaran Di tutup");
                }
            });
        });
    </script>
@endpush
@section('content')
    <div class="flex justify-center items-center mt-10 text-sky-950 p-2">
        <div class="lg:w-1/2 mx-10 h-1/2 bg-slate-100 lg:p-6 p-2 rounded-xl shadow-lg flex flex-col">
            <h1 class="text-center text-xl font-semibold mb-4">
                Detail Donasi
            </h1>
            <div class="w-full flex p-6">
                <!-- Membuat tabel berada di sisi kiri -->
                <table class="table self-start">
                    <tr>
                        <th class="pr-4">Nama Donatur</th>
                        <td class="pr-4">:</td>
                        <td>{{ $transaction->donation->show_name == 0 ? 'Anonim' : $transaction->user->name  }}</td>
                    </tr>
                    <tr>
                        <th class="pr-4">Nominal</th>
                        <td class="pr-4">:</td>
                        <td>{{ $transaction->gross_amount }}</td>
                    </tr>
                    <tr>
                        <th class="pr-4">Pesan</th>
                        <td class="pr-4">:</td>
                        <td>{{ $transaction->donation?->message ?? 'Semoga Bermanfaat' }}</td>
                    </tr>
                </table>
            </div>
            <span class="px-10 text-sm">Status Pembayaran: {{ $transaction->status }}</span>
            <div class="flex justify-end mt-4">
                <button id="pay-button" class="btn rounded-full bg-primaryy hover:bg-sky-950 text-white"> Kirim
                    Donasi</button>
            </div>
        </div>
    </div>
@endsection
