@props([
  "label" => null,
  "color" => null,
  "style" => null,
  "direction" => null,
])

@php
  $classes = [
    "alert",
    $color ? "alert-{$color}" : null,
    $style ? "alert-{$style}" : null,
    $direction ? "alert-{$direction}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge([
    "role" => "alert",
    "class" => $classes,
  ]);
@endphp

<div {{ $attributes }}>
  <span>{{ $label ? __($label) : $slot }}</span>
</div>
