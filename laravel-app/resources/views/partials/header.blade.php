<header class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 transition-all duration-300" id="main-header">
    <div class="container mx-auto px-6 h-20 flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-2 group">
            <div class="w-8 h-8 rounded-lg bg-brand-400 text-white flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
            </div>
            <span class="text-xl font-bold text-gray-900 tracking-tight group-hover:text-brand-600 transition-colors">NordicAir</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center gap-8">
            <a href="{{ route('heat-pumps') }}" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Heat Pumps</a>
            <a href="{{ route('cooling') }}" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Systems</a>
            <a href="{{ route('why-nordic') }}" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Why Nordic</a>
            <a href="{{ route('support') }}" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Support</a>
        </nav>

        <!-- Actions -->
        <div class="hidden lg:flex items-center gap-6">
            <a href="#" class="text-sm font-semibold text-gray-900 hover:text-brand-600 transition-colors">Log in</a>
            <a href="#assessment" class="px-6 py-2.5 text-sm font-bold text-white bg-brand-800 hover:bg-brand-900 rounded-full transition-all shadow-lg shadow-brand-900/10 hover:shadow-brand-900/20 transform hover:-translate-y-0.5">
                Start Your Assessment
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="lg:hidden p-2 text-gray-600 hover:text-brand-600 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</header>
