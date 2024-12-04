<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creya Space</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <!-- Include Vite for CSS and JS -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    
    <!-- Tambahkan Swiper.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Tambahkan Swiper.js Script -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow">
        @include('layouts.navbar')
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto py-6 px-4">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        @include('layouts.footer')
    </footer>

</body>
</html>
