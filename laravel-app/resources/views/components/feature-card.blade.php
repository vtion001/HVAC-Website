{{-- Feature Card Component --}}
<div class="flex items-start">
    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-brand-50 flex items-center justify-center text-brand-600 mt-1">
        @if($icon === 'bolt')
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
        @elseif($icon === 'sliders')
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
        @endif
    </div>
    <div class="ml-6">
        <h4 class="text-lg font-semibold text-gray-900">{{ $title }}</h4>
        <p class="text-gray-500 mt-1">{{ $description }}</p>
    </div>
</div>
