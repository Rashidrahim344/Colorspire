@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button',
])

@php
    $baseClasses = "inline-flex items-center justify-center rounded-xl transition-all duration-200 cursor-pointer focus:outline-none disabled:opacity-50 disabled:cursor-not-allowed";

    $sizeClasses = match($size) {
        'sm' => 'px-4 py-2 text-xs sm:text-sm gap-1.5',
        'lg' => 'px-7 py-3.5 text-base sm:text-lg gap-2.5',
        default => 'px-5 py-2.5 text-sm sm:text-base gap-2',
    };

    $variantClasses = match($variant) {
        'secondary' => 'bg-white hover:bg-slate-50 text-slate-800 font-semibold border border-slate-200/90 hover:border-slate-300 shadow-sm hover:-translate-y-0.5',
        'ghost' => 'bg-transparent text-slate-600 hover:text-slate-900 hover:bg-slate-100 font-medium',
        'outline' => 'bg-transparent border border-slate-300 text-slate-700 hover:bg-slate-50 font-semibold hover:border-slate-400',
        default => 'bg-amber-400 hover:bg-amber-500 text-slate-950 font-bold shadow-sm hover:shadow hover:-translate-y-0.5',
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
