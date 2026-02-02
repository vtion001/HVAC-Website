@extends('layouts.home')

@section('title', 'Why NordicAir | Sustainable Comfort')
@section('description', "Discover the Nordic difference. Sustainable engineering, whisper-quiet operation, and a commitment to your home's air quality.")

@section('content')
<section class="py-24 pt-40 bg-nordic-beige">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-20">
            <span class="text-brand-600 font-bold uppercase tracking-widest text-xs mb-4 block">Our Story</span>
            <h1 class="text-5xl lg:text-7xl font-bold font-serif text-brand-950 mb-8 leading-tight">
                Designed for the<br/>Nordic Climate.
            </h1>
            <p class="text-xl text-gray-600 leading-relaxed font-light">
                We started with a simple belief: Home comfort shouldn't come at the cost of the planet—or your peace and quiet. Born from Scandinavian engineering principles, NordicAir brings efficiency and minimalism to HVAC.
            </p>
        </div>

        <!-- Values Grid -->
        <div class="grid md:grid-cols-3 gap-8 mb-24">
            <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-brand-50 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-500">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Sustainability First</h3>
                <p class="text-gray-500 leading-relaxed text-sm">Our systems use R-454B low-GWP refrigerant, reducing carbon footprint by 78% compared to traditional units.</p>
            </div>
            
            <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-brand-50 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-500">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Whisper™ Technology</h3>
                <p class="text-gray-500 leading-relaxed text-sm">Engineered with custom fan blade curvature to operate as quietly as 19dB—softer than a rustling library.</p>
            </div>

            <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-brand-50 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-500">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Nordic Reliability</h3>
                <p class="text-gray-500 leading-relaxed text-sm">Tested in extreme conditions from -22°F to 115°F. Backed by our industry-leading 12-Year Replacement Pledge.</p>
            </div>
        </div>

        <!-- Image Break -->
        <div class="relative rounded-[3rem] overflow-hidden aspect-[21/9] mb-24 shadow-2xl">
            <img src="{{ asset('images/trane-split-ac.png') }}" class="w-full h-full object-cover object-center scale-105" alt="Nordic Lifestyle">
            <div class="absolute inset-0 bg-brand-900/20 mix-blend-multiply"></div>
            <div class="absolute bottom-12 left-12 text-white max-w-lg">
                <div class="text-sm font-bold uppercase tracking-widest mb-2 opacity-80">Our HQ</div>
                <div class="text-3xl font-serif">Oslo Design Center, Norway.</div>
            </div>
        </div>
    </div>
</section>

@include('sections.cta')
@endsection
