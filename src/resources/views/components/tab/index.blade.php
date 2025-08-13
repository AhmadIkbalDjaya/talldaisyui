@props([
  "active" => null,
  "disabled" => null,
  "label" => null,

])

@php
  $classes = [
    "tab",
    $active ? "tab-active" : null,
    $disabled ? "tab-disabled" : null,
  ];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge([
    "type" => "radio",
    "role" => "tab",
    "class" => $classes,
    "aria-label" => $label,
  ]);
@endphp

<input type="radio" {{ $attributes }} />
