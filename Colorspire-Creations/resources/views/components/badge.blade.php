@props([
    'variant' => 'emerald',
    'pulse' => false
])

@php
    $classes = match($variant) {
        'copper' => 'bg-amber-500/10 text-amber-300 border-amber-500/30',
        'neutral' => 'bg-slate-800/60 text-slate-300 border-slate-700/60',
        default => 'bg-emerald-500/10 text-emerald-300 border-emerald-500/30',
    };

    $dotColor = match($variant) {
        'copper' => 'bg-amber-400',
        'neutral' => 'bg-slate-400',
        default => 'bg-emerald-400',
    };
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-semibold tracking-wide border {$classes}"]) }}>
    @if($pulse)
        <span class="relative flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full {{ $dotColor }} opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 {{ $dotColor }}"></span>
        </span>
    @endif
    {{ $slot }}
</span>
