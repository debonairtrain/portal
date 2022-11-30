<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Finance Setup</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Archive School Fee Setup</li>
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
																	<a href="dashboard?hubs=sch_fee_setup" id="addRow" class="btn btn-info" >
																		Go Back <i class="fa fa-plus"></i>
																	</a>
																</div>

															</div>

														</div>
                      <div class="datatable-wrapper table-responsive">
                        <div class="col-md-12" style="margin-top:20px;">
														<?php
														//query the database
														$q = "SELECT *
																FROM  set_school_fee_payments_for_students
																WHERE status = '2'
																ORDER BY title ASC";
														$r = mysqli_query($con, $q);
														if(mysqli_num_rows($r) > 0)
														{//show table
																$output =
																'<div class="datatable-wrapper table-responsive">
																	<table class="display compact table table-striped table-bordered datatable">
																		<thead>
																			<th>School</th>
																			<th>Department</th>
																			<th>Programme</th>
																			<th>Session</th>
																			<th>Title</th>
																			<th>Description</th>
																			<th>Amount</th>
																			<th>Partly Amount</th>
																			<th>Total Amount</th>
																			<th>Status</th>
																			<th>Action</th>
																</thead>
																<tbody>';
															while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
															{
																$status = $row['status'];
																if($status=='1')
																		{
																			$status = '<span class="btn btn-info">Active</span>';
																		}else {
																			$status = '<span class="btn btn-danger">Not Active</span>';
																		}
																$output .= "<tr>";
															 $output .= "<td>".get_user_school($con, $row['programme_type_id'])."</td>";
																$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
																$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
																$output .= "<td>".get_current_session_title($con, $row['session'])."</td>";
																$output .= "<td>".$row['title']."</td>";
																$output .= "<td>".$row['description']."</td>";
																$output .= "<td>".$row['amount']."</td>";
																$output .= "<td>".$row['partly_amount']."</td>";
																$output .= "<td>".$row['total_amount']."</td>";
																$output .= "<td>".$status."</td>";
																$output .= '<td>
                                <a href="#" onclick="delete_school('.$row['id'].')" class="btn btn-sm bg-danger-light">
                                <i class="fas fa-trash"></i>
                                </a>
                               </td>
                                               <input type="hidden" id="department_id" value="'.$id.'"/>';
																$output .= "</tr>";
															}
														}
														else
														{//show the msg
																$output =
																		 '<div class="alert alert-danger alert-dismissable">
																		<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
																		<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
																		 </div>';
														}
														$output .=
														'</tbody>
															</table>';
														echo $output;
														?>
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
									 $.post("php/restore_sch_fee.php",{id:id},

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
