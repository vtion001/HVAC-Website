<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-row justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl lg:text-4xl font-bold text-brand-950 mb-2">Smart Solutions for<br/>Every First Home</h2>
            </div>
            <a href="#" class="hidden md:flex items-center text-sm font-bold text-gray-500 hover:text-brand-600 transition-colors">
                Explore our full catalog
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Card 1 -->
            <div class="group rounded-3xl bg-gray-100 overflow-hidden relative transition-all hover:shadow-xl hover:shadow-gray-200/50">
                <div class="aspect-[4/3] bg-gray-200 relative overflow-hidden">
                    <img src="{{ asset('images/trane-split-ac.png') }}" alt="Heat Pumps" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-gray-900/10 to-transparent">
                    <div class="bg-white/90 backdrop-blur-md p-6 rounded-2xl border border-white/50 shadow-lg translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex gap-2 mb-3">
                            <span class="px-2 py-1 bg-brand-100 text-brand-700 text-[10px] font-bold uppercase rounded-md">Whole Home</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-700 text-[10px] font-bold uppercase rounded-md">Heat + Cool</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Efficient Heat Pumps</h3>
                        <p class="text-xs text-gray-500 mb-4 line-clamp-2">The ultimate upgrade for long-term savings. One system that keeps you cozy in winter and crisp in summer.</p>
                        <a href="#" class="inline-flex items-center text-xs font-bold text-gray-900 hover:text-brand-600 uppercase tracking-wider">
                            Learn more <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group rounded-3xl bg-gray-100 overflow-hidden relative transition-all hover:shadow-xl hover:shadow-gray-200/50">
                <div class="aspect-[4/3] bg-gray-200 relative overflow-hidden">
                    <img src="{{ asset('images/trane-split-ac.png') }}" alt="Split Systems" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105 filter hue-rotate-15">
                </div>
                <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-gray-900/10 to-transparent">
                    <div class="bg-white/90 backdrop-blur-md p-6 rounded-2xl border border-white/50 shadow-lg translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex gap-2 mb-3">
                            <span class="px-2 py-1 bg-brand-100 text-brand-700 text-[10px] font-bold uppercase rounded-md">Single Room</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-[10px] font-bold uppercase rounded-md">Sleek Design</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Split Type Systems</h3>
                        <p class="text-xs text-gray-500 mb-4 line-clamp-2">Perfect for focused comfort in bedrooms or home offices. Whisper-quiet and installs without major renovation.</p>
                        <a href="#" class="inline-flex items-center text-xs font-bold text-gray-900 hover:text-brand-600 uppercase tracking-wider">
                            Learn more <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-8 text-center md:hidden">
             <a href="#" class="inline-flex items-center text-sm font-bold text-gray-500 hover:text-brand-600 transition-colors">
                Explore our full catalog
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </div>
</section>
