# Testing Checklist - Tailwind Migration

## 🎯 Purpose

This checklist ensures thorough testing of each migrated page before deployment to production.

---

## 📋 General Testing Checklist (All Pages)

Use this checklist for every migrated page:

### Visual / Layout
- [ ] Page loads without errors (no white screen, no 500 errors)
- [ ] Header renders correctly
- [ ] Footer renders correctly
- [ ] No layout breaks or overlapping elements
- [ ] All text is readable (good contrast, proper sizing)
- [ ] Images/icons display correctly
- [ ] Colors match design system (EOS brand colors)
- [ ] Spacing and padding look proper
- [ ] Cards/containers have correct styling

### Responsive Design
- [ ] **Desktop (1920x1080):** Layout uses full width appropriately
- [ ] **Laptop (1366x768):** Layout adapts properly
- [ ] **Tablet Portrait (768x1024):** Filters stack or wrap correctly
- [ ] **Tablet Landscape (1024x768):** Table is readable
- [ ] **Mobile (375x667):** All elements visible, no horizontal scroll
- [ ] **Mobile (414x896):** Touch targets are large enough
- [ ] Test at breakpoints: 640px, 768px, 1024px, 1280px, 1536px

### Interactive Elements
- [ ] All buttons are clickable
- [ ] Button hover states work
- [ ] Links navigate correctly
- [ ] Links have proper hover/visited states
- [ ] Form inputs accept input
- [ ] Dropdowns open and close
- [ ] Checkboxes/radios toggle
- [ ] Date pickers open (if applicable)

### Modals
- [ ] Modals open when triggered
- [ ] Modal backdrop displays
- [ ] Modal close button works
- [ ] Clicking outside modal closes it (if designed to)
- [ ] Modal content displays correctly
- [ ] Form submission in modal works
- [ ] Multiple modals can be opened (if applicable)

