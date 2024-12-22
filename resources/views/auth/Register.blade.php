<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun - Ayo Donasi</title>
    <link rel="icon" href="{{ asset('assets/images/logos/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    @vite('resources/css/app.css')
    <meta name="robots" content="noindex, nofollow">
</head>

<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">
    <!-- Body Wrapper -->
    <div class="w-full max-w-md bg-white shadow-lg rounded-3xl p-6">
        <div class="text-center mb-6">
            <a href="{{ url('/') }}" class="flex justify-center items-center">
                <img src="{{ asset('image/logo.png') }}" alt="" class="w-32 h-32">
            </a>
            <p class="text-xl font-medium text-gray-700">Ayo Donasi!</p>
        </div>

        @if ($errors->any())
            <div class="mb-4">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded" role="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            @method('POST')

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full border-2 border-gray-300 rounded-3xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primaryy bg-white"
                    required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Username</label>
                <input type="text" id="name" name="name"
                    class="w-full border-2 border-gray-300 rounded-3xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primaryy bg-white"
                    required>
            </div>

            <div class="mb-6 relative">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full border-2 border-gray-300 rounded-3xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primaryy bg-white"
                    required>
                <button type="button" onclick="togglePassword()"
                    class="absolute inset-y-0 right-4 flex items-center top-8">
                    <i class="fa-solid fa-eye text-xl" id="eye-icon"></i>
                </button>
            </div>

            <button type="submit"
                class="w-full text-white font-medium py-2 px-4 rounded-3xl hover:bg-sky-500 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-primaryy">Login</button>
        </form>

        <div class="text-center mt-6">
            <p class="text-sm text-gray-600">Sudah Punya Akun ?
                <a href="/auth/login" class="text-primaryy hover:underline"> Masuk Sekarang</a>
            </p>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
