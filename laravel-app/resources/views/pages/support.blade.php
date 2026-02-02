@extends('layouts.home')

@section('title', 'Support - NordicAir')

@section('content')
<section class="bg-brand-900 text-white pt-40 pb-24">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl lg:text-6xl font-bold mb-6">How can we help?</h1>
        <div class="max-w-xl mx-auto relative">
            <input type="text" placeholder="Search for manuals, error codes, or topics..." class="w-full h-14 pl-6 pr-12 rounded-full text-gray-900 bg-white/95 focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-500/30 transition-all placeholder-gray-400">
            <button class="absolute right-2 top-2 h-10 w-10 bg-brand-600 hover:bg-brand-500 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 -mt-32 relative z-10">
        <div class="grid md:grid-cols-3 gap-6">
            <a href="#" class="bg-white p-8 rounded-2xl shadow-lg shadow-gray-200/50 hover:-translate-y-1 transition-transform group">
                <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Product Manuals</h3>
                <p class="text-sm text-gray-500">Download user guides and installation instructions for your model.</p>
            </a>

            <a href="#" class="bg-white p-8 rounded-2xl shadow-lg shadow-gray-200/50 hover:-translate-y-1 transition-transform group">
                <div class="w-12 h-12 bg-green-50 text-green-500 rounded-xl flex items-center justify-center mb-6 group-hover:bg-green-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Warranty Claim</h3>
                <p class="text-sm text-gray-500">Register new products or check the status of an existing warranty.</p>
            </a>

            <a href="#" class="bg-white p-8 rounded-2xl shadow-lg shadow-gray-200/50 hover:-translate-y-1 transition-transform group">
                <div class="w-12 h-12 bg-purple-50 text-purple-500 rounded-xl flex items-center justify-center mb-6 group-hover:bg-purple-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Troubleshooting</h3>
                <p class="text-sm text-gray-500">Fix common issues with our interactive step-by-step guides.</p>
            </a>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        <h2 class="text-3xl font-bold text-brand-950 mb-10 text-center">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <details class="group bg-gray-50 p-6 rounded-2xl cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-gray-900 list-none">
                    How often should I change my filter?
                    <span class="transition group-open:rotate-180">
                        <svg fill="none" class="w-6 h-6" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="text-gray-600 mt-4 leading-relaxed text-sm">
                    We recommend checking your filter every month and replacing it at least every 3 months. For homes with pets or allergies, improved filters (MERV 11+) may need more frequent changing.
                </div>
            </details>
            
            <details class="group bg-gray-50 p-6 rounded-2xl cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-gray-900 list-none">
                    What does the "Defrost" light mean?
                    <span class="transition group-open:rotate-180">
                         <svg fill="none" class="w-6 h-6" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="text-gray-600 mt-4 leading-relaxed text-sm">
                    In winter, your heat pump may periodically enter defrost mode to melt ice off the outdoor coil. This is normal operation. If the light stays on for more than 30 minutes, please contact support.
                </div>
            </details>

            <details class="group bg-gray-50 p-6 rounded-2xl cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-gray-900 list-none">
                    Where can I find a local certified installer?
                    <span class="transition group-open:rotate-180">
                         <svg fill="none" class="w-6 h-6" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="text-gray-600 mt-4 leading-relaxed text-sm">
                    Use our Dealer Locator tool to find NordicAir certified professionals in your area. They are trained specifically on our equipment for optimal installation.
                </div>
            </details>
        </div>
    </div>
</section>
@endsection
