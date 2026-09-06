@props([
    'id',
    'aria',
    'src' => null,
    'alt' => '',
    'first' => false,
    'second' => false,
])

@php
$firstClass = $first ? '' : 'hidden';
$secondClass = $second
  ? 'shadow-xl aspect-video object-contain bg-neutral-300 dark:bg-neutral-600 p-3 lg:object-cover lg:aspect-square shadow-neutral-200 rounded-xl dark:shadow-neutral-900/[.2]'
  : 'shadow-xl aspect-video object-cover lg:aspect-square shadow-neutral-200 rounded-xl dark:shadow-neutral-900/[.2]';
$imgSrc = str_starts_with($src, 'http') ? $src : asset($src);
@endphp

<div id="{{ $id }}" role="tabpanel" class="{{ $firstClass }}" aria-labelledby="{{ $aria }}">
  <img
    src="{{ $imgSrc }}"
    alt="{{ $alt }}"
    class="{{ $secondClass }}"
    draggable="false"
    loading="eager"
  />
</div>
