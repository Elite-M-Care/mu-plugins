# EOS Tailwind Rollout Plan - Moderate Approach

## 🎯 Overview

This document outlines the moderate rollout strategy for deploying Tailwind CSS migrations to production.

**Strategy:** Moderate (Phased rollout over 12 weeks)
**Environment:** Cloudways Staging → Production
**Authentication:** Behind role/permission
**Maintenance Window:** None required

---

## 📋 Pre-Deployment Checklist

### ✅ Prerequisites Verified
- [x] Bootstrap CSS already removed from plugin
- [x] Bootstrap JS retained for modals/tooltips/dropdowns
- [x] Tailwind CSS compiling successfully
- [x] MU plugin loads automatically
- [x] No CSS conflicts detected
- [x] Staging environment available on Cloudways

---

## 🚀 Phase 1: Staging Verification (Week 1)

### Goal
Verify the 3 completed migrations work correctly in staging environment

### Files to Deploy
1. `eos-mri-appt-requests.php` (409 lines)
2. `eos-patients-appts-pt-chiro.php` (952 lines)
3. `eos-pt-chiro-appt-requests.php` (478 lines)

### Steps

#### 1.1 Prepare Staging Environment
```bash
# On Cloudways staging site
cd wp-content/mu-plugins/eos-tailwind
npm install  # if node_modules missing
npm run build:prod
```

#### 1.2 Deploy Files to Staging
- [ ] Backup current staging files
- [ ] Copy 3 migrated PHP files to staging
- [ ] Verify Tailwind CSS is compiled and uploaded
- [ ] Clear all caches (WordPress, Cloudways, browser)

#### 1.3 Testing (2-3 days)
Run through complete testing checklist for each page:

**MRI Appointment Requests:**
- [ ] Page loads without errors
- [ ] Filters work (Patient, Facility, Status)
- [ ] View buttons toggle correctly (Open, Pending, On Hold, Archived)
- [ ] Table displays data properly
- [ ] Inline editing works (Type, Facility, Status, Notes)
- [ ] Pagination functions
- [ ] Delete functionality works
- [ ] Modals open/close properly
- [ ] Tooltips display
- [ ] Mobile responsive
- [ ] No console errors

**PT/Chiro Appointments:**
- [ ] Page loads without errors
- [ ] 5-column filter layout works
- [ ] Date pickers function
- [ ] Table displays correctly
- [ ] Document upload/display works
- [ ] Therapy notes, recommendations, reports, bills sections work
- [ ] Send document functionality works
- [ ] Approval status updates work
- [ ] Modals function properly
- [ ] Mobile responsive
- [ ] No console errors

**PT/Chiro Appointment Requests:**
- [ ] Page loads without errors
- [ ] 4-column filter + EMC Owner multi-select works
- [ ] View buttons function
- [ ] Table displays data
- [ ] Inline editing works
- [ ] Action date fields editable
- [ ] Delete functionality works
- [ ] Mobile responsive
- [ ] No console errors

#### 1.4 Cross-Browser Testing
- [ ] Chrome (latest)
- [ ] Firefox (latest)
- [ ] Safari (latest)
- [ ] Edge (latest)
- [ ] Mobile Safari (iOS)
- [ ] Mobile Chrome (Android)

#### 1.5 Verify Other Pages Unaffected
- [ ] Check 3-5 unmigrated pages still work correctly
- [ ] No unexpected styling changes
- [ ] Bootstrap JS still functional on other pages

### Success Criteria
- All 3 pages pass testing checklist
- No breaking issues found
- Performance is acceptable
- Stakeholder approval received

---

## 🚀 Phase 2: Production Deployment (End of Week 1)

### Goal
Deploy the 3 completed files to production

### Pre-Deployment

#### 2.1 Final Preparation
- [ ] All staging tests passed
- [ ] Stakeholder sign-off received
- [ ] Deployment window scheduled (suggest: Friday afternoon or weekend)
- [ ] Team notified of deployment
- [ ] Support team briefed on changes

#### 2.2 Backup Creation
```bash
# On production server
cd wp-content/plugins/eos/public/partials

# Create backup directory with timestamp
mkdir -p ~/backups/eos-migration-$(date +%Y%m%d-%H%M%S)

# Backup files
cp eos-mri-appt-requests.php ~/backups/eos-migration-$(date +%Y%m%d-%H%M%S)/
cp eos-patients-appts-pt-chiro.php ~/backups/eos-migration-$(date +%Y%m%d-%H%M%S)/
cp eos-pt-chiro-appt-requests.php ~/backups/eos-migration-$(date +%Y%m%d-%H%M%S)/

# Verify Tailwind CSS
cd wp-content/mu-plugins/eos-tailwind
ls -lh dist/tailwind.css  # Should exist and be recent
```

### Deployment Steps

#### 2.3 Deploy to Production
1. **Upload Files**
   - [ ] Upload 3 migrated PHP files
   - [ ] Verify Tailwind dist/tailwind.css is up-to-date
   - [ ] Set correct file permissions

2. **Clear Caches**
   - [ ] Clear WordPress object cache
   - [ ] Clear Cloudways cache
   - [ ] Purge CDN cache (if applicable)
   - [ ] Clear browser cache

3. **Smoke Test** (5-10 minutes)
   - [ ] Quick check each page loads
   - [ ] Verify no PHP errors
   - [ ] Check browser console for JS errors
   - [ ] Test one filter on each page
   - [ ] Test one modal on each page

### Post-Deployment Monitoring (24-48 hours)

