<?php
    /* Map Rows and Loop Through Them */
	include("database/db_conection.php");
    $rows   = array_map('str_getcsv', file('file.csv'));
    $header = array_shift($rows);
    $csv    = array();
    foreach($rows as $row) {
        $csv[] = array_combine($header, $row);		
    }
	$out = array_values($csv);
    json_encode($out);	
	/* CHECK CSV FILE BEFORE INSERTING DATA */
	
	//echo json_encode($out[0]["Start Date "]);	
	
	/* `INFORMATION_SCHEMA`.`COLUMNS` */
	
	/* Make sure [options] before parsing csv*/
$COLUMNS = array(
  array('COLUMN_NAME' => 'bt_circuit_id'),
  array('COLUMN_NAME' => 'control_revenue_bundle_unbundle'),
  array('COLUMN_NAME' => 'control_category_cost_revenue'),
  array('COLUMN_NAME' => 'group_name'),
  array('COLUMN_NAME' => 'account'),
  array('COLUMN_NAME' => 'account_number'),
  array('COLUMN_NAME' => 'invoice_number'),
  array('COLUMN_NAME' => 'billed_to_date'),
  array('COLUMN_NAME' => 'due_by'),
  array('COLUMN_NAME' => 'psn'),
  array('COLUMN_NAME' => 'bill_structure_1'),
  array('COLUMN_NAME' => 'bill_structure_2'),
  array('COLUMN_NAME' => 'bill_structure_3'),
  array('COLUMN_NAME' => 'bill_structure_4'),
  array('COLUMN_NAME' => 'bill_structure_5'),
  array('COLUMN_NAME' => 'bill_structure_6'),
  array('COLUMN_NAME' => 'bill_structure_7'),
  array('COLUMN_NAME' => 'bill_structure_8'),
  array('COLUMN_NAME' => 'bill_structure_9'),
  array('COLUMN_NAME' => 'bill_structure_10'),
  array('COLUMN_NAME' => 'country'),
  array('COLUMN_NAME' => 'city_state'),
  array('COLUMN_NAME' => 'a site address'),
  array('COLUMN_NAME' => 'z site address'),
  array('COLUMN_NAME' => 'node_id_bt_pop'),
  array('COLUMN_NAME' => 'product'),
  array('COLUMN_NAME' => 'service_category'),
  array('COLUMN_NAME' => 'capacity_model'),
  array('COLUMN_NAME' => 'classic_site_id'),
  array('COLUMN_NAME' => 'inventory_description'),
  array('COLUMN_NAME' => 'start_date'),
  array('COLUMN_NAME' => 'end_date'),
  array('COLUMN_NAME' => 'service_period'),
  array('COLUMN_NAME' => 'invoice_amount'),
  array('COLUMN_NAME' => 'currency'),
  array('COLUMN_NAME' => 'forex_rate'),
  array('COLUMN_NAME' => 'item_price_mrc'),
  array('COLUMN_NAME' => 'item_price_mrc_usd'),
  array('COLUMN_NAME' => 'actual_charge'),
  array('COLUMN_NAME' => 'actual_charge_usd'),
  array('COLUMN_NAME' => 'tax'),
  array('COLUMN_NAME' => 'discount'),
  array('COLUMN_NAME' => 'usf_code'),
  array('COLUMN_NAME' => 'usf%'),
  array('COLUMN_NAME' => 'actual_usf_charge'),
  array('COLUMN_NAME' => 'actual_usf_charge_usd'),
  array('COLUMN_NAME' => 'actual_supplier_cost_usdrge'),
  array('COLUMN_NAME' => 'revenue_derived_charge_usd'),
  array('COLUMN_NAME' => 'cost_derived_charge_usd'),
  array('COLUMN_NAME' => 'gross_margin_usd'),
  array('COLUMN_NAME' => 'gross_margin_%'),
  array('COLUMN_NAME' => 'revenue_derived_recovery_usf'),
  array('COLUMN_NAME' => 'cost_derived_charge_usf'),
  array('COLUMN_NAME' => 'usf_delta_usd'),
  array('COLUMN_NAME' => 'supplier_name'),
  array('COLUMN_NAME' => 'supplier_circuit_id_1'),
  array('COLUMN_NAME' => 'supplier_circuit_id_2'),
  array('COLUMN_NAME' => 'supplier_ban_1'),
  array('COLUMN_NAME' => 'supplier_ban_2'),
  array('COLUMN_NAME' => 'tax_exempt'),
  array('COLUMN_NAME' => 'usf_exempt'),
  array('COLUMN_NAME' => 'usf_touching'),
  array('COLUMN_NAME' => 'comments'),
  array('COLUMN_NAME' => 'other_1'),
  array('COLUMN_NAME' => 'other_2'),
  array('COLUMN_NAME' => 'other_3'),
  array('COLUMN_NAME' => 'other_4'),
  array('COLUMN_NAME' => 'other_5'),
  array('COLUMN_NAME' => 'other_6'),
  array('COLUMN_NAME' => 'other_7'),
  array('COLUMN_NAME' => 'other_8')
);

