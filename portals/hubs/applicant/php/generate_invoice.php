<?php
/* **************************************************************************
** This page   collects user id and pass it to invoice generation methods
**
*****************************************************************************/

//here hf is hostel fee
//sf is school fee
//rf is result fee


session_start();

include_once('../../../db_connect/db.php');
include_once('../functions.php');

if(isset($_SESSION['applicant_id'])){
	$applicant_id=$_SESSION['applicant_id'];


	//collect what the payment is for
	//$payment_for = $_GET['for'];

	//collect pay to
//	$invoice_to = $_GET['invoice_to'];








	//get current semester
//	$current_semester = get_current_semester($con, $id = 1);


	//get current session
	 $current_session = get_current_session_title($con, $id= 1);









		//invoice type
	    $invoice_type = 0;  //1- application fee


	   // $programme_type = $school_id; //programme type
	//	$department = $department_applied_for; //department
	//	$programme  = $programme_applied_for;//programme
    $programme_type = get_user_programme_type_applied_for($con, $applicant_id); //programme type
    		$department = get_user_department_applied_for($con, $applicant_id); //department
    		$programme  = get_user_programme_applied_for($con, $applicant_id);//programme



		//flip the gentleman back if he has not finish application process
		if($programme_type == '0' || $department == '0' || $programme == '0')
		{
			$msg = "Please make sure you complete your application process before making payment.";
			  //head to same page saying that not successful
			header("Location: dashboard.php?sms=payments&error=".urlencode($msg)."&qlk=".md5(8)."");

			exit();
		}




	  //collect other params
	  $title = get_application_fee_title($con,$programme_type,$department,$programme);
	  $description = get_application_fee_desc($con,$programme_type,$department,$programme);
	  $total_amount = get_application_fee_total_amount($con,$programme_type,$department,$programme);
	  $amount =  get_application_fee_amount($con,$programme_type,$department,$programme);
	  $credit = get_invoice_credit($total_amount, $amount); //pass total anmount , amount paid
	  $pay_to = 'OFUSWARE SMS <br>';//SKYE BANK ACCT: 1771647318



	  //flip the gentleman back if he has not finish application process
		if($amount < 10000 || $total_amount < 10000 )
		{
			$msg = "Please make sure you complete your application process before making payment.";
			  //head to same page saying that not successful
			header("Location: dashboard.php?sms=payments&error=".urlencode($msg)."&qlk=".md5(8)."");

			exit();
		}



	  $invoice_for  = '0';


	  //insert into the invoice
	   $q = "INSERT INTO `invoices`(`id`, `invoice_type`,`invoice_to`, `pay_to`,`invoice_for`,`title`, `description`, `amount`,`total_amount`, `session`,`credit`, `date_added`, `due_date`)
		   VALUES (NULL, '$invoice_type','$applicant_id','$pay_to','$invoice_for', '$title','$description','$amount','$total_amount','$current_session','$credit',NOW(),NOW())";


	   $r = mysqli_query($con,$q);


	  if(mysqli_affected_rows($con))
	  {

		  //get id of last inserted value
		 $id = mysqli_insert_id($con);

     //generate invoice id and show the invoice
      $generated = generate_invoice_id($con, $id, $user, $invoice_type);
     //set the invoice for to be zero since we are paying for application fee




		  if($generated =='')
		  {
			  $msg = "Invoice not generated due to system error, we are sorry for the inconvenience.";
			  //head to same page saying that not successful
			  header("Location: dashboard.php?act=application_fee_payments&error=".urlencode($msg)."&qlk=".md5(8)."");


		  }
		  else
		  {
			  $msg = "Invoice generated successfully. Thank you!";

			  //head to invoice page
			  header("Location: dashboard.php?act=view_invoices&is=".urlencode($msg)."&qlk=".md5(8)."&iid=".$generated);

		  }

	  }












}//end of if invoice_to has value

?>
