@props([
    'variant' => 'amber',
    'pulse' => false
])

@php
    $classes = match($variant) {
        'neutral' => 'bg-slate-100 text-slate-700 border-slate-200/80',
        'slate' => 'bg-slate-100 text-slate-700 border-slate-200/80',
        'copper' => 'bg-amber-50 text-amber-800 border-amber-200/80',
        'emerald' => 'bg-amber-50 text-amber-800 border-amber-200/80',
        default => 'bg-amber-50 text-amber-800 border-amber-200/80',
    };

    $dotColor = match($variant) {
        'neutral' => 'bg-slate-500',
        'slate' => 'bg-slate-500',
        default => 'bg-amber-500',
    };
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold tracking-wide border {$classes}"]) }}>
    @if($pulse)
        <span class="relative flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full {{ $dotColor }} opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 {{ $dotColor }}"></span>
        </span>
    @endif
    {{ $slot }}
</span>
