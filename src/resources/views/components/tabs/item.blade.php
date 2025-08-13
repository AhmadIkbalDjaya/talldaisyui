@props([
  "active" => false,
  "disabled" => false,
])

@php
  $tabClasses = ["tab", $active ? "tab-active" : null, $disabled ? "tab-disabled" : null];
  $tabClasses = implode(" ", array_filter($tabClasses));
  $tabAttributes = $attributes->whereStartsWith("tab-")->toArray();
  
  $tabAttributes = collect($tabAttributes)->mapWithKeys(function ($value, $key) {
    return [str_replace("tab-", "", $key) => $value];
  })->toArray();

  $tabBaseAttributes = $attributes->whereStartsWith("tab-")->merge([
    "role" => "tab",
    "class" => $tabClasses,
    "name" => $attributes->get("name"),
    "aria-label" => $attributes->get("label"),
    "checked" => $attributes->get("checked"),
  ]);
  
  $finalTabAttributes = $tabBaseAttributes->whereDoesntStartWith("tab-")->merge($tabAttributes);

  $contentAttributes = $attributes
    ->whereDoesntStartWith("tab-")
    ->filter(fn ($value, $key) => ! in_array($key, ["name", "label", "active", "disabled", "checked"]))
    ->merge([
      "class" => "tab-content",
    ]);

@endphp

<input type="radio" {{ $finalTabAttributes }} />
<div {{ $contentAttributes }}>
  {{ $slot }}
</div>
