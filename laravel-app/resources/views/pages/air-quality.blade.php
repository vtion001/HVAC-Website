@extends('layouts.app')

@section('title', 'Indoor Air Quality - Trane Residential')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-brand-900 overflow-hidden isolate">
        <div class="absolute inset-0 -z-10 overflow-hidden">
             <div class="absolute inset-0 bg-gradient-to-r from-brand-900 to-brand-800 opacity-90"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 py-24 lg:px-8 lg:py-32 relative z-10 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-6xl mb-6">Breathe Easier</h1>
            <p class="text-lg leading-8 text-brand-100 max-w-2xl mx-auto">
                Your home's air can be up to 5 times more polluted than outdoor air. Trane's indoor air quality solutions remove allergens, balance moisture, and bring fresh air inside.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-16 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Filtration -->
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition p-8">
                <div class="h-12 w-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Air Filtration</h3>
                <p class="text-gray-600 mb-4">
                    Trane CleanEffects® Whole House Air Cleaner removes up to 99.98% of airborne particles, including dust, pollen, and bacteria.
                </p>
                <a href="#" class="text-trane-red font-semibold hover:text-red-700">Learn more &rarr;</a>
            </div>

            <!-- Humidity -->
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition p-8">
                <div class="h-12 w-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Humidity Control</h3>
                <p class="text-gray-600 mb-4">
                    Balance is key. Whole-home humidifiers add moisture in winter to prevent dry skin, while dehumidifiers remove excess moisture in summer to prevent mold.
                </p>
                <a href="#" class="text-trane-red font-semibold hover:text-red-700">Learn more &rarr;</a>
            </div>

            <!-- Ventilation -->
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition p-8">
                <div class="h-12 w-12 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" /></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Ventilation</h3>
                <p class="text-gray-600 mb-4">
                    Energy Recovery Ventilators (ERVs) swap stale indoor air for fresh outdoor air without losing your heating or cooling energy.
                </p>
                <a href="#" class="text-trane-red font-semibold hover:text-red-700">Learn more &rarr;</a>
            </div>
        </div>
    </div>
</div>
@endsection
