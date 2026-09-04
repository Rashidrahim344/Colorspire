@props([
    'title',
    'description',
    'badge' => null,
    'badgeVariant' => 'emerald',
    'features' => [],
    'ctaText' => 'Learn More',
    'ctaHref' => '#contact'
])

<div {{ $attributes->merge(['class' => 'glass-card glass-card-hover rounded-2xl p-7 flex flex-col justify-between border border-white/5 relative group']) }}>
    <div>
        <div class="flex items-center justify-between mb-6">
            <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 group-hover:scale-110 group-hover:bg-emerald-500/20 transition-all duration-300">
                {{ $slot }}
            </div>
            @if($badge)
                <x-badge :variant="$badgeVariant">{{ $badge }}</x-badge>
            @endif
        </div>

        <h3 class="text-xl sm:text-2xl font-bold text-white mb-3 tracking-tight group-hover:text-emerald-300 transition-colors">
            {{ $title }}
        </h3>

        <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
            {{ $description }}
        </p>

        @if(!empty($features))
            <ul class="space-y-2.5 mb-8 border-t border-white/5 pt-5 text-sm text-slate-300">
                @foreach($features as $feature)
                    <li class="flex items-start gap-2.5">
                        <svg class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <div>
        <a href="{{ $ctaHref }}" class="inline-flex items-center gap-2 text-sm font-semibold text-emerald-400 hover:text-emerald-300 group-hover:translate-x-1 transition-all">
            <span>{{ $ctaText }}</span>
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>
</div>
