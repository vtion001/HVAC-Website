@extends('layouts.app')

@section('title', 'Packaged Systems - Trane Residential')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-brand-900 overflow-hidden isolate">
        <div class="absolute inset-0 -z-10 overflow-hidden">
             <div class="absolute inset-0 bg-gradient-to-r from-brand-900 to-brand-800 opacity-90"></div>
             <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-brand-500 rounded-full blur-[128px] opacity-20"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 py-24 lg:px-8 lg:py-32 relative z-10 text-center">
            <h1 class="text-4xl lg:text-6xl font-extrabold tracking-tight text-white mb-6">Big Comfort. Small Footprint.</h1>
            <p class="text-lg leading-8 text-brand-100 max-w-2xl mx-auto">
                Reclaim your indoor space. Trane packaged systems combine powerful heating and cooling into a single, sleek outdoor unit.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-16 lg:px-8">
        
        <!-- Concept Visual -->
        <div class="mb-24 flex flex-col items-center">
            <div class="relative w-full max-w-4xl bg-gray-50 rounded-[3rem] p-12 overflow-hidden border border-gray-100 shadow-sm">
                <div class="absolute top-0 right-0 p-8 opacity-5">
                    <svg class="w-64 h-64 text-brand-900" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3h18v18H3z"/></svg>
                </div>
                <div class="relative z-10 flex flex-col md:flex-row items-center gap-12">
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-brand-950 mb-4">Why Go Packaged?</h2>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Standard split systems take up space in your yard <em>and</em> your home. Packaged systems put everything—compressor, coil, air handler, furnace—into one durable cabinet outside.
                        </p>
                        <ul class="mt-6 space-y-3">
                            <li class="flex items-center text-gray-700">
                                <span class="w-6 h-6 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center mr-3 text-xs font-bold">✓</span>
                                More attic/closet space
                            </li>
                            <li class="flex items-center text-gray-700">
                                <span class="w-6 h-6 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center mr-3 text-xs font-bold">✓</span>
                                Rooftop or ground installation
                            </li>
                            <li class="flex items-center text-gray-700">
                                <span class="w-6 h-6 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center mr-3 text-xs font-bold">✓</span>
                                Quieter indoor environment
                            </li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 flex justify-center">
                        <div class="w-64 h-64 bg-white rounded-full shadow-2xl flex items-center justify-center border-8 border-brand-50 relative">
                            <span class="text-8xl">📦</span>
                            <div class="absolute -bottom-6 bg-brand-900 text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest">All-In-One</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Solution Cards (Tabbed Layout) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Gas/Electric -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-24 h-24 bg-orange-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
                <div class="relative z-10">
                    <span class="inline-block p-3 bg-orange-100 text-orange-600 rounded-xl mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path></svg>
                    </span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Gas/Electric</h3>
                    <p class="text-sm text-gray-500 uppercase tracking-widest mb-4">The Powerhouse</p>
                    <p class="text-gray-600 mb-6">
                        Combines powerful electric cooling with the rapid, reliable heat of a gas furnace. The best of both worlds for climates with hot summers and freezing winters.
                    </p>
                    <a href="#" class="inline-flex items-center text-orange-600 font-semibold hover:text-orange-700">Learn More &rarr;</a>
                </div>
            </div>

            <!-- Heat Pump -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
                <div class="relative z-10">
                    <span class="inline-block p-3 bg-blue-100 text-blue-600 rounded-xl mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Packaged Heat Pump</h3>
                    <p class="text-sm text-gray-500 uppercase tracking-widest mb-4">The Efficient Choice</p>
                    <p class="text-gray-600 mb-6">
                        All-electric heating and cooling. Perfect for areas with moderate winters where gas isn't needed. Highly efficient and eco-friendly.
                    </p>
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700">Learn More &rarr;</a>
                </div>
            </div>

            <!-- EarthWise Hybrid -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-24 h-24 bg-green-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
                <div class="relative z-10">
                    <span class="inline-block p-3 bg-green-100 text-green-600 rounded-xl mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">EarthWise™ Hybrid</h3>
                    <p class="text-sm text-gray-500 uppercase tracking-widest mb-4">The Smartest System</p>
                    <p class="text-gray-600 mb-6">
                        Dual Fuel technology. It's a heat pump for mild days and a gas furnace for freezing nights. The system automatically picks the most efficient fuel source.
                    </p>
                    <a href="#" class="inline-flex items-center text-green-600 font-semibold hover:text-green-700">Learn More &rarr;</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
