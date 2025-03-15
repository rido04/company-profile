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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body class="bg-gradient-to-r from-gray-700 to-stone-800">

    <!-- Sticky Navbar -->
    <nav x-data="{ open: false }" class="bg-white bg-opacity-30 backdrop-blur-md shadow-md p-4 fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-sans text-yellow-500 hover:text-yellow-800 transition duration-500 ease-in-out">
                <a href="#home">My Company</a>
            </h1>

            <!-- Hamburger Button (Mobile) -->
            <button @click="open = !open" class="md:hidden text-yellow-500 focus:outline-none transition">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Menu Navbar -->
            <ul class="hidden md:flex space-x-4">
                <li><a href="#home" class="nav-link text-yellow-500 px-3 py-2 rounded-md hover:text-yellow-800 transition duration-300">Home</a></li>
                <li><a href="#about" class="nav-link text-yellow-500 px-3 py-2 rounded-md hover:text-yellow-800 transition duration-300">About</a></li>
                <li><a href="#services" class="nav-link text-yellow-500 px-3 py-2 rounded-md hover:text-yellow-800 transition duration-300">Services</a></li>
                <li><a href="#contact" class="nav-link text-yellow-500 px-3 py-2 rounded-md hover:text-yellow-800 transition duration-300">Contact</a></li>
            </ul>

            <!-- Mobile Menu (Hidden by default) -->
            <ul x-show="open" @click.away="open = false"
            x-transition:enter="transform transition duration-300 ease-out"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transform transition duration-200 ease-in"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="absolute top-16 left-0 w-full bg-white bg-opacity-30 backdrop-blur-md shadow-md md:hidden flex flex-col space-y-2 p-4">
            <li><a href="#home" class="nav-link block px-3 py-2 text-yellow-500 hover:text-yellow-800 transition duration-300">Home</a></li>
            <li><a href="#about" class="nav-link block px-3 py-2 text-yellow-500 hover:text-yellow-800 transition duration-300">About</a></li>
            <li><a href="#services" class="nav-link block px-3 py-2 text-yellow-500 hover:text-yellow-800 transition duration-300">Services</a></li>
            <li><a href="#contact" class="nav-link block px-3 py-2 text-yellow-500 hover:text-yellow-800 transition duration-300">Contact</a></li>
        </ul>
        </div>
    </nav>





    <!-- Tambahkan Padding supaya konten tidak tertutup navbar -->
    <div class="pt-20">
        @yield('content')
    </div>

    {{-- Footer --}}
    <x-footer/>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
    {{-- typing animation --}}
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var typed = new Typed("#typed-text", {
            strings: ["Welcome to Our Company", "We Create Amazing Experiences", "Your Business, Our Priority"],
            typeSpeed: 50,  // Kecepatan mengetik
            backSpeed: 30,  // Kecepatan menghapus
            loop: true,      // Loop terus menerus
            showCursor: true,
            cursorChar: "|", // Tampilan kursor berkedip
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script>
{{-- particle js --}}
<script>
    tsParticles.load("particles-js", {
        fullScreen: { enable: false }, // Tidak full screen, hanya di dalam container
        particles: {
            number: { value: 80 },
            shape: { type: "circle" },
            opacity: { value: 0.5 },
            size: { value: 3 },
            move: { enable: true, speed: 0.5 },
            color: { value: "#ffffff" },
            line_linked: {
                enable: true,
                distance: 150,
                color: "#ffffff",
                opacity: 0.4,
                width: 1
            }
        },
        interactivity: {
            events: {
                onHover: { enable: true, mode: "repulse" },
                onClick: { enable: true, mode: "push" }
            }
        }
    });
</script>

{{-- hover underline --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link");

        function changeActiveSection() {
            let scrollPosition = window.scrollY;

            sections.forEach((section) => {
                const sectionTop = section.offsetTop - 80;
                const sectionHeight = section.clientHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    navLinks.forEach((link) => {
                        link.classList.remove("active");
                        if (link.getAttribute("href").substring(1) === section.id) {
                            link.classList.add("active");
                        }
                    });
                }
            });
        }

        window.addEventListener("scroll", changeActiveSection);
        changeActiveSection();
    });
</script>

<script>
    AOS.init();
</script>

</body>
</html>
