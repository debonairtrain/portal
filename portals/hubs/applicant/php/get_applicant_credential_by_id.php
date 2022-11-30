<?php


	$sql_get_app=mysqli_query($con, "select * FROM applicants_credential where applicant_id ='$applicant_id' AND credential_status='1' ");


									if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												while($row=mysqli_fetch_assoc($sql_get_app)){
														@$sn= 0;
														$snn = $sn +1;
														$file=$row['file'];
														$file_name=$row['file_name'];

												}
											}
									}



?>
