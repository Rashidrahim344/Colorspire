@props([
    'title',
    'description',
    'badge' => null,
    'badgeVariant' => 'amber',
    'features' => [],
    'ctaText' => 'Learn More',
    'ctaHref' => '#contact'
])

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl p-7 flex flex-col justify-between border border-slate-200/80 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 relative group']) }}>
    <div>
        <div class="flex items-center justify-between mb-6">
            <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-600 group-hover:scale-105 group-hover:bg-amber-500/20 transition-all duration-300">
                {{ $slot }}
            </div>
            @if($badge)
                <x-badge :variant="$badgeVariant">{{ $badge }}</x-badge>
            @endif
        </div>

        <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3 tracking-tight group-hover:text-amber-600 transition-colors">
            {{ $title }}
        </h3>

        <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
            {{ $description }}
        </p>

        @if(!empty($features))
            <ul class="space-y-2.5 mb-8 border-t border-slate-100 pt-5 text-sm text-slate-600">
                @foreach($features as $feature)
                    <li class="flex items-start gap-2.5">
                        <svg class="w-4 h-4 text-amber-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <div>
        <a href="{{ $ctaHref }}" class="inline-flex items-center gap-2 text-sm font-bold text-amber-600 hover:text-amber-700 group-hover:translate-x-1 transition-all">
            <span>{{ $ctaText }}</span>
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>
</div>

