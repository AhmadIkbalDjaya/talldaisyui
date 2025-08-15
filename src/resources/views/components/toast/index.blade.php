@props([
  "placement" => null,
])

@php
  $placements = explode(" ", $placement);
  foreach ($placements as $item) {
    $placementClass[] = "toast-{$item}";
  }

  $classes = ["toast", ...$placementClass];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge(["class" => $classes]);
@endphp

<div {{ $attributes }}>
  {{ $slot }}
</div>
