<?php
include_once('../db_connect/db.php');
$token=mysqli_real_escape_string($con,$_POST['token']);

$error='<option selected>Choose...</option>';
	$sqlmg=mysqli_query($con, "select * from faculties where school_id='$token'");
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
														
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $faculty_id= $row_s['id'];
														   $faculty_name= $row_s['title'];
														   $error .='<option value="'.$faculty_id.'">'.$faculty_name.'</option>';
													}
											   	}
											}
	echo $error;							
?>