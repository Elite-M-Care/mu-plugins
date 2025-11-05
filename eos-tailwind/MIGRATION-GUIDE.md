# Bootstrap to Tailwind Migration Guide

Complete reference for converting Bootstrap classes to Tailwind CSS in the EOS plugin ecosystem.

## Table of Contents

1. [Layout & Grid System](#layout--grid-system)
2. [Components](#components)
3. [Typography](#typography)
4. [Spacing](#spacing)
5. [Colors](#colors)
6. [Buttons](#buttons)
7. [Forms](#forms)
8. [Tables](#tables)
9. [Utilities](#utilities)
10. [JavaScript Components](#javascript-components)

---

## Layout & Grid System

### Container

**Bootstrap:**
```html
<div class="container">...</div>
<div class="container-fluid">...</div>
```

**Tailwind:**
```html
<div class="max-w-eos mx-auto px-4">...</div>
<div class="w-full px-4">...</div>
```

### Grid Row

**Bootstrap:**
```html
<div class="row">...</div>
```

**Tailwind:**
```html
<div class="flex flex-wrap -mx-4">...</div>
```

### Grid Columns

**Bootstrap:**
```html
<div class="col-12">Full width</div>
<div class="col-6">Half width</div>
<div class="col-md-4">4/12 on md+</div>
<div class="col-lg-3">3/12 on lg+</div>
```

**Tailwind:**
```html
<div class="w-full px-4">Full width</div>
<div class="w-1/2 px-4">Half width</div>
<div class="w-full md:w-1/3 px-4">4/12 on md+</div>
<div class="w-full lg:w-1/4 px-4">3/12 on lg+</div>
```

### Column Width Reference

| Bootstrap | Tailwind | Description |
|-----------|----------|-------------|
| `col-1` | `w-1/12` | 8.33% width |
| `col-2` | `w-2/12 or w-1/6` | 16.67% width |
| `col-3` | `w-3/12 or w-1/4` | 25% width |
| `col-4` | `w-4/12 or w-1/3` | 33.33% width |
| `col-6` | `w-6/12 or w-1/2` | 50% width |
| `col-8` | `w-8/12 or w-2/3` | 66.67% width |
| `col-12` | `w-full` | 100% width |

---

## Components

### Card

**Bootstrap:**
```html
<div class="card">
    <div class="card-header">
        Card Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Card Title</h5>
        <p class="card-text">Card content goes here.</p>
    </div>
</div>
```

**Tailwind:**
```html
<div class="border border-eos-gray-100 rounded shadow-card bg-white">
    <div class="bg-eos-gray-50 border-b border-eos-gray-100 font-semibold px-4 py-3">
        Card Header
    </div>
    <div class="p-4">
        <h5 class="text-lg font-semibold mb-2">Card Title</h5>
        <p class="text-eos-gray-500">Card content goes here.</p>
    </div>
</div>
```

### Alert

**Bootstrap:**
```html
<div class="alert alert-success">Success message</div>
<div class="alert alert-warning">Warning message</div>
<div class="alert alert-danger">Error message</div>
```

**Tailwind:**
```html
<div class="bg-eos-success/10 border border-eos-success text-eos-success px-4 py-3 rounded">Success message</div>
<div class="bg-eos-warning/10 border border-eos-warning text-eos-warning px-4 py-3 rounded">Warning message</div>
<div class="bg-eos-danger/10 border border-eos-danger text-eos-danger px-4 py-3 rounded">Error message</div>
```

### Badge

**Bootstrap:**
```html
<span class="badge bg-primary">Primary</span>
<span class="badge bg-success">Success</span>
```

**Tailwind:**
```html
<span class="inline-block bg-eos-primary text-white text-xs px-2 py-1 rounded">Primary</span>
<span class="inline-block bg-eos-success text-white text-xs px-2 py-1 rounded">Success</span>
```

---

## Typography

### Headings

**Bootstrap:**
```html
<h1 class="h1">Heading 1</h1>
<h2 class="h2">Heading 2</h2>
<p class="lead">Lead paragraph</p>
```

**Tailwind:**
```html
<h1 class="text-4xl font-bold">Heading 1</h1>
<h2 class="text-3xl font-bold">Heading 2</h2>
<p class="text-xl">Lead paragraph</p>
```

### Text Alignment

| Bootstrap | Tailwind |
|-----------|----------|
| `text-left` | `text-left` |
| `text-center` | `text-center` |
| `text-right` | `text-right` |

### Font Weight

| Bootstrap | Tailwind |
|-----------|----------|
| `fw-light` | `font-light` (300) |
| `fw-normal` | `font-normal` (400) |
| `fw-semibold` | `font-semibold` (600) |
| `fw-bold` | `font-bold` (700) |

---

## Spacing

### Margin

**Bootstrap to Tailwind Conversion:**

| Bootstrap | Tailwind | Value |
|-----------|----------|-------|
| `m-0` | `m-0` | 0 |
| `m-1` | `m-1` | 0.25rem (4px) |
| `m-2` | `m-2` | 0.5rem (8px) |
| `m-3` | `m-3` | 0.75rem (12px) |
| `m-4` | `m-4` | 1rem (16px) |
| `m-5` | `m-5` | 1.25rem (20px) |
| `mt-3` | `mt-3` | margin-top: 0.75rem |
| `mb-2` | `mb-2` | margin-bottom: 0.5rem |
| `mx-auto` | `mx-auto` | horizontal center |
| `my-4` | `my-4` | vertical margin: 1rem |

### Padding

**Bootstrap to Tailwind Conversion:**

| Bootstrap | Tailwind | Value |
|-----------|----------|-------|
| `p-0` | `p-0` | 0 |
| `p-1` | `p-1` | 0.25rem (4px) |
| `p-2` | `p-2` | 0.5rem (8px) |
| `p-3` | `p-3` | 0.75rem (12px) |
| `p-4` | `p-4` | 1rem (16px) |
| `p-5` | `p-5` | 1.25rem (20px) |
| `pt-3` | `pt-3` | padding-top: 0.75rem |
| `px-4` | `px-4` | horizontal padding: 1rem |
| `py-2` | `py-2` | vertical padding: 0.5rem |

---

## Colors

### Background Colors

**Bootstrap:**
```html
<div class="bg-primary">Primary background</div>
<div class="bg-success">Success background</div>
<div class="bg-warning">Warning background</div>
<div class="bg-danger">Danger background</div>
```

**Tailwind (EOS Colors):**
```html
<div class="bg-eos-primary">Primary background</div>
<div class="bg-eos-success">Success background</div>
<div class="bg-eos-warning">Warning background</div>
<div class="bg-eos-danger">Danger background</div>
```

### Text Colors

| Bootstrap | Tailwind |
|-----------|----------|
| `text-primary` | `text-eos-primary` |
| `text-success` | `text-eos-success` |
| `text-warning` | `text-eos-warning` |
| `text-danger` | `text-eos-danger` |
| `text-muted` | `text-eos-gray-400` |
| `text-dark` | `text-eos-gray-700` |

---

## Buttons

### Basic Buttons

**Bootstrap:**
```html
<button class="btn btn-primary">Primary</button>
<button class="btn btn-secondary">Secondary</button>
<button class="btn btn-success">Success</button>
<button class="btn btn-danger">Danger</button>
```

**Tailwind:**
```html
<button class="bg-eos-primary text-white px-4 py-2 rounded hover:bg-eos-primary-light transition">Primary</button>
<button class="bg-eos-gray-500 text-white px-4 py-2 rounded hover:bg-eos-gray-600 transition">Secondary</button>
<button class="bg-eos-success text-white px-4 py-2 rounded hover:bg-eos-success/90 transition">Success</button>
<button class="bg-eos-danger text-white px-4 py-2 rounded hover:bg-eos-danger-alt transition">Danger</button>
```

### Button Sizes

**Bootstrap:**
```html
<button class="btn btn-sm">Small</button>
<button class="btn">Default</button>
<button class="btn btn-lg">Large</button>
```

**Tailwind:**
```html
<button class="px-2 py-1 text-sm rounded">Small</button>
<button class="px-4 py-2 rounded">Default</button>
<button class="px-6 py-3 text-lg rounded">Large</button>
```

### Outline Buttons

**Bootstrap:**
```html
<button class="btn btn-outline-primary">Outline</button>
```

**Tailwind:**
```html
<button class="border-2 border-eos-primary text-eos-primary px-4 py-2 rounded hover:bg-eos-primary hover:text-white transition">Outline</button>
```

---

## Forms

### Form Group

**Bootstrap:**
```html
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email">
</div>
```

**Tailwind:**
```html
<div class="mb-3">
    <label for="email" class="block mb-2 font-medium">Email</label>
    <input type="email" id="email" class="w-full px-3 py-2 border border-eos-gray-100 rounded focus:outline-none focus:ring-2 focus:ring-eos-primary">
</div>
```

### Select

**Bootstrap:**
```html
<select class="form-select">
    <option>Option 1</option>
    <option>Option 2</option>
</select>
```

**Tailwind:**
```html
<select class="w-full px-3 py-2 border border-eos-gray-100 rounded focus:outline-none focus:ring-2 focus:ring-eos-primary">
    <option>Option 1</option>
    <option>Option 2</option>
</select>
```

### Textarea

**Bootstrap:**
```html
<textarea class="form-control" rows="3"></textarea>
```

**Tailwind:**
```html
<textarea rows="3" class="w-full px-3 py-2 border border-eos-gray-100 rounded focus:outline-none focus:ring-2 focus:ring-eos-primary"></textarea>
```

---

## Tables

### Basic Table

**Bootstrap:**
```html
<table class="table">
    <thead>
        <tr>
            <th>Header 1</th>
            <th>Header 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
        </tr>
    </tbody>
</table>
```

**Tailwind:**
```html
<table class="w-full">
    <thead class="bg-eos-gray-50 border-b-2 border-eos-gray-100">
        <tr>
            <th class="px-4 py-3 text-left font-semibold text-eos-gray-500">Header 1</th>
            <th class="px-4 py-3 text-left font-semibold text-eos-gray-500">Header 2</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-eos-gray-100">
        <tr>
            <td class="px-4 py-2">Data 1</td>
            <td class="px-4 py-2">Data 2</td>
        </tr>
    </tbody>
</table>
```

### Striped Table

**Bootstrap:**
```html
<table class="table table-striped">...</table>
```

**Tailwind:**
```html
<table class="w-full">
    <tbody>
        <tr class="even:bg-eos-gray-50">...</tr>
    </tbody>
</table>
```

### Hover Table

**Bootstrap:**
```html
<table class="table table-hover">...</table>
```

**Tailwind:**
```html
<table class="w-full">
    <tbody>
        <tr class="hover:bg-eos-gray-50 transition">...</tr>
    </tbody>
</table>
```

---

## Utilities

### Display

| Bootstrap | Tailwind |
|-----------|----------|
| `d-none` | `hidden` |
| `d-block` | `block` |
| `d-inline` | `inline` |
| `d-inline-block` | `inline-block` |
| `d-flex` | `flex` |
| `d-inline-flex` | `inline-flex` |

### Flex Utilities

| Bootstrap | Tailwind |
|-----------|----------|
| `justify-content-start` | `justify-start` |
| `justify-content-center` | `justify-center` |
| `justify-content-end` | `justify-end` |
| `justify-content-between` | `justify-between` |
| `align-items-start` | `items-start` |
| `align-items-center` | `items-center` |
| `align-items-end` | `items-end` |
| `flex-row` | `flex-row` |
| `flex-column` | `flex-col` |
| `flex-wrap` | `flex-wrap` |

### Width & Height

| Bootstrap | Tailwind |
|-----------|----------|
| `w-25` | `w-1/4` (25%) |
| `w-50` | `w-1/2` (50%) |
| `w-75` | `w-3/4` (75%) |
| `w-100` | `w-full` (100%) |
| `h-25` | `h-1/4` |
| `h-50` | `h-1/2` |
| `h-100` | `h-full` |

### Position

| Bootstrap | Tailwind |
|-----------|----------|
| `position-static` | `static` |
| `position-relative` | `relative` |
| `position-absolute` | `absolute` |
| `position-fixed` | `fixed` |
| `position-sticky` | `sticky` |

### Border

| Bootstrap | Tailwind |
|-----------|----------|
| `border` | `border` |
| `border-0` | `border-0` |
| `border-top` | `border-t` |
| `border-bottom` | `border-b` |
| `rounded` | `rounded` |
| `rounded-circle` | `rounded-full` |

---

## JavaScript Components

### Important Note

Bootstrap JavaScript components (modals, dropdowns, tooltips, popovers) are **still available** since we kept Bootstrap's JS bundle. Only the CSS classes need to be updated.

### Modal

**Bootstrap HTML remains the same**, but update classes:

**Before:**
```html
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Modal content
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
```

**After (Tailwind):**
```html
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content bg-white rounded shadow-lg">
            <div class="border-b border-eos-gray-100 px-4 py-3 flex justify-between items-center">
                <h5 class="text-lg font-semibold">Modal Title</h5>
                <button type="button" class="text-2xl leading-none" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="p-4">
                Modal content
            </div>
            <div class="border-t border-eos-gray-100 px-4 py-3 flex justify-end gap-2">
                <button type="button" class="bg-eos-gray-500 text-white px-4 py-2 rounded" data-bs-dismiss="modal">Close</button>
                <button type="button" class="bg-eos-primary text-white px-4 py-2 rounded">Save</button>
            </div>
        </div>
    </div>
</div>
```

**JavaScript usage remains identical:**
```javascript
// Bootstrap 5 JS still works
var myModal = new bootstrap.Modal(document.getElementById('myModal'));
myModal.show();
```

### Dropdown

Keep Bootstrap's `data-bs-toggle="dropdown"` attributes. Only update the visual classes:

**Before:**
```html
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
        Dropdown
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
    </ul>
</div>
```

**After:**
```html
<div class="dropdown">
    <button class="bg-eos-primary text-white px-4 py-2 rounded dropdown-toggle" data-bs-toggle="dropdown">
        Dropdown
    </button>
    <ul class="dropdown-menu bg-white border border-eos-gray-100 rounded shadow-lg">
        <li><a class="dropdown-item block px-4 py-2 hover:bg-eos-gray-50" href="#">Action</a></li>
    </ul>
</div>
```

---

## Migration Workflow

### Step-by-Step Process

1. **Identify Template Files**
   ```bash
   find wp-content/plugins/eos -name "*.php" -type f
   ```

2. **Start with Simple Pages**
   - Begin with pages that have minimal Bootstrap usage
   - Test thoroughly before moving to complex pages

3. **Use Find & Replace Strategically**
   - Search for common patterns like `class="btn btn-primary"`
   - Replace systematically with Tailwind equivalents

4. **Test After Each Change**
   - View the page in browser
   - Check responsive behavior
   - Verify JavaScript components still work

5. **Common Search Patterns**
   ```
   class="card"
   class="btn btn-
   class="col-
   class="row"
   class="container
   class="table
   ```

### Quick Reference for EOS-Specific Classes

Based on the custom CSS in `eos-public.css`, these custom class names should remain unchanged:

- `.inner-container-section`
- `.patient-row`
- `.appointment-row`
- `.eos-action`
- `.save-icon`, `.edit-icon`, `.delete-icon`
- `.eosinput_container`
- `.info-main`

These classes have custom CSS that works alongside Tailwind.

---

## Tips & Best Practices

### 1. Maintain Consistency
Use the EOS color palette (`eos-primary`, `eos-success`, etc.) consistently across all templates.

### 2. Responsive Design
Always consider mobile-first design:
```html
<!-- Bootstrap -->
<div class="col-12 col-md-6">

<!-- Tailwind (mobile-first) -->
<div class="w-full md:w-1/2">
```

### 3. Component Reusability
For frequently used patterns, consider creating PHP template parts:
```php
// button-primary.php
<button class="bg-eos-primary text-white px-4 py-2 rounded hover:bg-eos-primary-light transition">
    <?php echo $button_text; ?>
</button>
```

### 4. Custom CSS When Needed
Not everything needs to be inline classes. Complex components can still use custom CSS:
```css
/* src/tailwind.css */
@layer components {
  .btn-primary {
    @apply bg-eos-primary text-white px-4 py-2 rounded hover:bg-eos-primary-light transition;
  }
}
```

Then rebuild Tailwind:
```bash
npx tailwindcss -i ./src/tailwind.css -o ./dist/tailwind.css --minify
```

### 5. Testing Checklist
- [ ] Visual appearance matches original
- [ ] Responsive behavior works on mobile/tablet/desktop
- [ ] Hover states work correctly
- [ ] Focus states are visible (accessibility)
- [ ] JavaScript components function (modals, dropdowns, etc.)
- [ ] Print styles (if applicable)

---

## Troubleshooting

### Styles Not Applying

**Problem:** Tailwind classes aren't working

**Solution:**
1. Rebuild Tailwind CSS: `npx tailwindcss -i ./src/tailwind.css -o ./dist/tailwind.css --minify`
2. Clear WordPress cache
3. Hard refresh browser (Ctrl+F5 / Cmd+Shift+R)
4. Check browser console for CSS errors

### Specificity Issues

**Problem:** Custom CSS overriding Tailwind or vice versa

**Solution:**
Use `!important` with Tailwind:
```html
<div class="!bg-eos-primary">Forces this background color</div>
```

### Modal/Dropdown Not Working

**Problem:** JavaScript components broken after migration

**Solution:**
- Ensure Bootstrap JS is still loaded (check Network tab)
- Keep essential Bootstrap classes: `modal`, `modal-dialog`, `dropdown`, `dropdown-menu`
- Check for JavaScript console errors

---

## Resources

- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Tailwind CSS Cheat Sheet](https://nerdcave.com/tailwind-cheat-sheet)
- [Bootstrap to Tailwind Converter](https://bootstrap-to-tailwind.com/)

---

## Need Help?

Contact the EOS Development Team for assistance with complex migrations or custom component conversions.
