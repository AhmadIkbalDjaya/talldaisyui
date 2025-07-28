@props([
  "style" => null,
  "color" => null,
  "size" => null,
])

@php
  $classes = [
    "input",
    $style ? "input-{$style}" : null,
    $color ? "input-{$color}" : null,
    $size ? "input-{$size}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge(["class" => $classes]);
@endphp

<input {{ $attributes }} />
