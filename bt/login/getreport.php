<?php

 include("database/db_conection.php");	
 
 
/*
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
*/

 
/*

// For checking objetc use this class 
class queryobj
 {
      
      
	
		public $CONTROL_REVENUE_BUNDLE_UNBUNDLE=[];
		public $CONTROL_CATEGORY_COST_REVENUE=[];
		public $GROUP_NAME=[];
		public $ACCOUNT =[];
		public $ACCOUNT_NUMBER =[];
		public $INVOICE_NUMBER =[];
		public $COUNTRY =[];
		public $CITY_STATE =[];
		public $A_SITE_ADDRESS=[];
		public $PRODUCT=[];
		public $SERVICE_CATEGORY=[];
		public $CLASSIC_SITE_ID=[];
		public $SERVICE_PERIOD=[];
		public $USF_CODE=[];
		public $SUPPLIER_NAME=[];
		public $SUPPLIER_CIRCUIT_ID_1=[];
		public $SUPPLIER_CIRCUIT_ID_2=[];
		public $SUPPLIER_BAN_1=[];
		public $SUPPLIER_BAN_2=[];	  
 } 
 $f=new queryobj();
echo json_encode($f,true);
$date = str_replace('/', '-', $dob);
$DOB = date('Y-m-d', strtotime($date));
*/	




//Get Query object from UI 


