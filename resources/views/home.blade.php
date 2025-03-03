@extends('layouts.app')

@section('content')
<section id="home" class="h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
    <div class="text-center">
        <h1 class="text-5xl font-sans font-semibold">Selamat Datang di Perusahaan Kami</h1>
        <p class="mt-4 font-sans text-lg">Kami menyediakan layanan terbaik untuk kebutuhan bisnis Anda.</p>
        <a href="#" class="font-semibold mt-6 inline-block px-6 py-3 bg-white text-indigo-600 font-sans rounded-full shadow-md hover:bg-gray-200">
            Hubungi Kami
        </a>
    </div>
</section>

<!-- Tentang Kami -->
<section id="about" class="py-16 bg-white text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl font-sans text-gray-900">Tentang Kami</h2>
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
<section id="services" class="py-16 bg-gray-100 text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl font-sans text-gray-900">Layanan Kami</h2>
        <p class="mt-4 text-lg text-gray-600">Kami menawarkan berbagai layanan untuk memenuhi kebutuhan bisnis Anda.</p>

        <div class="mt-8 grid md:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-4xl">{{ $service->icon }}</div>
                    <h3 class="text-xl font-semibold mt-4">{{ $service->title }}</h3>
                    <p class="text-gray-600 mt-2">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Portfolio -->
<section id="porfolio" class="py-16 bg-white text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl font-sans text-gray-900">Portfolio Kami</h2>
        <p class="mt-4 text-lg text-gray-600">Beberapa proyek yang telah kami kerjakan untuk klien kami.</p>

        <div class="mt-8 grid md:grid-cols-3 gap-8">
            @foreach($portfolios as $portfolio)
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="rounded-lg">
                    <h3 class="text-xl font-semibold mt-4">{{ $portfolio->title }}</h3>
                    <p class="text-gray-600 mt-2">{{ $portfolio->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonial -->
<section id="testimonial" class="py-16 bg-gray-100 text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl font-sans text-gray-900">Apa Kata Klien Kami?</h2>
        <p class="mt-4 text-lg text-gray-600">Ulasan dari beberapa klien kami yang puas dengan layanan kami.</p>

        <div class="mt-8 grid md:grid-cols-2 gap-8">
            @foreach($testimonials as $testimonial)
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-gray-600 italic">"{{ $testimonial->message }}"</p>
                    <div class="mt-4 flex items-center justify-center">
                        <img src="{{ asset('storage/' . $testimonial->image) }}" class="w-12 h-12 rounded-full">
                        <div class="ml-4 text-left">
                            <h4 class="text-lg font-semibold">{{ $testimonial->name }}</h4>
                            <p class="text-gray-500 text-sm">{{ $testimonial->position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Kontak -->
<section id="contact" class="py-16 bg-white text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl font-sans text-gray-900">Hubungi Kami</h2>
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
