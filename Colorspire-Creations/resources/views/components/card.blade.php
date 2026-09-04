@props([
    'hover' => true,
    'borderGlow' => 'emerald',
])

@php
    $glowClass = match($borderGlow) {
        'copper' => 'hover:border-amber-500/40 hover:shadow-amber-500/10',
        default => 'hover:border-emerald-500/40 hover:shadow-emerald-500/10',
    };
@endphp

<div {{ $attributes->merge(['class' => 'glass-card rounded-2xl p-6 sm:p-8 ' . ($hover ? "glass-card-hover {$glowClass}" : '')]) }}>
    {{ $slot }}
</div>
