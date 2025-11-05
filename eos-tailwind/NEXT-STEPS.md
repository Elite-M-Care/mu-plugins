# Bootstrap to Tailwind Migration - Next Steps

## ✅ Completed (Phase 1 & 2)

### Infrastructure Setup
- [x] Created MU plugin structure at `wp-content/mu-plugins/eos-tailwind-design-system/`
- [x] Set up Tailwind CSS v3 with CLI support
- [x] Created `tailwind.config.js` with EOS design tokens
- [x] Compiled initial Tailwind CSS (`dist/tailwind.css` - 9.2KB minified)
- [x] Implemented automatic CSS enqueuing in WordPress (frontend + admin)

### EOS Plugin Updates
- [x] Removed Bootstrap CSS registration and enqueuing from main EOS plugin
- [x] Kept Bootstrap JavaScript for modals, dropdowns, and tooltips
- [x] Updated comments to reflect new architecture

### Documentation
- [x] Created comprehensive README with build instructions
- [x] Created detailed MIGRATION-GUIDE.md with all Bootstrap→Tailwind conversions
- [x] Created build scripts (`build.sh`) and npm scripts
- [x] Added package.json with convenient build commands

---

## 🚧 Remaining Tasks (Phase 3)

### Task 1: Migrate Template Classes
**Status:** Not started
**Complexity:** High (100+ template files estimated)
**Time Estimate:** Several days

#### What needs to be done:
Find all PHP template files in the EOS plugin and replace Bootstrap classes with Tailwind equivalents.

#### How to do it:

1. **Find template files:**
   ```bash
   cd wp-content/plugins/eos
   find . -name "*.php" -type f | grep -E "(template|view|display)" > template-files.txt
   ```

2. **Start with one simple file** as a test:
   - Pick a simple page template
   - Use the MIGRATION-GUIDE.md as reference
   - Replace Bootstrap classes with Tailwind classes
   - Test the page in browser

3. **Common replacements to search for:**
   - `class="container"` → `class="max-w-eos mx-auto px-4"`
   - `class="row"` → `class="flex flex-wrap -mx-4"`
   - `class="col-12"` → `class="w-full px-4"`
   - `class="btn btn-primary"` → `class="bg-eos-primary text-white px-4 py-2 rounded hover:bg-eos-primary-light transition"`
   - `class="card"` → `class="border border-eos-gray-100 rounded shadow-card bg-white"`

4. **Use Find & Replace strategically:**
   - Search entire directory for patterns
   - Replace one pattern at a time
   - Test after each major change

#### Example Migration:

**Before (Bootstrap):**
```php
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Patient Info</div>
                <div class="card-body">
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
```

**After (Tailwind):**
```php
<div class="max-w-eos mx-auto px-4">
    <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 px-4">
            <div class="border border-eos-gray-100 rounded shadow-card bg-white">
                <div class="bg-eos-gray-50 border-b border-eos-gray-100 font-semibold px-4 py-3">Patient Info</div>
                <div class="p-4">
                    <button class="bg-eos-primary text-white px-4 py-2 rounded hover:bg-eos-primary-light transition">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
```

---

### Task 2: Review Custom CSS Overrides
**Status:** Not started
**Complexity:** Medium
**Time Estimate:** 1-2 days

#### What needs to be done:
Review `wp-content/plugins/eos/public/css/eos-public.css` (28,000+ lines) and decide what to keep vs. migrate to Tailwind.

#### Approach:

1. **Keep these custom classes** (they work alongside Tailwind):
   - `.inner-container-section`
   - `.patient-row`, `.appointment-row`
   - `.eos-action`, `.save-icon`, `.edit-icon`, `.delete-icon`
   - `.eosinput_container`
   - Any complex custom components

2. **Consider migrating simple utility classes** to Tailwind:
   - Look for things like custom margin/padding classes
   - Simple color utilities
   - Basic flex/grid utilities

3. **Document your decisions:**
   - Create a list of custom classes that will remain
   - Note any custom classes that can be safely removed

---

### Task 3: Remove Bootstrap CSS Files
**Status:** Not started
**Complexity:** Low
**Time Estimate:** 30 minutes

#### What needs to be done:
Once templates are migrated and tested, remove the Bootstrap CSS files.

#### Files to remove:
```bash
# Main EOS plugin
rm wp-content/plugins/eos/public/css/lib/bootstrap.min.css

# EOS-FRAC plugin (if migrating)
rm wp-content/plugins/eos-frac/assets/css/bootstrap.min.css
```

**⚠️ Important:** DO NOT remove:
- `bootstrap.bundle.min.js` (keep the JavaScript!)
- Any Bootstrap JS files

---

### Task 4: Test All Pages
**Status:** Not started
**Complexity:** Medium-High
**Time Estimate:** 2-3 days

#### Testing Checklist:

**Visual Testing:**
- [ ] Homepage displays correctly
- [ ] Patient list/table pages
- [ ] Appointment pages
- [ ] Forms (create/edit pages)
- [ ] Dashboard/charts pages
- [ ] Modal dialogs
- [ ] Dropdown menus
- [ ] Responsive design (mobile/tablet/desktop)

