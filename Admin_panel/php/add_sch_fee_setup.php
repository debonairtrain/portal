<?php
  include_once('../db_connect/db.php');
  include_once('../hubs/functions.php');
  $school=mysqli_real_escape_string($con,$_POST['school']);
  $faculty=mysqli_real_escape_string($con,$_POST['faculty']);
  $department_id=mysqli_real_escape_string($con,$_POST['department_id']);
  $programme_id=mysqli_real_escape_string($con,$_POST['programme_id']);
  $title=mysqli_real_escape_string($con,$_POST['title']);
  $description=mysqli_real_escape_string($con,$_POST['description']);
  $amount=mysqli_real_escape_string($con,$_POST['amount']);
  $partly_amount=mysqli_real_escape_string($con,$_POST['partly_amount']);
  $total_amount=mysqli_real_escape_string($con,$_POST['total_amount']);
  $total_non_amount=mysqli_real_escape_string($con,$_POST['total_non_amount']);
  $status=mysqli_real_escape_string($con,$_POST['status']);
  $level=mysqli_real_escape_string($con,$_POST['level']);
  $semester=mysqli_real_escape_string($con,$_POST['semester']);
  $payment_for=mysqli_real_escape_string($con,$_POST['payment_for']);
   $session = get_current_session($con, $id=1);

   $q = "INSERT INTO `set_school_fee_payments_for_students`(`id`, `programme_type_id`,`department_id`,`programme_id`,`session`,
                    `semester`,`level`,`title`,`description`,`amount`,`partly_amount`,
                    `total_amount`,`total_non_indigene`,`payment_method`,`payment_for`,`status`, `date_added`, `added_by`)
      VALUES (NULL,'$school','$department_id','$programme_id','$session','$semester','$level', '$title',
                   '$description','$amount','$partly_amount','$total_amount','$total_non_amount','1','$payment_for','$status', NOW(),'ghost')";

  		$r = mysqli_query($con,$q);

	if($r)
	{
		$result = '1';
	}
	else
	{
		$result =  'Not inserted: Due to a system error. We apologize for any inconvenience.';
		}
	echo $result;
?>
