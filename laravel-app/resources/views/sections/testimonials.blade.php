{{-- Testimonials Section --}}
@php
$testimonials = [
    [
        'quote' => 'The difference in our electric bill was immediate. We saved 30% in the first month compared to our old oil furnace.',
        'name' => 'Sarah Jenkins',
        'initial' => 'S',
        'product' => 'Installed XV20i',
        'avatarColor' => 'bg-brand-500',
    ],
    [
        'quote' => "Finally, my upstairs office is cool! The wall-mounted unit is so quiet I sometimes forget it's even running.",
        'name' => 'David K.',
        'initial' => 'D',
        'product' => 'Ductless Mini-Split',
        'avatarColor' => 'bg-brand-400',
    ],
    [
        'quote' => 'The installer was professional and the Trane unit looks sleek. Worth the investment for the reliability alone.',
        'name' => 'Michael R.',
        'initial' => 'M',
        'product' => 'System Upgrade',
        'avatarColor' => 'bg-brand-600',
    ],
];
@endphp

<section id="reviews" class="py-32 lg:py-48 bg-brand-950 text-white relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-brand-900/50 to-transparent pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-1/3 h-1/2 bg-brand-800/20 rounded-full blur-[120px] pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-24">
            <div class="max-w-2xl">
                <span class="text-brand-400 font-bold tracking-widest uppercase text-xs mb-4 block">Customer Stories</span>
                <h2 class="text-4xl lg:text-6xl font-bold tracking-tight mb-6">Trusted by Homeowners</h2>
                <p class="text-brand-200 text-xl font-light max-w-lg">America's Most Trusted® HVAC Brand 11 years running. Real results from real families.</p>
            </div>
            <div class="flex items-center gap-2 text-yellow-400 text-2xl hidden md:flex bg-white/5 px-6 py-3 rounded-full backdrop-blur-sm border border-white/10">
                <span>★★★★★</span>
                <span class="text-sm text-white font-medium ml-2">4.9/5 Average</span>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
                @include('components.testimonial-card', $testimonial)
            @endforeach
        </div>
    </div>
</section>

