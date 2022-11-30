<?php
include_once('../db_connect/db.php');
$token=mysqli_real_escape_string($con,$_POST['token']);

$error='<option selected>Choose...</option>';
	$sqlmg=mysqli_query($con, "select * from departments where faculty_id='$token'");
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
														
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $dept_id= $row_s['id'];
														   $dept_name= $row_s['title'];
														   $error .='<option value="'.$dept_id.'">'.$dept_name.'</option>';
													}
											   	}
											}
	echo $error;							
?>