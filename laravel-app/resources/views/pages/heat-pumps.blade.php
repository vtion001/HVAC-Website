@extends('layouts.app')

@section('title', 'Heat Pumps - Trane Residential')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative min-h-[60vh] flex items-center bg-brand-950 overflow-hidden isolate">
        <div class="absolute inset-0 -z-10">
             <div class="absolute inset-0 bg-gradient-to-br from-brand-900 to-black opacity-90"></div>
             <div class="absolute bottom-0 left-1/4 w-[500px] h-[500px] bg-brand-500 rounded-full blur-[150px] opacity-20 animate-pulse"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-6 py-24 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block py-1 px-3 rounded-full bg-brand-500/20 text-brand-300 text-xs font-bold uppercase tracking-widest mb-6 border border-brand-500/30">Dual-Fuel Ready</span>
                    <h1 class="text-5xl lg:text-7xl font-bold tracking-tighter text-white mb-6 leading-[1.1]">
                        One System.<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-brand-200">Every Season.</span>
                    </h1>
                    <p class="text-xl text-gray-400 max-w-xl font-light leading-relaxed">
                        Cooling in the summer. Heating in the winter. The Trane heat pump is the ultimate multitasker, delivering precise electric comfort year-round.
                    </p>
                </div>
                <div class="relative">
                    <!-- Abstract representation of hot/cold flow -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-gradient-to-tr from-blue-500/20 to-orange-500/20 blur-3xl rounded-full"></div>
                    <div class="relative bg-white/5 border border-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-2xl">
                        <div class="flex justify-between items-start mb-8">
                            <div>
                                <h3 class="text-2xl font-bold text-white">XV20i</h3>
                                <p class="text-brand-400 text-sm uppercase tracking-wider">Variable Speed</p>
                            </div>
                            <span class="text-4xl">🔄</span>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center border-b border-white/10 pb-4">
                                <span class="text-gray-400">Cooling Efficiency</span>
                                <span class="text-white font-mono">20.5 SEER2</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-white/10 pb-4">
                                <span class="text-gray-400">Heating Efficiency</span>
                                <span class="text-white font-mono">8.7 HSPF2</span>
                            </div>
                            <div class="flex justify-between items-center pt-2">
                                <span class="text-gray-400">Sound Level</span>
                                <span class="text-white font-mono">43 dBA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works (Split Layout) -->
    <div class="py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-3xl font-bold text-brand-950 mb-4">Magic? No. Thermodynamics.</h2>
                <p class="text-gray-600 text-lg">A heat pump doesn't burn fuel to create heat. It simply moves it.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Summer Mode -->
                <div class="group relative overflow-hidden rounded-3xl bg-blue-50 p-10 transition-all hover:shadow-xl">
                    <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-32 h-32 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Summer Mode</h3>
                    <p class="text-blue-800/80 mb-6 leading-relaxed">
                        Just like a standard AC, the heat pump extracts heat from inside your home and releases it outdoors, leaving your indoor air cool and dehumidified.
                    </p>
                    <div class="inline-flex items-center text-blue-700 font-semibold">
                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span> Active Cooling
                    </div>
                </div>

                <!-- Winter Mode -->
                <div class="group relative overflow-hidden rounded-3xl bg-orange-50 p-10 transition-all hover:shadow-xl">
                    <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-32 h-32 text-orange-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-orange-900 mb-4">Winter Mode</h3>
                    <p class="text-orange-800/80 mb-6 leading-relaxed">
                        The system reverses. It captures latent heat energy from the outdoor air (even in cold temps) and transfers it inside to warm your home.
                    </p>
                    <div class="inline-flex items-center text-orange-700 font-semibold">
                        <span class="w-2 h-2 bg-orange-500 rounded-full mr-2"></span> Active Heating
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
