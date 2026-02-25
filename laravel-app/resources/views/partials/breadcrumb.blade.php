@props(['crumbs' => []])

@if(count($crumbs))
<nav aria-label="Breadcrumb" class="bg-white border-b border-gray-100 pt-20 lg:pt-24">
    <div class="container mx-auto px-6 py-3">
        <ol class="flex items-center gap-2 text-xs text-gray-500 flex-wrap">
            <li>
                <a href="{{ route('home') }}" class="hover:text-brand-600 transition-colors font-medium">Home</a>
            </li>
            @foreach($crumbs as $label => $url)
                <li class="flex items-center gap-2">
                    <svg class="w-3 h-3 text-gray-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    @if($loop->last)
                        <span class="text-brand-700 font-semibold">{{ $label }}</span>
                    @else
                        <a href="{{ $url }}" class="hover:text-brand-600 transition-colors font-medium">{{ $label }}</a>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</nav>
@endif
