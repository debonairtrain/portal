<?php
  include_once('../../db_connect/db.php');
  include_once('../../hubs/functions.php');
   $id=mysqli_real_escape_string($con,$_POST['id']);
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

  $q = "UPDATE `set_acceptance_fee_payments` SET `programme_type_id`='$school', `department_id`='$department_id',
	 `programme_id`='$programme_id', `academic_year_id`='$session',`title`='$title', `description`='$description',
	 `amount`='$amount', `partly_amount` = '$partly_amount', `total_amount`= '$total_amount',
	 `payment_method` = '1', `status` ='$status', `date_modified`=NOW(),
	 `modified_by`='Admin' WHERE id = '$id'";


		$r = mysqli_query($con,$q);

	if($r)
	{
		$result = '1';
			//header("Location: ../../pages/cms/schools?is=".urlencode($info_success['success']).""); //is - info success

	}
	else
	{
		$result =  'Not Updated: Due to a system error. We apologize for any inconvenience.';

		}
	echo $result;
?>
