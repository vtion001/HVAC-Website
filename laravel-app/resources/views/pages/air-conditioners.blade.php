@extends('layouts.app')

@section('title', 'Central Air Conditioners - Trane Residential')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative min-h-[50vh] flex items-center bg-brand-50 overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="max-w-7xl mx-auto px-6 py-24 lg:px-8 w-full text-center relative z-10">
            <h1 class="text-6xl font-black text-brand-950 mb-6 tracking-tight">
                Unstoppable Cooling.
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-10">
                From the sweltering heat of the desert to the humid days of the south, Trane air conditioners are tested to perform when others quit.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#premium" class="px-6 py-3 bg-brand-900 text-white rounded-full font-bold hover:bg-brand-800 transition">See Premium</a>
                <a href="#models" class="px-6 py-3 bg-white text-brand-900 border border-brand-200 rounded-full font-bold hover:shadow-lg transition">Compare Models</a>
            </div>
        </div>
    </div>

    <!-- Premium Highlight (Dark Mode) -->
    <div id="premium" class="bg-brand-950 py-24 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-brand-900 to-transparent pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 mb-4 px-3 py-1 bg-brand-500/20 border border-brand-500/30 rounded-full text-brand-300 text-xs font-bold uppercase tracking-widest">
                        <span class="w-2 h-2 bg-brand-400 rounded-full animate-pulse"></span>
                        Flagship Model
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6">XV20i TruComfort™</h2>
                    <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                        This isn't just an AC. It's a precision instrument. With 750 stages of comfort, it runs at the exact speed needed to keep your home within 1/2 degree of your set temperature.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-8 mb-10">
                        <div>
                            <p class="text-3xl font-bold text-white">21.5</p>
                            <p class="text-xs text-brand-400 uppercase tracking-widest">SEER2 Efficiency</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-white">55 dB</p>
                            <p class="text-xs text-brand-400 uppercase tracking-widest">Whisper Quiet</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-white">WeatherGuard™</p>
                            <p class="text-xs text-brand-400 uppercase tracking-widest">Top Protection</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-white">Link</p>
                            <p class="text-xs text-brand-400 uppercase tracking-widest">Smart Diagnostics</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative flex justify-center">
                    <div class="absolute inset-0 bg-brand-500 rounded-full blur-[100px] opacity-20"></div>
                    <!-- Placeholder for Premium Unit Image -->
                    <div class="relative bg-gradient-to-b from-gray-800 to-gray-900 w-80 h-96 rounded-3xl border border-gray-700 flex items-center justify-center shadow-2xl">
                        <span class="text-6xl">❄️</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Lineup Grid -->
    <div id="models" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-brand-950 mb-12 text-center">Find Your Perfect Match</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- XR16 Low Profile -->
                <div class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl border border-gray-100 transition-all duration-300">
                    <div class="h-48 bg-gray-50 rounded-2xl mb-6 flex items-center justify-center group-hover:scale-105 transition-transform">
                        <span class="text-4xl">🌤️</span>
                    </div>
                    <h3 class="text-xl font-bold text-brand-900 mb-2">XR16 Low Profile</h3>
                    <p class="text-sm text-gray-500 mb-4 h-10">Compact side-discharge design for tight spaces, condos, or zero-lot-lines.</p>
                    <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                        <span class="text-lg font-bold text-brand-600">16.0 SEER2</span>
                        <span class="text-xs font-semibold bg-gray-100 text-gray-600 px-2 py-1 rounded">Compact</span>
                    </div>
                </div>

                <!-- XR15 -->
                <div class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl border border-gray-100 transition-all duration-300">
                    <div class="h-48 bg-gray-50 rounded-2xl mb-6 flex items-center justify-center group-hover:scale-105 transition-transform">
                        <span class="text-4xl">⚡</span>
                    </div>
                    <h3 class="text-xl font-bold text-brand-900 mb-2">XR15</h3>
                    <p class="text-sm text-gray-500 mb-4 h-10">The perfect balance of energy efficiency and upfront value.</p>
                    <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                        <span class="text-lg font-bold text-brand-600">15.2 SEER2</span>
                        <span class="text-xs font-semibold bg-gray-100 text-gray-600 px-2 py-1 rounded">Best Seller</span>
                    </div>
                </div>

                <!-- XR13 -->
                <div class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl border border-gray-100 transition-all duration-300">
                    <div class="h-48 bg-gray-50 rounded-2xl mb-6 flex items-center justify-center group-hover:scale-105 transition-transform">
                        <span class="text-4xl">🛡️</span>
                    </div>
                    <h3 class="text-xl font-bold text-brand-900 mb-2">XR13</h3>
                    <p class="text-sm text-gray-500 mb-4 h-10">Rugged reliability. Built to handle the hottest days with ease.</p>
                    <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                        <span class="text-lg font-bold text-brand-600">13.4 SEER2</span>
                        <span class="text-xs font-semibold bg-gray-100 text-gray-600 px-2 py-1 rounded">Value</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
