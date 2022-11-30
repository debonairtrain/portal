<?php
include_once('../db_connect/db.php');
$school_id=mysqli_real_escape_string($con,$_POST['school_id']);
	$title=mysqli_real_escape_string($con,$_POST['title']);
	$code=mysqli_real_escape_string($con,$_POST['code']);
	$status=mysqli_real_escape_string($con,$_POST['status']);
	$id=mysqli_real_escape_string($con,$_POST['id']);
	$description=mysqli_real_escape_string($con,$_POST['description']);

	$q = "UPDATE `faculties` SET `school_id`='$school_id', `title`='$title',`code`='$code', `real_`='$status', `description`='$description',
			 `date_modified`=NOW(), `modified_by`='Admin'
			 WHERE id = '$id'";


		$r = mysqli_query($con,$q);

	if($r)
	{
		$result = 'Updated Successfully!';
			//header("Location: ../../pages/cms/schools?is=".urlencode($info_success['success']).""); //is - info success

	}
	else
	{
		$result =  'Faculty not updated due to a system error. We apologize for any inconvenience.';

		//header("Location: ../../pages/cms/schools?error=".urlencode($errors['error'])."");
	}
	echo $result;
	?>
