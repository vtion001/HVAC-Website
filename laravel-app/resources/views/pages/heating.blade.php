@extends('layouts.home')

@section('title', 'Heating Solutions | NordicAir')

@section('content')
<section class="pt-40 pb-20 bg-brand-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5"></div>
    <div class="container mx-auto px-6 text-center max-w-4xl relative z-10">
        <span class="text-brand-300 font-bold uppercase tracking-widest text-xs mb-4 block">Sustainable Heating</span>
        <h1 class="text-5xl lg:text-7xl font-bold font-serif mb-8 text-white">Warmth Without Waste.</h1>
        <p class="text-xl text-brand-100 leading-relaxed font-light mb-12">
            Experience the future of heating with our all-electric Heat Pumps. Efficient enough for Scandinavian winters, perfect for your home.
        </p>
        <div class="flex justify-center gap-4">
            <a href="#models" class="px-8 py-4 bg-white text-brand-900 font-bold rounded-full hover:bg-brand-50 transition-colors">View Models</a>
        </div>
    </div>
</section>

<section id="models" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <!-- Feature Block -->
        <div class="flex flex-col lg:flex-row items-center gap-16 mb-24">
            <div class="lg:w-1/2">
                <img src="{{ asset('images/trane-split-ac.png') }}" class="rounded-[3rem] w-full shadow-2xl" alt="Heat Pump Outdoor">
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-3xl font-bold text-brand-950 mb-6">Redefining Winter Comfort</h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    Gone are the days of dry, uneven heating. Our variable-speed heat pumps provide a consistent blanket of warmth, maintaining your set temperature within 0.5 degrees.
                </p>
                
                <div class="grid grid-cols-2 gap-8 mb-8">
                    <div>
                        <div class="text-3xl font-bold text-brand-600 mb-1">-22°F</div>
                        <div class="text-xs text-gray-500 uppercase tracking-wide">Heating Performance</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-brand-600 mb-1">400%</div>
                        <div class="text-xs text-gray-500 uppercase tracking-wide">More Efficient vs Gas</div>
                    </div>
                </div>

                <a href="#" class="text-brand-800 font-bold hover:text-brand-600 inline-flex items-center">
                    Download Specs <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </a>
            </div>
        </div>

        {{-- Myth Buster --}}
        @include('sections.myth-buster')

        <!-- Models Info (HSPF2) -->
        <div class="bg-gray-50 rounded-3xl p-12 text-center max-w-5xl mx-auto">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Why HSPF2 Matters</h3>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Heating Seasonal Performance Factor 2 (HSPF2) is the true measure of your system's winter efficiency. Traditional electric heat has an HSPF of around 3. NordicAir systems achieve up to 11.5.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <div class="bg-white px-6 py-3 rounded-xl shadow-sm border border-gray-100">
                    <span class="block text-xs text-gray-400 font-bold uppercase">Standard Heat Pump</span>
                    <span class="block text-xl font-bold text-gray-900">7.7 HSPF2</span>
                </div>
                <div class="bg-brand-600 px-6 py-3 rounded-xl shadow-lg shadow-brand-600/20">
                    <span class="block text-xs text-brand-200 font-bold uppercase">Nordic Pure Series</span>
                    <span class="block text-xl font-bold text-white">10.5+ HSPF2</span>
                </div>
            </div>
        </div>
    </div>
</section>

@include('sections.cta')
@endsection