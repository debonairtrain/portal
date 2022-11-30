<?php
include_once('../db_connect/db.php');
		$title=mysqli_real_escape_string($con,$_POST['title']);
		$description=mysqli_real_escape_string($con,$_POST['description']);

	   $q = "INSERT INTO `academic_year`(`academic_year_id`, `title`,`description`,`academic_year_status`, `date_added`, `added_by`)
			  VALUES (NULL,'$title', '$description', '1',NOW(),'ghost')";

		$r = mysqli_query($con,$q);

		if($r)
		{
			$result = '1';
		}
		else
		{
			$result =  'Session not added due to a system error. We apologize for any inconvenience.';
		}
	echo $result;
	?>
