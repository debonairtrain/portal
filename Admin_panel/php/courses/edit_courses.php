<?php
session_start();

include_once('../../db_connect/db.php');
if(isset($_SESSION['staff_id'])){
	$staff_id=$_SESSION['staff_id'];
	$course_id = mysqli_real_escape_string($con, $_POST['$course_id']);
    $school_id = mysqli_real_escape_string($con, $_POST['school_id']);
    $faculty_id = mysqli_real_escape_string($con, $_POST['faculty_id']);
    $department_id = mysqli_real_escape_string($con, $_POST['department_id']);
    $prog_id = mysqli_real_escape_string($con, $_POST['prog_id']);
    $course_title = mysqli_real_escape_string($con, $_POST['course_title']);
    $course_code = mysqli_real_escape_string($con, $_POST['course_code']);
    $course_unit = mysqli_real_escape_string($con, $_POST['course_unit']);
    $course_type = mysqli_real_escape_string($con, $_POST['course_type']);
    $semester_id = mysqli_real_escape_string($con, $_POST['semester_id']);
    $level_id = mysqli_real_escape_string($con, $_POST['level_id']);
    $prerequisite_of = mysqli_real_escape_string($con, $_POST['prerequisite_of']);
  //  include_once('functions.php');   



        
     
      
						$sql="UPDATE courses SET school_id='$school_id',faculty_id = '$faculty_id',department_id = '$department_id', programme_id = '$prog_id',title ='$course_title',code = '$course_code',unit = '$course_unit',course_type ='$course_type',semester='$semester_id',level='$level_id',prerequisite_of = '$prerequisite_of',
                        			modified_by ='$staff_id',date_modified=now() where id='$course_id' ";					        
                      $q=mysqli_query($con, $sql);
                          //	exit();
                   if($q){ 
                     
                       	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
Course Edited Successfully....
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
						
                   }else{
                       
                       
                       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
Course not Edited....
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                   }
			 
   
}else{
    echo 'no access';
}

?>