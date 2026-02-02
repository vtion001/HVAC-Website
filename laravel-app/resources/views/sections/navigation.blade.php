{{-- Navigation Section --}}
<nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            {{-- Logo --}}
            <div class="flex-shrink-0 flex items-center cursor-pointer" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
                <span class="text-2xl font-bold tracking-tighter text-brand-900">TRANE<span class="text-brand-500">.</span></span>
            </div>
            
            {{-- Desktop Menu --}}
            <div class="hidden md:flex space-x-10 items-center">
                <a href="#wall-mounted" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Wall Mounted</a>
                <a href="#heat-pumps" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Heat Pumps</a>
                <a href="#reviews" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Reviews</a>
                
                {{-- Magnetic Button Wrapper --}}
                <div class="magnetic-wrap">
                    <a href="#contact" class="magnetic-btn px-6 py-2.5 text-sm font-medium text-white bg-brand-900 hover:bg-brand-800 rounded-full transition-all shadow-lg hover:shadow-brand-900/20 inline-block">
                        <span class="inline-block relative z-10">Get a Quote</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
