# EOS Tailwind Design System

Master Tailwind CSS design system for all EOS plugins. This MU (Must-Use) plugin provides a utility-first CSS framework to replace Bootstrap across the EOS ecosystem.

## Overview

- **Version**: 1.0.0
- **Build Tool**: Tailwind CLI
- **Scope**: Main EOS plugin (Bootstrap CSS replacement)
- **JavaScript**: Bootstrap JS retained for existing components (modals, dropdowns, tooltips)

## Installation & Setup

### Prerequisites

Node.js and npm must be installed on your system.

### Initial Setup

**First time setup** (after cloning the repository or if `node_modules` doesn't exist):

```bash
cd wp-content/mu-plugins/eos-tailwind
npm install
```

This installs Tailwind CSS and all dependencies locally in this plugin.

### Building CSS

**Recommended: Use npm scripts** (easiest method)

```bash
cd wp-content/mu-plugins/eos-tailwind

# Development build
npm run build

# Production build (minified)
npm run build:prod

# Watch mode (auto-rebuild on changes)
npm run watch
```

**Alternative: Direct Tailwind CLI** (if you prefer)

#### Production Build

Compile and minify Tailwind CSS for production:

```bash
cd wp-content/mu-plugins/eos-tailwind
tailwindcss -i ./src/tailwind.css -o ./dist/tailwind.css --minify
```

#### Development Build

Compile without minification for easier debugging:

```bash
tailwindcss -i ./src/tailwind.css -o ./dist/tailwind.css
```

#### Watch Mode (Development)

Auto-rebuild when files change:

```bash
tailwindcss -i ./src/tailwind.css -o ./dist/tailwind.css --watch
```

## Design Tokens

### Colors

#### Brand Colors
- **Primary**: `#276FFF` (blue) - Use with `bg-eos-primary`, `text-eos-primary`, etc.
- **Primary Light**: `#6495ED` - Use with `bg-eos-primary-light`

#### State Colors
- **Success**: `#27C46B` (green) - Use with `bg-eos-success`, `text-eos-success`
- **Warning**: `#FFC107` (amber) - Use with `bg-eos-warning`
- **Danger**: `#E34724` (red) - Use with `bg-eos-danger`, `text-eos-danger`

#### Neutral Colors
- **Gray Scale**: `eos-gray-50` through `eos-gray-700`
- Example: `bg-eos-gray-50`, `text-eos-gray-500`, `border-eos-gray-100`

### Typography

- **Font Family**: Montserrat (loaded via Google Fonts in eos-public.css)
- Apply with: `font-sans` (default)

### Spacing & Layout

- **Max Container Width**: `max-w-eos` (1440px)
- **Section Min Height**: `min-h-section` (700px)
- **Patient Row Min Height**: `min-h-patient-row` (150px)

### Shadows & Borders

- **Card Shadow**: `shadow-card` (matches Bootstrap card shadow)
- **Border Radius**: Default `rounded` is 6px (0.375rem), matching Bootstrap

## Usage Examples

### Bootstrap to Tailwind Conversion

#### Container & Grid
```html
<!-- Bootstrap -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-6">Content</div>
  </div>
</div>

<!-- Tailwind -->
<div class="w-full px-4">
  <div class="flex flex-wrap -mx-4">
    <div class="w-full md:w-1/2 px-4">Content</div>
  </div>
</div>
```

#### Card Component
```html
<!-- Bootstrap -->
<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Body</div>
</div>

<!-- Tailwind -->
<div class="border border-eos-gray-100 rounded shadow-card bg-white">
  <div class="bg-eos-gray-50 border-b border-eos-gray-100 font-semibold px-4 py-3">Header</div>
  <div class="p-4">Body</div>
</div>
```

#### Buttons
```html
<!-- Bootstrap -->
<button class="btn btn-primary">Click Me</button>

<!-- Tailwind -->
<button class="bg-eos-primary text-white px-4 py-2 rounded hover:bg-eos-primary-light transition">
  Click Me
</button>
```

#### Table
```html
<!-- Bootstrap -->
<table class="table table-striped table-hover">
  ...
</table>

<!-- Tailwind -->
<table class="w-full text-sm">
  <thead class="bg-eos-gray-50 border-b-2 border-eos-gray-100">
    ...
  </thead>
  <tbody class="divide-y divide-eos-gray-100">
    ...
  </tbody>
</table>
```

## File Structure

```
eos-tailwind/
├── eos-tailwind.php                # Main plugin file (auto-loaded by WordPress)
├── tailwind.config.js              # Tailwind configuration with EOS design tokens
├── package.json                    # npm dependencies and build scripts
├── src/
│   └── tailwind.css                # Source CSS with Tailwind directives
├── dist/
│   └── tailwind.css                # Compiled CSS (generated, not in version control)
└── README.md                       # This file
```

## Integration

### Automatic Loading

This is a Must-Use (MU) plugin, so it loads automatically on every WordPress request. No activation required.

The compiled CSS is enqueued with priority 5 to ensure it loads before other plugin styles.

### Content Paths

The Tailwind config scans these paths for classes:
- All EOS plugin files (`wp-content/plugins/eos/**/*.php`)
- All EOS-related plugins (`wp-content/plugins/eos-*/**/*.php`)
- Theme files
- JavaScript files

## Development Workflow

1. **Start watch mode** during development:
   ```bash
   cd wp-content/mu-plugins/eos-tailwind
   npm run watch
   ```

2. **Edit plugin templates** using Tailwind classes

3. **CSS auto-rebuilds** when you save changes

4. **Before deploying**, build for production:
   ```bash
   npm run build:prod
   ```

## Notes

- Bootstrap JavaScript is still loaded for existing modal, dropdown, and tooltip functionality
- Only Bootstrap CSS has been removed
- This design system uses utility-first approach - no pre-built components
- Cache busting uses file modification timestamp (`filemtime()`)

## Support

For questions or issues, contact the EOS Development Team.
# eos-tailwind
