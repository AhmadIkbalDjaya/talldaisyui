@props([
  "style" => null,
  "color" => null,
  "size" => null,
])

@php
  $classes = [
    "file-input",
    $style ? "file-input-{$style}" : null,
    $color ? "file-input-{$color}" : null,
    $size ? "file-input-{$size}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge([
    "type" => "file",
    "class" => $classes,
  ]);
@endphp

<input {{ $attributes }} />
