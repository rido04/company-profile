<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <nav class="bg-fuchsia-800 shadow-md p-4 sticky top-0">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-800">My Company</h1>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Home</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800">About</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Services</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>



</body>
</html>
