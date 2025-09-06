<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Company Profile')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center h-16">
            <a href="/" class="text-2xl font-bold text-blue-600">MyCompany</a>
            <div class="space-x-6">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/portfolio" class="hover:text-blue-600">Portofolio</a>
                <a href="/articles" class="hover:text-blue-600">Artikel</a>
                <a href="/about" class="hover:text-blue-600">Tentang Kami</a>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 mt-10">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; {{ date('Y') }} MyCompany. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