**Functional Testing:**
- [ ] Bootstrap JavaScript components work (modals, dropdowns, tooltips)
- [ ] Forms submit correctly
- [ ] AJAX functionality works
- [ ] Date pickers function
- [ ] File uploads work
- [ ] Print styles (if applicable)

**Browser Testing:**
- [ ] Chrome
- [ ] Firefox
- [ ] Safari
- [ ] Edge

**Performance Testing:**
- [ ] Page load times (should be similar or better)
- [ ] CSS file size (Tailwind 9.2KB vs Bootstrap 155KB = **94% reduction!**)

---

## 📚 Reference Documents

All documentation is in `wp-content/mu-plugins/eos-tailwind-design-system/`:

1. **README.md** - Setup and build instructions
2. **MIGRATION-GUIDE.md** - Complete Bootstrap→Tailwind reference (24,000+ words)
3. **NEXT-STEPS.md** - This file

---

## 🛠️ Development Workflow

### Daily Development

1. **Start Tailwind watch mode:**
   ```bash
   cd wp-content/mu-plugins/eos-tailwind-design-system
   npm run watch
   ```
   This keeps Tailwind rebuilding automatically as you make changes.

2. **Edit templates** in the EOS plugin using Tailwind classes

3. **Refresh browser** to see changes (watch mode auto-rebuilds CSS)

4. **Commit your changes** regularly:
   ```bash
   git add .
   git commit -m "Migrate [page-name] from Bootstrap to Tailwind"
   ```

### Before Deployment

1. **Build for production:**
   ```bash
   cd wp-content/mu-plugins/eos-tailwind-design-system
   npm run build:prod
   ```

2. **Test thoroughly** on staging environment

3. **Deploy both:**
   - MU plugin (`wp-content/mu-plugins/eos-tailwind-design-system/`)
   - Updated EOS plugin files

---

## 🎯 Quick Wins (Start Here!)

If you want to see immediate results, start with these simple wins:

### 1. Migrate a Simple Button
Find any button in the EOS plugin:
```php
// Before
<button class="btn btn-primary">Click Me</button>

// After
<button class="bg-eos-primary text-white px-4 py-2 rounded hover:bg-eos-primary-light transition">Click Me</button>
```

### 2. Migrate a Simple Card
Find a card component:
```php
// Before
<div class="card">
    <div class="card-body">Content</div>
</div>

// After
<div class="border border-eos-gray-100 rounded shadow-card bg-white">
    <div class="p-4">Content</div>
</div>
```

### 3. Migrate a Simple Table
Find a table:
```php
// Before
<table class="table table-striped">
    <thead><tr><th>Header</th></tr></thead>
    <tbody><tr><td>Data</td></tr></tbody>
</table>

// After
<table class="w-full">
    <thead class="bg-eos-gray-50 border-b-2 border-eos-gray-100">
        <tr><th class="px-4 py-3 text-left font-semibold">Header</th></tr>
    </thead>
    <tbody class="divide-y divide-eos-gray-100">
        <tr><td class="px-4 py-2">Data</td></tr>
    </tbody>
</table>
```

After each change:
1. Rebuild Tailwind: `npm run build` (or it auto-rebuilds if watch mode is on)
2. Refresh browser
3. Verify it looks the same

---

## 💡 Tips for Success

### 1. Work Incrementally
Don't try to migrate everything at once. Migrate one page/component at a time, test it, then move on.

### 2. Use Browser DevTools
Use the browser inspector to:
- Compare old Bootstrap styles with new Tailwind styles
- Debug layout issues
- Test responsive behavior

### 3. Keep Bootstrap JS
Remember: We're only replacing Bootstrap **CSS**, not JavaScript. All existing modals, dropdowns, and tooltips will continue to work.

### 4. Leverage Tailwind's Purge
Tailwind automatically removes unused classes in production builds, so don't worry about including every class - the build will be optimized.

### 5. Ask for Help
Refer to MIGRATION-GUIDE.md for specific conversions. If something doesn't look right, check:
- Is Tailwind CSS loaded? (View source, look for eos-tailwind in head)
- Did you rebuild after changes?
- Are there conflicting custom styles?

---

## 📊 Progress Tracking

Create a simple checklist to track your migration:

```markdown
### Template Migration Progress

**Core Pages:**
- [ ] Homepage
- [ ] Patient List
- [ ] Patient Detail/Edit
- [ ] Appointment List
- [ ] Appointment Detail/Edit
- [ ] Dashboard

**Admin Pages:**
- [ ] Settings
- [ ] Reports
- [ ] User Management

**Components:**
- [ ] Modals
- [ ] Forms
- [ ] Tables
- [ ] Cards
- [ ] Buttons
- [ ] Alerts/Notifications
```

---

## 🚀 Ready to Start?

1. Start Tailwind watch mode: `npm run watch`
2. Open MIGRATION-GUIDE.md in your editor
3. Pick your first template file
4. Start migrating classes
5. Test and iterate

Good luck with your migration! The foundation is solid, and you have all the tools and documentation you need to succeed.

---

## 📞 Need Help?

If you encounter issues:

1. Check the MIGRATION-GUIDE.md for the specific component
2. Use browser DevTools to inspect styles
3. Verify Tailwind is loaded and rebuilt
4. Check for JavaScript console errors (for Bootstrap JS components)

Contact the EOS Development Team for complex issues or questions.
