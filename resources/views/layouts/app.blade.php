<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Smooth Scrolling -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Sticky Navbar -->
    <nav class="bg-fuchsia-800 shadow-md p-4 fixed top-0 left-0 w-full z-500">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-500">My Company</h1>
            <ul class="flex space-x-4">
                <li><a href="#home" class="text-gray-500 hover:text-gray-300">Home</a></li>
                <li><a href="#about" class="text-gray-500 hover:text-gray-300">About</a></li>
                <li><a href="#services" class="text-gray-500 hover:text-gray-300">Services</a></li>
                <li><a href="#contact" class="text-gray-500 hover:text-gray-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Tambahkan Padding supaya konten tidak tertutup navbar -->
    <div class="pt-16">
        @yield('content')
    </div>

</body>
</html>
