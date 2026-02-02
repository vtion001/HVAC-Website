{{-- Testimonial Card Component --}}
<div class="bg-white/5 backdrop-blur-md p-10 rounded-3xl border border-white/10 hover:bg-white/10 transition-colors duration-300">
    <p class="text-gray-300 text-lg italic mb-8 font-light leading-relaxed">"{{ $quote }}"</p>
    <div class="flex items-center">
        <div class="w-10 h-10 rounded-full {{ $avatarColor ?? 'bg-brand-500' }} flex items-center justify-center font-bold">{{ $initial }}</div>
        <div class="ml-4">
            <p class="font-bold">{{ $name }}</p>
            <p class="text-xs text-brand-300 uppercase">{{ $product }}</p>
        </div>
    </div>
</div>
