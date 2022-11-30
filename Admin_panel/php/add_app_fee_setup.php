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
  $status=mysqli_real_escape_string($con,$_POST['status']);
   $session = get_current_session($con, $id=1);

   $q = "INSERT INTO `set_application_fee_payments`(`id`, `programme_type_id`,`department_id`,`programme_id`,`session`,
                    `title`,`description`,`amount`,`partly_amount`,
                    `total_amount`,`payment_method`,`status`, `date_added`, `added_by`)
      VALUES (NULL,'$school','$department_id','$programme_id','$session', '$title',
                   '$description','$amount','$partly_amount','$total_amount','1','$status', NOW(),'ghost')";

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
