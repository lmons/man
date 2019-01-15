<?php
// created: 2017-01-03 13:42:15
$dictionary["Terri_Territoire"]["fields"]["thin_cycleplans_terri_territoire"] = array (
  'name' => 'thin_cycleplans_terri_territoire',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_terri_territoire',
  'source' => 'non-db',
  'module' => 'Thin_CyclePlans',
  'bean_name' => 'Thin_CyclePlans',
  'vname' => 'LBL_THIN_CYCLEPLANS_TERRI_TERRITOIRE_FROM_THIN_CYCLEPLANS_TITLE',
  'id_name' => 'thin_cycleplans_terri_territoirethin_cycleplans_ida',
);
$dictionary["Terri_Territoire"]["fields"]["thin_cycleplans_terri_territoire_name"] = array (
  'name' => 'thin_cycleplans_terri_territoire_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_THIN_CYCLEPLANS_TERRI_TERRITOIRE_FROM_THIN_CYCLEPLANS_TITLE',
  'save' => true,
  'id_name' => 'thin_cycleplans_terri_territoirethin_cycleplans_ida',
  'link' => 'thin_cycleplans_terri_territoire',
  'table' => 'thin_cycleplans',
  'module' => 'Thin_CyclePlans',
  'rname' => 'name',
);
$dictionary["Terri_Territoire"]["fields"]["thin_cycleplans_terri_territoirethin_cycleplans_ida"] = array (
  'name' => 'thin_cycleplans_terri_territoirethin_cycleplans_ida',
  'type' => 'link',
  'relationship' => 'thin_cycleplans_terri_territoire',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_THIN_CYCLEPLANS_TERRI_TERRITOIRE_FROM_TERRI_TERRITOIRE_TITLE',
);
