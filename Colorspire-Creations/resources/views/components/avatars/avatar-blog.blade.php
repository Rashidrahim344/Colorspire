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
    class="size-[46px] rounded-full border-2 border-neutral-50 object-cover"
    src="{{ $authorImg }}"
    alt="{{ $blogEntry['data']['authorImageAlt'] }}"
    draggable="false"
  />
</div>
