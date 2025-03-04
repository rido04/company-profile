@extends('layouts.app')

@section('content')
    <section id="home" class="h-screen flex items-center justify-center bg-gradient-to-r from-gray-700 to-stone-800 text-white">
        <div class="text-center">
            <h1 class="text-5xl font-sans font-semibold">Welcome To Our Company</h1>
            <p class="mt-4 font-sans text-lg">We Serve Best Services For Your Business Need.</p>
            <a href="#" class="font-semibold mt-6 inline-block px-6 py-3 bg-yellow-500 text-gray-900 font-sans rounded-full shadow-md hover:bg-gray-500 transition duration-500 ease-in-out">
                Hubungi Kami
            </a>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="about" class="py-16 bg-gray-00 text-gray-800">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-5xl font-sans text-gray-900">About Us</h2>
            <p class="mt-4 text-lg text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut nihil ipsam beatae animi quae corporis qui repellat illum libero dolorum nulla deserunt natus dolor eaque sit omnis ad, vitae modi eveniet deleniti! Dolorum accusantium mollitia fuga delectus ratione minus, itaque voluptatem consectetur molestias ut autem quaerat odio vitae quos amet ipsum blanditiis architecto soluta aliquid error praesentium. Rem fuga magnam recusandae architecto? Aliquam reiciendis qui illo labore. Laboriosam dolorum fugiat expedita nam voluptatem aliquid consequuntur voluptas culpa reprehenderit natus nesciunt aspernatur, error dicta eveniet praesentium quidem aperiam soluta. Voluptates ad ab nisi a odit eaque deserunt cupiditate, magnam recusandae similique, id laboriosam. Tempora, deleniti facere. Nam soluta ratione cupiditate, facilis similique, voluptatem itaque earum culpa recusandae sequi est reprehenderit modi, nihil ea accusantium quia non veritatis iste laborum assumenda alias voluptas inventore voluptatibus! Esse, natus aut aliquid eveniet explicabo dolorum harum expedita a. Asperiores ullam deserunt adipisci officiis alias?
            </p>
                <div class="justify-center">
                    <h3 class="text-xl font-semibold mt-4">
                        Vision and mission</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, consectetur. Sint earum quidem rem at architecto, impedit ullam fugit explicabo vitae autem molestiae qui soluta sapiente aliquid nihil laboriosam nostrum. Similique ad quisquam beatae quae aliquid quaerat labore. Repudiandae facere dolores ipsa dolorum, dolor nihil asperiores at. Neque, soluta necessitatibus.</p>
                </div>
            </div>
        </div>
    </section>

    @php
        $icons = [
            'academic-cap' => 'heroicon-o-academic-cap',
            'light-bulb' => 'heroicon-o-light-bulb',
            'server' => 'heroicon-o-server',
            'briefcase' => 'heroicon-o-briefcase',
            'computer' => 'heroicon-m-computer-desktop',
        ];
    @endphp

    <!-- Layanan -->
    <section id="services" class="py-16 bg-gray-100 text-gray-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-5xl font-sans text-gray-900 text-center mb-14">Our Services</h2>
            <div class="container grid md:grid-cols-3 gap-8 mx-auto">
                @foreach($services as $service)
                    <div class="bg-gray-800 p-4 rounded-2xl shadow-md flex flex-col items-center
                                group hover:bg-yellow-500 transition-all duration-500 ease-in-out">

                        <x-dynamic-component :component="$icons[$service->icon] ?? 'heroicon-o-globe-alt'"
                            class="w-16 h-16 text-yellow-500 transition-all duration-500 ease-in-out
                                group-hover:text-gray-800" />

                        <h3 class="text-xl text-gray-200 font-semibold mt-4 transition-all duration-500
                                group-hover:text-gray-800">
                            {{ $service->title }}
                        </h3>

                        <p class="text-gray-200 transition-all duration-500 group-hover:text-gray-800">
                            {{ $service->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- Portfolio -->
    <section id="porfolio" class="py-16 bg-gradient-to-r bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-5xl font-sans text-gray-100">Portfolio</h2>
            <p class="mt-4 text-lg text-gray-100">Here`s Our Best Project For Our Clients.</p>

            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center">
                @foreach($portfolios as $portfolio)
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="rounded-lg">
                        <h3 class="text-xl text-gray-700 font-semibold mt-4">{{ $portfolio->title }}</h3>
                        <p class="text-gray-700 mt-2">{{ $portfolio->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section id="testimonial" class="py-16 bg-gray-100 text-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-5xl font-bold text-center text-gray-900">What They Say?</h2>
            <p class="mt-4 text-lg text-center text-gray-600">Reviews from our satisfied clients.</p>

            <div class="mt-12 flex flex-col md:flex-row items-center bg-white p-8 rounded-lg shadow-lg">
                @foreach($testimonials as $testimonial)
                    <div class="flex items-center w-full md:w-3/4">
                        <!-- Gambar Testimonial -->
                        <img src="{{ asset('storage/' . $testimonial->image) }}"
                            alt="{{ $testimonial->name }}"
                            class="w-24 h-24 rounded-lg object-cover shadow-md">

                        <div class="ml-6">
                            <!-- Kutipan -->
                            <p class="text-lg text-gray-700 italic">
                                "{{ $testimonial->message }}"
                            </p>

                            <!-- Nama & Posisi -->
                            <div class="mt-4">
                                <h4 class="text-lg font-semibold text-gray-900">{{ $testimonial->name }}</h4>
                                <p class="text-gray-500 text-sm">{{ $testimonial->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="contact" class="py-16 text-white relative bg-gray-900 bg-cover bg-center" style="background-image: url('/storage/background.jpg');">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-5xl font-bold">CONTACT US</h2>
            <p class="mt-2 text-lg text-gray-300 italic">Don`t Be Shy To Contact Us!</p>

            <div class="mt-8 max-w-4xl mx-auto bg-gray-800 bg-opacity-75 p-8 rounded-lg shadow-lg">
                <form action="{{ route('contact.send') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @csrf
                    <!-- Name Input -->
                    <input type="text" name="name" placeholder="Your Name *"
                        class="p-3 w-full bg-white text-gray-800 rounded-lg focus:ring-2 focus:ring-yellow-400" required>

                    <!-- Email Input -->
                    <input type="email" name="email" placeholder="Your Email *"
                        class="p-3 w-full bg-white text-gray-800 rounded-lg focus:ring-2 focus:ring-yellow-400" required>

                    <!-- Phone Input -->
                    <input type="text" name="phone" placeholder="Your Phone *"
                        class="p-3 w-full bg-white text-gray-800 rounded-lg focus:ring-2 focus:ring-yellow-400 md:col-span-1" required>

                    <!-- Message Input -->
                    <textarea name="message" placeholder="Your Message *" rows="4"
                        class="p-3 w-full bg-white text-gray-800 rounded-lg focus:ring-2 focus:ring-yellow-400 md:col-span-1 md:row-span-2" required></textarea>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="mt-4 md:col-span-2 bg-yellow-500 hover:bg-yellow-600 text-white py-3 rounded-lg font-semibold transition duration-300 shadow-md">
                        SEND MESSAGE
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection
