<?php

session_start();

include_once('../../../db_connect/db.php');
include_once('../../functions.php');
if(isset($_SESSION['user_id'])){
	$applicant_id=$_SESSION['user_id'];

$sn='1';
//collect first olevel
//when type =3 (other results )
$school = mysqli_real_escape_string($con, $_POST['school']);
$start_year1 = mysqli_real_escape_string($con, $_POST['start_year1']);
$end_year1 = mysqli_real_escape_string($con, $_POST['end_year1']);
$course = mysqli_real_escape_string($con, $_POST['course']);
$cert1= mysqli_real_escape_string($con, $_POST['cert1']);
$result1 = mysqli_real_escape_string($con, $_POST['result1']);
$cgpa= mysqli_real_escape_string($con, $_POST['cgpa']);


//when type =2  (ijmb)
if($cert1==3){
	$school = mysqli_real_escape_string($con, $_POST['school']);
	$start_year1 = mysqli_real_escape_string($con, $_POST['start_year1']);
	$end_year1 = mysqli_real_escape_string($con, $_POST['end_year1']);
	$course = mysqli_real_escape_string($con, $_POST['course']);
	$cert1= mysqli_real_escape_string($con, $_POST['cert1']);
	$result1 = mysqli_real_escape_string($con, $_POST['result1']);
	$cgpa= mysqli_real_escape_string($con, $_POST['cgpa']);
	$sub3_1 = mysqli_real_escape_string($con, $_POST['sub3_1']);
	$grd3_1= mysqli_real_escape_string($con, $_POST['grd3_1']);
	$sub3_2 = mysqli_real_escape_string($con, $_POST['sub3_2']);
	$grd3_2= mysqli_real_escape_string($con, $_POST['grd3_2']);
	$sub3_3 = mysqli_real_escape_string($con, $_POST['sub3_3']);
	$grd3_3= mysqli_real_escape_string($con, $_POST['grd3_3']);
	$date2= mysqli_real_escape_string($con, $_POST['date2']);
}

 if ($cert1==2){
	//when type =1 (nce)
	$school = mysqli_real_escape_string($con, $_POST['school']);
	$start_year1 = mysqli_real_escape_string($con, $_POST['start_year1']);
	$end_year1 = mysqli_real_escape_string($con, $_POST['end_year1']);
	$course = mysqli_real_escape_string($con, $_POST['course']);
	$cert1= mysqli_real_escape_string($con, $_POST['cert1']);
	$result1 = mysqli_real_escape_string($con, $_POST['result1']);
	$cgpa= mysqli_real_escape_string($con, $_POST['cgpa']);
	$sub_1 = mysqli_real_escape_string($con, $_POST['sub2_1']);
	$grd_1= mysqli_real_escape_string($con, $_POST['grd2_1']);
	$sub_2 = mysqli_real_escape_string($con, $_POST['sub2_2']);
	$grd_2= mysqli_real_escape_string($con, $_POST['grd2_2']);
	$sub_3 = mysqli_real_escape_string($con, $_POST['sub2_3']);
	$grd_3= mysqli_real_escape_string($con, $_POST['grd2_3']);
	$date= mysqli_real_escape_string($con, $_POST['date']);
}


	//check if record exist
	$chk = mysqli_query($con, "SELECT * FROM applicants_alevel WHERE institution ='$school' AND cert= '$cert1' AND applicant_id='$applicant_id' AND applicant_alevel_status='1' ");
	if($chk){
		$chkregnorow=mysqli_num_rows($chk);
		if($chkregnorow > 0){
			echo 'Record already exist';

		}else{
			//add new records when nce
					if ($cert1 == 2 ) {


						$q1 = "INSERT INTO
									applicants_alevel ( applicant_id, institution, course_of_study, cert, start_year,end_year,
									class_of_degree,cgpa, result_type, subject_1, grade_1, subject_2, grade_2,
									subject_3, grade_3, applicant_alevel_status, date_added)

									VALUES ('$applicant_id', '$school','$course','$cert1','$start_year1','$end_year1','$result1','$cgpa',
										 '1', '$sub_1', '$grd_1', '$sub_2','$grd_2', '$sub_3',	'$grd_3', '$sn', NOW())";


						$r = mysqli_query($con,$q1);

					}
					//add new records when ijmb

					else if ($cert1 == 3 ) {

						$q1 = "INSERT INTO
						applicants_alevel ( applicant_id, institution, course_of_study, cert, start_year,end_year,
						class_of_degree,cgpa, result_type, subject_1, grade_1, subject_2, grade_2,
						subject_3, grade_3, applicant_alevel_status, date_added)

						VALUES ('$applicant_id', '$school','$course','$cert1','$start_year1','$end_year1','$result1','$cgpa',
							 '2', '$sub3_1', '$grd3_1', '$sub3_2','$grd3_2', '$sub3_3',	'$grd3_3', '$sn', NOW())";


						$r = mysqli_query($con,$q1);
					}else {
						//add new record when not ijmb or nce
						$q1 = "INSERT INTO
						applicants_alevel (applicant_id, institution, course_of_study, cert, start_year,end_year,
						class_of_degree,cgpa, result_type, applicant_alevel_status, date_added)


						VALUES ('$applicant_id', '$school','$course','$cert1','$start_year1','$end_year1','$result1','$cgpa','3','$sn',NOW())";



						$r = mysqli_query($con,$q1);

					}

					if($r)
					{
						echo '1';

					}
					else
					{
					echo  'Account not updated due to a system error. We apologize for any inconvenience.';

					}
		}

	}




}



?>
