@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button',
])

@php
    $baseClasses = "inline-flex items-center justify-center font-semibold rounded-xl transition-all duration-200 cursor-pointer focus:outline-none disabled:opacity-50 disabled:cursor-not-allowed";

    $sizeClasses = match($size) {
        'sm' => 'px-4 py-2 text-xs sm:text-sm gap-1.5',
        'lg' => 'px-7 py-3.5 text-base sm:text-lg gap-2.5 shadow-lg',
        default => 'px-5 py-2.5 text-sm sm:text-base gap-2',
    };

    $variantClasses = match($variant) {
        'copper' => 'bg-amber-500 hover:bg-amber-400 text-slate-950 shadow-amber-500/25 hover:shadow-amber-500/40 hover:-translate-y-0.5',
        'secondary' => 'bg-slate-800 hover:bg-slate-700 text-white border border-slate-700/80 hover:border-slate-600 hover:-translate-y-0.5',
        'outline' => 'bg-transparent border border-emerald-500/50 hover:border-emerald-400 text-emerald-300 hover:text-white hover:bg-emerald-500/10',
        'ghost' => 'bg-transparent text-slate-300 hover:text-white hover:bg-slate-800/60',
        default => 'bg-emerald-500 hover:bg-emerald-400 text-slate-950 shadow-emerald-500/25 hover:shadow-emerald-500/40 hover:-translate-y-0.5',
    };
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "{$baseClasses} {$sizeClasses} {$variantClasses}"]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => "{$baseClasses} {$sizeClasses} {$variantClasses}"]) }}>
        {{ $slot }}
    </button>
@endif
