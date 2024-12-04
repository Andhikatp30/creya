<footer class="bg-gray-800 py-6">
    <div class="container mx-auto text-center">
        <!-- Footer Text -->
        <p class="text-gray-400">&copy; <span id="current-year"></span> Creya Space. All Rights Reserved.</p>
        
        <!-- Navigation Links -->
        <ul class="flex justify-center space-x-6 mt-4">
            <li><a href="/about" class="text-gray-400 hover:text-white transition duration-300">About Us</a></li>
            <li><a href="/privacy" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a></li>
            <li><a href="/contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
        </ul>
    </div>
</footer>

<script>
    // Update footer year dynamically
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>
