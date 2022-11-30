<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage CMS</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Archive Faculties</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">
                          <div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	<a href="dashboard?hubs=staffs" id="addRow" class="btn btn-info" >
																		Go Back <i class="fa fa-plus"></i>
																	</a>
																</div>

															</div>

														</div>
                      <div class="datatable-wrapper table-responsive">
                        <div class="col-12" style="margin-top:20px;">

																	<?php
																	$q = "SELECT id, staff_number,programme_id, department_id, faculty_id, staff_type_id,
																		  state_id, lga_id, first_name,middle_name, last_name,country_id, phone_number, gender,  email,
																		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added

																		  FROM  staffs WHERE status = '2' ORDER BY staff_number ASC";
																	$r = mysqli_query($con, $q);

																	if(mysqli_num_rows($r) > 0)
																	{//show table



																		  $output =
																		  '
																					<table class="display compact table table-striped table-bordered datatable">
																							<thead>


																							<th></th>
																							<th>Faculty</th>
																							<th>Department</th>
																							<th>Programme</th>
																							<th>Staff No.</th>
																							<th>First Name</th>
																							<th>Middle Name</th>
																							<th>Last Names</th>
																							<th>Gender</th>
																							<th>Email</th>
																							<th>Ph. Contacts</th>
																							<th>Country</th>
																							<th>State</th>
																							<th>L.G.A</th>
																							<th>Type</th>
																							<th>Photo</th>
																							<th>Action</th>



																			</thead>
																			<tbody>';
																			$sn = 1;
																		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
																		{
																			$output .= "<tr>";


																			$output .= "<td>".$sn."</td>";
																			$output .= "<td>".get_user_faculty($con, $row['faculty_id'])."</td>";
																			$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
																			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
																			$output .= "<td>".$row['staff_number']."</td>";
																			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$row['first_name']."</td>";
																			$output .= "<td class='xeditoname' id='".$row['id']."' key='middle_name'>".$row['middle_name']."</td>";
																			$output .= "<td class='xeditoname' id='".$row['id']."' key='last_name'>".$row['last_name']."</td>";
																			$output .= "<td>".$row['gender']."</td>";
																			$output .= "<td>".$row['email']."</td>";
																			$output .= "<td>".$row['phone_number']."</td>";
																			$output .= "<td>".get_country_title($con, $row['country_id'])."</td>";
																			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
																			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";

																			$output .= "<td>".select_staff_type($row['staff_type_id'])."</td>";

																			$output .= "<td>".get_staff_image($con, $row['id'])."</td>";
																			$output .= '<td>
                                                <a href="#" onclick="delete_school('.$row['id'].')" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-trash"></i>
                                                </a>
                                               </td>
                                                               <input type="hidden" id="department_id" value="'.$id.'"/>';


																			$output .= "</tr>";
																			$sn ++;

																		}
																	}
																	else
																	{//show the msg

																			$output =
																				   '<div class="alert alert-danger alert-dismissable col-md-12">
																					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
																					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
																				   </div>';


																	}



																	$output .=
																	'</tbody>
																    </table>
																		';





																	echo $output;
			?>



                          </div>
                      </div>
                    </div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
							function delete_school(id)
							{
								if(confirm("Do you  really want to restore it?"))
								 {
									 $.post("php/restore_staff.php",{id:id},

										function(response,status)
										{
											alert(response);
											window.setTimeout(link,2000);
										});
								 }
							}
							function link(){
								location.reload();
							}
						</script>
