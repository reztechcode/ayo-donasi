<dialog id="my_modal_3" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-bold text-center mt-5 mb-3"> Silahkan Masukan Nominal Donasi </h3>
        <form action="{{ url('donasi/payment') }}" method="post">
            @csrf
            @method('POST')
            <div class="grid grid-cols-1">
                <input type="hidden" name="campaign_id" value="{{ $campaign->campaign_id }}">
                <div class="flex flex-col mt-4">
                    <label for="" class="text-semibold"> Nominal : </label>
                    <input type="number" name="amount" id="amount"
                        class="bg-slate-100 rounded-2xl p-2 focus:outline-none mt-2 focus:ring-2 focus:ring-slate-300 focus:border-slate-300"
                        placeholder="Masukan Nominal ....">
                </div>
                <div class="flex flex-col mt-4">
                    <label for="" class="text-semibold"> Pesan : </label>
                    <input type="text" name="message" id="message"
                        class="bg-slate-100 rounded-2xl mt-2  p-2 focus:outline-none focus:ring-2 focus:ring-slate-300 focus:border-slate-300"
                        placeholder="Masukan Pesan">
                </div>
                <div class="mt-4 text-medium flex gap-2">
                    {{-- <div class="form-control w-52"> --}}
                    <label class="label cursor-pointer">

                    </label>    
                    {{-- <input type="checkbox" class="toggle border-primaryy border-2 bg-primaryy hover:bg-primaryy"
                        name="show_name" checked="checked" /> --}}
                    <input type="checkbox" class="toggle toggle-blue" checked="checked" name="show_name" />
                    <h1 class="text-xs">*Tampilkan Nama Anda</h1>


                </div>
                <div class="mt-4 flex justify-end">
                    <button type="submit" class="btn bg-primaryy text-white rounded-full hover:bg-sky-700">
                        Lanjutkan</button>
                </div>
            </div>
        </form>
    </div>
</dialog>