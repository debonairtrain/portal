<?php
include_once('../db_connect/db.php');
$school_id=mysqli_real_escape_string($con,$_POST['school_id']);
$faculty_id=mysqli_real_escape_string($con,$_POST['faculty_id']);
$department_id=mysqli_real_escape_string($con,$_POST['department_id']);
	$title=mysqli_real_escape_string($con,$_POST['title']);
	$code=mysqli_real_escape_string($con,$_POST['code']);
	$status=mysqli_real_escape_string($con,$_POST['status']);
	$description=mysqli_real_escape_string($con,$_POST['description']);
	$level=mysqli_real_escape_string($con,$_POST['level']);
		$unit=mysqli_real_escape_string($con,$_POST['unit']);
		$type=mysqli_real_escape_string($con,$_POST['type']);
		$semester=mysqli_real_escape_string($con,$_POST['semester']);

	   $q = "INSERT INTO `courses`(`id`, `type_id`,`faculty_id`,`department_id`,`title`,
											`code`,`level`,`unit`,`course_type`,
											`semester`,`real_`, `description`,
											`course_status`, `date_added`, `added_by`)
			  VALUES (NULL,'$school_id','$faculty_id','$department_id','$title', '$code',
										 '$level','$unit','$type','$semester','$status',
										 '$description', '1',NOW(),'ghost')";

		$r = mysqli_query($con,$q);

		if($r)
		{
			$result = '1';
		}
		else
		{
			$result =  'Course not added due to a system error. We apologize for any inconvenience.';
		}
	echo $result;
	?>
