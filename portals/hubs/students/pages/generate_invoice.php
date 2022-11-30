<div class="content">
        <div class="row">

          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Payments History</h5>
              </div>
              <div class="card-body">
								<?php
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
	$programme_type = get_student_programme_type($con,$user); //programme type
	$department = get_student_department($con,$user); //department
	$programme  = get_student_programme($con,$user);//programme




	//get current session
	 $current_session = get_current_session_id($con);








	//now check if the payment is school fee let this action happens
	if($payment_for == 'sch')
	{//let tghis happen

	  //invoice type
	  $invoice_type = 4;  //2- 1 fee



    $programme_type = get_student_programme_type($con,$user); //programme type
  	$department = get_student_department($con,$user); //department
  	$programme  = get_student_programme($con,$user);//programme




	 //flip the gentleman back if he has not finish application process
		if($programme_type == '0' || $department == '0' || $programme == '0')
		{
			$msg = "Please make sure you complete have been admitted before making payment.";
			  //head to same page saying that not successful
			header("Location: payment?error=".urlencode($msg)."&qlk=".md5(8)."");

			exit();
		}



	 echo  $level =get_user_level_per_programme($con,$programme);



	  //collect other params
	  $title = get_school_fee_title($con,$level, $session_id); //
	  $description = get_school_fee_desc($con,$level, $session_id);


	  	if(is_nigerlite_student($con,$user))
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
	  $pay_to = 'Standard College of Health <br>'; //

	  //set the invoice for to be 1 since we are paying for school fee
	  $invoice_for  = '4';

	  //set the paymentmode to 2 for full time
	  $payment_mode = 2;


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
			  header("Location: view_invoice?error=".urlencode($msg)."&qlk=".md5(8)."");
			  //header("Location: dashboard.php?act=school_fee_payments_r&error=".urlencode($msg)."&qlk=".md5(8)."");



		  }
		  else
		  {
			  $msg = "Invoice generated successfully. Thank you!";

			  //head to invoice page
        ?><script><?php echo("location.href = 'dashboard?hub=view_invoice&is=".urlencode($msg)."&qlk=".md5(8)."&iid=".$generated."';");?></script><?php
			  

		  }

	  }

	}//end of if for cf









}//end of if invoice_to has value

?>

              </div>
            </div>
          </div>
        </div>
      </div>
