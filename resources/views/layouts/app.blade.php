<!doctype html>
<html lang="en" data-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    {{-- Navbar --}}
    <header class="bg-blue-500 text-white p-4">
        <nav class="container mx-auto flex justify-between">
            <a href="#" class="text-lg font-bold">Logo</a>
            <ul class="flex items-center">
                <li class="mr-6">
                    <a href="#" class="text-white hover:text-gray-300">Home</a>
                </li>
                <li class="mr-6">
                    <a href="#" class="text-white hover:text-gray-300">About</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-gray-300">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    {{-- Navbar End --}}

    <main class="container mx-auto p-4">
        @yield('content')
    </main>


    {{-- Footer --}}
    <footer class="bg-gray-200 p-4 text-center">
        <p>&copy; 2024 Bersama Donasi</p>
    </footer>
    {{-- Footer End --}}
</body>
</html>