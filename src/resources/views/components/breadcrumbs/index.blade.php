@php
  $attributes = $attributes->merge(["class" => "breadcrumbs text-sm"]);
@endphp

<div {{ $attributes }}>
  <ul>
    {{ $slot }}
  </ul>
</div>
