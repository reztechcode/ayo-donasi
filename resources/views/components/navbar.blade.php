<nav class="text-white shadow-lg bg-primaryy sticky top-0 z-50">
    <div class="container mx-auto px-4 flex justify-between items-center py-4">
        <!-- Logo dan Judul -->
        <div class="flex items-center ">
            <img src="{{ asset('image/download (1).png') }}" alt="" class="h-12 w-12 rounded-full">
            <a href="{{ url('/') }}" class="text-xl font-bold py-2 px-4">Ayo Donasi</a>
        </div>

        <!-- Menu Navigasi -->
        <div id="menu" class="hidden md:flex space-x-2 text-white font-bold">
            <a href="{{ url('/') }}"class="hover:bg-slate-200 hover:text-sky-950 hover:rounded-full py-2 px-4">Beranda</a>
            <a href="{{ url('tentang-kami') }}" class="hover:bg-slate-200 hover:text-sky-950 hover:rounded-full py-2 px-4">Tentang Kami</a>
        </div>

        <!-- Tombol Login dan Daftar -->
        <div class="space-x-3  hidden  md:flex">
            <a href="{{ url('/auth/login') }}" class="py-2 px-4 text-md w-24 text-center text-white rounded-full font-semibold">Login</a>
            <a href="#register" class="bg-sky-900 py-2 px-4 w-32 text-center text-md text-white shadow-xl rounded-full font-semibold">
                Daftar <i class="fa-solid fa-user"></i>
            </a>
        </div>
    </div>

    <!-- Navigasi Mobile -->
    <div class="bg-blue-100 lg:hidden md:hidden">
        <nav class="fixed bottom-0 inset-x-0 bg-primaryy text-white z-50">
            <div class="container mx-auto px-4 flex justify-between items-center py-3">
                <!-- Home -->
                <a href="/" class="flex flex-col items-center hover:text-gray-200">
                    <i class="fa-solid fa-house"></i>
                    <span class="text-sm">Beranda</span>
                </a>

                <!-- Search -->
                <a href="/selengkapnya" class="flex flex-col items-center hover:text-gray-200">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="text-sm">Donasi</span>
                </a>

                <!-- Notifications -->
                <a href="/" class="flex flex-col items-center hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.7V11c0-3.5-2-5-4-5m-1 0c0 3.5-2 5-4 5v3.7c0 .17.005.338.014.506L5 17h5" />
                    </svg>
                    <span class="text-sm">Beranda</span>
                </a>

                <!-- Profile -->
                <a href="/profile" class="flex flex-col items-center hover:text-gray-200"> <i class="fa-solid fa-user"></i>
                    <span class="text-sm">Profile</span>
                </a>
            </div>
        </nav>
    </div>
</nav>
