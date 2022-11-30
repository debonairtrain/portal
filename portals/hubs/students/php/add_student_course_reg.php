<?php
session_start();

include_once('../../../db_connect/db.php');
if(isset($_SESSION['user_id'])){
	$student_id=$_SESSION['user_id'];

     $token = mysqli_real_escape_string($con, $_POST['token']);
    $ss = mysqli_real_escape_string($con, $_POST['ss']);
    $bb = mysqli_real_escape_string($con, $_POST['bb']);
    include_once('../../functions.php');
    include_once('get_programme_course_details.php');
    // echo $course_unit;
    $current_acad_year=get_current_session_id($con,$id ='1');
		$matric_number = get_user_matric_number($con, $student_id);
    $enrollment_id = get_enrollment_id($con,$student_id,$current_acad_year);
    if($bb == 1){


       $sqlmg=mysqli_query($con, "SELECT * FROM students_courses WHERE course_id='$token' and session_id='$current_acad_year' and student_id='$student_id' and status='1' ") ;

			if($sqlmg){
				$sqlmg_row=mysqli_num_rows($sqlmg);
				if($sqlmg_row > 0){
					$q2=mysqli_query($con, "DELETE FROM students_courses WHERE course_id='$token' and session_id='$current_acad_year' and student_id='$student_id'");

				 if($q2){
											 echo 'Removed';
									 }else{
										 echo 'no';
									 }
				 }else{

                      $q=mysqli_query($con, "INSERT INTO students_courses(student_id,enrollment_id,number,programme_id,course_id,course_unit,seen_as_elective,session_id,semester,level,
                        			added_by,status)VALUES('$student_id','$enrollment_id','$matric_number','$programme_id','$token','$course_unit','$seen_as_elective','$current_acad_year','$semester','$level','$matric_number','1')");
                          //	exit();
                   if($q){
                       echo 'Added';
                   }else{
                       echo 'no';
                   }


				}
			}
    }else{


          $q2=mysqli_query($con, "DELETE FROM students_courses WHERE course_id='$token' and session_id='$current_acad_year' and student_id='$student_id'");

         if($q2){
                       echo 'Removed';
                   }else{
										 echo 'no';
									 }

    }
}

?>
