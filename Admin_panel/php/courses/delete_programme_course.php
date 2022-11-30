<?php 
session_start();
include_once('../../db_connect/db.php');
if(isset($_SESSION['staff_id'])){
	$staff_id=$_SESSION['staff_id'];
	$prog_id=mysqli_real_escape_string($con,$_POST['token']);
	

																		
									$sqlmg=mysqli_query($con, "UPDATE programmes_courses SET status='0', date_modified=now(),modified_by='$staff_id' WHERE id='$prog_id' ");
											if($sqlmg){
												
												
												echo 1;
												
											}else{
												echo ' Programme course not deleted';
											}
								
							

		
}
												
	?>