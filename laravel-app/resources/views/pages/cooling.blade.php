@extends('layouts.home')

@section('title', 'Systems | Cooling & Heating - NordicAir')

@section('content')
<section class="pt-40 pb-20 bg-white">
    <div class="container mx-auto px-6 text-center max-w-4xl">
        <h1 class="text-5xl lg:text-6xl font-bold font-serif text-brand-950 mb-6">Climate Systems</h1>
        <p class="text-xl text-gray-600 mb-12">Precision engineering for every room. Explore our range of highly efficient cooling and heating solutions.</p>
        
        <div class="flex justify-center gap-4 mb-16">
            <button class="px-6 py-2 rounded-full bg-brand-900 text-white font-medium">All Systems</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-600 font-medium hover:bg-gray-200 transition">Cooling Only</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-600 font-medium hover:bg-gray-200 transition">Heat Pumps</button>
        </div>
    </div>
</section>

{{-- Tech Feature: Sound --}}
@include('sections.sound-of-silence')

<section class="pb-24 bg-white">
    <div class="container mx-auto px-6">
        <!-- Product 1 -->
        <div class="bg-nordic-beige rounded-[3rem] p-8 lg:p-20 mb-12 flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2">
                <div class="inline-block px-3 py-1 mb-6 text-[10px] font-bold tracking-widest text-brand-800 uppercase bg-white/50 rounded-full border border-brand-100">
                    Flagship Series
                </div>
                <h2 class="text-4xl font-bold text-brand-950 mb-4">Nordic Pure™ Heat Pump</h2>
                <div class="flex gap-4 text-xs font-bold uppercase tracking-wider text-gray-500 mb-6">
                    <span>Up to 24 SEER2</span>
                    <span class="w-px h-4 bg-gray-300"></span>
                    <span>19dB Quiet</span>
                </div>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    Our most advanced system. Provides ultra-efficient heating down to -22°F and crisp cooling in summer. Features AI-driven climate control that learns your preferences.
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-brand-800 font-medium">
                        <svg class="w-5 h-5 mr-3 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Variable Speed Inverter
                    </li>
                    <li class="flex items-center text-brand-800 font-medium">
                        <svg class="w-5 h-5 mr-3 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        App & Voice Control
                    </li>
                    <li class="flex items-center text-brand-800 font-medium">
                        <svg class="w-5 h-5 mr-3 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Dual Filtration System
                    </li>
                </ul>
                <button class="px-8 py-4 bg-brand-900 hover:bg-brand-800 text-white font-bold rounded-full transition-all">View Details</button>
            </div>
            <div class="lg:w-1/2 relative">
                 <div class="absolute inset-0 bg-white/40 blur-3xl rounded-full scale-90"></div>
                 <img src="{{ asset('images/trane-split-ac.png') }}" alt="Nordic Pure" class="relative z-10 w-full rounded-2xl shadow-xl transform hover:scale-[1.02] transition-transform duration-500">
            </div>
        </div>

        <!-- Product 2 -->
        <div class="grid lg:grid-cols-2 gap-8">
            <div class="bg-gray-50 rounded-[2.5rem] p-10 hover:shadow-lg transition-shadow">
                <div class="flex justify-between items-start mb-8">
                    <h3 class="text-2xl font-bold text-gray-900">Essential Split AC</h3>
                    <span class="px-3 py-1 bg-white text-xs font-bold rounded-full shadow-sm">18 SEER2</span>
                </div>
                <img src="{{ asset('images/trane-split-ac.png') }}" class="w-full h-64 object-cover rounded-xl mb-8 bg-white" alt="Split AC">
                <p class="text-gray-600 mb-6">Perfect for single-zone cooling. Reliable, cost-effective performance for bedrooms and home offices.</p>
                <a href="#" class="text-brand-600 font-bold hover:underline">Learn more &rarr;</a>
            </div>

            <div class="bg-gray-50 rounded-[2.5rem] p-10 hover:shadow-lg transition-shadow">
                 <div class="flex justify-between items-start mb-8">
                    <h3 class="text-2xl font-bold text-gray-900">Multi-Zone System</h3>
                    <span class="px-3 py-1 bg-white text-xs font-bold rounded-full shadow-sm">Custom Config</span>
                </div>
                <img src="{{ asset('images/trane-split-ac.png') }}" class="w-full h-64 object-cover rounded-xl mb-8 bg-white" alt="Multi Zone">
                <p class="text-gray-600 mb-6">Connect up to 5 indoor units to a single outdoor compressor. Individual temperature control for every room.</p>
                <a href="#" class="text-brand-600 font-bold hover:underline">Learn more &rarr;</a>
            </div>
        </div>
    </div>
</section>

@include('sections.cta')
@endsection
