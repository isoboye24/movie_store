<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="text-xl font-bold text-orange-600">MV</a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="{{ url('/about') }}" class="text-gray-700 hover:text-blue-600">About</a>
                <a href="{{ url('/movies') }}" class="text-gray-700 hover:text-blue-600">Movies</a>
                <a href="{{ url('/products') }}" class="text-gray-700 hover:text-blue-600">Products</a>
            </div>

            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ url('/movies') }}" class="text-gray-700 hover:text-blue-600">Login</a>
                <a href="{{ url('/register') }}" class="text-gray-700 hover:text-blue-600">Register</a>
                <a href="{{ url('/admin/dashboard') }}" class="px-3 py-2 bg-lime-600 text-white rounded-lg hover:bg-orange-700 transition ease-in-out duration-500">
                    Dashboard
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="menu-btn" class="focus:outline-none">
                    <!-- Hamburger Icon -->
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" 
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-2">
        <a href="{{ url('/') }}" class="block text-gray-700 hover:text-blue-600">Home</a>
        <a href="{{ url('/about') }}" class="block text-gray-700 hover:text-blue-600">About</a>
                        <a href="{{ url('/movies') }}" class="text-gray-700 hover:text-blue-600">Movies</a>
        <a href="{{ url('/contact') }}" class="block text-gray-700 hover:text-blue-600">Contact</a>
        <a href="{{ url('/dashboard') }}" class="block px-3 py-2 bg-lime-600 text-white rounded-lg hover:bg-orange-700 transition ease-in-out duration-500">
            Dashboard
        </a>
    </div>
</nav>

<script>
    // Mobile toggle
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("menu-btn");
        const menu = document.getElementById("mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    });
</script>
