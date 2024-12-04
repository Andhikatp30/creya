@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50 mt-10 rounded-lg">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Contact Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Information -->
            <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">Get in Touch</h3>
                    <p class="text-gray-600 mb-6">We would love to hear from you! Reach out to us for any inquiries, bookings, or feedback.</p>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l1.664 9.572c.058.337.38.593.727.593h12.218c.347 0 .669-.256.727-.593L21 10m-6 4a2 2 0 11-4 0 2 2 0 014 0zm-2 6v2m0-8a8 8 0 11-8-8 8 8 0 018 8z" />
                            </svg>
                            <a href="#" class="text-blue-600 hover:underline" onclick="openWhatsApp()">+62 819-5335-5227</a>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 3a2 2 0 012 2v1a2 2 0 01-2 2h-8a2 2 0 01-2-2V5a2 2 0 012-2h8zM3 8h18m-2 10H5a2 2 0 01-2-2V9h18v7a2 2 0 01-2 2z" />
                            </svg>
                            <a href="mailto:creyaspace@gmail.com" class="text-blue-600 hover:underline">creyaspace@gmail.com</a>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657A8 8 0 118 7.243a8 8 0 019.9 9.9zm-9.9 3.6a6.473 6.473 0 01-2.9-2.9" />
                            </svg>
                            <p class="text-gray-600">
                                Rukan Beach View Block C No.21<br> Golf Island, Batavia PIK,<br> Jakarta 14470
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Map -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Our Location</h3>
                <div class="w-full h-64 rounded-lg overflow-hidden">
                    <!-- Embed Google Maps -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.2595860575047!2d106.73804542803342!3d-6.09569564572026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d3a2ee475a5%3A0xf0ff2be5d85ad6e0!2sCreya%20Space%2C%20Rent%20Studio%20Space%20%2B%20Self%20Photo%20Studio!5e0!3m2!1sid!2sid!4v1732334992833!5m2!1sid!2sid" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
    function openWhatsApp() {
        const confirmMessage = "Do you want to open WhatsApp to contact this number?";
        const waLink = "https://wa.me/6281953355227"; // International WhatsApp link

        if (confirm(confirmMessage)) {
            window.open(waLink, "_blank"); // Open in a new tab
        }
    }
    </script>
</section>
@endsection
