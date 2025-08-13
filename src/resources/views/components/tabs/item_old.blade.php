@props([
  "name" => null,
  "label" => null,
  "active" => null,
  "disabled" => null,
  "checked" => false,
])

{{--
  @php
  $allAttributes = $attributes->getAttributes();
  
  $tabAttributes = collect($allAttributes)->filter(function ($value, $key) {
  return str_starts_with($key, "tab-");
  });
  
  $contentAttributes = collect($allAttributes)->filter(function ($value, $key) {
  return ! in_array($key, ["name", "label", "active", "disabled", "checked"]) && ! str_starts_with($key, "tab-");
  });
  
  $tabAttributes = $tabAttributes->mapWithKeys(function ($value, $key) {
  return [str_replace("tab-", "", $key) => $value];
  });
  // dd($tabAttributes);
  $tabAttributeString = "";
  foreach ($tabAttributes as $key => $value) {
  $tabAttributeString .= "" . $key . '="' . e($value) . '" ';
  }
  // dd($tabAttributeString);
  @endphp
--}}

@php
  $contentAttributess = $attributes->whereDoesntStartWith("tab");
  // dd($contentAttributess);
@endphp

<x-tab
  name="{{ $name }}"
  aria-label="{{ $label }}"
  {{--
  :active="$active"
  :disabled="$disabled"
  :checked="$checked"
--}}
  {{-- {{ $tabAttributeString }} --}}
  {{--
  @foreach ($tabAttributes as $key => $value)
  {{ $key }}={{ $value }}
  @endforeach
--}}
  {{-- {{ $attributes }} --}}
/>
<x-tab.content {{ $contentAttributess }} >
  {{ $slot }}
</x-tab.content>
