@props([
  "type" => null,
  "color" => null,
  "size" => null,
])

@php
  $classes = [
    "select",
    $type ? "select-{$type}" : null,
    $color ? "select-{$color}" : null,
    $size ? "select-{$size}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge(["class" => $classes]);
@endphp

<select {{ $attributes }}>
  {{ $slot }}
</select>