if( isset($_POST['queryobj']) )
{
		$jsondata =$_POST['queryobj'];
		$queryobj=json_decode($jsondata ,true);  
		print json_encode($queryobj);
		exit;
		$control_revenue_bundle_unbundle=$queryobj['CONTROL_REVENUE_BUNDLE_UNBUNDLE'];
		$control_category_cost_revenue=$queryobj['CONTROL_CATEGORY_COST_REVENUE'];
		$group_name=$queryobj['GROUP_NAME'];
		$account=$queryobj['ACCOUNT'];
		$account_number=$queryobj['ACCOUNT_NUMBER'];
		$invoice_number=$queryobj['INVOICE_NUMBER'];
		$country=$queryobj['COUNTRY'];
		$city_state=$queryobj['CITY_STATE'];
		$a_site_address=$queryobj['A_SITE_ADDRESS'];
		$product=$queryobj['PRODUCT'];
		$service_category=$queryobj['SERVICE_CATEGORY'];
		$classic_site_id=$queryobj['CLASSIC_SITE_ID'];
		$service_period=$queryobj['SERVICE_PERIOD'];
		$usf_code=$queryobj['USF_CODE'];
		$supplier_name=$queryobj['SUPPLIER_NAME'];
		$supplier_circuit_id_1=$queryobj['SUPPLIER_CIRCUIT_ID_1'];
		$supplier_circuit_id_2=$queryobj['SUPPLIER_CIRCUIT_ID_2'];
		$supplier_ban_1=$queryobj['SUPPLIER_BAN_1'];	
		$supplier_ban_2=$queryobj['SUPPLIER_BAN_2'];
		
		$query = "SELECT * FROM r2c ";
		
		if(!empty($control_revenue_bundle_unbundle)||!empty($control_category_cost_revenue)||!empty($group_name)||!empty($account)||!empty($account_number)||!empty($invoice_number)||!empty($country)||!empty($city_state)||!empty($a_site_address)||!empty($product)||!empty($service_category)||!empty($classic_site_id)||!empty($service_period)||!empty($usf_code)||!empty($supplier_name)||!empty($supplier_circuit_id_1)||!empty($supplier_circuit_id_2)||!empty($supplier_ban_1)||!empty($supplier_ban_2)){
			
			$query .= " WHERE ";
			
		} else {
			
			$status=array("STATUS"=>0,"ERROR"=>"PLEASE SEND QUERY PARAMS ");		                
			echo  json_encode($status);
			exit;
			
		}
		//buildQuery($arrayobjval,$arrayname,$query,$type =1)
		$query .= (!empty($control_revenue_bundle_unbundle) ) ? buildQuery($control_revenue_bundle_unbundle,"control_revenue_bundle_unbundle",$query,1) : "";
		$query .= (!empty($control_category_cost_revenue) ) ? buildQuery($control_category_cost_revenue,"control_category_cost_revenue",$query,1) : "";
		$query .= (!empty($group_name) ) ? buildQuery($group_name,"group_name",$query,1) : "";
		$query .= (!empty($account) ) ? buildQuery($account,"account",$query,1) : "";
		$query .= (!empty($account_number) ) ? buildQuery($account_number,"account_number",$query,1) : "";
		$query .= (!empty($invoice_number) ) ? buildQuery($invoice_number,"invoice_number",$query,0) : "";
		$query .= (!empty($country) ) ? buildQuery($country,"country",$query,1) : "";
		$query .= (!empty($city_state) ) ? buildQuery($city_state,"city_state",$query,1) : "";
		$query .= (!empty($a_site_address) ) ? buildQuery($a_site_address,"a_site_address",$query,1) : "";
		$query .= (!empty($product) ) ? buildQuery($product,"product",$query,1) : "";
		$query .= (!empty($service_category) ) ? buildQuery($service_category,"service_category",$query,1) : "";
		$query .= (!empty($classic_site_id) ) ? buildQuery($classic_site_id,"classic_site_id",$query,1) : "";
		$query .= (!empty($service_period) ) ? buildQuery($service_period,"service_period",$query,0) : "";
		$query .= (!empty($usf_code) ) ? buildQuery($usf_code,"usf_code",$query,0) : "";
		$query .= (!empty($supplier_name) ) ? buildQuery($supplier_name,"supplier_name",$query,1) : "";
		$query .= (!empty($supplier_circuit_id_1) ) ? buildQuery($supplier_circuit_id_1,"supplier_circuit_id_1",$query,1) : "";
		$query .= (!empty($supplier_circuit_id_2) ) ? buildQuery($supplier_circuit_id_2,"supplier_circuit_id_2",$query,1) : "";
		$query .= (!empty($supplier_ban_1) ) ? buildQuery($supplier_ban_1,"supplier_ban_1",$query,1) : "";
		$query .= (!empty($supplier_ban_2) ) ? buildQuery($supplier_ban_2,"supplier_ban_2",$query,1) : "";		
		
		echo  $query ;
		exit;
		
		
		
		$result = mysqli_query($query);
		$num_rows = mysqli_num_rows($result);
		
		$data =[];
		
		if($num_rows>0)
		{
				while($row = mysqli_fetch_array($result, MYSQL_ASSOC))	{
					$data []=$row;  
				}
			json_encode($data);
			exit;
		}
		else
		{
				$status=array("STATUS"=>0,"NO RECORDS FOUND");		                
	     		echo  json_encode($status);		 
		}	
				
		
}
else
{

			$status=array("STATUS"=>0,"ERROR"=>"PLEASE SEND QUERY PARAMS ");		                
			echo  json_encode($status);

}




function buildQuery($arrayobjval,$arrayname,$query,$type =1)
{  	
	$operator =(count($arrayobjval)>1)?'IN ':' = ';
	if (strpos($query, 'AND') !== false) {
		if($type == 0){			
			$list = "". implode(",", $arrayobjval) ."";		
			if($operator == '='){
				return " AND ".$arrayname.$operator.$list;			
			} else {
				return " AND ".$arrayname.$operator. "(".$list.")";			
			}				
				  
		}else{
			$list = "'". implode("', '", $arrayobjval) ."'";
			if($operator == '='){
				return " AND ".$arrayname.$operator.$list;			
			} else {
				return " AND ".$arrayname.$operator. "(".$list.")";			
			}			
		}  
	} else {
		if($type == 0){
			$list = "". implode(",", $arrayobjval) ."";		
			if($operator == '='){
				return $arrayname.$operator.$list;			
			} else {
				return $arrayname.$operator. "(".$list.")";			
			}	
		}else{
			$list = "'". implode("', '", $arrayobjval) ."'";
			if($operator == '='){
				return $arrayname.$operator.$list;			
			} else {
				return $arrayname.$operator. "(".$list.")";			
			}	
		}  
	}
}


 
 ?>
 
 


