<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'TugasWeb P9')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen">
    <nav class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-md">
        <div class="max-w-4xl mx-auto px-6 py-4 flex flex-wrap gap-6 items-center">
            <span class="font-bold text-lg mr-4">🎓 TugasWeb P9</span>
            <a href="/" class="hover:text-blue-200 transition">Home</a>
            <a href="/about" class="hover:text-blue-200 transition">About</a>
            <a href="/contact" class="hover:text-blue-200 transition">Contact</a>
            <a href="/skills" class="hover:text-blue-200 transition">Skills</a>
            <a href="/mahasiswa" class="hover:text-blue-200 transition">Mahasiswa</a>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto px-6 py-10">
        <div class="bg-white rounded-xl shadow-sm p-8">
            @yield('content')
        </div>
    </div>
</body>
</html>