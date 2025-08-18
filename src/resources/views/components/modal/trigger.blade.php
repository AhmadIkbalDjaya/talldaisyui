@props([
  "name",
])

<span
  onclick="document.getElementById('{{ $name }}').showModal()"
  {{ $attributes }}
>
  {{ $slot }}
</span>
