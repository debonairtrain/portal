<?php
include_once('../db_connect/db.php');
$school_id=mysqli_real_escape_string($con,$_POST['school_id']);
$faculty_id=mysqli_real_escape_string($con,$_POST['faculty_id']);
$department_id=mysqli_real_escape_string($con,$_POST['department_id']);
	$title=mysqli_real_escape_string($con,$_POST['title']);
	$code=mysqli_real_escape_string($con,$_POST['code']);
	$status=mysqli_real_escape_string($con,$_POST['status']);
	$id=mysqli_real_escape_string($con,$_POST['id']);
	$description=mysqli_real_escape_string($con,$_POST['description']);
	$level=mysqli_real_escape_string($con,$_POST['level']);
		$duration=mysqli_real_escape_string($con,$_POST['duration']);
		$max_duration=mysqli_real_escape_string($con,$_POST['max_duration']);
		$max_credit=mysqli_real_escape_string($con,$_POST['max_credit']);
		$min_credit=mysqli_real_escape_string($con,$_POST['min_credit']);
		$required=mysqli_real_escape_string($con,$_POST['required']);
		$optional=mysqli_real_escape_string($con,$_POST['optional']);

	$q = "UPDATE `programmes` SET `faculty_id`='$faculty_id', `school_id`='$school_id',
	 `department_id`='$department_id', `title`='$title',`code`='$code', `real_`='$status',
	 `description`='$description', `level` = '$level', `required_subjects`= '$required',
	 `optional_subjects` = '$optional', `duration` = '$duration', `maximum_duration`='$max_duration',
	 `maximum_credit_load` ='$max_credit', `minimum_credit_load` ='$min_credit', `date_modified`=NOW(),
	 `modified_by`='Admin' WHERE id = '$id'";


		$r = mysqli_query($con,$q);

	if($r)
	{
		$result = 'Updated Successfully!';
	}
	else
	{
		$result =  'Programme not updated due to a system error. We apologize for any inconvenience.';
	}
	echo $result;
	?>
