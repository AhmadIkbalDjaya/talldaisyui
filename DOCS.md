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
    - [Tabs](#tabs)
  - [Feedback](#feedback)
    - [Alert](#alert)
    - [Loading](#loading)
    - [Progress](#progress)
    - [Skeleton](#skeleton)
    - [Toast] (#toast)
    - [Tooltip](#tooltip)
  - [Data Input](#data-input)
    - [Checkbox](#checkbox)
    - [Radio](#radio)
    - [Range](#range)
    - [Input Field](#input-field)
    - [Textarea](#textarea)
    - [File Input](#file-input)
    - [Select](#select)
    - [Toggle](#toggle)

## Installation

### Step 1: Install via Composer

Install the package via composer.

```bash
composer require ikbaldjaya/talldaisyui
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

### Navigation

### Breadcrumbs

Breadcrumbs helps users to navigate through the website.

#### Basic Breadcrumbs

```blade
<x-breadcrumbs>
  <x-breadcrumbs.item href="#" label="Home" />
  <x-breadcrumbs.item href="#" label="Blog" />
  <x-breadcrumbs.item href="#" label="Laravel" />
</x-breadcrumbs>
```

---

### Tabs

Tabs can be used to show a list of links in a tabbed format.

#### Basic Tabs

```blade
<x-tabs>
  <x-tabs.item name="tab-item-1" label="Tab 1">Content 1</x-tabs.item>
  <x-tabs.item name="tab-item-2" label="Tab 2">Content 2</x-tabs.item>
  <x-tabs.item name="tab-item-3" label="Tab 3">Content 3</x-tabs.item>
</x-tabs>
```

#### Tabs Style

Use the `style` property to change the tabs style.

Available style options:

`box` | `border` | `lift`

```blade
<x-tabs style="box">
  <x-tabs.item name="tab-item-1" label="Tab 1">Content 1</x-tabs.item>
  <x-tabs.item name="tab-item-2" label="Tab 2">Content 2</x-tabs.item>
  <x-tabs.item name="tab-item-3" label="Tab 3">Content 3</x-tabs.item>
</x-tabs>
```

#### Tabs Placement

Use the `placement` property to change the tabs placement.

Available placement options:

`top` | `bottom`

```blade
<x-tabs placement="bottom">
  <x-tabs.item name="tab-item-1" label="Tab 1">Content 1</x-tabs.item>
  <x-tabs.item name="tab-item-2" label="Tab 2">Content 2</x-tabs.item>
  <x-tabs.item name="tab-item-3" label="Tab 3">Content 3</x-tabs.item>
</x-tabs>
```

#### Tabs Size

Use the `size` property to adjust the tabs size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-tabs size="sm">
  <x-tabs.item name="tab-item-1" label="Tab 1">Content 1</x-tabs.item>
  <x-tabs.item name="tab-item-2" label="Tab 2">Content 2</x-tabs.item>
  <x-tabs.item name="tab-item-3" label="Tab 3">Content 3</x-tabs.item>
</x-tabs>
```

#### Tabs Item Active & Disabled

Use the `active` and `disabled` properties to change the tabs item active and disabled state.

```blade
<x-tabs>
  <x-tabs.item name="tab-item-active" label="Tab 1" disabled>
    Content 1
  </x-tabs.item>
  <x-tabs.item name="tab-item-active" label="Tab 2" active>
    Content 2
  </x-tabs.item>
  <x-tabs.item name="tab-item-active" label="Tab 3" disabled>
    Content 3
  </x-tabs.item>
</x-tabs>
```

---

### Feedback

### Alert

Alert informs users about important events.

#### Basic Alert

```blade
<x-alert>12 unread messages. Tap to see.</x-alert>
```

#### Alert Colors

Use the `color` property to change the alert color.

Available color options:

`info` | `success` | `warning` | `error`

```blade
<x-alert color="success">Success</x-alert>
```

#### Alert Stles

Use the `style` property to change the alert style.

Available style options:

`outline` | `dash` | `soft`

```blade
<x-alert style="soft" color="success">Soft</x-alert>
```

#### Alert Directions

Use the `direction` property to change the alert direction.

Available direction options:

`vertical` | `horizontal`

```blade
<x-alert direction="vertical">vertical</x-alert>
<x-alert direction="horizontal">horizontal</x-alert>
```

---

### Loading

Loading shows an animation to indicate that something is loading.

#### Basic Loading

```blade
<x-loading />
```

#### Loading Size

Use the `size` property to adjust the loading size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-loading size="sm" />
```

#### Loading Styles

Use the `style` property to change the loading style.

Available style options:

`spinner` | `dots` | `ring` | `ball` | `bars` | `infinity` |

```blade
<x-loading style="dots" />
```

---

### Progress

Progress bar can be used to show the progress of a task or to show the passing of time.

#### Basic Progress

```blade
<x-progress class="w-56" value="50" max="100" />
```

#### Progress Colors

Use the `color` property to change the progress color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-progress color="success" class="w-56" value="60" max="100" />
```

---

### Skeleton

Skeleton is a component that can be used to show a loading state of a component.

#### Basic Skeleton

```blade
x-skeleton class="h-32 w-32" />
```

---

### Toast

Toast is a wrapper to stack elements, positioned on the corner of page.

#### Basic Toast

```
<x-toast>
  <x-alert color="info" label="Basic Toast" />
</x-toast>
```

#### Toast Placement

Use the `placement` property to change the tooltip placement.
ex: `placement = "horizontal vertical"`

Available placement options:

horizontal = `start` | `center` | `end`
vertical = `top` | `middle` | `bottom`

```
<x-toast placement="start middle">
  <x-alert color="info" label="Start Middle" />
</x-toast>
```

---

### Tooltip

Tooltip can be used to show a message when hovering over an element.

#### Basic Tooltip

```blade
<x-tooltip label="Tooltip">
  <x-button size="sm" label="Hover me" />
</x-tooltip>
```

#### Tooltip Content

Use the `content` slot to show custom content.

```blade
<x-tooltip>
  <x-tooltip.content>
    <div class="-rotate-10 animate-bounce text-2xl font-black text-orange-400">
      Wow!
    </div>
  </x-tooltip.content>
  <x-button size="sm" label="Button" />
</x-tooltip>
```

#### Tooltip Open

Use the `open` property to force open the tooltip.

```blade
<x-tooltip label="Force Tooltip" open>
  <x-button size="sm" label="Button" />
</x-tooltip>
```

#### Tooltip Placement

Use the `placement` property to change the tooltip placement.

Available placement options:

`top` | `bottom` | `left` | `right`

```blade
<x-tooltip label="Top" open placement="top">
  <x-button size="sm" label="Button" />
</x-tooltip>
```

#### Tooltip Colors

Use the `color` property to change the tooltip color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-tooltip color="primary" label="Primary" open placement="bottom">
  <x-button size="sm" color="primary">Primary</x-button>
</x-tooltip>
```

---

### Data Input

### Checkbox

Checkboxes are used to select or deselect a value.

#### Basic Checkbox

```blade
<x-checkbox checked />
```

#### Checkbox Sizes

Use the `size` property to adjust the checkbox size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-checkbox size="sm" checked />
```

#### Checkbox Colors

Use the `color` property to change the checkbox color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-checkbox color="primary" checked />
```

---

### Radio

Radio buttons allow the user to select one option from a set.

#### Basic Radio

```blade
<x-radio name="radio-1" checked />
<x-radio name="radio-1" />
```

#### Radio Sizes

Use the `size` property to adjust the radio size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-radio name="radio-size" size="sm" />
```

#### Radio Colors

Use the `color` property to change the radio color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-radio name="radio-color" color="primary" />
```

---

### Range

Range slider is used to select a value by sliding a handle.

#### Basic Range

```blade
<x-range min="0" max="100" value="60" />
```

#### Range Sizes

Use the `size` property to adjust the range size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-range size="sm" />
```

#### Range Colors

Use the `color` property to change the range color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-range color="primary" />
```

---

### Input Field

Text Input is a simple input field.

#### Basic Input

```blade
<x-input type="text" placeholder="Type here" />
```

#### Input Styles

Use the `style` property to change the input style.

Available style options:

`ghost`

```blade
<x-input style="ghost" placeholder="Input Ghost" />
```

#### Input Colors

Use the `color` property to change the input color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-input color="primary" placeholder="Input Primary" />
```

#### Input Sizes

Use the `size` property to adjust the input size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-input size="sm" placeholder="Input Small" />
```

---

### Textarea

Textarea allows users to enter text in multiple lines.

#### Basic Textarea

```blade
<x-textarea placeholder="Type here" />
```

#### Textarea Styles

Use the `style` property to change the textarea style.

Available style options:

`ghost`

```blade
<x-textarea style="ghost" placeholder="Textarea Ghost" />
```

#### Textarea Colors

Use the `color` property to change the textarea color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-textarea color="primary" placeholder="Textarea Primary" />
```

#### Textarea Sizes

Use the `size` property to adjust the textarea size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-textarea size="sm" placeholder="Textarea Small" />
```

---

### File Input

File Input is a an input field for uploading files.

#### Basic File Input

```blade
<x-file-input />
```

#### File Input Styles

Use the `style` property to change the file input style.

Available style options:

`ghost`

```blade
<x-file-input style="ghost" />
```

#### File Input Colors

Use the `color` property to change the file input color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-file-input color="primary" />
```

#### File Input Sizes

Use the `size` property to adjust the file input size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-file-input size="sm" />
```

---

### Select

Select is used to pick a value from a list of options.

#### Basic Select

```blade
<x-select>
  <option value="1">Option 1</option>
  <option value="2">Option 2</option>
  <option value="3">Option 3</option>
</x-select>
```

#### Select Styles

Use the `style` property to change the select style.

Available style options:

`ghost`

```blade
<x-select style="ghost">
  <option>Ghost</option>
  <option>Option 2</option>
  <option>Option 3</option>
</x-select>
```

#### Select Colors

Use the `color` property to change the select color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-select color="primary">
  <option>Primary</option>
  <option>Option 2</option>
  <option>Option 3</option>
</x-select>
```

#### Select Sizes

Use the `size` property to adjust the select size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-select size="sm">
  <option>Small</option>
  <option>Option 2</option>
  <option>Option 3</option>
</x-select>
```

---

### Toggle

Toggle is a checkbox that is styled to look like a switch button.

#### Basic Toggle

```blade
<x-toggle checked />
```

#### Toggle Colors

Use the `color` property to change the toggle color.

Available color options:

`neutral` | `primary` | `secondary` | `accent` | `info` | `success` | `warning` | `error`

```blade
<x-toggle color="primary" />
```

#### Toggle Sizes

Use the `size` property to adjust the toggle size.

Available size options:

`xs` | `sm` | `md` | `lg` | `xl`

```blade
<x-toggle size="sm" />
```

---
