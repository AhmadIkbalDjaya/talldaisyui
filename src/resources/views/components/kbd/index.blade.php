@props([
  "size" => null,
  "shortcut" => null,
])

@php
  $classes = ["kbd", $size ? "kbd-{$size}" : null];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge(["class" => $classes]);
@endphp

<kbd {{ $attributes }}>{{ $shortcut ?? $slot }}</kbd>
