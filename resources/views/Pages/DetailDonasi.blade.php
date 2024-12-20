@extends('layouts.app')
@section('content')
    <h1 class="font-bold text-xl mt-10 p-4 lg:flex hidden">Tak Miliki Lubang Anus, Bayi Ojol Menangis Kesakitan!</h1>
    <div class="flex gap-10 mt-5 ">
        <div class="w-full lg:w-8/12 px-4 lg:px-0">
            <img src="{{ asset('image/4.png') }}" alt="" class="rounded-xl">
            {{-- Mobile Rincian Dana --}}
            <div class="bg-slate-50 p-1 shadow mt-4 lg:hidden">
                <h1 class="font-semibold text-md mt-3">Tak Miliki Lubang Anus, Bayi Ojol Menangis Kesakitan!</h1>
                <div class="flex gap-4 mt-3">
                    <h1> <i class="fa-solid fa-user"></i> 37 Donatur</h1>
                    <h1> <i class="fa-solid fa-clock"></i> 13 Hari Lagi</h1>
                </div>
                <progress class="progress progress-info w-56" value="70" max="100"></progress>
                <h1 class="mt-2 text-2xl font-bold"> Rp 236.397.546 <span class="text-sm font-medium"> Terkumpul</span></h1>
                <a href="" class="btn rounded-full text-white bg-primaryy mt-4 w-52 hover:bg-sky-500"> Donasikan</a>
                <a href="" class="btn rounded-full text-white bg-sky-900 mt-4 hover:bg-blue-950 "> Bagikan <i
                        class="fa-solid fa-share-nodes text-lg"></i></a>
            </div>
            <div class="">
                <h1 class="font-bold mt-3"> Deskripsi </h1>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eveniet reprehenderit nesciunt omnis?
                    Voluptatibus dolores magnam voluptas aliquid illum aspernatur veniam, ducimus minus nostrum odio,
                    voluptatum quaerat animi sunt laudantium aperiam nihil molestiae temporibus. Sequi deserunt nisi, rem
                    quo, laboriosam saepe quia quos atque, suscipit delectus tempore asperiores iste dolorum totam eum
                    laudantium veritatis quod. Eaque itaque, odio impedit ea quo fugiat, ducimus blanditiis iure molestiae
                    atque iusto accusamus rem magni, nostrum numquam recusandae optio id saepe corrupti? Nam sed dolore,
                    vitae nemo voluptas, fugiat amet officia obcaecati quasi modi molestiae magni doloribus nihil eos rem
                    voluptatum blanditiis officiis! At?</p>
            </div>
        </div>




        <div class="hidden lg:block rounded-3xl bg-slate-50 w-full lg:w-4/12 p-4 shadow-lg">
            <h1 class="font-semibold text-center text-lg"> Rincian Penggalangan Dana</h1>
            <h1 class="mt-4 text-md"> Donasi Terkumpul</h1>
            <h1 class="text-3xl mt-2 font-bold text-sky-700"> Rp 236.397.546</h1>
            <progress class="progress progress-info w-full mt-3" value="70" max="100"></progress>
            <a href="" class="btn rounded-full text-white bg-primaryy mt-4 w-52 hover:bg-sky-500"> Donasikan</a>
            <a href="" class="btn rounded-full text-white bg-sky-900 mt-4 hover:bg-blue-950 "> Bagikan <i
                    class="fa-solid fa-share-nodes text-lg"></i></a>
            <h1 class="mt-6 font-semibold"> Donatur : </h1>
            <div class="flex gap-5 mt-2">
                <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                <div class="text-sm">
                    <h1> Rp 50.000</h1>
                    <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                </div>
            </div>
            <hr>
            <div class="flex gap-5 mt-2">
                <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                <div class="text-sm">
                    <h1> Rp 50.000</h1>
                    <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                </div>
            </div>
            <hr>
            <div class="flex gap-5 mt-2">
                <h1><i class="fa-solid fa-user text-3xl"></i></h1>
                <div class="text-sm">
                    <h1> Rp 50.000</h1>
                    <h1 class="text-gray-500"> Oleh : Anonimus . 2 Hari Yang Lalu </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div class="rounded-2xl p-6 bg-slate-50">
            <h1 class="font-bold"> Kamu Juga Bisa Bantu :</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-4 gap-7">
                <div class="flex bg-slate-50 shadow-xl rounded-2xl gap-0">
                    <img src="{{ asset('image/3.png') }}" alt="" class="rounded-3xl w-32 h-36 lg:w-36 lg:h-44 p-4">
                    <div class="p-4">
                        <h1 class="font-semibold lg:text-sm text-xs">Tak Miliki Lubang Anus, Bayi Ojol Menangis Kesakitan!
                        </h1>
                        <h1 class="text-xs lg:mt-4 mt-2">Data Terkumpul</h1>
                        <progress class="progress progress-info w-full" value="70" max="100"></progress>
                        <h1 class="text-sm">Rp 1.015.000</h1>
                        <div class="flex justify-between lg:mt-2 mt-4 ">
                            <h1 class="font-bold text-xs">30 Donatur</h1>
                            <h1 class="font-bold text-xs">23 Hari Lagi</h1>
                        </div>
                    </div>
                </div>
                <div class="flex bg-slate-50 shadow-xl rounded-2xl gap-0">
                    <img src="{{ asset('image/3.png') }}" alt="" class="rounded-3xl w-32 h-36 lg:w-36 lg:h-44 p-4">
                    <div class="p-4">
                        <h1 class="font-semibold lg:text-sm text-xs">Tak Miliki Lubang Anus, Bayi Ojol Menangis Kesakitan!
                        </h1>
                        <h1 class="text-xs lg:mt-4 mt-2">Data Terkumpul</h1>
                        <progress class="progress progress-info w-full" value="70" max="100"></progress>
                        <h1 class="text-sm">Rp 1.015.000</h1>
                        <div class="flex justify-between lg:mt-2 mt-4 ">
                            <h1 class="font-bold text-xs">30 Donatur</h1>
                            <h1 class="font-bold text-xs">23 Hari Lagi</h1>
                        </div>
                    </div>
                </div>
                <div class="flex bg-slate-50 shadow-xl rounded-2xl gap-0">
                    <img src="{{ asset('image/3.png') }}" alt="" class="rounded-3xl w-32 h-36 lg:w-36 lg:h-44 p-4">
                    <div class="p-4">
                        <h1 class="font-semibold lg:text-sm text-xs">Tak Miliki Lubang Anus, Bayi Ojol Menangis Kesakitan!
                        </h1>
                        <h1 class="text-xs lg:mt-4 mt-2">Data Terkumpul</h1>
                        <progress class="progress progress-info w-full" value="70" max="100"></progress>
                        <h1 class="text-sm">Rp 1.015.000</h1>
                        <div class="flex justify-between lg:mt-2 mt-4 ">
                            <h1 class="font-bold text-xs">30 Donatur</h1>
                            <h1 class="font-bold text-xs">23 Hari Lagi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
