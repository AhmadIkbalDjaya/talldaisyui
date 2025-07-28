@props([
  "label" => null,
  "href" => null,
])

<li>
  @if ($href)
    <a href="{{ $href }}" {{ $attributes }}>
      {{ $label ? __($label) : $slot }}
    </a>
  @else
    <span {{ $attributes }}>
      {{ $label ? __($label) : $slot }}
    </span>
  @endif
</li>
