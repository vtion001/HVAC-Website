<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-lg border-b border-gray-100 transition-all duration-300" id="main-header">
    <div class="container mx-auto px-4 lg:px-6 h-16 lg:h-20 flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-2 group">
            <div class="w-8 h-8 rounded-lg bg-brand-400 text-white flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
            </div>
            <span class="text-xl font-bold text-gray-900 tracking-tight group-hover:text-brand-600 transition-colors">NordicAir</span>
        </a>

        <!-- Desktop Navigation with Dropdowns -->
        <nav class="hidden lg:flex items-center gap-1">
            <!-- Heating Dropdown -->
            <div class="relative group">
                <button class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">
                    Heating
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0">
                    <div class="bg-white rounded-xl shadow-xl border border-gray-100 py-3 min-w-48">
                        <a href="{{ route('heat-pumps') }}" class="block px-4 py-2.5 text-sm text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors">
                            Heat Pumps
                        </a>
                        <a href="{{ route('furnaces') }}" class="block px-4 py-2.5 text-sm text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors">
                            Furnaces
                        </a>
                        <a href="{{ route('heating') }}" class="block px-4 py-2.5 text-sm text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors">
                            View All Heating
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cooling Dropdown -->
            <div class="relative group">
                <button class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">
                    Cooling
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0">
                    <div class="bg-white rounded-xl shadow-xl border border-gray-100 py-3 min-w-48">
                        <a href="{{ route('cooling') }}" class="block px-4 py-2.5 text-sm text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors">
                            Air Conditioners
                        </a>
                        <a href="{{ route('ductless') }}" class="block px-4 py-2.5 text-sm text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors">
                            Ductless Systems
                        </a>
                        <a href="{{ route('cooling') }}" class="block px-4 py-2.5 text-sm text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors">
                            View All Cooling
                        </a>
                    </div>
                </div>
            </div>

            <!-- Products Dropdown -->
            <div class="relative group">
                <button class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">
                    Products
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0">
                    <div class="bg-white rounded-xl shadow-xl border border-gray-100 py-3 min-w-56">
                        <a href="{{ route('air-quality') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors">
                            <div class="w-8 h-8 rounded-lg bg-brand-100 flex items-center justify-center text-brand-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">Air Quality</div>
                                <div class="text-xs text-gray-500">Purifiers & Filters</div>
                            </div>
                        </a>
                        <a href="{{ route('thermostats') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors">
                            <div class="w-8 h-8 rounded-lg bg-brand-100 flex items-center justify-center text-brand-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">Smart Thermostats</div>
                                <div class="text-xs text-gray-500">WiFi & Smart Home</div>
                            </div>
                        </a>
                        <a href="{{ route('packaged-systems') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-600 hover:bg-brand-50 hover:text-brand-600 transition-colors">
                            <div class="w-8 h-8 rounded-lg bg-brand-100 flex items-center justify-center text-brand-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">Packaged Systems</div>
                                <div class="text-xs text-gray-500">All-in-One Solutions</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Simple Links -->
            <a href="{{ route('why-nordic') }}" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Why Nordic</a>
            <a href="{{ route('about') }}" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">About Us</a>
            <a href="{{ route('support') }}" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Support</a>
        </nav>

        <!-- Actions -->
        <div class="hidden lg:flex items-center gap-4">
            <a href="tel:1-800-667-3422" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">
                <span class="hidden xl:inline">1-800-NORDIC</span>
                <span class="xl:hidden">Call Now</span>
            </a>
            <a href="#" class="text-sm font-semibold text-gray-900 hover:text-brand-600 transition-colors">Log in</a>
            <a href="#assessment" class="px-5 py-2.5 text-sm font-bold text-white bg-brand-600 hover:bg-brand-700 rounded-full transition-all shadow-lg shadow-brand-600/20 hover:shadow-brand-600/30 transform hover:-translate-y-0.5">
                Get Quote
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="lg:hidden p-2 text-gray-600 hover:text-brand-600 transition-colors" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden lg:hidden bg-white border-t border-gray-100" id="mobile-menu">
        <div class="container mx-auto px-4 py-4 space-y-2">
            <!-- Heating Section -->
            <div class="border-b border-gray-100 pb-3">
                <button class="flex items-center justify-between w-full text-left font-medium text-gray-900" onclick="document.getElementById('mobile-heating').classList.toggle('hidden')">
                    Heating
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="hidden mt-2 pl-4 space-y-2" id="mobile-heating">
                    <a href="{{ route('heat-pumps') }}" class="block py-2 text-sm text-gray-600">Heat Pumps</a>
                    <a href="{{ route('furnaces') }}" class="block py-2 text-sm text-gray-600">Furnaces</a>
                    <a href="{{ route('heating') }}" class="block py-2 text-sm text-gray-600">View All Heating</a>
                </div>
            </div>

            <!-- Cooling Section -->
            <div class="border-b border-gray-100 pb-3">
                <button class="flex items-center justify-between w-full text-left font-medium text-gray-900" onclick="document.getElementById('mobile-cooling').classList.toggle('hidden')">
                    Cooling
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="hidden mt-2 pl-4 space-y-2" id="mobile-cooling">
                    <a href="{{ route('cooling') }}" class="block py-2 text-sm text-gray-600">Air Conditioners</a>
                    <a href="{{ route('ductless') }}" class="block py-2 text-sm text-gray-600">Ductless Systems</a>
                </div>
            </div>

            <!-- Products Section -->
            <div class="border-b border-gray-100 pb-3">
                <button class="flex items-center justify-between w-full text-left font-medium text-gray-900" onclick="document.getElementById('mobile-products').classList.toggle('hidden')">
                    Products
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="hidden mt-2 pl-4 space-y-2" id="mobile-products">
                    <a href="{{ route('air-quality') }}" class="block py-2 text-sm text-gray-600">Air Quality</a>
                    <a href="{{ route('thermostats') }}" class="block py-2 text-sm text-gray-600">Thermostats</a>
                    <a href="{{ route('packaged-systems') }}" class="block py-2 text-sm text-gray-600">Packaged Systems</a>
                </div>
            </div>

            <a href="{{ route('why-nordic') }}" class="block py-2 font-medium text-gray-900">Why Nordic</a>
            <a href="{{ route('about') }}" class="block py-2 font-medium text-gray-900">About Us</a>
            <a href="{{ route('support') }}" class="block py-2 font-medium text-gray-900">Support</a>
            
            <div class="pt-4 space-y-3">
                <a href="tel:1-800-667-3422" class="block text-center py-3 text-sm font-medium text-gray-600 border border-gray-200 rounded-lg">
                    📞 1-800-NORDIC
                </a>
                <a href="#assessment" class="block text-center py-3 text-sm font-bold text-white bg-brand-600 rounded-lg">
                    Get Free Quote
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    // Header scroll effect
    window.addEventListener('scroll', function() {
        const header = document.getElementById('main-header');
        if (window.scrollY > 20) {
            header.classList.add('shadow-md');
            header.classList.remove('border-b');
        } else {
            header.classList.remove('shadow-md');
            header.classList.add('border-b');
        }
    });
</script>
