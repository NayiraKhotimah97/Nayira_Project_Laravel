<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Nayira Ena Khotimah</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-red-400 text-white text-center py-8">
        <h1 class="text-2xl font-bold">Halo, Saya Nayira Ena Khotimah</h1>
        <p class="text-lg">Seorang Pelajar SMK Jurusan RPL</p>
    </header>

    <!-- Tentang Saya -->
    <section class="bg-white shadow-md mx-auto mt-6 p-8 max-w-7xl rounded-lg">
        <h2 class="text-xl font-semibold mb-4">Tentang Saya</h2>
        <p class="text-gray-700">
            Saya seorang pelajar SMK jurusan RPL dengan minat dalam pengembangan perangkat lunak dan desain web. Saya suka mempelajari hal-hal baru dan selalu bersemangat untuk meningkatkan keterampilan saya.
        </p>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('login')}}">Login</a>
    </section>

    <!-- Keterampilan -->
    <section class="bg-white shadow-md mx-auto mt-6 p-6 max-w-7xl rounded-lg">
        <h2 class="text-xl font-semibold mb-4">Keterampilan</h2>
        <ul>
            <li class="bg-red-400 text-white py-2 px-4 mb-3 rounded-md">HTML & CSS</li>
            <li class="bg-red-400 text-white py-2 px-4 mb-3 rounded-md">JavaScript</li>
            <li class="bg-red-400 text-white py-2 px-4 mb-3 rounded-md">PHP</li>
            <li class="bg-red-400 text-white py-2 px-4 mb-3 rounded-md">MySQL</li>
            <li class="bg-red-400 text-white py-2 px-4 mb-3 rounded-md">Python</li>
        </ul>
    </section>

    <!-- Kontak -->
    <section class="bg-white shadow-md mx-auto mt-6 p-6 max-w-7xl rounded-lg">
        <h2 class="text-xl font-semibold mb-4">Contact</h2>
        <p>Instagram: <a href="https://instagram.com/berrysswt" class="text-red-600">berrysswt</a></p>
        <p>Email: <a href="mailto:nayirakhotimah@gmail.com" class="text-red-600">nayirakhotimah@gmail.com</a></p>
    </section>

    <!-- Footer -->
    <footer class="text-center p-0 text-sm bg-red-400">
        © 2024 NayiraEK. All Rights Reserved.
    </footer>

</body>
</html>
