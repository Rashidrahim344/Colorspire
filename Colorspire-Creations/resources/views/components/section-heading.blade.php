@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'align' => 'center',
    'badgeVariant' => 'amber'
])

@php
    $alignmentClasses = match($align) {
        'left' => 'text-left items-start',
        'right' => 'text-right items-end',
        default => 'text-center items-center mx-auto',
    };

    $descAlign = match($align) {
        'left' => 'text-left',
        'right' => 'text-right',
        default => 'text-center mx-auto',
    };
@endphp

<div {{ $attributes->merge(['class' => "flex flex-col max-w-3xl {$alignmentClasses} mb-12 sm:mb-16"]) }}>
    @if($eyebrow)
        <div class="mb-4">
            <x-badge :variant="$badgeVariant">{{ $eyebrow }}</x-badge>
        </div>
    @endif

    <h2 class="text-3xl sm:text-4xl lg:text-5xl tracking-tight font-extrabold text-slate-900 leading-tight">
        {{ $title }}
    </h2>

    @if($description)
        <p class="mt-4 text-base sm:text-lg text-slate-500 leading-relaxed max-w-2xl {{ $descAlign }}">
            {{ $description }}
        </p>
    @endif
</div>

