@extends('layouts.app')

@section('content')
<section class="h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
    <div class="text-center">
        <h1 class="text-5xl font-bold">Selamat Datang di Perusahaan Kami</h1>
        <p class="mt-4 text-lg">Kami menyediakan layanan terbaik untuk kebutuhan bisnis Anda.</p>
        <a href="#" class="mt-6 inline-block px-6 py-3 bg-white text-indigo-600 font-semibold rounded-full shadow-md hover:bg-gray-200">
            Hubungi Kami
        </a>
    </div>
</section>

<!-- Tentang Kami -->
<section class="py-16 bg-white text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-900">Tentang Kami</h2>
        <p class="mt-4 text-lg text-gray-600">Kami adalah perusahaan yang berdedikasi dalam menyediakan layanan terbaik untuk klien kami. Dengan pengalaman bertahun-tahun, kami terus berkembang dan memberikan solusi terbaik.</p>

        <div class="mt-8 flex flex-col md:flex-row items-center justify-center space-y-6 md:space-y-0 md:space-x-10">
            <div class="max-w-xs">
                <img src="https://source.unsplash.com/300x300/?team,office" alt="Tim Kami" class="rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mt-4">Tim Profesional</h3>
                <p class="text-gray-600">Kami memiliki tim yang ahli di bidangnya untuk membantu Anda.</p>
            </div>
            <div class="max-w-xs">
                <img src="https://source.unsplash.com/300x300/?business,meeting" alt="Visi Misi" class="rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mt-4">Visi & Misi</h3>
                <p class="text-gray-600">Kami berkomitmen untuk memberikan inovasi dan solusi terbaik.</p>
            </div>
        </div>
    </div>
</section>

<!-- Layanan -->
<section class="py-16 bg-gray-100 text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-900">Layanan Kami</h2>
        <p class="mt-4 text-lg text-gray-600">Kami menawarkan berbagai layanan terbaik untuk memenuhi kebutuhan bisnis Anda.</p>

        <div class="mt-8 grid md:grid-cols-3 gap-8">
            <!-- Layanan 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-indigo-600 text-5xl mb-4">🚀</div>
                <h3 class="text-xl font-semibold">Pengembangan Website</h3>
                <p class="text-gray-600 mt-2">Membangun website profesional dan responsif untuk bisnis Anda.</p>
            </div>

            <!-- Layanan 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-indigo-600 text-5xl mb-4">📱</div>
                <h3 class="text-xl font-semibold">Aplikasi Mobile</h3>
                <p class="text-gray-600 mt-2">Mengembangkan aplikasi mobile berbasis Android dan iOS.</p>
            </div>

            <!-- Layanan 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-indigo-600 text-5xl mb-4">📈</div>
                <h3 class="text-xl font-semibold">Digital Marketing</h3>
                <p class="text-gray-600 mt-2">Strategi pemasaran digital untuk meningkatkan brand awareness.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio -->
<section class="py-16 bg-white text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-900">Portfolio Kami</h2>
        <p class="mt-4 text-lg text-gray-600">Beberapa proyek yang telah kami kerjakan untuk klien kami.</p>

        <div class="mt-8 grid md:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <img src="https://source.unsplash.com/400x250/?website,technology" alt="Project 1" class="rounded-lg">
                <h3 class="text-xl font-semibold mt-4">Website Perusahaan</h3>
                <p class="text-gray-600 mt-2">Membangun website corporate dengan desain modern.</p>
            </div>

            <!-- Project 2 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <img src="https://source.unsplash.com/400x250/?app,development" alt="Project 2" class="rounded-lg">
                <h3 class="text-xl font-semibold mt-4">Aplikasi Mobile</h3>
                <p class="text-gray-600 mt-2">Aplikasi mobile berbasis Android dan iOS.</p>
            </div>

            <!-- Project 3 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <img src="https://source.unsplash.com/400x250/?marketing,ads" alt="Project 3" class="rounded-lg">
                <h3 class="text-xl font-semibold mt-4">Digital Marketing</h3>
                <p class="text-gray-600 mt-2">Strategi pemasaran digital yang sukses.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="py-16 bg-gray-100 text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-900">Apa Kata Klien Kami?</h2>
        <p class="mt-4 text-lg text-gray-600">Ulasan dari beberapa klien kami yang puas dengan layanan kami.</p>

        <div class="mt-8 grid md:grid-cols-2 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-gray-600 italic">"Pelayanan luar biasa! Website perusahaan kami terlihat profesional dan responsif."</p>
                <div class="mt-4 flex items-center justify-center">
                    <img src="https://source.unsplash.com/60x60/?person,man" class="w-12 h-12 rounded-full">
                    <div class="ml-4 text-left">
                        <h4 class="text-lg font-semibold">Budi Santoso</h4>
                        <p class="text-gray-500 text-sm">CEO PT. Maju Jaya</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-gray-600 italic">"Aplikasi mobile yang mereka buat sangat user-friendly dan membantu bisnis saya berkembang."</p>
                <div class="mt-4 flex items-center justify-center">
                    <img src="https://source.unsplash.com/60x60/?person,woman" class="w-12 h-12 rounded-full">
                    <div class="ml-4 text-left">
                        <h4 class="text-lg font-semibold">Siti Rahmawati</h4>
                        <p class="text-gray-500 text-sm">Founder Startup XYZ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kontak -->
<section class="py-16 bg-white text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-900">Hubungi Kami</h2>
        <p class="mt-4 text-lg text-gray-600">Jika Anda memiliki pertanyaan atau ingin bekerja sama, jangan ragu untuk menghubungi kami.</p>
        <div class="mt-8 max-w-lg mx-auto bg-gray-100 p-6 rounded-lg shadow-md">
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="mb-4 text-left">
                    <label class="block text-gray-700 font-semibold">Nama</label>
                    <input type="text" name="name" class="w-full mt-2 p-3 border rounded-lg" required>
                </div>
                <div class="mb-4 text-left">
                    <label class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" name="email" class="w-full mt-2 p-3 border rounded-lg" required>
                </div>
                <div class="mb-4 text-left">
                    <label class="block text-gray-700 font-semibold">Pesan</label>
                    <textarea name="message" rows="4" class="w-full mt-2 p-3 border rounded-lg" required></textarea>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300 shadow-md relative z-10">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
