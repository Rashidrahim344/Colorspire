@props([
    'number',
    'label',
    'subtext' => null,
    'accent' => 'amber',
])

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl p-6 text-center border border-slate-200/80 shadow-sm hover:shadow-md transition-all']) }}>
    <div class="text-4xl sm:text-5xl font-extrabold text-amber-500 tracking-tight mb-2">
        {{ $number }}
    </div> 
    <div class="text-base sm:text-lg font-semibold text-slate-900">
        {{ $label }}
    </div>
    @if($subtext)
        <p class="text-xs sm:text-sm text-slate-500 mt-1">
            {{ $subtext }}
        </p>
    @endif
</div>

