<?php include("database/db_conection.php");?>
<html>
<head>

    <title>
        Test
    </title>
	
	
	 <style> 
		td.details-control {
			background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_open.png') no-repeat center center;
			cursor: pointer;
		}
		tr.shown td.details-control {
			background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_close.png') no-repeat center center;
		}
    </style> 
	
	
	
	 <!-- Datatable core CSS -->	 
	 
   <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
   <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet">
   <link href="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.css" rel="stylesheet"> 
   
	<!-- Datatable core JS -->	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>	
	
</head>

<body>
<button id="btn-show-all-children" type="button">Expand All</button>
<button id="btn-hide-all-children" type="button">Collapse All</button>
<hr>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
             <?php
			 $get_columns="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='db_bt' AND `TABLE_NAME`='r2c1'";//select query for viewing users.
			 $run=mysqli_query($dbcon,$get_columns);//here run the sql query.
			 $i=0;
			 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
			 { $i++;?>
				  <th><?php echo $row[0];  ?></th>
			<?php if($i==10) break;
			 }
			 ?>        
        </tr>
    </thead>
    <tfoot>
        <tr>
            <?php
			 $get_columns="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='db_bt' AND `TABLE_NAME`='r2c1'";//select query for viewing users.
			 $run=mysqli_query($dbcon,$get_columns);//here run the sql query.
			 $i=0;
			 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
			 { $i++;?>
				  <th><?php echo $row[0];  ?></th>
			<?php if($i==10) break;
			 }
			 ?>    
        </tr>
    </tfoot>
    <tbody> 
	
       
      
            <?php
			 $get_column_values="SELECT `ID`,`BT_CIRCUIT_ID`,`CONTROL_REVENUE_BUNDLE_UNBUNDLE`,`CONTROL_CATEGORY _COST_REVENUE`,`GROUP_NAME`,`ACCOUNT`,`ACCOUNT_NUMBER`,`INVOICE_NUMBER`,`BILLED_TO_DATE`,`DUE_BY` FROM `r2c1` WHERE `ID`< 750";//select query for viewing users.
			 $run1=mysqli_query($dbcon,$get_column_values);//here run the sql query.
			 while($row1=mysqli_fetch_assoc($run1))//while look to fetch the result and store in a array $row.
			 { ?>  <tr>
					  <td><?php echo $row1["ID"];  ?></td>
					  <td><?php echo $row1["BT_CIRCUIT_ID"];?></td>
					  <td><?php echo $row1["BT_CIRCUIT_ID"];?></td>
					  <td><?php echo $row1["CONTROL_CATEGORY _COST_REVENUE"];  ?></td>
					  <td><?php echo $row1["GROUP_NAME"];  ?></td>
					  <td><?php echo $row1["ACCOUNT"];  ?></td>
					  <td><?php echo $row1["ACCOUNT_NUMBER"];  ?></td>
					  <td><?php echo $row1["INVOICE_NUMBER"];  ?></td>
					  <td><?php echo $row1["BILLED_TO_DATE"];  ?></td>
					  <td><?php echo $row1["DUE_BY"];  ?></td>  
				  </tr>
			
			<?php
			 }
			 ?>      
       		
    </tbody>
</table>
<!-- For Multiple tag javascript -->
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
	
	<script>
	$(document).ready(function (){
    var table = $('#example').DataTable({
        'responsive': true
    });

    // Handle click on "Expand All" button
    $('#btn-show-all-children').on('click', function(){
        // Expand row details
        table.rows(':not(.parent)').nodes().to$().find('td:first-child').trigger('click');
    });

    // Handle click on "Collapse All" button
    $('#btn-hide-all-children').on('click', function(){
        // Collapse row details
        table.rows('.parent').nodes().to$().find('td:first-child').trigger('click');
    });
});
	</script>
</body>

</html>