### Tooltips
- [ ] Tooltips appear on hover
- [ ] Tooltip text is readable
- [ ] Tooltips position correctly (don't go off-screen)
- [ ] Tooltips disappear on mouse out

### Dropdowns
- [ ] Dropdown lists populate
- [ ] Can select items
- [ ] Selected item displays correctly
- [ ] Clear/reset works
- [ ] Search within dropdown works (if applicable)
- [ ] Multi-select works (if applicable)
- [ ] Chosen.js styling intact

### Tables
- [ ] Table headers display correctly
- [ ] Table rows populate with data
- [ ] Alternating row colors (if designed)
- [ ] Hover states on rows work
- [ ] Sorting works (if applicable)
- [ ] Column widths appropriate
- [ ] Table is scrollable on small screens
- [ ] Sticky headers work (if applicable)

### Pagination
- [ ] Page numbers display
- [ ] Next/Previous buttons work
- [ ] Page count is accurate
- [ ] Clicking page number loads correct page
- [ ] Current page is highlighted
- [ ] Disabled states display correctly

### Filters
- [ ] All filter fields display
- [ ] Filter button applies filters
- [ ] Reset button clears filters
- [ ] Filtered results display correctly
- [ ] Filter state persists on page reload (if designed to)
- [ ] URL parameters update (if applicable)

### Inline Editing
- [ ] Edit icons visible
- [ ] Clicking edit icon enables field
- [ ] Field becomes editable
- [ ] Save icon appears
- [ ] Cancel/revert works
- [ ] Saving updates value
- [ ] Success feedback displays
- [ ] Validation errors show

### JavaScript
- [ ] No console errors
- [ ] No console warnings (review, may be acceptable)
- [ ] AJAX calls work
- [ ] Loading indicators display during AJAX
- [ ] Error messages display on failures

### Performance
- [ ] Page loads in < 3 seconds
- [ ] No significant layout shift
- [ ] Smooth scrolling
- [ ] No janky animations
- [ ] Images load efficiently

### Browser Compatibility
- [ ] Chrome (latest version)
- [ ] Firefox (latest version)
- [ ] Safari (latest version)
- [ ] Edge (latest version)
- [ ] Mobile Safari (iOS latest)
- [ ] Mobile Chrome (Android latest)

### Accessibility
- [ ] Keyboard navigation works (Tab, Shift+Tab)
- [ ] Focus indicators visible
- [ ] ARIA labels present (if applicable)
- [ ] Color contrast meets WCAG AA
- [ ] Screen reader friendly (if required)

### Security
- [ ] No sensitive data in console
- [ ] CSRF tokens present (if applicable)
- [ ] Form submissions secure
- [ ] XSS protection in place

---

## 📄 Page-Specific Checklists

### Appointment Request Pages

Additional checks for:
- `eos-mri-appt-requests.php`
- `eos-pt-chiro-appt-requests.php`

#### View Buttons
- [ ] Open view displays open requests
- [ ] Pending view displays pending requests
- [ ] On Hold view displays on-hold requests
- [ ] Archived view displays closed/reassigned/scheduled
- [ ] Active button highlighted
- [ ] View count accurate

#### Request Management
- [ ] Can add new appointment request
- [ ] Can edit facility/type fields inline
- [ ] Can update status inline
- [ ] Can update action date
- [ ] Can add notes
- [ ] Can delete request (with confirmation)
- [ ] "Add Appointment" link works

#### Data Display
- [ ] Patient information complete
- [ ] Referral source displays
- [ ] EMC Owner displays
- [ ] Facility name displays
- [ ] Request date displays
- [ ] Status displays with correct color/indicator

---

### Appointment List Pages

Additional checks for:
- `eos-patients-appts-pt-chiro.php`

#### Appointment Display
- [ ] Appointment date/time displays
- [ ] Appointment type displays
- [ ] Facility name displays
- [ ] Status inline editing works
- [ ] "View Appt Details" link works

#### Document Management
- [ ] Notes section displays
- [ ] Can add notes
- [ ] Can view notes
- [ ] Therapy notes display
- [ ] Recommendations upload/display
- [ ] Reports upload/display
- [ ] Bills upload/display
- [ ] "Send" functionality works
- [ ] Document approval workflow works
- [ ] Edit document works
- [ ] Delete document works

#### Staff Uploads
- [ ] Uploaded documents display
- [ ] Approval status shows (Pending/Approved/Not Approved)
- [ ] Can approve document
- [ ] Can disapprove with reason
- [ ] Disapproval reason displays
- [ ] Edit uploads record works

---

### Patient View Pages

Additional checks for:
- `eos-patients-view.php`
- `eos-patient-profile-page.php`
- `eos-emc-owner-patients-view.php`

#### Patient Information
- [ ] Patient PRN displays
- [ ] Patient name displays
- [ ] DOB/DOI displays
- [ ] Contact information displays
- [ ] Address displays
- [ ] Insurance information displays

#### Patient Status
- [ ] Simple status displays
- [ ] Priority displays
- [ ] EMC Owner displays
- [ ] Case Manager displays
- [ ] Action Date displays
- [ ] Next Task displays

#### Patient Actions
- [ ] Can edit patient information
- [ ] Can update status
- [ ] Can assign EMC Owner
- [ ] Can add tasks
- [ ] Can add notes
- [ ] Can view appointments
- [ ] Can view documents

---

### Provider/Facility Pages

Additional checks for:
- `eos-providers-view.php`
- `eos-provider-profile.php`
- `eos-mri-centers.php`
- `eos-mri-facility-profile.php`
- `eos-ptchiro-facility-profile.php`

#### Provider Information
- [ ] Provider name displays
- [ ] Specialty displays
- [ ] Contact information displays
- [ ] Address displays
- [ ] Office locations display
- [ ] Staff members display

#### Provider Actions
- [ ] Can edit provider information
- [ ] Can add office location
- [ ] Can edit office information
- [ ] Can add staff member
- [ ] Can manage appointments

---

## 🔍 Testing Scenarios

### Scenario 1: New User Workflow
1. User logs in
2. Navigates to page
3. Views data
4. Filters results
5. Clicks through pagination
6. Views details
7. Logs out

### Scenario 2: Data Entry Workflow
1. User opens page
2. Clicks "Add New" button
3. Fills out form
4. Submits form
5. Verifies data saved
6. Edits entry
7. Deletes entry (with confirmation)

### Scenario 3: Mobile Workflow
1. Open on mobile device
2. Navigate menu
3. View list page
4. Use filters
5. View details
6. Perform action
7. Verify success

---

## 🐛 Bug Reporting Template

When you find an issue during testing:

```markdown
**Page:** [Page name]
**URL:** [Full URL]
**Browser:** [Browser name and version]
**Device:** [Desktop/Mobile/Tablet - with dimensions]

**Steps to Reproduce:**
1. Step 1
2. Step 2
3. Step 3

**Expected Behavior:**
[What should happen]

**Actual Behavior:**
[What actually happens]

**Screenshot:**
[Attach screenshot]

**Console Errors:**
[Copy any console errors]

**Priority:** [Critical / High / Medium / Low]
```

---

## ✅ Sign-Off

After completing testing:

**Tester Name:** ___________________
**Date:** ___________________
**Page Tested:** ___________________
**Environment:** [ ] Local [ ] Staging [ ] Production

**Result:** [ ] Pass [ ] Pass with minor issues [ ] Fail

**Notes:**
_______________________________
_______________________________
_______________________________

**Approved for Deployment:** [ ] Yes [ ] No

**Approver:** ___________________
**Date:** ___________________

---

## 🔄 Regression Testing

After deployment to production, perform quick regression test:

**15-Minute Smoke Test:**
- [ ] Page loads
- [ ] Can login
- [ ] Can view data
- [ ] Can filter
- [ ] One modal opens
- [ ] No console errors
- [ ] No PHP errors in logs

**1-Hour Full Test:**
- [ ] Complete full checklist above
- [ ] Test with real user accounts
- [ ] Test all user roles
- [ ] Verify all workflows

---

## 📊 Testing Metrics

Track these metrics for each page:

| Metric | Target | Actual | Status |
|--------|--------|--------|--------|
| Load Time | < 3s | ___ | [ ] Pass / [ ] Fail |
| Console Errors | 0 | ___ | [ ] Pass / [ ] Fail |
| PHP Errors | 0 | ___ | [ ] Pass / [ ] Fail |
| Mobile Usability | 100% | ___% | [ ] Pass / [ ] Fail |
| Test Coverage | 100% | ___% | [ ] Pass / [ ] Fail |

---

## 🔗 Related Documents

- [ROLLOUT-PLAN.md](./ROLLOUT-PLAN.md) - Deployment procedures
- [MIGRATION-STATUS.md](./MIGRATION-STATUS.md) - Current status
- [TROUBLESHOOTING.md](./TROUBLESHOOTING.md) - Common issues
