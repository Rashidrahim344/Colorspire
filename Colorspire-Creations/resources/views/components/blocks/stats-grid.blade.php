@props([
    'count',
    'description',
    'index',
])

<li class="-m-0.5 flex flex-col p-4 sm:p-8">
  <div
    class="mb-2 flex items-end gap-x-2 text-3xl font-bold text-neutral-800 sm:text-5xl dark:text-neutral-200"
  >
    @if($index === 1 || $index === 2)
      <x-icon name="arrowUp" />
    @endif
    {{ $count }}
  </div>
  <p class="text-sm text-neutral-600 sm:text-base dark:text-neutral-400">
    {{ $description }}
  </p>
</li>
