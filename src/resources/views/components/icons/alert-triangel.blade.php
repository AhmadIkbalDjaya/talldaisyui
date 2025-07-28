@props(["type" => "outline"])

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  {{
    $attributes->merge([
      "class" =>
        "icon icon-tabler icon-tabler-alert-triangel " .
        ($type === "filled" ? "icons-tabler-filled" : "icons-tabler-outline"),
      "fill" => $type === "filled" ? "currentColor" : "none",
      "stroke" => $type !== "filled" ? "currentColor" : null,
      "stroke-width" => $type !== "filled" ? "2" : null,
      "stroke-linecap" => $type !== "filled" ? "round" : null,
      "stroke-linejoin" => $type !== "filled" ? "round" : null,
    ])
  }}
>
  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
  @if ($type === "filled")
    <path
      d="M12 1.67c.955 0 1.845 .467 2.39 1.247l.105 .16l8.114 13.548a2.914 2.914 0 0 1 -2.307 4.363l-.195 .008h-16.225a2.914 2.914 0 0 1 -2.582 -4.2l.099 -.185l8.11 -13.538a2.914 2.914 0 0 1 2.491 -1.403zm.01 13.33l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm-.01 -7a1 1 0 0 0 -.993 .883l-.007 .117v4l.007 .117a1 1 0 0 0 1.986 0l.007 -.117v-4l-.007 -.117a1 1 0 0 0 -.993 -.883z"
    />
  @else
    <path d="M12 9v4" />
    <path
      d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"
    />
    <path d="M12 16h.01" />
  @endif
</svg>
