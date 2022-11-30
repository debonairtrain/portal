<?php

session_start();

include_once('../../../db_connect/db.php');
include_once('../../functions.php');
if(isset($_SESSION['user_id'])){
	$applicant_id=$_SESSION['user_id'];

//collect first olevel
$exam_no = mysqli_real_escape_string($con, $_POST['exam_no']);
$olexam1 = mysqli_real_escape_string($con, $_POST['olexam1']);
$eyear1 = mysqli_real_escape_string($con, $_POST['eyear1']);
$emonth1 = mysqli_real_escape_string($con, $_POST['emonth1']);
$sub1= mysqli_real_escape_string($con, $_POST['sub1']);
$grd1 = mysqli_real_escape_string($con, $_POST['grd1']);
$sub2= mysqli_real_escape_string($con, $_POST['sub2']);
$grd2 = mysqli_real_escape_string($con, $_POST['grd2']);
$sub3= mysqli_real_escape_string($con, $_POST['sub3']);
$grd3 = mysqli_real_escape_string($con, $_POST['grd3']);
$sub4= mysqli_real_escape_string($con, $_POST['sub4']);
$grd4 = mysqli_real_escape_string($con, $_POST['grd4']);
$sub5= mysqli_real_escape_string($con, $_POST['sub5']);
$grd5 = mysqli_real_escape_string($con, $_POST['grd5']);
$sub6= mysqli_real_escape_string($con, $_POST['sub6']);
$grd6 = mysqli_real_escape_string($con, $_POST['grd6']);
$sub7= mysqli_real_escape_string($con, $_POST['sub7']);
$grd7 = mysqli_real_escape_string($con, $_POST['grd7']);
$sub8= mysqli_real_escape_string($con, $_POST['sub8']);
$grd8 = mysqli_real_escape_string($con, $_POST['grd8']);
$sub9= mysqli_real_escape_string($con, $_POST['sub9']);
$grd9 = mysqli_real_escape_string($con, $_POST['grd9']);

//collect second olevel
$exam_no2 = mysqli_real_escape_string($con, $_POST['exam_no2']);
$olexam2 = mysqli_real_escape_string($con, $_POST['olexam2']);
$eyear2 = mysqli_real_escape_string($con, $_POST['eyear2']);
$emonth2 = mysqli_real_escape_string($con, $_POST['emonth2']);
$s_sub1= mysqli_real_escape_string($con, $_POST['s_sub1']);
$s_grd1 = mysqli_real_escape_string($con, $_POST['s_grd1']);
$s_sub2= mysqli_real_escape_string($con, $_POST['s_sub2']);
$s_grd2 = mysqli_real_escape_string($con, $_POST['s_grd2']);
$s_sub3= mysqli_real_escape_string($con, $_POST['s_sub3']);
$s_grd3 = mysqli_real_escape_string($con, $_POST['s_grd3']);
$s_sub4= mysqli_real_escape_string($con, $_POST['s_sub4']);
$s_grd4 = mysqli_real_escape_string($con, $_POST['s_grd4']);
$s_sub5= mysqli_real_escape_string($con, $_POST['s_sub5']);
$s_grd5 = mysqli_real_escape_string($con, $_POST['s_grd5']);
$s_sub6= mysqli_real_escape_string($con, $_POST['s_sub6']);
$s_grd6 = mysqli_real_escape_string($con, $_POST['s_grd6']);
$s_sub7= mysqli_real_escape_string($con, $_POST['s_sub7']);
$s_grd7 = mysqli_real_escape_string($con, $_POST['s_grd7']);
$s_sub8= mysqli_real_escape_string($con, $_POST['s_sub8']);
$s_grd8 = mysqli_real_escape_string($con, $_POST['s_grd8']);
$s_sub9= mysqli_real_escape_string($con, $_POST['s_sub9']);
$s_grd9 = mysqli_real_escape_string($con, $_POST['s_grd9']);


//check if the user has id in the table to be updated
if(if_student_is_available($con, $applicant_id))
{
	//$type  = 1;
	for($i = 1 ; $i <=2 ; $i++)
	{

		switch($i)
		{

			case 1:

			$q = "UPDATE `applicants_olevel` SET
				`exam_type`='$olexam1',`exam_year`='$eyear1',`exam_month`='$emonth1',`subject1`='$sub1',`grade1`='$grd1',
				`subject2`='$sub2',`grade2`='$grd2',`subject3`='$sub3',`grade3`='$grd3',`subject4`='$sub4',`grade4`='$grd4',
				`subject5`='$sub5',`grade5`='$grd5',`subject6`='$sub6',`grade6`='$grd6',`subject7`='$sub7',`grade7`='$grd7',
				`subject8`='$sub8',`grade8`='$grd8',`subject9`='$sub9',`grade9`='$grd9',`exam_no`='$exam_no'
				 WHERE `type`='1'  AND applicant_id = '$applicant_id'";

				 $r = mysqli_query($con,$q) or die("System Error: Please go back");

				 break;



			case 2:

				$q = "UPDATE `applicants_olevel` SET
				`exam_type`='$olexam2',`exam_year`='$eyear2',`exam_month`='$emonth2',`subject1`='$s_sub1',`grade1`='$s_grd1',
				`subject2`='$s_sub2',`grade2`='$s_grd2',`subject3`='$s_sub3',`grade3`='$s_grd3',`subject4`='$s_sub4',`grade4`='$s_grd4',
				`subject5`='$s_sub5',`grade5`='$s_grd5',`subject6`='$s_sub6',`grade6`='$s_grd6',`subject7`='$s_sub7',`grade7`='$s_grd7',
				`subject8`='$s_sub8',`grade8`='$s_grd8',`subject9`='$s_sub9',`grade9`='$s_grd9',`exam_no`='$exam_no2'
				 WHERE `type`='2'  AND applicant_id = '$applicant_id'";

				 $r = mysqli_query($con,$q) or die("System Error: Please go back");

			break;

			default:



		}


		//increment the counter
		//$type++;


	}

}
else
{


		 $q = "INSERT INTO `applicants_olevel`(`applicant_olevel_id`, `applicant_id`, `exam_type`, `exam_year`, `exam_month`, `subject1`,
					`grade1`, `subject2`, `grade2`, `subject3`, `grade3`, `subject4`, `grade4`, `subject5`, `grade5`, `subject6`, `grade6`,
					`subject7`, `grade7`, `subject8`, `grade8`, `subject9`, `grade9`, `exam_no`, `type`)
					 VALUES

			(NULL,'$applicant_id','$olexam1','$eyear1','$emonth1','$sub1','$grd1','$sub2','$grd2','$sub3','$grd3','$sub4',
			'$grd4','$sub5','$grd5','$sub6','$grd6','$sub7','$grd7','$sub8','$grd8','$sub9','$grd9','$exam_no','1'),

			(NULL,'$applicant_id','$olexam2','$eyear2','$emonth2','$s_sub1','$s_grd1','$s_sub2','$s_grd2','$s_sub3','$s_grd3','$s_sub4',
			'$s_grd4','$s_sub5','$s_grd5','$s_sub6','$s_grd6','$s_sub7','$s_grd7','$s_sub8','$s_grd8','$s_sub9','$s_grd9','$exam_no2','2')";


			$r = mysqli_query($con,$q) or die("System Error: Please go back");

}



if($r)
{
	echo 'Record updated';
	//header("Location: dashboard.php?act=qualification_info&is=".urlencode($info_success['success'])."&qlk=".$encripted_qlk.""); //is - info success


}
else
{
	echo  'O-Level not updated due to a system error. We apologize for any inconvenience.';

	//header("Location: dashboard.php?act=qualification_info&error=".urlencode($errors['error'])."&qlk=".$encripted_qlk."");
}

}





























else
{//stay back in update  form


	$errors['error'] =  'Fill the form appropriately, take note of <span class="ast">*</span>.';

	header("Location: dashboard.php?act=qualification_info&error=".urlencode($errors['error'])."&qlk=".$encripted_qlk."");

}



?>
