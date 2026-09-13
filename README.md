# Activities with Contact Custom Fields Report (au.com.agileware.activitycustomfieldsreport)

This is a [CiviCRM](https://civicrm.org) extension that adds a new **report template**: the
"Activities with Contact Custom Fields Report". It extends CiviCRM's standard Activity report so
that it can also filter and display **custom fields belonging to the Individual contact** involved
in each Activity (as Source, Assignee, or Target), alongside the custom fields already available
on the Activity itself.

This solves a limitation of the core CiviCRM Activity report, which does not let you filter or
display contact-level custom field data (e.g. an Individual's custom "Member Type" or "Region"
field) next to Activity details in the same report.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Usage

The report is added as a standard CiviCRM report template, not a new menu item, so it is used the
same way as any other CiviCRM report:

1. Go to **Reports > All Report Templates** (or click **New Report** and search for
   "Activities with Contact Custom Fields Report").
2. Create a new report instance from the template. This adds a normal, savable/schedulable report
   instance that appears under the Reports menu like any other report.
3. Configure the **Columns**, **Filters**, **Sorting** and **Group By** tabs as required, then run
   or save the report.

Notable features of the report:

* **Custom fields** — Because the report's custom-data groups extend both `Activity` and
  `Individual`, any active custom fields for those entities can be added as columns or filters
  from the *Columns*/*Filters* tabs.
* **Source, Assignee and Target contacts** — Separate columns and filters are provided for the
  Activity's Source, Assignee, and Target contact(s), including name, email, and address fields.
  Contact names link through to the Contact Summary page (respecting the current user's contact
  ACLs).
* **Limit To Current User** filter — restricts results to activities involving the logged-in user.
* **Add to group** — selected result rows (the Target contact(s) of matching activities) can be
  added to a CiviCRM group directly from the report, using the standard "Add All Contact(s) to
  Group" report action.
* **Overdue activities** — rows for overdue, not-yet-completed activities are highlighted.
* **CiviCampaign integration** *(only if the CiviCampaign component is enabled)* — adds
  **Campaign**, **Survey Result**, and **Engagement Index** columns/filters.
* **CiviCase integration** *(only if the CiviCase component is enabled)* — adds an
  **Include Case Activities** filter (visible to users with the `access all cases and activities`
  permission) so Case-linked activities can optionally be included in results.

## Special configuration requirements

None. The extension requires no settings page, API keys, or one-time setup — once installed and
enabled, the report template is immediately available from **Reports > All Report Templates**.

The following standard CiviCRM permissions affect what the report shows for a given user:

* `access CiviReport` — required to view/run reports at all.
* `view all contacts` (or contact-level ACLs) — controls which Source/Assignee/Target contacts are
  visible in results; users without it only see contacts they have permission to view.
* `access CiviCampaign` / `access CiviCase` — control whether the Campaign/Survey/Engagement and
  Case Activity options described above are shown, and are only relevant if those components are
  enabled.

## Requirements

* CiviCRM 5.51+

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin
Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this
extension and install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/agileware/au.com.agileware.activitycustomfieldsreport.git
cv en activitycustomfieldsreport
```

# About the Authors

This CiviCRM extension was developed by the team at
[Agileware](https://agileware.com.au).

[Agileware](https://agileware.com.au) provide a range of CiviCRM
services including:

* CiviCRM migration
* CiviCRM integration
* CiviCRM extension development
* CiviCRM support
* CiviCRM hosting
* CiviCRM remote training services

Support your Australian [CiviCRM](https://civicrm.org) developers,
[contact Agileware](https://agileware.com.au/contact) today!

![Agileware](logo/agileware-logo.png)
