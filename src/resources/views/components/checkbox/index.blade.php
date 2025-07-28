@props([
  "color" => null,
  "size" => null,
])

@php
  $classes = [
    "checkbox",
    $color ? "checkbox-{$color}" : null,
    $size ? "checkbox-{$size}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge([
    "type" => "checkbox",
    "class" => $classes,
  ]);
@endphp

<input {{ $attributes }} />
