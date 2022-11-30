<?php 

        include_once('../db_connect/db.php');
        include_once('../hubs/applicants_functions.php');
        include_once('../hubs/functions.php');
        $invoice_for = mysqli_real_escape_string($con, $_POST['invoice_for_id']);
        $invoice_to = mysqli_real_escape_string($con, $_POST['invoice_to']);
        $invoice_id = mysqli_real_escape_string($con, $_POST['invoice_id']);
        $invoice_amount= mysqli_real_escape_string($con, $_POST['invoice_amount']);
        $invoice_desc= mysqli_real_escape_string($con, $_POST['invoice_desc']);
        //get current session
        $session = get_current_session($con,$id = 1); //get current session
        
        if($invoice_for=='1')
        {
            //confirm application fee
            $applicant_programme = get_applicant_programme_applied_for($con, $invoice_to);
            $applicant_department = get_applicant_department_applied_for($con, $invoice_to);
            $applicant_school = get_applicant_school_applied($con, $invoice_to);
            $a_no = get_applicant_application_number($con,$invoice_to);
            //insert into applicants_fee_payment table
            $chk = mysqli_query($con, "SELECT * FROM applicants_fee_payments WHERE invoice_id ='$invoice_id' AND session='$session' ") or die(mysqli_error($con));
        if($chk){
			$chkregnorow=mysqli_num_rows($chk);
			if($chkregnorow > 0){
        echo 'This Payment already exist......';

      }else{
        //check if the query is for adding den add
   		 $q = "INSERT INTO `applicants_fee_payments`(`id`, `programme_type_id`, `department_id`,`programme_id`, `session`, `applicant_id`,`payment_method`, `invoice_id`, `amount`,`date_added`, `added_by`)


   			 VALUES (NULL,'$applicant_school','$applicant_department','$applicant_programme','$session','$invoice_to','2','$invoice_id','$invoice_amount',NOW(),'$a_no')";


   		$r = mysqli_query($con,$q) or die(mysqli_error($con));

   		if(mysqli_affected_rows($con))
   		{


            mysqli_query("UPDATE invoices SET payment_status = '1' WHERE invoice_id ='$invoice_id'");
   			echo '1';

   		}
   		else
   		{
   		echo  'Payment not confirm due to system error';

   		}

   	 }
      }
        }else if($invoice_for=='2')
        {
            //confirm acceptance fee
            $applicant_programme = get_applicant_programme_id($con, $invoice_to);
            $applicant_department = get_applicant_department_id($con, $invoice_to);
            $applicant_school = get_applicant_school_id($con, $invoice_to);
        }else if($invoice_for=='3')
        {
            //confirm hostel fee
            //for now, do nothing
        }else if($invoice_for=='4')
        {
            //confirm fresh school fee
            $applicant_programme = get_applicant_programme_id($con, $invoice_to);
            $applicant_department = get_applicant_department_id($con, $invoice_to);
            $applicant_school = get_applicant_school_id($con, $invoice_to);
        }else if($invoice_for =='5')
        {
            //confirm returning school fee
            $applicant_programme = get_applicant_programme_id($con, $invoice_to);
            $applicant_department = get_applicant_department_id($con, $invoice_to);
            $applicant_school = get_applicant_school_id($con, $invoice_to);
        }
?>