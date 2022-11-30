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
		$duration=mysqli_real_escape_string($con,$_POST['duration']);
		$max_duration=mysqli_real_escape_string($con,$_POST['max_duration']);
		$max_credit=mysqli_real_escape_string($con,$_POST['max_credit']);
		$min_credit=mysqli_real_escape_string($con,$_POST['min_credit']);
		$required=mysqli_real_escape_string($con,$_POST['required']);
		$optional=mysqli_real_escape_string($con,$_POST['optional']);
		$optional_count=mysqli_real_escape_string($con,$_POST['optional_count']);

	   $q = "INSERT INTO `programmes`(`id`, `school_id`,`faculty_id`,`department_id`,`title`,
											`code`,`level`,`required_subjects`,`optional_subjects`,
											`duration`,`maximum_duration`,`maximum_credit_load`,`minimum_credit_load`,
											`optional_count`,`real_`, `description`,
											`programme_status`, `date_added`, `added_by`)
			  VALUES (NULL,'$school_id','$faculty_id','$department_id','$title', '$code',
										 '$level','$required','$optional','$duration','$max_duration',
										 '$max_credit','$min_credit','$optional_count','$status',
										 '$description', '1',NOW(),'ghost')";

		$r = mysqli_query($con,$q);

		if($r)
		{
			$result = '1';
		}
		else
		{
			$result =  'Programme not added due to a system error. We apologize for any inconvenience.';
		}
	echo $result;
	?>
