<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Activitycustomfieldsreport_Form_Report_ACF',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'Activities with Contact Custom Fields Report',
      'description' => 'Extended Activity report with support of filtering/showing custom fields of Individual contact.',
      'class_name' => 'CRM_Activitycustomfieldsreport_Form_Report_ACF',
      'report_url' => 'au.com.agileware.activitycustomfieldsreport/acf',
      'component' => '',
    ),
  ),
);