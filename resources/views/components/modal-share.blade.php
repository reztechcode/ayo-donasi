<dialog id="modalshare" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-bold text-center mt-5 mb-3"> Share Donasi Nya Yuk </h3>
        <h1 class="text-center font-medium text-sm"> Sebarkan Kebaikan Bersama </h1>
        <div class="flex gap-4 justify-center items-center mt-5">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                target="_blank"><i class="fa-brands fa-facebook text-3xl"></i></a>
            <a href="https://www.instagram.com/?url={{ urlencode(request()->fullUrl()) }}" target="_blank">
                <i class="fa-brands fa-instagram text-3xl"></i>
            </a>
            <a href="https://api.whatsapp.com/send?text={{ urlencode(request()->fullUrl()) }}" target="_blank"><i
                    class="fa-brands fa-whatsapp text-3xl"></i></a>
        </div>


    </div>
</dialog>
