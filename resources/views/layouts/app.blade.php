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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body class="bg-gray-100">

    <!-- Sticky Navbar -->
    <nav class="bg-yellow-500 shadow-md p-4 fixed top-0 left-0 w-full z-50">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-sans text-white hover:text-gray-800 transition duration-500 ease-in-out"><a href="#home">My Company</a></h1>
            <ul class="flex space-x-4">
                <li><a href="#home" class="font-sans text-white px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white active:bg-gray-800 transition duration-300">Home</a></li>
                <li><a href="#about" class="font-sans text-white px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white active:bg-gray-800 transition duration-300">About</a></li>
                <li><a href="#services" class="font-sans text-white px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white active:bg-gray-800 transition duration-300">Services</a></li>
                <li><a href="#contact" class="font-sans text-white px-3 py-2 rounded-md hover:bg-gray-800 hover:text-white active:bg-gray-800 transition duration-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Tambahkan Padding supaya konten tidak tertutup navbar -->
    <div class="pt-16">
        @yield('content')
    </div>

    {{-- Footer --}}
    <x-footer/>
</body>
</html>
