<header class="w-full bg-white shadow-md font-sans sticky top-0 z-50">
    <!-- Top Bar -->
    <div class="bg-gray-100 py-2 border-b border-gray-200 hidden md:block">
        <div class="container mx-auto px-4 flex justify-end space-x-6 text-sm font-medium text-gray-600">
            <a href="#" class="hover:text-trane-red transition">Pricing Guide</a>
            <a href="#" class="hover:text-trane-red transition">Offers, Rebates & Tax Credits</a>
            <a href="#" class="hover:text-trane-red transition">Financing</a>
            <a href="#" class="hover:text-trane-red transition">Get Help</a>
            <a href="#" class="text-trane-red font-bold uppercase tracking-wide flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Find a Local Pro
            </a>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex-shrink-0">
            <!-- Trane Logo Custom SVG implementation based on brand color -->
            <svg class="h-10 w-auto text-trane-red fill-current" viewBox="0 0 200 60" xmlns="http://www.w3.org/2000/svg">
                <text x="10" y="45" font-family="Inter, sans-serif" font-size="40" font-weight="900" letter-spacing="-2">TRANE</text>
            </svg>
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden lg:flex space-x-8 font-bold text-gray-800">
            <div class="group relative">
                <button class="hover:text-trane-red transition py-4">Heating</button>
                <div class="absolute left-0 top-full w-48 bg-white shadow-lg rounded-b-lg p-4 hidden group-hover:block border-t-4 border-trane-red">
                    <a href="#" class="block py-2 hover:text-trane-red">Furnaces</a>
                    <a href="#" class="block py-2 hover:text-trane-red">Heat Pumps</a>
                    <a href="#" class="block py-2 hover:text-trane-red">Packaged Systems</a>
                    <a href="#" class="block py-2 hover:text-trane-red">Ductless Systems</a>
                </div>
            </div>
            
            <div class="group relative">
                <button class="hover:text-trane-red transition py-4">Cooling</button>
                <div class="absolute left-0 top-full w-48 bg-white shadow-lg rounded-b-lg p-4 hidden group-hover:block border-t-4 border-trane-red">
                    <a href="#" class="block py-2 hover:text-trane-red">Air Conditioners</a>
                    <a href="#" class="block py-2 hover:text-trane-red">Heat Pumps</a>
                    <a href="#" class="block py-2 hover:text-trane-red">Packaged Systems</a>
                    <a href="#" class="block py-2 hover:text-trane-red">Ductless Systems</a>
                </div>
            </div>

            <a href="#" class="hover:text-trane-red transition py-4">Air Quality</a>
            <a href="#" class="hover:text-trane-red transition py-4">Thermostats</a>
            <a href="#" class="hover:text-trane-red transition py-4">Products</a>
            <a href="#" class="hover:text-trane-red transition py-4">Resources</a>
            <a href="#" class="hover:text-trane-red transition py-4">Dealers</a>
        </nav>

        <!-- Search / Mobile Menu Button -->
        <div class="flex items-center space-x-4">
            <button class="p-2 text-gray-600 hover:text-trane-red">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
            <button class="lg:hidden p-2 text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
</header>
