<?php
// created: 2017-03-03 12:34:08
$dictionary["Thin_Sample_Lot"]["fields"]["aos_products_thin_sample_lot_1"] = array (
  'name' => 'aos_products_thin_sample_lot_1',
  'type' => 'link',
  'relationship' => 'aos_products_thin_sample_lot_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_THIN_SAMPLE_LOT_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_thin_sample_lot_1aos_products_ida',
);
$dictionary["Thin_Sample_Lot"]["fields"]["aos_products_thin_sample_lot_1_name"] = array (
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
);
$dictionary["Thin_Sample_Lot"]["fields"]["aos_products_thin_sample_lot_1aos_products_ida"] = array (
  'name' => 'aos_products_thin_sample_lot_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_thin_sample_lot_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_THIN_SAMPLE_LOT_1_FROM_THIN_SAMPLE_LOT_TITLE',
);
