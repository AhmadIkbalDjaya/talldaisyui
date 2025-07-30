@props([
  "size" => null,
  "color" => null,
])

@php
  $classes = ["radio", $size ? "radio-{$size}" : null, $color ? "radio-{$color}" : null];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge([
    "type" => "radio",
    "class" => $classes,
  ]);
@endphp

<input {{ $attributes }} />
