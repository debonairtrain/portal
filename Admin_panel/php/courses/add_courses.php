<?php
session_start();

include_once('../../db_connect/db.php');
if(isset($_SESSION['staff_id'])){
	$staff_id=$_SESSION['staff_id'];
	
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



        
     
       $sqlmg=mysqli_query($con, "select * from courses where code='$course_code' AND course_status !='0' ") ;
											
			if($sqlmg){
				$sqlmg_row=mysqli_num_rows($sqlmg);
				if($sqlmg_row > 0){
					
						
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
Course Code Already Exit....
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				 }else{
						$sql="INSERT INTO courses(school_id,faculty_id,department_id,programme_id,title,code,unit,course_type,semester,level,prerequisite_of,
                        			added_by,course_status)VALUES('$school_id','$faculty_id','$department_id','$prog_id','$course_title','$course_code','$course_unit','$course_type','$semester_id','$level_id','$prerequisite_of','$staff_id','1')";					        
                      $q=mysqli_query($con, $sql);
                          //	exit();
                   if($q){ 
                     
                       	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
Course Added....
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
						
                   }else{
                       
                       
                       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
Course not Added....
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                   }
							
					
				}
			}   
   
}else{
    echo 'no';
}

?>