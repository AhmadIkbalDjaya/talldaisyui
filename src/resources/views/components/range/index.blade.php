@props([
  "color" => null,
  "size" => null,
])

@php
  $classes = [
    "range",
    $color ? "range-{$color}" : null,
    $size ? "range-{$size}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->without(["type"])->merge([
    "type" => "range",
    "class" => $classes,
  ]);
@endphp

<input {{ $attributes }} />
