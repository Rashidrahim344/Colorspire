@props([
    'hover' => true,
])

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl p-6 sm:p-8 border border-slate-200/80 shadow-sm ' . ($hover ? 'hover:shadow-md hover:border-slate-300 hover:-translate-y-0.5 transition-all duration-200' : '')]) }}>
    {{ $slot }}
</div>
