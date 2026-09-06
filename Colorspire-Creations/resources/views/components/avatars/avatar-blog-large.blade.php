@props([
    'blogEntry',
])

@php
$authorImg = str_starts_with($blogEntry['data']['authorImage'], 'http')
    ? $blogEntry['data']['authorImage']
    : asset($blogEntry['data']['authorImage']);
@endphp

<div class="shrink-0">
  <img
    class="size-10 rounded-full sm:h-14 sm:w-14 object-cover"
    src="{{ $authorImg }}"
    alt="{{ $blogEntry['data']['authorImageAlt'] }}"
    draggable="false"
  />
</div>
