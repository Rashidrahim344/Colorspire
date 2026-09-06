@props([
    'product',
    'productLocale' => '',
])

@php
$imageClass = 'absolute inset-0 h-full w-full object-cover object-center transition duration-[600ms] ease-[cubic-bezier(0.45,0,0.55,1)] group-hover:scale-110';
$productId = preg_replace('/^(en|fr)\//', '', $product['id']);
$href = ($productLocale && $productLocale !== 'en')
    ? "/{$productLocale}/products/{$productId}/"
    : "/products/{$productId}/";
$imgSrc = str_starts_with($product['data']['main']['imgCard'], 'http')
    ? $product['data']['main']['imgCard']
    : asset($product['data']['main']['imgCard']);
@endphp

<a
  href="{{ $href }}"
  class="group relative flex h-48 items-end overflow-hidden rounded-xl shadow-lg ring-zinc-500 outline-hidden focus-visible:ring-3 md:h-80 dark:ring-zinc-200 dark:focus:outline-hidden"
>
  <img
    src="{{ $imgSrc }}"
    alt="{{ $product['data']['main']['imgAlt'] }}"
    draggable="false"
    class="{{ $imageClass }}"
  />
  <div
    class="pointer-events-none absolute inset-0 bg-linear-to-t from-neutral-800 via-transparent to-transparent opacity-50"
  ></div>
  <span
    class="relative mb-3 ml-4 inline-block text-sm font-bold text-neutral-50 transition duration-[600ms] ease-[cubic-bezier(0.45,0,0.55,1)] group-hover:scale-110 md:ml-5 md:text-lg"
  >
    {{ $product['data']['description'] }} <x-icon name="openInNew" />
  </span>
</a>
