{{-- Stats Bar Section --}}
@props(['stats' => [
    ['value' => '120+', 'label' => 'Years of Innovation'],
    ['value' => '1,500+', 'label' => 'Global Patents'],
    ['value' => '20.0', 'label' => 'Max SEER2 Rating'],
    ['value' => '10 Year', 'label' => 'Limited Warranty'],
]])

<div class="bg-white border-y border-gray-100/50 backdrop-blur-sm relative z-20 -mt-10 mx-6 lg:mx-auto max-w-7xl rounded-2xl shadow-xl shadow-gray-200/40">
    <div class="px-6 py-10 lg:px-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12">
            @foreach($stats as $stat)
                <div class="text-center group hover:-translate-y-1 transition-transform duration-300">
                    <p class="text-3xl lg:text-4xl font-bold text-brand-900 mb-2">{{ $stat['value'] }}</p>
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest group-hover:text-brand-600 transition-colors">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
