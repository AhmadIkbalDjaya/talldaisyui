@props([
  "label" => null,
  "color" => null,
  "size" => null,
  "style" => null,
  "active" => false,
  "disabled" => false,
  "wide" => false,
  "block" => false,
  "square" => false,
  "circle" => false,
])

@php
  $classes = [
    "btn",
    $color ? "btn-{$color}" : null,
    $size ? "btn-{$size}" : null,
    $style ? "btn-{$style}" : null,
    $active ? "btn-active" : null,
    $disabled ? "btn-disabled" : null,
    $wide ? "btn-wide" : null,
    $block ? "btn-block" : null,
    $square ? "btn-square" : null,
    $circle ? "btn-circle" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge(["class" => $classes]);
@endphp

<button {{ $attributes }}>
  {{ $label ?? $slot }}
</button>
