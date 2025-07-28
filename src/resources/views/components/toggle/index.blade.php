@props([
  "color" => null,
  "size" => null,
])

@php
  $classes = [
    "toggle",
    $color ? "toggle-{$color}" : null,
    $size ? "toggle-{$size}" : null,
  ];
  $classes = implode(" ", array_filter($classes));
  $attributes = $attributes->without(["type"])->merge([
    "type" => "checkbox",
    "class" => $classes,
  ]);
@endphp

<input {{ $attributes }} />
