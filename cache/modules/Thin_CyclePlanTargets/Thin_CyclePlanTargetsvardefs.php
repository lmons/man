<?php 
 $GLOBALS["dictionary"]["Thin_CyclePlanTargets"]=array (
  'table' => 'thin_cycleplantargets',
  'audited' => true,
  'inline_edit' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'thin_cycleplantargets_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'thin_cycleplantargets_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'thin_cycleplantargets_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_thin_cycleplantargets',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'submitted_calls' => 
    array (
      'required' => false,
      'name' => 'submitted_calls',
      'vname' => 'LBL_SUBMITTED_CALLS',
      'type' => 'int',
      'massupdate' => 0,
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'call_frequency_target' => 
    array (
      'required' => true,
      'name' => 'call_frequency_target',
      'vname' => 'LBL_CALL_FREQUENCY_TARGET',
      'type' => 'int',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'customer_tier' => 
    array (
      'required' => true,
      'name' => 'customer_tier',
      'vname' => 'LBL_CUSTOMER_TIER',
      'type' => 'enum',
      'massupdate' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'thin_customer_tier_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'active__c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'active',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'active__c',
      'vname' => 'LBL_ACTIVE_',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Thin_CyclePlanTargetsactive__c',
      'custom_module' => 'Thin_CyclePlanTargets',
    ),
    'active_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'active',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'active_c',
      'vname' => 'LBL_ACTIVE',
      'type' => 'enum',
      'massupdate' => '0',
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'active_cycleplan_list',
      'studio' => 'visible',
      'dependency' => false,
      'id' => 'Thin_CyclePlanTargetsactive_c',
      'custom_module' => 'Thin_CyclePlanTargets',
    ),
    'accounts_non_db' => 
    array (
      'name' => 'accounts_non_db',
      'type' => 'varchar',
      'default' => '',
      'vname' => 'LBL_ACCOUNTS',
      'reportable' => true,
      'source' => 'non-db',
    ),
    'specialty_non_db' => 
    array (
      'name' => 'specialty_non_db',
      'type' => 'varchar',
      'default' => '',
      'vname' => 'LBL_SPECIALTY',
      'reportable' => true,
      'source' => 'non-db',
    ),
    'brick_non_db' => 
    array (
      'name' => 'brick_non_db',
      'type' => 'varchar',
      'default' => '',
      'vname' => 'LBL_BRICK',
      'reportable' => true,
      'source' => 'non-db',
    ),
    'check_contact_for_calls_non_db' => 
    array (
      'name' => 'check_contact_for_calls_non_db',
      'type' => 'varchar',
      'default' => '',
      'vname' => 'LBL_SELECT_TARGET',
      'reportable' => true,
      'source' => 'non-db',
    ),
    'week_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Week',
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'week_c',
      'vname' => 'LBL_WEEK',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Thin_CyclePlanTargetsweek_c',
      'custom_module' => 'Thin_CyclePlanTargets',
    ),
    'thin_cycleplans_thin_cycleplantargets' => 
    array (
      'name' => 'thin_cycleplans_thin_cycleplantargets',
      'type' => 'link',
      'relationship' => 'thin_cycleplans_thin_cycleplantargets',
      'source' => 'non-db',
      'module' => 'Thin_CyclePlans',
      'bean_name' => 'Thin_CyclePlans',
      'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_FROM_THIN_CYCLEPLANS_TITLE',
      'id_name' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida',
    ),
    'thin_cycleplans_thin_cycleplantargets_name' => 
    array (
      'name' => 'thin_cycleplans_thin_cycleplantargets_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_FROM_THIN_CYCLEPLANS_TITLE',
      'save' => true,
      'id_name' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida',
      'link' => 'thin_cycleplans_thin_cycleplantargets',
      'table' => 'thin_cycleplans',
      'module' => 'Thin_CyclePlans',
      'rname' => 'name',
    ),
    'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida' => 
    array (
      'name' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida',
      'type' => 'link',
      'relationship' => 'thin_cycleplans_thin_cycleplantargets',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_THIN_CYCLEPLANS_THIN_CYCLEPLANTARGETS_FROM_THIN_CYCLEPLANTARGETS_TITLE',
    ),
    'thin_cycleplantargets_contacts' => 
    array (
      'name' => 'thin_cycleplantargets_contacts',
      'type' => 'link',
      'relationship' => 'thin_cycleplantargets_contacts',
      'source' => 'non-db',
      'module' => 'Contacts',
      'bean_name' => 'Contact',
      'vname' => 'LBL_THIN_CYCLEPLANTARGETS_CONTACTS_FROM_CONTACTS_TITLE',
      'id_name' => 'thin_cycleplantargets_contactscontacts_ida',
    ),
    'thin_cycleplantargets_contacts_name' => 
    array (
      'name' => 'thin_cycleplantargets_contacts_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_THIN_CYCLEPLANTARGETS_CONTACTS_FROM_CONTACTS_TITLE',
      'save' => true,
      'id_name' => 'thin_cycleplantargets_contactscontacts_ida',
      'link' => 'thin_cycleplantargets_contacts',
      'table' => 'contacts',
      'module' => 'Contacts',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
    ),
    'thin_cycleplantargets_contactscontacts_ida' => 
    array (
      'name' => 'thin_cycleplantargets_contactscontacts_ida',
      'type' => 'link',
      'relationship' => 'thin_cycleplantargets_contacts',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_THIN_CYCLEPLANTARGETS_CONTACTS_FROM_THIN_CYCLEPLANTARGETS_TITLE',
    ),
    'accounts_thin_cycleplantargets_1' => 
    array (
      'name' => 'accounts_thin_cycleplantargets_1',
      'type' => 'link',
      'relationship' => 'accounts_thin_cycleplantargets_1',
      'source' => 'non-db',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_1_FROM_ACCOUNTS_TITLE',
      'id_name' => 'accounts_thin_cycleplantargets_1accounts_ida',
    ),
    'accounts_thin_cycleplantargets_1_name' => 
    array (
      'name' => 'accounts_thin_cycleplantargets_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_1_FROM_ACCOUNTS_TITLE',
      'save' => true,
      'id_name' => 'accounts_thin_cycleplantargets_1accounts_ida',
      'link' => 'accounts_thin_cycleplantargets_1',
      'table' => 'accounts',
      'module' => 'Accounts',
      'rname' => 'name',
    ),
    'accounts_thin_cycleplantargets_1accounts_ida' => 
    array (
      'name' => 'accounts_thin_cycleplantargets_1accounts_ida',
      'type' => 'link',
      'relationship' => 'accounts_thin_cycleplantargets_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_1_FROM_THIN_CYCLEPLANTARGETS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'thin_cycleplantargets_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_CyclePlanTargets',
      'rhs_table' => 'thin_cycleplantargets',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'thin_cycleplantargets_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_CyclePlanTargets',
      'rhs_table' => 'thin_cycleplantargets',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'thin_cycleplantargets_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_CyclePlanTargets',
      'rhs_table' => 'thin_cycleplantargets',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_thin_cycleplantargets' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_CyclePlanTargets',
      'rhs_table' => 'thin_cycleplantargets',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Thin_CyclePlanTargets',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'thin_cycleplantargetspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => true,
);