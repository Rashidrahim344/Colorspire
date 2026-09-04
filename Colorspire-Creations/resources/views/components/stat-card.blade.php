@props([
    'number',
    'label',
    'subtext' => null,
    'accent' => 'emerald',
])

@php
    $textGradient = match($accent) {
        'copper' => 'gradient-text-copper',
        default => 'gradient-text-emerald',
    };
@endphp

<div {{ $attributes->merge(['class' => 'glass-card glass-card-hover rounded-2xl p-6 text-center border border-white/5']) }}>
    <div class="text-4xl sm:text-5xl font-extrabold {{ $textGradient }} tracking-tight mb-2">
        {{ $number }}
    </div> 
    <div class="text-base sm:text-lg font-semibold text-slate-200">
        {{ $label }}
    </div>
    @if($subtext)
        <p class="text-xs sm:text-sm text-slate-400 mt-1">
            {{ $subtext }}
        </p>
    @endif
</div>