/*
127.0.0.1/DB_BT/COLUMNS/		HTTP://LOCALHOST/PHPMYADMIN/TBL_SQL.PHP?DB=DB_BT&TABLE=R2C
 SHOWING ROWS 0 - 70 (71 TOTAL, QUERY TOOK 0.0103 SECONDS.)

SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='DB_BT' 
    AND `TABLE_NAME`='R2C'


COLUMN_NAME	
BT_CIRCUIT_ID	
CONTROL_REVENUE_BUNDLE_UNBUNDLE	
CONTROL_CATEGORY_COST_REVENUE	
GROUP_NAME	
ACCOUNT	
ACCOUNT_NUMBER	
INVOICE_NUMBER	
BILLED_TO_DATE	
DUE_BY	
PSN	
BILL_STRUCTURE_1	
BILL_STRUCTURE_2	
BILL_STRUCTURE_3	
BILL_STRUCTURE_4	
BILL_STRUCTURE_5	
BILL_STRUCTURE_6	
BILL_STRUCTURE_7	
BILL_STRUCTURE_8	
BILL_STRUCTURE_9	
BILL_STRUCTURE_10	
COUNTRY	
CITY_STATE	
A_SITE_ADDRESS	
Z_SITE_ADDRESS	
NODE_ID_BT_POP	
PRODUCT	
SERVICE_CATEGORY	
CAPACITY_MODEL	
CLASSIC_SITE_ID	
INVENTORY_DESCRIPTION	
START_DATE	
END_DATE	
SERVICE_PERIOD	
INVOICE_AMOUNT	
CURRENCY	
FOREX_RATE	
ITEM_PRICE_MRC	
ITEM_PRICE_MRC_USD	
ACTUAL_CHARGE	
ACTUAL_CHARGE_USD	
TAX	
DISCOUNT	
USF_CODE	
USF_PERCENTAGE	
ACTUAL_USF_CHARGE	
ACTUAL_USF_CHARGE_USD	
ACTUAL_SUPPLIER_COST_USDRGE	
REVENUE_DERIVED_CHARGE_USD	
COST_DERIVED_CHARGE_USD	
GROSS_MARGIN_USD	
GROSS_MARGIN_PERCENTAGE	
REVENUE_DERIVED_RECOVERY_USF	
COST_DERIVED_CHARGE_USF	
USF_DELTA_USD	
SUPPLIER_NAME	
SUPPLIER_CIRCUIT_ID_1	
SUPPLIER_CIRCUIT_ID_2	
SUPPLIER_BAN_1	
SUPPLIER_BAN_2	
TAX_EXEMPT	
USF_EXEMPT	
USF_TOUCHING	
COMMENTS	
OTHER_1	
OTHER_2	
OTHER_3	
OTHER_4	
OTHER_5	
OTHER_6	
OTHER_7	
OTHER_8	

*/

	
	
	
	
	for ($i = 0; $i < count($csv); $i++) {		
		$sql= "INSERT INTO r2c(bt_circuit_id,control_revenue_bundle_unbundle, control_category_cost_revenue,group_name,account,account_number,invoice_number,billed_to_date,due_by,psn,bill_structure_1,bill_structure_2,bill_structure_3,bill_structure_4,bill_structure_5,bill_structure_6,bill_structure_7,bill_structure_8,bill_structure_9,bill_structure_10,country,city_state,a_site_address,z_site_address,node_id_bt_pop,product,service_category,capacity_model, classic_site_id, inventory_description, start_date, end_date, service_period, invoice_amount, currency, forex_rate, item_price_mrc, item_price_mrc_usd, actual_charge, actual_charge_usd, tax, discount, usf_code, usf_percentage, actual_usf_charge, actual_usf_charge_usd, actual_supplier_cost_usdrge, revenue_derived_charge_usd, cost_derived_charge_usd, gross_margin_usd, gross_margin_percentage, revenue_derived_recovery_usf, cost_derived_charge_usf, usf_delta_usd, supplier_name, supplier_circuit_id_1, supplier_circuit_id_2, supplier_ban_1, supplier_ban_2, tax_exempt, usf_exempt, usf_touching, comments, other_1, other_2, other_3, other_4, other_5, other_6, other_7, other_8) 
					VALUES ("..",'".."','".."','".."','".."','".."',"..","..","..",'".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."',"..","..","..","..",'".."',"..","..","..","..","..","..","..","..","..","..","..","..",'".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."','".."')";	
		$result=mysqli_query($dbcon,$sql);
		if($i%50==0){
			sleep(3);
		}
		
	}
	
	
	
	
	
?>