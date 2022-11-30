<?php
include_once('../db_connect/db.php');
$token=mysqli_real_escape_string($con,$_POST['token']);

$error='<option selected>Choose...</option>';
	$sqlmg=mysqli_query($con, "select * from programmes where department_id='$token'");
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
														
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $prog_id= $row_s['id'];
														   $prog_name= $row_s['title'];
														   $error .='<option value="'.$prog_id.'">'.$prog_name.'</option>';
													}
											   	}
											}
	echo $error;							
?>