@props([
  "style" => null,
  "placement" => null,
  "size" => null,
])

@php
  $classes = [
    "tabs",
    $size ? "tabs-{$size}" : null,
    $placement ? "tabs-{$placement}" : null,
    $style ? "tabs-{$style}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge([
    "role" => "tablist",
    "class" => $classes,
  ]);
@endphp

<div {{ $attributes }}>
  {{ $slot }}
</div>
