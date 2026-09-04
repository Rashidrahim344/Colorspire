@props([
    'id',
    'question',
    'answer',
    'open' => false,
])

<div {{ $attributes->merge(['class' => 'glass-card rounded-xl border border-white/5 overflow-hidden transition-all duration-200']) }}>
    <button type="button"
            class="accordion-trigger w-full px-6 py-5 text-left flex items-center justify-between gap-4 focus:outline-none focus-visible:bg-slate-800/40"
            aria-controls="accordion-panel-{{ $id }}"
            aria-expanded="{{ $open ? 'true' : 'false' }}">
        <span class="text-base sm:text-lg font-semibold text-white">
            {{ $question }}
        </span>
        <span class="accordion-icon text-emerald-400 shrink-0 transition-transform duration-300 {{ $open ? 'rotate-180' : '' }}">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </span>
    </button>
    <div id="accordion-panel-{{ $id }}" 
         class="px-6 pb-5 pt-1 text-slate-300 text-sm sm:text-base leading-relaxed border-t border-white/5 {{ $open ? '' : 'hidden' }}">
        {{ $answer }}
    </div>
</div>
