@php
  $attributes = $attributes->merge([
    "class" => "tab-content",
  ]);
@endphp

<div {{ $attributes }}>{{ $slot }}</div>
