@extends('layouts.app')

@section('title', 'Thermostats & Controls - Trane Residential')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-brand-900 overflow-hidden isolate">
        <div class="absolute inset-0 -z-10 overflow-hidden">
             <div class="absolute inset-0 bg-gradient-to-r from-brand-900 to-brand-800 opacity-90"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 py-24 lg:px-8 lg:py-32 relative z-10 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-6xl mb-6">Total Control at Your Fingertips</h1>
            <p class="text-lg leading-8 text-brand-100 max-w-2xl mx-auto">
                Trane smart thermostats don't just control the temperature—they manage your home's energy usage, humidity, and diagnostics.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-16 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Smart Home Integration</h2>
                <p class="text-xl text-gray-500 mb-8">
                    Connect with the Trane Home app for control from anywhere.
                </p>
                
                <div class="space-y-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-trane-red text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Remote Access</h3>
                            <p class="mt-2 text-base text-gray-500">Adjust settings from your smartphone, tablet, or voice assistant (Alexa, Google Home).</p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-trane-red text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Energy Savings</h3>
                            <p class="mt-2 text-base text-gray-500">Smart scheduling and energy tracking help you lower your utility bills without sacrificing comfort.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-100 rounded-3xl p-8 flex items-center justify-center min-h-[400px]">
                <!-- Placeholder for Thermostat Image -->
                <div class="text-center">
                    <span class="text-6xl mb-4 block">📟</span>
                    <p class="text-gray-500 font-semibold">ComfortLink™ II XL1050</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
