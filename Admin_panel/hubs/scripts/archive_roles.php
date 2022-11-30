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
																	<a href="dashboard?hubs=roles" id="addRow" class="btn btn-info" >
																		Go Back <i class="fa fa-plus"></i>
																	</a>
																</div>

															</div>

														</div>
                      <div class="datatable-wrapper table-responsive">
                        <div class="col-12" style="margin-top:20px;">

																	<?php
																	$q = "SELECT id, title,description, added_by, modified_by, status,
																				DATE_FORMAT(date_modified, '%M %d, %Y %l:%i:%p') as date_modified,
																		  	DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added

																		  FROM  desgnations WHERE status = '2' ORDER BY title ASC";
																	$r = mysqli_query($con, $q);
																	if(mysqli_num_rows($r) > 0)
																	{//show table
																		  $output =
																		  '  <div class="datatable-wrapper table-responsive">
																					<table class="display compact table table-striped table-bordered datatable">
																							<thead>
																						<th></th>
																						<th>Title</th>
																						<th>Description</th>
																						<th>Date Added</th>
																						<th>Date Modified</th>
																						<th>Added By</th>
																						<th>Modified By</th>
																						<th>Status</th>
																						<th>Action</th>
																			</thead>
																			<tbody>';
																			$sn = 1;
																		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
																		{
																			$output .= "<tr>";

																			$status = $row['status'];
																			if($status =='1')
																			{
																				$view = '<span class="btn btn-info">Active</span>';
																			}else {
																				$view = '<span class="btn btn-danger">Not Active</span>';
																			}
																			$output .= "<td>".$sn."</td>";
																			$output .= "<td>".$row['title']."</td>";
																			$output .= "<td>".$row['description']."</td>";
																			$output .= "<td>".$row['date_added']."</td>";
																			$output .= "<td>".$row['date_modified']."</td>";
																			$output .= "<td>".$row['added_by']."</td>";
																			$output .= "<td>".$row['modified_by']."</td>";
																			$output .= "<td>".$view."</td>";
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
																    </table>';
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
									 $.post("php/restore_role.php",{id:id},

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
