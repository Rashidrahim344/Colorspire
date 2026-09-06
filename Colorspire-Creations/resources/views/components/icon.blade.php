@props(['name', 'class' => null])

@php
    $iconConfig = config("icons.{$name}") ?? [];
    $paths = $iconConfig['paths'] ?? [];
    $iconClass = $class ?? ($iconConfig['class'] ?? '');
    $height = $iconConfig['height'] ?? null;
    $width = $iconConfig['width'] ?? null;
    $viewBox = $iconConfig['viewBox'] ?? '0 0 24 24';
    $fill = $iconConfig['fill'] ?? null;
    $stroke = $iconConfig['stroke'] ?? null;
    $strokeWidth = $iconConfig['strokeWidth'] ?? null;
    $strokeLinecap = $iconConfig['strokeLinecap'] ?? null;
    $strokeLinejoin = $iconConfig['strokeLinejoin'] ?? null;
    $clipRule = $iconConfig['clipRule'] ?? null;
    $fillRule = $iconConfig['fillRule'] ?? null;
    $title = $iconConfig['title'] ?? null;
@endphp

@if(!empty($iconConfig))
<svg
  {{ $attributes->merge(['class' => $iconClass]) }}
  @if($height) height="{{ $height }}" @endif
  @if($width) width="{{ $width }}" @endif
  viewBox="{{ $viewBox }}"
  @if($fill) fill="{{ $fill }}" @endif
  @if($clipRule) clip-rule="{{ $clipRule }}" @endif
  @if($fillRule) fill-rule="{{ $fillRule }}" @endif
  @if($stroke) stroke="{{ $stroke }}" @endif
  @if($strokeWidth) stroke-width="{{ $strokeWidth }}" @endif
  @if($strokeLinecap) stroke-linecap="{{ $strokeLinecap }}" @endif
  @if($strokeLinejoin) stroke-linejoin="{{ $strokeLinejoin }}" @endif
>
  @if($title)
    <title>{{ $title }}</title>
  @endif
  @foreach($paths as $p)
    <path d="{{ $p['d'] }}" class="{{ $p['class'] ?? '' }}" />
  @endforeach
</svg>
@endif
