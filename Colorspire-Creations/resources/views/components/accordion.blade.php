@props([
    'id' => null,
    'question' => '',
    'answer' => '',
    'open' => false,
])

@php
    $panelId = $id ?? $attributes->get('id') ?? ('accordion-' . uniqid());
@endphp

<div {{ $attributes->merge(['class' => 'bg-white rounded-xl border border-slate-200/80 shadow-sm overflow-hidden transition-all duration-200']) }}>
    <button type="button"
            class="accordion-trigger w-full px-6 py-5 text-left flex items-center justify-between gap-4 focus:outline-none focus-visible:bg-slate-50 transition-colors"
            aria-controls="accordion-panel-{{ $panelId }}"
            aria-expanded="{{ $open ? 'true' : 'false' }}">
        <span class="text-base sm:text-lg font-semibold text-slate-900">
            {{ $question }}
        </span>
        <span class="accordion-icon text-amber-500 shrink-0 transition-transform duration-300 {{ $open ? 'rotate-180' : '' }}">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </span>
    </button>
    <div id="accordion-panel-{{ $panelId }}" 
         class="px-6 pb-5 pt-1 text-slate-600 text-sm sm:text-base leading-relaxed border-t border-slate-100 {{ $open ? '' : 'hidden' }}">
        {{ $answer }}
    </div>
</div>

