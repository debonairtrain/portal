<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage CMS</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Schools</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
  <div class="row">
                            <div class="card-body ">
                        <div class="row">
                          <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                              <a href="dashboard?hubs=new_school" id="addRow" class="btn btn-info" >
                                Add New <i class="fa fa-plus"></i>
                              </a>
                            </div>
  													<div class="btn-group">
                              <a href="dashboard?hubs=archive_schools" id="addRow" class="btn btn-warning" >
                                Archive Courses <i class="fa fa-times"></i>
                              </a>
                            </div>
                          </div>

                        </div>
                        <br>
                        <div class="col-md-12">
												<?php
												//query the database
												$q = "SELECT * FROM schools WHERE school_status='1'
														ORDER BY title ASC";
												$r = mysqli_query($con, $q);

												if(mysqli_num_rows($r) > 0)
												{//show table



														$output =
														'
															<table class="display compact table table-striped table-bordered datatable">
																<thead>
																<th></th>
																<th>Title</th>
									              <th>Description</th>
									              <th>Code</th>
									              <th>Status</th>
									              <th>Date Added</th>
									              <th>Date Modified</th>
									              <th>Action</th>
														</thead>
														<tbody>';
														$sn=1;
													while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
													{

														$real_=$row['real_'];
														if($real_=='0')
														{
														$status = '<span class="btn btn-info">Published</span>';
														}else if($real_=='1') {
														$status = '<span class="btn btn-primary">Unpublished</span>';
														}else {
														$status = '<span class="btn btn-danger">Not Active</span>';
														}

														$output .= "<tr>";
														$output .= "<td>".$sn."</td>";
													 	$output .= "<td>".$row['title']."</td>";
														$output .= "<td>".$row['description']."</td>";
														$output .= "<td>".$row['code']."</td>";
														$output .= "<td>".$status."</td>";
														$output .= "<td>".$row['date_added']."</td>";
														$output .= "<td>".$row['date_modified']."</td>";
                            $output .= '<td>
                                        <div class="actions">
                                        <a href="dashboard?hubs=edit_school&id='.$row['id'].'" id="'.$id.'" class="btn btn-sm bg-success-light me-2">
                                        <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" onclick="delete_school('.$row['id'].')" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-trash"></i>
                                        </a>
                                        </div>
                                        </td>
                                           <input type="hidden" id="department_id" value="'.$row['id'].'"/> </td>';




														$output .= "</tr>";
														$sn++;

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
								if(confirm("Do you  really want to proceed?"))
								 {
									 $.post("php/delete_school.php",{id:id},

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
