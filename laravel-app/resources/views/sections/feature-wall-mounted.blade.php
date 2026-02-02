{{-- Wall Mounted Feature Section --}}
<section id="wall-mounted" class="py-32 lg:py-48 max-w-7xl mx-auto px-6 lg:px-8 overflow-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24 items-center">
        {{-- Image Side --}}
        <div class="lg:col-span-7 relative group">
            <div class="absolute -inset-4 bg-brand-50 rounded-[3rem] transform -rotate-2 scale-95 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
            <div class="reveal-wrapper rounded-[2.5rem] overflow-hidden shadow-2xl relative z-10">
                <div class="reveal-overlay"></div>
                <img src="https://images.unsplash.com/photo-1615873968403-89e068629265?q=80&w=2000&auto=format&fit=crop" class="w-full aspect-[4/3] object-cover transform hover:scale-105 transition-transform duration-1000" alt="Wall Unit">
            </div>
        </div>
        
        {{-- Text Side --}}
        <div class="lg:col-span-5">
            <div class="inline-flex items-center gap-2 mb-6">
                <span class="w-8 h-[1px] bg-brand-400"></span>
                <span class="text-xs font-bold uppercase tracking-widest text-brand-600">Wall Mounted Series</span>
            </div>
            
            <h2 class="text-4xl lg:text-6xl font-bold text-brand-950 mb-8 leading-[1.1]">
                <span class="block mb-2">Precision Cooling.</span>
                <span class="block text-brand-600">Absolute Silence.</span>
            </h2>
            
            <p class="text-lg text-gray-600 mb-12 leading-relaxed font-light">
                Our wall-mounted units provide surgical temperature control without the ductwork. With whisper-quiet operation as low as 19dB, you'll feel the comfort without hearing the effort.
            </p>
            
            <div class="space-y-8">
                @include('components.feature-card', [
                    'icon' => 'bolt',
                    'title' => 'Adaptive Inverter',
                    'description' => 'Micro-adjustments 500x per second for consistent temp.'
                ])
                @include('components.feature-card', [
                    'icon' => 'sliders',
                    'title' => 'Multi-Zone Ready',
                    'description' => 'Connect up to 8 indoor units to a single outdoor pump.'
                ])
            </div>
        </div>
    </div>
</section>

