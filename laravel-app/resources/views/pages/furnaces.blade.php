@extends('layouts.app')

@section('title', 'Gas & Oil Furnaces - Trane Residential')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative min-h-[60vh] flex items-center justify-center bg-brand-950 overflow-hidden isolate">
        <div class="absolute inset-0 -z-10">
             <div class="absolute inset-0 bg-gradient-to-tr from-brand-950 via-brand-900 to-brand-800 opacity-90"></div>
             <!-- Decorative blob -->
             <div class="absolute -top-24 -right-24 w-96 h-96 bg-trane-red rounded-full blur-[128px] opacity-20"></div>
        </div>
        
        <div class="max-w-5xl mx-auto px-6 py-24 text-center relative z-10">
            <span class="text-brand-300 font-mono text-sm tracking-widest uppercase mb-4 block">Heating Solutions</span>
            <h1 class="text-5xl lg:text-7xl font-bold tracking-tighter text-white mb-8 leading-[1.1]">
                Relentless Warmth.<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-200 to-white">Even in the Extreme.</span>
            </h1>
            <p class="text-xl leading-relaxed text-brand-100 max-w-2xl mx-auto font-light">
                Engineered to ignore the forecast. Trane furnaces deliver precise, efficient heat that wraps your home in comfort, no matter how low the mercury drops.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-24 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            
            <!-- Sticky Sidebar (Table of Contents) -->
            <div class="hidden lg:block lg:col-span-3">
                <nav class="sticky top-32 space-y-8">
                    <div>
                        <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">In this section</h3>
                        <ul class="space-y-3 border-l-2 border-gray-100 ml-1 pl-4">
                            <li><a href="#flagship" class="block text-brand-900 font-medium hover:text-trane-red transition-colors">The Flagship S9V2</a></li>
                            <li><a href="#types" class="block text-gray-500 hover:text-trane-red transition-colors">Furnace Types</a></li>
                            <li><a href="#technology" class="block text-gray-500 hover:text-trane-red transition-colors">Technology</a></li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-2xl">
                        <p class="text-sm text-gray-600 mb-4">Not sure what you need?</p>
                        <a href="#" class="text-sm font-bold text-trane-red hover:underline">Find a Local Dealer &rarr;</a>
                    </div>
                </nav>
            </div>

            <!-- Editorial Content -->
            <div class="lg:col-span-9 space-y-32">
                
                <!-- Intro -->
                <div class="max-w-3xl">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Efficiency Meets Endurance.</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        A furnace isn't just about heat; it's about how that heat is delivered. Trane furnaces use intelligent combustion systems to minimize waste and maximize comfort. With ratings up to 97.3% AFUE, nearly every dollar you spend on fuel goes directly into warming your living space.
                    </p>
                </div>

                <!-- Flagship Product Feature (Offset Layout) -->
                <div id="flagship" class="relative group">
                    <div class="absolute inset-0 bg-brand-50 rounded-[3rem] -rotate-1 scale-[1.02] transition-transform group-hover:rotate-0"></div>
                    <div class="relative bg-white border border-gray-100 rounded-[2.5rem] p-8 lg:p-12 shadow-xl flex flex-col md:flex-row gap-12 items-center">
                        <div class="w-full md:w-1/2">
                            <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-900 text-white rounded-full text-xs font-bold uppercase tracking-wider mb-6">
                                <span class="w-2 h-2 rounded-full bg-trane-red"></span>
                                Premium Choice
                            </div>
                            <h3 class="text-4xl font-bold text-brand-950 mb-4">S9V2-VS Gas Furnace</h3>
                            <p class="text-gray-600 mb-8 leading-relaxed">
                                The gold standard in heating. Two-stage heating and a variable-speed blower motor work in tandem to eliminate cold spots and drafty starts.
                            </p>
                            
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <p class="text-3xl font-bold text-brand-600">97%</p>
                                    <p class="text-xs text-gray-400 uppercase tracking-wide">AFUE Efficiency</p>
                                </div>
                                <div>
                                    <p class="text-3xl font-bold text-brand-600">2-Stage</p>
                                    <p class="text-xs text-gray-400 uppercase tracking-wide">Precise Heating</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 flex justify-center relative">
                            <div class="absolute inset-0 bg-brand-100 rounded-full blur-[60px] opacity-50"></div>
                            <span class="text-[10rem] relative z-10 drop-shadow-2xl">🔥</span>
                        </div>
                    </div>
                </div>

                <!-- Comparison Grid -->
                <div id="types">
                    <h2 class="text-3xl font-bold text-gray-900 mb-12">Which Performance Tier fits you?</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Modulating -->
                        <div class="bg-gray-50 p-8 rounded-2xl hover:bg-white hover:shadow-lg transition-all duration-300 border border-transparent hover:border-gray-100">
                            <div class="w-12 h-12 bg-brand-900 text-white flex items-center justify-center rounded-xl mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Modulating</h4>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">The flame adjusts in tiny increments (like a dimmer switch) to maintain temperature within 0.5 degrees.</p>
                            <span class="text-xs font-bold text-brand-600 uppercase tracking-wider">Ultimate Comfort</span>
                        </div>

                        <!-- Two-Stage -->
                        <div class="bg-gray-50 p-8 rounded-2xl hover:bg-white hover:shadow-lg transition-all duration-300 border border-transparent hover:border-gray-100">
                            <div class="w-12 h-12 bg-brand-700 text-white flex items-center justify-center rounded-xl mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Two-Stage</h4>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Runs at low speed 80% of the time for efficiency, kicking into high gear only during extreme cold snaps.</p>
                            <span class="text-xs font-bold text-brand-600 uppercase tracking-wider">Balanced Value</span>
                        </div>

                        <!-- Single-Stage -->
                        <div class="bg-gray-50 p-8 rounded-2xl hover:bg-white hover:shadow-lg transition-all duration-300 border border-transparent hover:border-gray-100">
                            <div class="w-12 h-12 bg-brand-500 text-white flex items-center justify-center rounded-xl mb-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Single-Stage</h4>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">100% capacity whenever it's on. A reliable, cost-effective workhorse for consistent warmth.</p>
                            <span class="text-xs font-bold text-brand-600 uppercase tracking-wider">Proven Reliability</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
