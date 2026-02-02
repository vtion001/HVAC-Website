@extends('layouts.app')

@section('title', 'Ductless Systems - Trane Residential')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-brand-900 overflow-hidden isolate">
        <div class="absolute inset-0 -z-10 overflow-hidden">
             <div class="absolute inset-0 bg-gradient-to-r from-brand-900 to-brand-800 opacity-90"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 py-24 lg:px-8 lg:py-32 relative z-10 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-6xl mb-6">Flexible Ductless Comfort</h1>
            <p class="text-lg leading-8 text-brand-100 max-w-2xl mx-auto">
                No ductwork? No problem. Trane-Mitsubishi Electric ductless mini-splits offer precise room-by-room control for any home.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-16 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Why Choose Ductless?</h2>
                <p class="text-gray-600 mb-6 text-lg">
                    Ductless systems, also known as mini-splits, connect an outdoor unit to one or more indoor units. They are perfect for:
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-sm">1</div>
                        <span class="ml-3 text-gray-700"><strong>Older Homes:</strong> Add AC to homes without existing ductwork.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-sm">2</div>
                        <span class="ml-3 text-gray-700"><strong>Room Additions:</strong> Easily condition new spaces like sunrooms or garages.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-sm">3</div>
                        <span class="ml-3 text-gray-700"><strong>Zoning:</strong> Set different temperatures for every room in the house.</span>
                    </li>
                </ul>
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-trane-red hover:bg-red-700 transition">
                    Find a Ductless Dealer
                </a>
            </div>
            
            <div class="bg-gray-50 rounded-2xl p-8">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900">Indoor Unit Options</h3>
                    <p class="text-gray-500">Style meets performance.</p>
                </div>
                <div class="grid grid-cols-1 gap-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4">
                        <div class="h-12 w-12 bg-gray-200 rounded flex-shrink-0"></div> <!-- Placeholder -->
                        <div>
                            <h4 class="font-bold text-gray-900">Wall Mounted</h4>
                            <p class="text-xs text-gray-500">The most popular choice. Mounts high on a wall.</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4">
                        <div class="h-12 w-12 bg-gray-200 rounded flex-shrink-0"></div> <!-- Placeholder -->
                        <div>
                            <h4 class="font-bold text-gray-900">Floor Mounted</h4>
                            <p class="text-xs text-gray-500">Installs low on the wall, great for replacing radiators.</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4">
                        <div class="h-12 w-12 bg-gray-200 rounded flex-shrink-0"></div> <!-- Placeholder -->
                        <div>
                            <h4 class="font-bold text-gray-900">Ceiling Cassette</h4>
                            <p class="text-xs text-gray-500">Recessed into the ceiling for a discreet look.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
