# Documentation

## Table of Contents

- [Installation](#installation)
- [Components](#components)
  - [Actions](#actions)
    - [Button](#button)
  - [Data Display](#data-display)
    - [Badge](#badge)
    - [Status](#status)
    - [Kbd](#kbd)
  - [Navigation](#navigation)
    - [Breadcrumbs](#breadcrumbs)
  - [Feedback](#feedback)
    - [Alert](#alert)
    - [Loading](#loading)
    - [Progress](#progress)
    - [Skeleton](#skeleton)
    - [Tooltip](#tooltip)
  - [Data Input](#data-input)
    - [Checkbox](#checkbox)
    - [Radio](#radio)
    - [Range](#range)
    - [Input Field](#input-field)
    - [Textarea](#textarea)
    - [File-Input](#file-input)
    - [Select](#select)
    - [Toggle](#toggle)

## Installation

### Step 1: Install via Composer

Install the package via composer.

```bash
composer require ahmadikbaldjaya/talldaisyui
```

### Step 2: Run the installer

Run the installer to publish the assets and configuration files.

```bash
php artisan install:talldaisyui
```

---

## Components

### Actions

### Button

Buttons allow the user to take actions or make choices.

#### Basic Button

```blade
<x-button label="Default" />

<!-- or -->

<x-button>Default</x-button>
```

#### Button Colors

Use the `color` property to change the button color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-button color="primary" label="Primary" />
```

#### Button Sizes

Use the `size` property to adjust the button size.

Available size options:
`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-button size="sm" label="Small" />
```

#### Button Styles

Use the `style` property to change the button style.

Available style options:

`outline` | `dash` | `soft` | `ghost` | `link`

```blade
<x-button style="outline" label="Outline" />
```

#### Button Behaviors

Control button state with these properties:

- `active`: Shows button in active state
- `disabled`: Disables the button

```blade
<x-button active label="Active" />
<x-button disabled label="Disable" />
```

#### Button Width

Control button width with these properties:

- `wide`: Makes button wider than normal
- `block`: Makes button full width of container

```blade
<x-button wide label="Wide Button" />
<x-button block label="Block Button" />
```

#### Button Special Shapes

Create square or circular buttons:

- `square`: Makes button square
- `circle`: Makes button circular (use with single character labels)

```blade
<x-button label="I" square />
<x-button label="F" circle />
```

---

### Data Display

### Badge

Badges provide concise status or category information in the form of a small label.

#### Basic Badge

```blade
<x-badge label="Default" />

<!-- or -->

<x-badge>Default</x-badge>
```

#### Badge Colors

Use the `color` property to change the badge color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-badge color="primary" label="Primary" />
```

#### Badge Sizes

Use the `size` property to adjust the badge size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-badge size="sm" label="Small" />
```

#### Badge Styles

Use the `style` property to change the badge style.

Available style options:

`outline` | `dash` | `soft` | `ghost`

```blade
<x-badge style="soft" label="Soft" />
```

#### Notes

- All badges can be used with or without the `label` property. If omitted, you can define the content directly inside the `<x-badge>...</x-badge>` tag.
- This badge component is compatible with Tailwind CSS and DaisyUI for styling.

---

### Status

Status is a really small icon to visually show the current status of an element, like online, offline, error, etc.

#### Basic Status

```blade
<x-status />
```

#### Status Colors

Use the `color` property to change the status color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-status color="success" />
```

#### Status Sizes

Use the `size` property to adjust the status size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-status size="sm" />
```

#### Status Animations

Use the `animation` property to adjust the status animation.

Available animation options:

`ping` | `bouncce`

```blade
<x-status animation="ping" color="error" />
<x-status animation="bounce" color="info" />
```

---

### Kbd

Kbd is used to display keyboard shortcuts.

#### Basic Kbd

```blade
<x-kbd shortcut="K" />
```

#### Badge Sizes

Use the `size` property to adjust the kbd size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-kbd size="sm" shortcut="Small" />
```

---
