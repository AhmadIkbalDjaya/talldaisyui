@props([
  "label" => null,
  "open" => false,
  "placement" => null,
  "color" => null,
])

@php
  $classes = [
    "tooltip",
    $open ? "tooltip-open" : null,
    $placement ? "tooltip-{$placement}" : null,
    $color ? "tooltip-{$color}" : null,
  ];

  $attributes = $attributes->merge([
    "class" => implode(" ", array_filter($classes)),
    "data-tip" => $label,
  ]);
@endphp

<div {{ $attributes }}>{{ $slot }}</div>
