<?php
session_start();
include_once('../../db_connect/db.php');
if(isset($_SESSION['staff_id'])){
	$staff_id=$_SESSION['staff_id'];
	

	$course_id=mysqli_real_escape_string($con,$_POST['token']);
	$publish_id=mysqli_real_escape_string($con,$_POST['publish_id']);
	

							
	
							
									$sqlmg=mysqli_query($con, "UPDATE courses SET course_status='$publish_id'  WHERE id='$course_id' ");
											if($sqlmg){
												
												
												echo 1;
												
											}else{
												echo ' Topic not Published';
											}
								
							

		
}else{
    echo 'go';
}
												
	?>