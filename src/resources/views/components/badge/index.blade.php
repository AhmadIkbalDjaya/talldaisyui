@props([
  "label" => null,
  "size" => null,
  "color" => null,
  "style" => null,
])

@php
  $classes = [
    "badge",
    $size ? "badge-{$size}" : null,
    $color ? "badge-{$color}" : null,
    $style ? "badge-{$style}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge([
    "class" => $classes,
  ]);
@endphp

<span {{ $attributes }}>
  {{ $label ?? $slot }}
</span>
