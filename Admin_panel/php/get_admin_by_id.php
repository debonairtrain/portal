<?php


	$sql_get_app=mysqli_query($con, "select * from admin_users where id ='$staff_id' ");


									if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												while($row=mysqli_fetch_assoc($sql_get_app)){
													$admin_id=$row['id'];
													$admin_country_id=$row['country_id'];
													$admin_state_id=$row['state_id'];
													$admin_lga_id=$row['lga_id'];
													$admin_first_name=$row['first_name'];
                          $admin_last_name=$row['last_name'];
													$admin_middle_name=$row['middle_name'];
													$admin_phone_no=$row['phone_number'];
													$admin_gender=$row['gender'];
													$admin_staff_id=$row['staff_id'];
                          $admin_email=$row['email'];
                          $admin_faculty_id=$row['faculty_id'];
                          $admin_department_id=$row['department_id'];
                          $admin_admin_role = $row['admin_role_id'];
													$admin_school_id=$row['school_id'];
													$admin_password=$row['password'];
													$admin_address=$row['address'];
													$admin_image=$row['image'];
                          $admin_date_added=$row['date_added'];
													$admin_status=$row['status'];
													if($admin_image==""){

														$admin_images='<img src="../uploads/admin.jpg" alt="" class="avatar-img rounded-circle img-responsive" width="31"/>';
														$admin_imagess='<img src="../uploads/admin.jpg" alt="" class="border border-3 rounded-circle border-white min-h-lg-175px min-w-lg-175px min-h-150px min-w-150px"/>';
												}else{
													$admin_images='<img src="../uploads/'.$admin_image.'" alt="" class="avatar-img rounded-circle img-responsive" width="31"/>';
													$admin_imagess='<img src="../uploads/'.$admin_image.'" alt="" class="border border-3 rounded-circle border-white min-h-lg-175px min-w-lg-175px min-h-150px min-w-150px"/>';
												}
													$admin_full_name=strtoupper($admin_first_name .' '. $admin_middle_name.' '. $admin_last_name);
													$admin_state = strtoupper (get_state_title($con, $admin_state_id));
													$admin_lga = strtoupper (get_lga_title($con, $admin_lga_id));
                          $designation = get_user_desgnation($con, $admin_admin_role);
												}
											}
									}



?>