#### 2.4 Monitor for Issues
**First 2 Hours (Critical Window):**
- [ ] Monitor error logs every 15 minutes
- [ ] Check user feedback channels
- [ ] Test pages with different user roles
- [ ] Verify performance metrics

**Next 24 Hours:**
- [ ] Check error logs twice (morning, evening)
- [ ] Review user feedback
- [ ] Monitor support tickets

**24-48 Hours:**
- [ ] Daily error log review
- [ ] Collect user feedback
- [ ] Document any issues

#### 2.5 Metrics to Track
- Page load times
- JavaScript errors
- PHP errors
- User complaints/issues
- Support ticket volume

### Rollback Plan

If critical issues arise:

```bash
# Restore from backup
cd wp-content/plugins/eos/public/partials
cp ~/backups/eos-migration-TIMESTAMP/*.php .

# Clear all caches
# Verify pages work again
```

**Rollback Triggers:**
- Critical functionality broken
- Widespread user complaints
- Security issue discovered
- Performance degradation >50%

---

## 🚀 Phase 3: Next Batch (Week 2-3)

### Goal
Migrate and deploy 5 high-priority appointment pages

### Files to Migrate
1. ✅ **eos-appointments-view.php** (773 lines) - Main appointments list
2. ✅ **eos-appointment-page.php** (584 lines) - Appointment details
3. ✅ **eos-appointment-requests-view.php** (625 lines) - Appointment requests
4. ✅ **eos-mri-appointment-page.php** (321 lines) - MRI appointment details
5. ✅ **eos-mri-centers.php** (710 lines) - MRI centers list

### Timeline
- **Week 2:** Migrate files locally, test locally
- **Week 3:** Deploy to staging, test, deploy to production
- **Monitor:** 2-3 days after production deployment

### Process
1. Follow same development process as Phase 1
2. Test thoroughly on local environment
3. Deploy to staging for UAT
4. Deploy to production after approval
5. Monitor for 2-3 days

---

## 🚀 Phase 4: Patient Views (Week 4-5)

### Goal
Migrate patient-related pages

### Files
- eos-patients-view.php (877 lines)
- eos-patient-profile-page.php (945 lines)
- eos-emc-owner-patients-view.php (1,077 lines)
- eos-user-dashboard.php

---

## 🚀 Phase 5: Facilities & Providers (Week 6-7)

### Goal
Migrate facility and provider pages

### Files
- eos-providers-view.php
- eos-provider-profile.php (625 lines)
- eos-ptchiro-facility-profile.php (391 lines)
- eos-mri-facility-profile.php
- eos-single-office-location.php (450 lines)

---

## 🚀 Phase 6: Documents & Reports (Week 8-9)

### Goal
Migrate document and report pages

### Files
- eos-appointments-docs-view.php (494 lines)
- eos-missing-bills-appts-docs-view.php (428 lines)
- eos-missing-reco-appts-view.php (426 lines)
- eos-missing-reports-appts-docs-view.php (394 lines)
- eos-billing-hub-view.php (254 lines)

---

## 🚀 Phase 7: Remaining Pages (Week 10-12)

### Goal
Complete all remaining migrations

### Files
- All remaining specialized views
- Supporting components (as needed)
- Archive pages
- Less frequently used pages

---

## 📊 Success Metrics

### Per Phase
- [ ] All files deployed successfully
- [ ] No critical bugs reported
- [ ] Performance maintained or improved
- [ ] User feedback positive or neutral
- [ ] No rollbacks required

### Overall Project
- [ ] All 40+ files migrated
- [ ] Bootstrap CSS completely removed
- [ ] Tailwind CSS fully implemented
- [ ] No regression in functionality
- [ ] Improved maintainability
- [ ] Better responsive design

---

## 🆘 Support & Communication

### Escalation Path
1. **Developer** - First line of defense
2. **Tech Lead** - Critical issues
3. **Project Manager** - Business impact decisions
4. **Stakeholders** - Major rollback decisions

### Communication Channels
- **Deployment Notifications:** [Slack/Email channel]
- **Issue Reporting:** [Issue tracker/GitHub]
- **User Feedback:** [Support system]
- **Documentation:** [Confluence/Wiki]

### Deployment Notifications Template
```
🚀 Deployment Notice - EOS Tailwind Migration

Phase: [X]
Date: [YYYY-MM-DD]
Time: [HH:MM timezone]
Duration: [Expected duration]

Files Deployed:
- [filename 1]
- [filename 2]
- [filename 3]

Expected Impact: Minimal
Rollback Plan: Available

Contact: [Team member] for questions
```

---

## 📝 Lessons Learned

### After Each Phase
Document:
- What went well
- What could be improved
- Issues encountered
- Solutions implemented
- Time estimates vs actual
- User feedback summary

### Continuous Improvement
Update this rollout plan based on lessons learned from each phase.

---

## 🔄 Document History

| Date | Version | Changes | Author |
|------|---------|---------|--------|
| 2025-01-11 | 1.0 | Initial rollout plan | Development Team |

---

## 📞 Contacts

**Technical Lead:** [Name/Email]
**Project Manager:** [Name/Email]
**DevOps:** [Name/Email]
**QA Lead:** [Name/Email]

---

## 🔗 Related Documents

- [MIGRATION-STATUS.md](./MIGRATION-STATUS.md) - Track migration progress
- [BOOTSTRAP-ANALYSIS.md](./BOOTSTRAP-ANALYSIS.md) - Bootstrap removal findings
- [TESTING-CHECKLIST.md](./TESTING-CHECKLIST.md) - Detailed testing procedures
- [TROUBLESHOOTING.md](./TROUBLESHOOTING.md) - Common issues and solutions
