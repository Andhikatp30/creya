@extends('layouts.app')

@section('content')
<section class="py-16 bg-gradient-to-br from-gray-50 to-gray-100 mt-10 rounded-lg">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-center mb-12 text-gray-800">
            <span class="text-blue-600">Our</span> Services
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Rent Studio -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <div class="overflow-hidden rounded-xl mb-6">
                    <img class="w-full h-60 object-cover transform hover:scale-105 transition duration-300" 
                         src="images/rent4.png" 
                         alt="Rent Studio space for photography and videography">
                </div>
                <h3 class="text-2xl font-semibold mb-4 text-gray-800">Rent Studio</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Looking for the perfect space to bring your creative vision to life? Our professional studio is equipped with state-of-the-art tools and customizable setups designed to suit personal, group, or commercial projects.
                </p>
                <ul class="list-disc list-inside mb-4 text-gray-600 space-y-2">
                    <li>Professional-grade photography equipment</li>
                    <li>A variety of backdrops and advanced lighting options</li>
                    <li>Convenient and flexible booking hours</li>
                </ul>
                <a href="https://linktr.ee/creyaspace?utm_source=linktree_profile_share&ltsid=0bb63039-8beb-4d88-a7e5-b304096b61cc" 
                   target="_blank" 
                   class="inline-block text-white bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 shadow-md">
                    Book Studio Now →
                </a>
            </div>

            <!-- Self Photo -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <div class="overflow-hidden rounded-xl mb-6">
                    <img class="w-full h-60 object-cover transform hover:scale-105 transition duration-300" 
                         src="images/self-foto.png" 
                         alt="Self Photo Booth for instant photography">
                </div>
                <h3 class="text-2xl font-semibold mb-4 text-gray-800">Self Photo</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Capture your best moments effortlessly with our high-tech self-photo booths. Whether it’s a solo session or a fun group activity, enjoy privacy, top-notch equipment, and instant results to take home.
                </p>
                <ul class="list-disc list-inside mb-4 text-gray-600 space-y-2">
                    <li>Professional high-resolution cameras</li>
                    <li>Instant photo printing and digital sharing</li>
                    <li>Exclusive and comfortable booth experience</li>
                </ul>
                <a href="https://linktr.ee/creyaspace?utm_source=linktree_profile_share&ltsid=0bb63039-8beb-4d88-a7e5-b304096b61cc" 
                   target="_blank" 
                   class="inline-block text-white bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 shadow-md">
                    Book Self Photo →
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
