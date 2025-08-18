@props([
  "name",
  "backdrop" => "true",
  "open" => false,
  "closeable" => "true",
])

@php
  $modalClasses = ["modal", $open ? "modal-open" : null];
  $modalClasses = implode(" ", array_filter($modalClasses));
@endphp

<dialog id="{{ $name }}" class="{{ $modalClasses }}">
  <x-modal.box {{ $attributes }}>
    {{ $slot }}
    @if ($closeable == "true")
      <x-modal.close-button />
    @endif
  </x-modal.box>
  @if ($backdrop == "true")
    <x-modal.backdrop />
  @endif
</dialog>
