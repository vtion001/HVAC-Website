<section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
            
            <!-- Left Content -->
            <div class="w-full lg:w-1/2 relative z-10">
                <div class="inline-block px-3 py-1 mb-6 text-[10px] font-bold tracking-[0.2em] text-brand-800 uppercase bg-brand-50 rounded border border-brand-100">
                    Expert Care For Your Nordic Home
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-bold tracking-tight text-brand-950 leading-[1.1] mb-6">
                    Find Your Perfect<br/>
                    <span class="font-serif italic text-brand-600">Climate Solution</span>
                </h1>
                
                <p class="text-lg text-gray-600 mb-10 max-w-lg leading-relaxed">
                    Don't guess which system you need. Take our 60-second comfort quiz to get a tailored recommendation for your first home.
                </p>

                <!-- Mini Quiz Form -->
                <div class="bg-white p-2 rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 max-w-md">
                    <div class="grid grid-cols-2 gap-2 mb-2">
                        <div class="relative">
                            <label class="absolute -top-2 left-3 bg-white px-1 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Home Size</label>
                            <select class="w-full h-12 pl-4 pr-8 text-sm font-medium text-gray-700 bg-gray-50 rounded-xl appearance-none focus:outline-none focus:ring-2 focus:ring-brand-500/20 cursor-pointer hover:bg-gray-100 transition-colors">
                                <option>Up to 1,500 sq ft</option>
                                <option>1,500 - 2,500 sq ft</option>
                                <option>2,500+ sq ft</option>
                            </select>
                            <svg class="w-4 h-4 text-gray-400 absolute right-3 top-4 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                        <div class="relative">
                            <label class="absolute -top-2 left-3 bg-white px-1 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Main Goal</label>
                            <select class="w-full h-12 pl-4 pr-8 text-sm font-medium text-gray-700 bg-gray-50 rounded-xl appearance-none focus:outline-none focus:ring-2 focus:ring-brand-500/20 cursor-pointer hover:bg-gray-100 transition-colors">
                                <option>Lower Monthly Bills</option>
                                <option>Better Air Quality</option>
                                <option>Quiet Operation</option>
                            </select>
                            <svg class="w-4 h-4 text-gray-400 absolute right-3 top-4 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                    <button class="w-full h-12 bg-brand-400 hover:bg-brand-500 text-white font-bold rounded-xl transition-all shadow-lg shadow-brand-400/30 flex items-center justify-center group">
                        Start My Free Comfort Assessment
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </div>
            </div>

            <!-- Right Image -->
            <div class="w-full lg:w-1/2 relative">
                <div class="relative rounded-[2rem] overflow-hidden shadow-2xl shadow-gray-200 bg-gray-100 aspect-square lg:aspect-[4/3]">
                    <!-- Placeholder for Wall AC Image -->
                    <img src="{{ asset('images/trane-split-ac.png') }}" alt="Wall Mounted AC" class="w-full h-full object-cover object-center">
                    
                    <!-- Floating Card -->
                    <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-sm p-4 rounded-xl shadow-lg border border-white/50 flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Did You Know?</p>
                            <p class="text-xs text-gray-600 leading-relaxed font-medium">
                                Modern heat pumps serve you up to 40% on heating costs compared to oil or gas.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Decor Blob -->
                <div class="absolute -top-20 -right-20 w-96 h-96 bg-brand-200/30 rounded-full blur-3xl -z-10 animate-pulse"></div>
            </div>

        </div>
    </div>
</section>
