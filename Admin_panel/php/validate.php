<?php
include_once('../db_connect/db.php');

$invoice_id = $_POST['invoice_id'];
$r = mysqli_query($con, "SELECT invoice_id  FROM invoices where invoice_id='$invoice_id' AND payment_status ='0' ");
	if(mysqli_num_rows($r) > 0 )
	{
	    $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
	    $invoice_id = $row['invoice_id'];
	    echo $invoice_id;
	}
	else
	{
            echo '2';
			//$output = "<span class='badge badge-danger'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid Invoice ID...... Please check the invoice ID</span>";
	}

	echo $output;
?>
