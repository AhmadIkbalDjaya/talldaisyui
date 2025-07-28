@props([
  "style" => null,
  "size" => null,
])

@php
  $classes = [
    "loading",
    $style ? "loading-{$style}" : null,
    $size ? "loading-{$size}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge(["class" => $classes]);
@endphp

<span {{ $attributes }}></span>
