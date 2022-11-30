<?php
include_once('../db_connect/db.php');
		$title=mysqli_real_escape_string($con,$_POST['title']);
		$description=mysqli_real_escape_string($con,$_POST['description']);
		$session_id=mysqli_real_escape_string($con,$_POST['session_id']);

		$q = "UPDATE academic_year SET title='$title', description='$description',
		 			date_modified=NOW() WHERE academic_year_id='$session_id'";

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
