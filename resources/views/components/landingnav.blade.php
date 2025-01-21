<header>
    <nav class="shadow-sm absolute top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#"><img class="h-16" src="{{ asset('storage/TheBunnyTeeth_Logo.png') }}" alt="TheBunnyTeeth_Logo" /></a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-10 poppins-regular">
                    <a href="#"
                        class="text-white border-b-2 border-amber-500 px-1 py-2 text-md font-medium">Home</a>
                    <a href="#about" class="text-gray-200 hover:text-white px-1 py-2 text-md font-medium">About
                        us</a>
                    <a href="#services"
                        class="text-gray-200 hover:text-white px-1 py-2 text-md font-medium">Services</a>
                    <a href="#gallery"
                        class="text-gray-200 hover:text-white px-1 py-2 text-md font-medium">Gallery</a>
                    <a href="#contact" class="text-gray-200 hover:text-white px-1 py-2 text-md font-medium">Contact
                        Us</a>
                </div>

                <!-- Book Now Button -->
                <div class="hidden md:flex items-center">
                    <a href="./book"
                        class="bg-amber-500 hover:bg-amber-600 text-white px-8 py-3 rounded-full text-sm font-medium">Book
                        Now</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="menu-toggle" type="button" class="text-gray-100 hover:text-gray-100 p-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white">
            <div class="px-3 pt-2 pb-3 space-y-1 poppins-regular text-center">
                <a href="#" class="text-gray-900 block px-3 py-2 text-base font-medium border-b">Home</a>
                <a href="#about"
                    class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">About
                    us</a>
                <a href="#services"
                    class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">Services</a>
                <a href="#gallery"
                    class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium border-b">Gallery</a>
                <a href="#contact"
                    class="text-gray-500 hover:text-gray-900 block px-3 py-2 text-base font-medium">Contact Us</a>
                <a href="./book"
                    class="text-gray-100 hover:text-white bg-amber-500 rounded-sm block px-3 py-2 text-base font-medium">Book
                    Now</a>
            </div>
        </div>
    </nav>

    <script>
        // JavaScript to toggle the mobile menu
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</header>