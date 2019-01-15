<?php 
 $GLOBALS["dictionary"]["Thin_Sample_Lot"]=array (
  'table' => 'thin_sample_lot',
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
      'relationship' => 'thin_sample_lot_created_by',
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
      'relationship' => 'thin_sample_lot_modified_user',
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
      'relationship' => 'thin_sample_lot_assigned_user',
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
      'relationship' => 'securitygroups_thin_sample_lot',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'calls_thin_sample_lot_1' => 
    array (
      'name' => 'calls_thin_sample_lot_1',
      'type' => 'link',
      'relationship' => 'calls_thin_sample_lot_1',
      'source' => 'non-db',
      'module' => 'Calls',
      'bean_name' => 'Call',
      'vname' => 'LBL_CALLS_THIN_SAMPLE_LOT_1_FROM_CALLS_TITLE',
      'id_name' => 'calls_thin_sample_lot_1calls_ida',
    ),
    'calls_thin_sample_lot_1_name' => 
    array (
      'name' => 'calls_thin_sample_lot_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS_THIN_SAMPLE_LOT_1_FROM_CALLS_TITLE',
      'save' => true,
      'id_name' => 'calls_thin_sample_lot_1calls_ida',
      'link' => 'calls_thin_sample_lot_1',
      'table' => 'calls',
      'module' => 'Calls',
      'rname' => 'name',
    ),
    'calls_thin_sample_lot_1calls_ida' => 
    array (
      'name' => 'calls_thin_sample_lot_1calls_ida',
      'type' => 'link',
      'relationship' => 'calls_thin_sample_lot_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_CALLS_THIN_SAMPLE_LOT_1_FROM_THIN_SAMPLE_LOT_TITLE',
    ),
    'quantity_non_db' => 
    array (
      'name' => 'quantity_non_db',
      'type' => 'varchar',
      'default' => '',
      'vname' => 'LBL_CALLS_THIN_SAMPLE_LOT_1_QUANTITY',
      'reportable' => true,
      'source' => 'non-db',
    ),
    'expiration_date_c' => 
    array (
      'inline_edit' => '1',
      'options' => 'date_range_search_dom',
      'labelValue' => 'Expiration Date',
      'enable_range_search' => '1',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'expiration_date_c',
      'vname' => 'LBL_EXPIRATION_DATE',
      'type' => 'date',
      'massupdate' => '1',
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
      'size' => '20',
      'id' => 'Thin_Sample_Lotexpiration_date_c',
      'custom_module' => 'Thin_Sample_Lot',
    ),
    'active_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Active',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'active_c',
      'vname' => 'LBL_ACTIVE',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '0',
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
      'id' => 'Thin_Sample_Lotactive_c',
      'custom_module' => 'Thin_Sample_Lot',
    ),
    'aos_products_thin_sample_lot_1' => 
    array (
      'name' => 'aos_products_thin_sample_lot_1',
      'type' => 'link',
      'relationship' => 'aos_products_thin_sample_lot_1',
      'source' => 'non-db',
      'module' => 'AOS_Products',
      'bean_name' => 'AOS_Products',
      'vname' => 'LBL_AOS_PRODUCTS_THIN_SAMPLE_LOT_1_FROM_AOS_PRODUCTS_TITLE',
      'id_name' => 'aos_products_thin_sample_lot_1aos_products_ida',
    ),
    'aos_products_thin_sample_lot_1_name' => 
    array (
      'name' => 'aos_products_thin_sample_lot_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_AOS_PRODUCTS_THIN_SAMPLE_LOT_1_FROM_AOS_PRODUCTS_TITLE',
      'save' => true,
      'id_name' => 'aos_products_thin_sample_lot_1aos_products_ida',
      'link' => 'aos_products_thin_sample_lot_1',
      'table' => 'aos_products',
      'module' => 'AOS_Products',
      'rname' => 'name',
    ),
    'aos_products_thin_sample_lot_1aos_products_ida' => 
    array (
      'name' => 'aos_products_thin_sample_lot_1aos_products_ida',
      'type' => 'link',
      'relationship' => 'aos_products_thin_sample_lot_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_AOS_PRODUCTS_THIN_SAMPLE_LOT_1_FROM_THIN_SAMPLE_LOT_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'thin_sample_lot_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_Sample_Lot',
      'rhs_table' => 'thin_sample_lot',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'thin_sample_lot_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_Sample_Lot',
      'rhs_table' => 'thin_sample_lot',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'thin_sample_lot_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_Sample_Lot',
      'rhs_table' => 'thin_sample_lot',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_thin_sample_lot' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'Thin_Sample_Lot',
      'rhs_table' => 'thin_sample_lot',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Thin_Sample_Lot',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'thin_sample_lotpk',
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