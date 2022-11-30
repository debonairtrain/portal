<?php
$errors = array();
$info = array();
$info_success = array();

include_once('../db_connect/db.php');
include_once('../hubs/functions.php');
		$school_id=mysqli_real_escape_string($con,$_POST['school_id']);
		$search_department=mysqli_real_escape_string($con,$_POST['search_department']);
		$sub_programme=mysqli_real_escape_string($con,$_POST['sub_programme']);
		$level=mysqli_real_escape_string($con,$_POST['level']);
		$status=mysqli_real_escape_string($con,$_POST['status']);
		$department2=mysqli_real_escape_string($con,$_POST['department2']);
		$level2=mysqli_real_escape_string($con,$_POST['level2']);
		$tokenss = generate_token();
		$current_session = get_current_session($con, $id='1');
		$id_array = $_POST['course']; // return array
	 $id_count = count($_POST['course']); // count array

	for($i=0; $i < $id_count; $i++) {
		$cid = $id_array[$i];//collect the course by id
		//echo $cid;

		$seen_as_elective = $_POST['seen_as_elective'.$cid];//collect seen as elective;

		$q = "INSERT INTO `programmes_courses` (`id`,`department_id`, `school_id`, `programme_id`, `course_id`, `level`, `seen_as_elective`, `session_id`,`date_added`, `added_by` , `status` , `token` )
						VALUES (NULL, '$search_department', '$school_id', '$sub_programme', '$cid', '$level', '$seen_as_elective', '$current_session', NOW(), 'Admin' ,'$status' ,'$tokenss')";


				$r = mysqli_query($con,$q);

				if($r)
				{
					echo '1';
				}
				else
				{
				echo 'Courses not attached due to a system error. We apologize for any inconvenience.';
				}
		}
	//echo $result;
	?>
