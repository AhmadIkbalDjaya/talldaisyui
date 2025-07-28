@props(["color" => null])

@php
  $classes = ["progress", $color ? "progress-{$color}" : null];
  $classes = implode(" ", array_filter($classes));

  $attributes = $attributes->merge(["class" => $classes]);
@endphp

<progress {{ $attributes }}></progress>
