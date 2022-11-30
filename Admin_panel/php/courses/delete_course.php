<?php 
session_start();
include_once('../../db_connect/db.php');
if(isset($_SESSION['staff_id'])){
	$staff_id=$_SESSION['staff_id'];
	$course_id=mysqli_real_escape_string($con,$_POST['token']);
	

																		
									$sqlmg=mysqli_query($con, "UPDATE courses SET course_status='0', date_modified=now(),modified_by='$staff_id' WHERE id='$course_id' ");
											if($sqlmg){
												
												
												echo 1;
												
											}else{
												echo ' Course not deleted';
											}
								
							

		
}
												
	?>