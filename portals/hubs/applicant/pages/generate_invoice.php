<?php
ob_start();
/* **************************************************************************
** This page   collects user id and pass it to invoice generation methods
**
*****************************************************************************/

//here hf is hostel fee
//sf is school fee
//rf is result fee


//collect the  invoice to for school fee
if(isset($_GET['invoice_to']))
{


	//collect what the payment is for
	$payment_for = $_GET['for'];

	//collect pay to
	$invoice_to = $_GET['invoice_to'];




	$user = $user_id;//get user
	//$level = '100'; //get user level
	$programme_type = get_user_programme_type_applied_for($con,$user); //programme type
	$department = get_user_department_applied_for($con,$user); //department
	$programme  = get_user_programme_applied_for($con,$user);//programme




	//get current session
	 $current_session = get_current_session_id($con);

	//now check if the payment is Application fee let this action happens
	if($payment_for == 'app')
	{//let tghis happen

		//invoice type
	    $invoice_type = 1;  //1- application fee


	    $programme_type = get_user_programme_type_applied_for($con,$user); //programme type
		$department = get_user_department_applied_for($con,$user); //department
		$programme  = get_user_programme_applied_for($con,$user);//programme


		//flip the gentleman back if he has not finish application process
		if($department == '0' || $programme == '0')
		{
			$msg = "Please make sure you complete your application process before making payment.";
			header("Location: dashboard?hub=my_payment&error=".urlencode($msg)."&qlk=".md5(8)."");
		exit();
		}




	  //collect other params
	  $title = get_application_fee_title($con,$current_session);
	  $description = get_application_fee_desc($con,$current_session);
	  $total_amount = get_application_fee_total_amount($con,$current_session);
	  $amount =  get_application_fee_amount($con,$current_session);
	  $credit = get_invoice_credit($total_amount, $amount); //pass total anmount , amount paid
	  $pay_to = 'Great Success College of Health Sciences & Technology, Gwada. <br>';//SKYE BANK ACCT: 1771647318



		//flip the gentleman back if he has not finish application process
		if($amount < 3000 || $total_amount < 3000 )
		{
			$msg = "Please make sure you complete your application process before making payment.";
			header("Location: dashboard?sms=payment&error=".urlencode($msg)."&qlk=".md5(8)."");
		exit();
		}



	  //set the invoice for to be zero since we are paying for application fee
	  $invoice_for  = '1';


	  //insert into the invoice
	   $q = "INSERT INTO `invoices`(`id`, `invoice_type`,`invoice_to`, `pay_to`,`invoice_for`,`title`, `description`, `amount`,`total_amount`, `session`,`credit`, `date_added`, `due_date`)
		   VALUES (NULL, '$invoice_type','$user','$pay_to','$invoice_for', '$title','$description','$amount','$total_amount','$current_session','$credit',NOW(),NOW())";


	   $r = mysqli_query($con,$q);


	  if(mysqli_affected_rows($con))
	  {

		  //get id of last inserted value
		 $id = mysqli_insert_id($con);



		  //generate invoice id and show the invoice
		   $generated = generate_invoice_id($con, $id, $user, $invoice_type);


		  if($generated =='')
		  {
			  $msg = "Invoice not generated due to system error, we are sorry for the inconvenience.";
			 header("Location: dashboard?sms=payment&error=".urlencode($msg)."&qlk=".md5(8)."");

		  }
		  else
		  {
				$msg = "Invoice generated successfully. Thank you!<br/>";
				?><script><?php echo("location.href = 'dashboard?hub=view_invoice&is=".urlencode($msg)."&qlk=".md5(8)."&iid=".$generated."';");?></script><?php

				}

	  }

	}//end of if for af


	//now check if the payment is school fee let this action happens
	if($payment_for == 'accep')
	{//let tghis happen


	    $user = $user_id;//get user

	  //invoice type
	    $invoice_type = 2;  //1- application fee





	  //flip the gentleman back if he has not finish application process
	  if($department == '0' || $programme == '0')
	  {
	    $msg = "Please make sure you complete your application process before making payment.";
	      //head to same page saying that not successful
	    header("Location: dashboard?sms=payment&error=".urlencode($msg)."&qlk=".md5(8)."");

	    exit();
	  }




	  //collect other params
	  $title = get_acceptance_fee_title($con,$session_id);
	  $description = get_acceptance_fee_desc($con,$session_id);
	  $total_amount = get_acceptance_fee_total_amount($con,$session_id);
	  $amount =  get_acceptance_fee_amount($con,$session_id);
	  $credit = get_invoice_credit($total_amount, $amount); //pass total anmount , amount paid
	  $pay_to = 'Great Success College of Health Sciences & Technology, Gwada. <br>';//SKYE BANK ACCT: 1771647318



	  //flip the gentleman back if he has not finish application process
	  if($amount < 3000 || $total_amount < 3000 )
	  {
	    $msg = "Please make sure you complete your application process before making payment.";
	      //head to same page saying that not successful
	    header("Location: dashboard?sms=payment&error=".urlencode($msg)."&qlk=".md5(8)."");

	    exit();
	  }



	  //set the invoice for to be zero since we are paying for application fee
	  $invoice_for  = '2';


	  //insert into the invoice
	   $q = "INSERT INTO `invoices`(`id`, `invoice_type`,`invoice_to`, `pay_to`,`invoice_for`,`title`, `description`, `amount`,`total_amount`, `session`,`credit`, `date_added`, `due_date`)
	     VALUES (NULL, '$invoice_type','$user','$pay_to','$invoice_for', '$title','$description','$amount','$total_amount','$current_session','$credit',NOW(),NOW())";


	   $r = mysqli_query($con,$q);


	  if(mysqli_affected_rows($con))
	  {

	    //get id of last inserted value
	   $id = mysqli_insert_id($con);



	    //generate invoice id and show the invoice
	     $generated = generate_invoice_id($con,$id, $user, $invoice_type);


	    if($generated =='')
	    {
	      $msg = "Invoice not generated due to system error, we are sorry for the inconvenience.";
	      //head to same page saying that not successful
	      header("Location: dashboard?sms=payment&error=".urlencode($msg)."&qlk=".md5(8)."");


	    }
	    else
	    {
	      $msg = "Invoice generated successfully. Thank you!";

	      //head to invoice page
	      	?><script><?php echo("location.href = 'dashboard?hub=view_invoice2&is=".urlencode($msg)."&qlk=".md5(8)."&iid=".$generated."';");?></script><?php

	    }

	  }

	}//end of if for af


	//now check if the payment is school fee let this action happens
	if($payment_for == 'sch')
	{//let tghis happen

	  //invoice type
	  $invoice_type = 3;  //2- 1 fee
		$programme_type = get_user_programme_type_admitted_to($con,$user); //programme type
		$department = get_user_department_admitted_to($con,$user); //department
		$programme  = get_user_programme_admitted_to($con,$user);//programme




		//flip the gentleman back if he has not finish application process
		 if($department == '0' || $programme == '0')
		 {
			 $msg = "Please make sure you complete have been admitted before making payment.";
				 //head to same page saying that not successful
			 header("Location: dashboard?sms=payment&error=".urlencode($msg)."&qlk=".md5(8)."");

			 exit();
		 }



		 $level =get_user_level_per_programme($con,$programme);



		 //collect other params
		 $title = get_school_fee_title($con,$level, $session_id); //
		 $description = get_school_fee_desc($con,$level, $session_id);


			 if(is_nigerlite($con,$user))
		 {

			 $total_amount = get_school_fee_total_amount($con,$level, $session_id);
				 $amount = get_school_fee_amount($con,$level, $session_id);

		 }
		 else
		 {

			 $total_amount = get_school_fee_total_amount_non_indigene($con,$level, $session_id);
				 $amount = get_school_fee_total_amount_non_indigene($con,$level, $session_id);
		 }

		 $credit = get_invoice_credit($total_amount, $amount); //pass total anmount , amount paid
		 $pay_to = 'Great Success College of Health Sciences & Technology, Gwada. <br>'; //

		 //set the invoice for to be 1 since we are paying for school fee
		 $invoice_for  = '3';

		 //set the paymentmode to 2 for full time
		 $payment_mode = 1;


		 //insert into the invoice
		 $q = "INSERT INTO `invoices`(`id`, `invoice_type`,`invoice_to`, `pay_to`,`invoice_for`,`payment_mode`,`session`,`title`, `description`, `amount`,`total_amount`, `credit`, `date_added`, `due_date`)
				VALUES (NULL, '$invoice_type','$user','$pay_to','$invoice_for', '$payment_mode','$current_session','$title','$description','$amount','$total_amount','$credit',NOW(),NOW())";

		 $r = mysqli_query($con,$q);


		 if(mysqli_affected_rows($con))
		 {

			 //get id of last inserted value
			 $id = mysqli_insert_id($con);



			 //generate invoice id and show the invoice
			 $generated = generate_invoice_id($con,$id, $user, $invoice_type);

			 if($generated =='')
			 {
				 $msg = "Invoice not generated due to system error, we are sorry for the inconvenience.";
				 //head to same page saying that not successful
				 header("Location: dashboard?sms=payment?error=".urlencode($msg)."&qlk=".md5(8)."");
				 //header("Location: dashboard.php?act=school_fee_payments_r&error=".urlencode($msg)."&qlk=".md5(8)."");



			 }
			 else
			 {
				 $msg = "Invoice generated successfully. Thank you!";

				 //head to invoice page
					 ?><script><?php echo("location.href = 'dashboard?hub=view_invoice3&is=".urlencode($msg)."&qlk=".md5(8)."&iid=".$generated."';");?></script><?php

			 }

		 }




	}//end of if for cf




}//end of if invoice_to has value
ob_end_flush();
?>
