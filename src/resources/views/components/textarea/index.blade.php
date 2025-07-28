@props([
  "style" => null,
  "color" => null,
  "size" => null,
  "value" => null,
])

@php
  $classes = [
    "textarea",
    $style ? "textarea-{$style}" : null,
    $color ? "textarea-{$color}" : null,
    $size ? "textarea-{$size}" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge(["class" => $classes]);
@endphp

<textarea {{ $attributes }}>{{ $value ?? $slot }}</textarea>
