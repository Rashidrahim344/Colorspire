@props([
    'label',
    'id',
    'name',
    'options' => [],
    'placeholder' => null,
])

<div>
  <label for="{{ $id }}" class="sr-only">{{ $label }}</label>
  <select
    name="{{ $name }}"
    id="{{ $id }}"
    {{ $attributes->merge(['class' => 'block w-full rounded-lg border border-neutral-200 bg-neutral-50 px-4 py-3 text-sm text-neutral-700 focus:border-neutral-200 focus:ring-3 focus:ring-neutral-400 focus:outline-hidden disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-600 dark:bg-neutral-700/30 dark:text-neutral-300 dark:focus:ring-1']) }}
  >
    @if($placeholder)
      <option value="" disabled selected class="text-neutral-500 dark:bg-neutral-800 dark:text-neutral-400">{{ $placeholder }}</option>
    @endif
    @foreach($options as $key => $val)
      @php
        $optVal = is_numeric($key) ? $val : $key;
      @endphp
      <option value="{{ $optVal }}" class="text-neutral-700 dark:bg-neutral-800 dark:text-neutral-200">
        {{ $val }}
      </option>
    @endforeach
  </select>
</div>
