<nav class="bg-white shadow fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <a href="/" class="text-2xl font-bold text-gray-800" style="font-family:'Carla'">
            Creya <span class="text-gray-600" style="font-family:'Playfair Display'"><em>Space</em></span>
        </a>
        
        <!-- Navigation Links -->
        <ul class="hidden md:flex space-x-8">
            <li><a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Home</a></li>
            <li><a href="/services" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Services</a></li>
            <li><a href="/portfolio" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Portfolio</a></li>
            <li><a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Contact</a></li>
        </ul>

        <!-- Mobile Menu Button -->
        <button 
            id="menu-btn" 
            class="block md:hidden focus:outline-none" 
            aria-label="Toggle navigation menu" 
            aria-expanded="false">
            <svg id="menu-icon" class="w-6 h-6 text-gray-700 transition duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path id="menu-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-gray-100 md:hidden shadow-lg">
        <ul class="flex flex-col space-y-4 px-6 py-4">
            <li><a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Home</a></li>
            <li><a href="/services" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Services</a></li>
            <li><a href="/portfolio" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Portfolio</a></li>
            <li><a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
    // Mobile Menu Toggle with Animation
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const menuPath = document.getElementById('menu-path');

    menuBtn.addEventListener('click', () => {
        const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';

        // Toggle visibility
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('animate-slide-down');

        // Update ARIA attributes
        menuBtn.setAttribute('aria-expanded', !isExpanded);

        // Change Menu Icon
        if (isExpanded) {
            menuPath.setAttribute('d', 'M4 6h16M4 12h16M4 18h16'); // Hamburger Icon
        } else {
            menuPath.setAttribute('d', 'M6 18L18 6M6 6l12 12'); // Close Icon
        }
    });
</script>

<style>
    /* Animation for Mobile Menu */
    @keyframes slide-down {
        from {
            opacity: 0;
            transform: translateY(-10%);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animate-slide-down {
        animation: slide-down 0.3s ease-out;
    }
</style>
