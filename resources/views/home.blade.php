@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative bg-cover bg-center bg-[url('/public/images/self-foto.png')]">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 text-center py-40 px-6 mt-10">
        <h1 class="text-6xl font-extrabold text-white">Create Memories That Last Forever</h1>
        <p class="mt-6 text-lg text-gray-300 max-w-3xl mx-auto">
            Step into our professional photography studio and capture timeless moments, whether for personal portraits, creative projects, or special events.
        </p>
        <div class="mt-8 flex justify-center space-x-4">
            <a href="/services" class="px-6 py-3 bg-blue-600 text-white text-lg font-medium rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
                Explore Our Services
            </a>
            <a href="/contact" class="px-6 py-3 bg-white text-blue-600 text-lg font-medium rounded-lg border border-blue-600 hover:bg-blue-100 focus:ring-4 focus:ring-blue-300">
                Get in Touch
            </a>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-8">Why Choose Us?</h2>
        <p class="text-lg text-gray-600 mb-12 max-w-4xl mx-auto">
            At our studio, we pride ourselves on providing a world-class photography experience, offering state-of-the-art equipment, a comfortable environment, and a passionate team dedicated to bringing your vision to life.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
                <div class="flex items-center justify-center w-16 h-16 mx-auto bg-blue-600 text-white rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.55-4.55a1.38 1.38 0 10-1.95-1.95L10 9m0 0l-3.25-3.25a1.38 1.38 0 10-1.95 1.95L10 9m0 0l4.55 4.55a1.38 1.38 0 001.95-1.95L10 9z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mt-6 mb-4">High-Quality Equipment</h3>
                <p class="text-gray-600">State-of-the-art cameras and lighting to ensure every shot is perfect.</p>
            </div>
            <div>
                <div class="flex items-center justify-center w-16 h-16 mx-auto bg-blue-600 text-white rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h14m0 0l-4-4m4 4l-4 4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mt-6 mb-4">Flexible Booking</h3>
                <p class="text-gray-600">Book your session at a time that works best for you.</p>
            </div>
            <div>
                <div class="flex items-center justify-center w-16 h-16 mx-auto bg-blue-600 text-white rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-3.86 0-7 1.79-7 4v3c0 .55.45 1 1 1h12a1 1 0 001-1v-3c0-2.21-3.14-4-7-4zm0-4a2 2 0 100 4 2 2 0 000-4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mt-6 mb-4">Expert Team</h3>
                <p class="text-gray-600">Our photographers are experienced professionals passionate about capturing your story.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Services Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Service 1 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl">
                <div class="overflow-x-auto whitespace-nowrap" id="service-carousel1">
                    <!-- Gambar-gambar dalam satu baris -->
                    <img class="inline-block max-w-xs object-cover rounded-lg w-full h-64" src="{{ asset('images/rent1.png') }}" alt="Rent Studio">
                    <img class="inline-block max-w-xs object-cover rounded-lg w-full h-64" src="{{ asset('images/rent2.png') }}" alt="Rent Studio 2">
                    <img class="inline-block max-w-xs object-cover rounded-lg w-full h-64" src="{{ asset('images/rent3.png') }}" alt="Rent Studio 3">
                    <img class="inline-block max-w-xs object-cover rounded-lg w-full h-64" src="images/rent4.png" alt="Self Photo 4">
                </div>
                <h3 class="text-2xl font-semibold mt-6 mb-4">Rent Studio</h3>
                <p class="text-gray-600 mb-4">Professional photography studio rentals for any occasion.</p>
                <a href="/services" class="text-blue-600 hover:underline">Learn More →</a>
            </div>

            <!-- Service 2 -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl">
                <div class="overflow-x-auto whitespace-nowrap" id="service-carousel2">
                    <!-- Gambar-gambar dalam satu baris -->
                    <img class="inline-block max-w-xs object-cover rounded-lg w-full h-64" src="images/self-foto.png" alt="Self Photo">
                    <img class="inline-block max-w-xs object-cover rounded-lg w-full h-64" src="images/self-foto-copy.png" alt="Self Photo 2">
                </div>
                <h3 class="text-2xl font-semibold mt-6 mb-4">Self Photo</h3>
                <p class="text-gray-600 mb-4">Enjoy a fun and easy self-photo experience in our fully automated booths.</p>
                <a href="/services" class="text-blue-600 hover:underline">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-8">What Our Clients Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="italic text-gray-600">"Amazing experience! The team was professional, and the studio was equipped with everything I needed."</p>
                <p class="mt-4 font-semibold text-gray-800">- Jane D.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="italic text-gray-600">"The self-photo booth was so much fun. I got great pictures instantly!"</p>
                <p class="mt-4 font-semibold text-gray-800">- Mark R.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="italic text-gray-600">"The best photography studio I’ve ever used. Highly recommend for any occasion."</p>
                <p class="mt-4 font-semibold text-gray-800">- Emily P.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call-to-Action -->
<section class="py-16 bg-blue-600">
    <div class="container mx-auto px-4 text-center text-white">
        <h2 class="text-4xl font-bold mb-4">Ready to Book Your Session?</h2>
        <p class="text-lg mb-8">Contact us today and let us bring your vision to life.</p>
        <a href="/contact" class="px-8 py-3 bg-white text-blue-600 text-lg font-medium rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-300">
            Contact Us
        </a>
    </div>      
</section>

<script>
    // Fungsi untuk menggulirkan elemen secara otomatis dengan repeat tanpa henti
    const autoScroll = (id, speed = 2) => {
        const element = document.getElementById(id);
        const images = element.children; // Get all images inside the container
        const totalImages = images.length;

        // Clone the first image and append it at the end to create seamless loop
        const firstImage = images[0].cloneNode(true);
        element.appendChild(firstImage);

        let totalWidth = 0;

        // Calculate the total width of all images including the cloned image
        for (let i = 0; i < element.children.length; i++) {
            totalWidth += element.children[i].offsetWidth;
        }

        // Fungsi untuk menggulirkan elemen ke kanan
        const scrollRight = () => {
            element.scrollLeft += speed;

            // If we reach the last image (the cloned one), reset to the first image
            if (element.scrollLeft >= totalWidth - element.clientWidth) {
                element.scrollLeft = 0; // Reset to the first image
            }
        };

        // Menjalankan scroll setiap 10ms untuk gerakan lebih mulus
        setInterval(scrollRight, 20);
    };

    // Memulai autoscroll untuk kedua service setelah halaman dimuat
    window.addEventListener('load', () => {
        autoScroll('service-carousel1');
        autoScroll('service-carousel2');
    });
</script>

@endsection
