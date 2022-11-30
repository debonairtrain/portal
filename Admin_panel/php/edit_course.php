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
		$unit=mysqli_real_escape_string($con,$_POST['unit']);
		$type=mysqli_real_escape_string($con,$_POST['type']);
		$semester=mysqli_real_escape_string($con,$_POST['semester']);

	$q = "UPDATE `courses` SET `faculty_id`='$faculty_id', `type_id`='$school_id',
	 `department_id`='$department_id', `title`='$title',`code`='$code', `real_`='$status',
	 `description`='$description', `level` = '$level', `unit`= '$unit',
	 `course_type` = '$type', `semester` = '$semester', `date_modified`=NOW(),
	 `modified_by`='Admin' WHERE id = '$id'";
		$r = mysqli_query($con,$q);

	if($r)
	{
		$result = 'Updated Successfully!';
			//header("Location: ../../pages/cms/schools?is=".urlencode($info_success['success']).""); //is - info success

	}
	else
	{
		$result =  'Course not updated due to a system error. We apologize for any inconvenience.';

		//header("Location: ../../pages/cms/schools?error=".urlencode($errors['error'])."");
	}
	echo $result;
	?>
