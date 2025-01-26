<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logoicon.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun - Ayo Donasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    @vite('resources/css/app.css')
    <meta name="robots" content="noindex, nofollow">
</head>

<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">
    <!-- Body Wrapper -->
    <div class="w-full max-w-md bg-white shadow-lg rounded-3xl p-6">
        <div class="text-center mb-6">
            <a href="{{ url('/') }}" class="flex justify-center items-center">
                 <svg height="80px" width="80px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#2D527C;" d="M207.074,295.349c-7.238,0-13.106-5.868-13.106-13.106V122.676c0-6.143-4.997-11.14-11.14-11.14 c-6.143,0-11.14,4.997-11.14,11.14v159.569c0,7.238-5.868,13.106-13.106,13.106s-13.106-5.868-13.106-13.106V122.676 c0-20.596,16.756-37.352,37.352-37.352s37.352,16.756,37.352,37.352v159.569C220.18,289.482,214.312,295.349,207.074,295.349z"></path> <path style="fill:#2D527C;" d="M110.09,295.349c-7.238,0-13.106-5.868-13.106-13.106V110.552c0-6.143-4.997-11.14-11.14-11.14 s-11.14,4.997-11.14,11.14v33.545c0,7.238-5.868,13.106-13.106,13.106s-13.106-5.868-13.106-13.106v-33.545 c0-20.596,16.756-37.352,37.352-37.352s37.352,16.756,37.352,37.352v171.693C123.196,289.482,117.328,295.349,110.09,295.349z"></path> <path style="fill:#2D527C;" d="M158.582,295.349c-7.238,0-13.106-5.868-13.106-13.106V86.303c0-6.143-4.997-11.14-11.14-11.14 c-6.143,0-11.14,4.997-11.14,11.14v195.941c0,7.238-5.868,13.106-13.106,13.106c-7.238,0-13.106-5.868-13.106-13.106V86.303 c0-20.596,16.756-37.352,37.352-37.352s37.352,16.756,37.352,37.352v195.941C171.688,289.482,165.82,295.349,158.582,295.349z"></path> <path style="fill:#2D527C;" d="M70.32,427.754c-4.786,0-9.398-2.632-11.706-7.195c-4.795-9.483-11.823-17.866-20.325-24.242 C14.314,378.333,0,349.703,0,319.733v-105.15c0-20.596,16.756-37.352,37.352-37.352s37.352,16.756,37.352,37.352v56.75 c0,7.238-5.868,13.106-13.106,13.106s-13.106-5.868-13.106-13.106v-56.75c0-6.143-4.997-11.14-11.14-11.14 s-11.14,4.997-11.14,11.14v105.15c0,21.765,10.394,42.556,27.806,55.616c11.706,8.781,21.385,20.325,27.988,33.383 c3.266,6.459,0.678,14.343-5.782,17.609C74.328,427.3,72.309,427.754,70.32,427.754z"></path> <path style="fill:#2D527C;" d="M255.566,295.349c-7.238,0-13.106-5.868-13.106-13.106V159.048c0-6.143-4.997-11.14-11.14-11.14 s-11.14,4.997-11.14,11.14v123.196c0,7.238-5.868,13.106-13.106,13.106c-7.238,0-13.106-5.868-13.106-13.106V159.048 c0-20.596,16.756-37.352,37.352-37.352s37.352,16.756,37.352,37.352v123.196C268.671,289.482,262.804,295.349,255.566,295.349z"></path> <path style="fill:#2D527C;" d="M353.418,295.349c-7.238,0-13.106-5.868-13.106-13.106V122.676c0-6.143-4.997-11.14-11.14-11.14 c-6.143,0-11.14,4.997-11.14,11.14v159.569c0,7.238-5.868,13.106-13.106,13.106c-7.238,0-13.106-5.868-13.106-13.106V122.676 c0-20.596,16.756-37.352,37.352-37.352c20.596,0,37.352,16.756,37.352,37.352v159.569 C366.524,289.482,360.657,295.349,353.418,295.349z"></path> <path style="fill:#2D527C;" d="M401.91,295.349c-7.238,0-13.106-5.868-13.106-13.106V110.552c0-20.596,16.756-37.352,37.352-37.352 s37.352,16.756,37.352,37.352v33.545c0,7.238-5.868,13.106-13.106,13.106c-7.238,0-13.106-5.868-13.106-13.106v-33.545 c0-6.143-4.997-11.14-11.14-11.14s-11.14,4.997-11.14,11.14v171.693C415.016,289.482,409.149,295.349,401.91,295.349z"></path> <path style="fill:#2D527C;" d="M401.91,295.349c-7.238,0-13.106-5.868-13.106-13.106V86.303c0-6.143-4.997-11.14-11.14-11.14 s-11.14,4.997-11.14,11.14v195.941c0,7.238-5.868,13.106-13.106,13.106s-13.106-5.868-13.106-13.106V86.303 c0-20.596,16.756-37.352,37.352-37.352c20.596,0,37.352,16.756,37.352,37.352v195.941 C415.016,289.482,409.149,295.349,401.91,295.349z"></path> <path style="fill:#2D527C;" d="M441.68,427.754c-1.99,0-4.008-0.453-5.903-1.413c-6.46-3.266-9.048-11.151-5.782-17.609 c6.603-13.059,16.281-24.602,27.988-33.385c17.411-13.059,27.806-33.85,27.806-55.615v-105.15c0-6.143-4.997-11.14-11.14-11.14 s-11.14,4.997-11.14,11.14v56.75c0,7.238-5.867,13.106-13.106,13.106c-7.238,0-13.106-5.868-13.106-13.106v-56.75 c0-20.596,16.756-37.352,37.352-37.352c20.596,0,37.352,16.756,37.352,37.352v105.15c0,29.971-14.314,58.601-38.289,76.584 c-8.502,6.377-15.529,14.76-20.325,24.243C451.078,425.123,446.466,427.754,441.68,427.754z"></path> <path style="fill:#2D527C;" d="M304.926,295.349c-7.238,0-13.106-5.868-13.106-13.106V159.048c0-6.143-4.997-11.14-11.14-11.14 s-11.14,4.997-11.14,11.14v123.196c0,7.238-5.868,13.106-13.106,13.106c-7.238,0-13.106-5.868-13.106-13.106V159.048 c0-20.596,16.756-37.352,37.352-37.352s37.352,16.756,37.352,37.352v123.196C318.032,289.482,312.165,295.349,304.926,295.349z"></path> </g> <path style="fill:#CEE8FA;" d="M320.182,193.449c-38.316,0-55.508,21.477-62.271,34.091c-0.849,1.585-3.156,1.582-4.003-0.003 c-6.74-12.616-23.837-34.089-62.151-34.089c-43.645,0-82.038,29.794-82.038,84.2c0,22.015,4.486,40.876,16.939,61.924 c25.376,42.894,108.972,98.5,126.143,109.458c1.899,1.211,4.303,1.215,6.204,0.008c17.186-10.905,100.796-66.236,126.371-109.466 c12.452-21.048,16.908-39.909,16.908-61.924C402.282,223.243,363.827,193.449,320.182,193.449z"></path> <path style="fill:#2D527C;" d="M255.908,463.049L255.908,463.049c-3.603,0-7.115-1.026-10.158-2.969 c-10.364-6.613-102.073-65.996-130.374-113.833c-12.977-21.937-18.765-43.092-18.765-68.598c0-29.314,9.941-54.218,28.749-72.021 c17.226-16.305,40.807-25.285,66.396-25.285c32.978,0,52.779,13.761,64.237,27.148c11.149-12.77,31.061-27.148,64.189-27.148 c25.592,0,49.18,8.979,66.422,25.281c18.832,17.806,28.785,42.712,28.785,72.025c0,25.541-5.778,46.696-18.734,68.598 c-28.508,48.192-120.261,107.28-130.629,113.859C262.993,462.03,259.493,463.049,255.908,463.049z M191.757,206.555 c-34.311,0-68.933,21.983-68.933,71.094c0,20.821,4.52,37.345,15.112,55.251c22.971,38.829,99.505,90.431,117.995,102.543 c36.369-23.491,98.277-68.929,118.163-102.543c10.571-17.869,15.082-34.393,15.082-55.251c0-49.111-34.652-71.094-68.996-71.094 c-29.876,0-44.073,14.78-50.721,27.179c-2.678,4.996-7.87,8.099-13.549,8.099c-5.691,0-10.887-3.113-13.563-8.122 C235.728,221.324,221.577,206.555,191.757,206.555z"></path> </g></svg>
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
                <label for="email" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
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
                class="w-full text-white font-medium py-2 px-4 rounded-3xl hover:bg-sky-500 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-primaryy">Register</button>
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
