@props([
  "style" => null,
  "color" => null,
  "size" => null,
])

@php
  $classes = [
    "select",
    $style ? "select-{$style}" : null,
    $color ? "select-{$color}" : null,
    $size ? "select-{$size}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge(["class" => $classes]);
@endphp

<select {{ $attributes }}>
  {{ $slot }}
</select>
