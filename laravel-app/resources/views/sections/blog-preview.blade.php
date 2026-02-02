<section class="py-24 bg-brand-50">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-end mb-12">
            <h2 class="text-3xl font-bold text-brand-950">Expert Comfort Advice</h2>
            <a href="#" class="hidden md:inline-flex items-center text-sm font-bold text-brand-600 hover:text-brand-700">
                View all articles <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <a href="#" class="group block">
                <div class="relative overflow-hidden rounded-2xl mb-6 shadow-sm aspect-[3/2]">
                    <img src="{{ asset('images/trane-split-ac.png') }}" alt="Heat Pump" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider text-brand-800">Technology</div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-brand-600 transition-colors">Heat Pumps vs. Traditional Furnaces: The definitive guide for 2026</h3>
                <p class="text-gray-600 text-sm line-clamp-2">Why modern inverter heat pumps are becoming the standard for efficient home heating in northern climates.</p>
            </a>

            <!-- Article 2 -->
            <a href="#" class="group block">
                <div class="relative overflow-hidden rounded-2xl mb-6 shadow-sm aspect-[3/2]">
                    <img src="{{ asset('images/trane-split-ac.png') }}" alt="Air Quality" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hue-rotate-30">
                     <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                     <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider text-brand-800">Health</div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-brand-600 transition-colors">5 Signs Your Indoor Air Quality Could Be Impacting Your Sleep</h3>
                <p class="text-gray-600 text-sm line-clamp-2">From humidity levels to CO2 buildup, discover how your HVAC system plays a crucial role in your nightly rest.</p>
            </a>

            <!-- Article 3 -->
            <a href="#" class="group block">
                <div class="relative overflow-hidden rounded-2xl mb-6 shadow-sm aspect-[3/2]">
                    <img src="{{ asset('images/trane-split-ac.png') }}" alt="Maintenance" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider text-brand-800">Tips</div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-brand-600 transition-colors">The 60-Second Maintenance Checklist for New Owners</h3>
                <p class="text-gray-600 text-sm line-clamp-2">Keep your new NordicAir system running at peak efficiency with these simple monthly checks.</p>
            </a>
        </div>
        
         <div class="mt-8 text-center md:hidden">
            <a href="#" class="inline-flex items-center text-sm font-bold text-brand-600 hover:text-brand-700">
                View all articles <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</section>
