@props([
  "color" => null,
  "size" => null,
  "animation" => null,
])

@php
  $classes = [
    "status",
    $color ? "status-{$color}" : null,
    $size ? "status-{$size}" : null,
    $animation ? "animate-{$animation}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge([
    "class" => $classes,
  ]);
@endphp

<span {{ $attributes }}></span>
