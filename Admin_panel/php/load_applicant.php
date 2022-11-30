<?php
include_once('../db_connect/db.php');
include_once('../hubs/functions.php');
 $id=mysqli_real_escape_string($con,$_POST['department_id']);
//exit();
	$output ='';
	$sqlmg=mysqli_query($con, "SELECT applicant.id, applicant.school_applied, applicant.department_applied, applicant.programme_applied, applicant.application_number,
		 applicant.state_id, applicant.lga_id, applicant.first_name, applicant.last_name, applicant.middle_name, applicant.phone_no, applicant.gender,  applicant.email,
		  DATE_FORMAT(applicant.date_added, '%M %d, %Y %l:%i:%p') as date_added,
		  DATE_FORMAT(applicant.date_modified, '%M %d, %Y %l:%i:%p') as date_modified, applicants_fee_payments.applicant_id
		  FROM  applicant, applicants_fee_payments

		  WHERE applicant.programme_applied = '$id' AND applicant.id = applicants_fee_payments.applicant_id AND applicant.session_id='1'

		  ORDER BY applicant.application_number ASC");
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
														
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														$output .= "<tr>";
														$output .= "<td> <a href='view_applicant?id=".md5('profile')."&xd=".$row_s['id']."'>".$row_s['first_name'].' '.$row_s['middle_name'].' '.$row_s['last_name']."</a></td>";
														$output .= "<td>".$row_s['application_number']."</td>";
														$output .= "<td>".$row_s['gender']."</td>";
														$output .= "<td>".get_applicant_school($con, $row_s['school_applied'])."</td>";
														$output .= "<td>".get_applicant_department($con, $row_s['department_applied'])."</td>";
														$output .= "<td>".get_applicant_programme($con, $row_s['programme_applied'])."</td>";
														$output .= "<td>".$row_s['phone_no']."</td>";
														$output .= "<td>".get_applicant_state($con, $row_s['state_id'])."</td>";
														$output .= "<td>".get_applicant_lga($con, $row_s['lga_id'])."</td>";
														$output .= "<td>".get_applicant_image($con, $row_s['id'])."</td>";
														$output .= "<td>".is_admitted($con, $row_s['id'])."</td>";
														



			$output .= "</tr>";
													}
											   	}else{
													$output .="<td colspan='11'>No data available in table</td>";
												}
											}
	echo $output;							
?>


                  