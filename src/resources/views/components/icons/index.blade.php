@props([
  "name",
  "type" => "outline",
])

@php
  if (! function_exists("checkHasFilledTypeIcon")) {
    function checkHasFilledTypeIcon($name): bool
    {
      $viewPath = resource_path("views/components/icons/{$name}.blade.php");
      if (! file_exists($viewPath)) {
        return false;
      }
      $hasFilled = Str::contains(file_get_contents($viewPath), '$type');
      return $hasFilled;
    }
  }

  $type = checkHasFilledTypeIcon($name) ? $type : "outline";

  $svgClass = "icon icon-tabler icon-tabler-{$name} ";
  $svgClass .= $type === "filled" ? "icons-tabler-filled" : "icons-tabler-outline";

  $svgAtrributes = [
    "xmlns" => "http://www.w3.org/2000/svg",
    "width" => "24",
    "height" => "24",
    "viewBox" => "0 0 24 24",
    "class" => $svgClass,
    "fill" => $type === "filled" ? "currentColor" : "none",
  ];
  if ($type !== "filled") {
    $svgAtrributes += [
      "stroke" => "currentColor",
      "stroke-width" => "2",
      "stroke-linecap" => "round",
      "stroke-linejoin" => "round",
    ];
  }
  $svgAtrributes = $attributes->merge($svgAtrributes);
@endphp

<svg {{ $svgAtrributes }}>
  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
  @includeIf("components.icons.$name", ["type" => $type])
</svg>
