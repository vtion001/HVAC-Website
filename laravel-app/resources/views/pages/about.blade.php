@extends('layouts.home')

@section('title', 'About Us | NordicAir - Scandinavian Comfort Engineering')
@section('description', 'Learn about NordicAir\'s history, our mission for sustainable home comfort, and the Scandinavian engineering principles that drive us.')

@section('content')
@include('partials.breadcrumb', ['crumbs' => ['About Us' => route('about')]])
<section class="pt-16 pb-20 bg-nordic-beige relative overflow-hidden">
    <div class="absolute inset-0 bg-[url(\'https://www.transparenttextures.com/patterns/natural-paper.png\')] opacity-20"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <span class="text-brand-600 font-bold uppercase tracking-widest text-xs mb-4 block">Our Heritage</span>
            <h1 class="text-5xl lg:text-7xl font-bold font-serif text-brand-950 mb-8 leading-tight">Born in the North.</h1>
            <p class="text-xl text-gray-600 leading-relaxed font-light mb-12">
                Founded in Oslo, NordicAir was born from a simple necessity: surviving harsh Scandinavian winters without sacrificing our commitment to the planet.
            </p>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-16 mb-24">
            <div class="lg:w-1/2">
                <img src="{{ asset(\'images/trane-split-ac.png\') }}" class="rounded-[3rem] w-full shadow-2xl" alt="NordicAir Oslo Design Center headquarters illustrating Scandinavian architectural principles">
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-3xl font-bold text-brand-950 mb-6">A Mission of Mindfulness</h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    We don\'t just build HVAC systems; we engineer peace of mind. Our mission is to provide the world with the most efficient, quietest, and most sustainable climate solutions ever created.
                </p>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-brand-50 flex items-center justify-center flex-shrink-0 text-brand-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Global Sustainability</h4>
                            <p class="text-sm text-gray-500">Every NordicAir unit is designed to exceed EPA and EU environmental standards using low-GWP refrigerants.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-brand-50 flex items-center justify-center flex-shrink-0 text-brand-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Precision Engineering</h4>
                            <p class="text-sm text-gray-500">Our Whisper™ technology and AI-driven inverters are the result of decades of acoustic and thermodynamic research.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include(\'sections.cta\')
@endsection
