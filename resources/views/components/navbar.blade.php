<nav class="text-white shadow-lg bg-primaryy sticky top-0 z-50">
    <div class="container mx-auto px-4 flex justify-between items-center py-4">
        <!-- Logo dan Judul -->
        <div class="flex items-center">
            <img src="{{ asset('image/download (1).png') }}" alt="Logo" class="h-12 w-12 rounded-full">
            <a href="{{ url('/') }}" class="text-xl font-bold py-2 px-4">Ayo Donasi</a>
        </div>
        <!-- Menu Navigasi -->
        <div id="menu" class="hidden md:flex space-x-2 text-white font-bold">
            <a href="{{ url('/') }}"
                class="py-2 px-4 hover:border-b-2 hover:border-sky-500 hover:rounded-full font-medium {{ Request::is('/') ? 'bg-slate-50 text-sky-950 rounded-full' : '' }}">
                Beranda
            </a>
            <a href="{{ url('tentang-kami') }}"
                class=" hover:border-b-2 hover:border-sky-500 hover:rounded-full py-2 px-4 font-medium {{ Request::is('tentang-kami') ? 'bg-slate-50 text-sky-950 rounded-full' : '' }}">
                Tentang Kami
            </a>
            @auth
                
            @endauth
        </div>

        @if (!Auth::check())
            <!-- Tombol Login dan Daftar -->
            <div class="space-x-3 hidden md:flex">
                <a href="{{ url('/auth/login') }}"
                    class="py-2 px-4 text-md w-24 text-center text-white rounded-full font-semibold {{ Request::is('auth/login') ? 'bg-slate-200 text-sky-950 rounded-full' : '' }}">
                    Login
                </a>
                <a href="/auth/register"
                    class="bg-sky-900 py-2 px-4 w-32 text-center text-md text-white shadow-xl rounded-full font-semibold">
                    Daftar <i class="fa-solid fa-user"></i>
                </a>
            </div>
        @else
            <div class="space-x-3 hidden md:flex">
                <a href="/donasi/history"
                    class=" py-2 px-4 w-32 text-center text-sm   rounded-full font-medium {{ Request::is('donasi/history') ? 'bg-slate-200 text-sky-950 rounded-full' : '' }} " >
                    Donasiku <i class="fa-solid fa-hand-holding-heart text-lg"></i>
                </a>
                <a href="{{ url('profile') }}"
                    class=" hover:border-b-2 hover:border-sky-500 hover:rounded-full py-2 px-4 {{ Request::is('profile') ? 'bg-slate-200 text-sky-950 rounded-full' : '' }}">
                    Profile  <i class="fa-solid fa-users-gear text-md"></i>
                </a>
            </div>
        @endif
    </div>

    <!-- Navigasi Mobile -->
    <div class="bg-blue-100 lg:hidden md:hidden">
        <nav class="fixed bottom-4 inset-x-2 bg-primaryy text-white z-50 rounded-full px-3">
            <div class="container mx-auto px-4 flex justify-between items-center py-3">
                <!-- Home -->
                <a href="/"
                    class="flex flex-col items-center hover:text-gray-200 {{ Request::is('/') ? ' bg-slate-200 px-3 py-2 rounded-full text-sky-950' : '' }}">
                    <i class="fa-solid fa-house  text-xl"></i>
                    {{-- <span class="text-sm">Beranda</span> --}}
                </a>

                <!-- Search -->
                <a href="/selengkapnya"
                    class="flex flex-col items-center hover:text-gray-200 {{ Request::is('selengkapnya') ? 'bg-slate-200 px-3 py-2 rounded-full text-sky-950' : '' }}">
                    <i class="fa-solid fa-server text-xl"></i>
                    {{-- <span class="text-sm">Galang Dana</span> --}}
                </a>

                @if (!Auth::check())
                    <a href="/tentang-kami"
                        class="flex flex-col items-center hover:text-gray-200 {{ Request::is('tentang-kami') ? 'bg-slate-200 px-3 py-2 rounded-full text-sky-950' : '' }}">
                        <i class="fa-solid fa-phone text-xl"></i>
                        {{-- <span class="text-sm">Galang Dana</span> --}}
                    </a>
                    <a href="/auth/login"
                        class="flex flex-col items-center hover:text-gray-200 {{ Request::is('auth/login') ? 'bg-slate-200 px-3 py-2 rounded-full text-sky-950' : '' }}">
                        <i class="fa-solid fa-user text-xl"></i>
                        {{-- <span class="text-sm">Galang Dana</span> --}}
                    </a>
                @else
                    <a href="/donasi/history"
                        class="flex flex-col items-center hover:text-gray-200 {{ Request::is('donasi/history') ? 'bg-slate-200 px-3 py-2 rounded-full text-sky-950' : '' }}">
                        <i class="fa-solid fa-hand-holding-heart text-xl"></i>
                        {{-- <span class="text-sm">Donasiku</span> --}}
                    </a>

                    <!-- Profile -->
                    <a href="/profile"
                        class="flex flex-col items-center hover:text-gray-200 {{ Request::is('profile') ? 'bg-slate-200 px-3 py-2 rounded-full text-sky-950' : '' }}">
                        <i class="fa-solid fa-users-gear text-xl"></i>
                        {{-- <span class="text-sm">Profile</span> --}}
                    </a>
                @endif
            </div>
        </nav>
    </div>
</nav>
