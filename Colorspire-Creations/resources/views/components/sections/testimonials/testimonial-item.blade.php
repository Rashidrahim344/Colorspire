@props([
    'content',
    'author',
    'role',
    'avatarSrc',
])

@php
$imgSrc = str_starts_with($avatarSrc, 'http') ? $avatarSrc : asset($avatarSrc);
@endphp

<blockquote class="relative">
  <x-icon name="quotation" />

  <div class="relative z-10">
    <p class="text-xl text-neutral-800 italic dark:text-neutral-200">
      {{ $content }}
    </p>
  </div>

  <div class="mt-6">
    <div class="flex items-center">
      <div class="shrink-0">
        <img
          class="h-8 w-8 rounded-full object-cover"
          src="{{ $imgSrc }}"
          alt="Avatar Description"
          loading="eager"
        />
      </div>
      <div class="ms-4 grow">
        <div class="font-bold text-neutral-800 dark:text-neutral-200">
          {{ $author }}
        </div>
        <div class="text-xs text-neutral-500">{{ $role }}</div>
      </div>
    </div>
  </div>
</blockquote>
