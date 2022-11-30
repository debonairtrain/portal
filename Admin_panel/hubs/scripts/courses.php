<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage CMS</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Courses</li>
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
                              <a href="dashboard?hubs=new_course" id="addRow" class="btn btn-info" >
                                Add New <i class="fa fa-plus"></i>
                              </a>
                            </div>
  													<div class="btn-group">
                              <a href="dashboard?hubs=archive_courses" id="addRow" class="btn btn-warning" >
                                Archive Courses <i class="fa fa-times"></i>
                              </a>
                            </div>
                          </div>

                        </div>
                        <br>
  											<div class="col-md-12">
  												<?php
  												//query the database
  												$q = "SELECT * FROM courses WHERE course_status='1'
  														ORDER BY title ASC";
  												$r = mysqli_query($con, $q);

  												if(mysqli_num_rows($r) > 0)
  												{//show table



  														$output =
  														'<table class="table table-hover table-center mb-0 datatable">
  																<thead>
  																<th></th>
  																<th>School</th>
  																<th>Department</th>
  																<th>Title</th>
  																<th>Code</th>
  																<th>Unit</th>
  																<th>Semester</th>
  																<th>Level</th>
  																<th>Course Type</th>
  																<th>Action</th>




  														</thead>


  														<tbody>';
  														$sn=1;
  													while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
  													{

  														$semester=$row['semester'];
  														$course_type=$row['course_type'];
  														if($course_type=='1')
  														{
  														$course_type = '<span class="btn btn-info">CORE</span>';
  														}else if($course_type=='2'){
  														$course_type = '<span class="btn btn-primary">Elective</span>';
  														}

  														if($semester=='1')
  														{
  														$semester = '<span class="btn btn-info">First</span>';
  														}else if($semester=='2'){
  														$semester = '<span class="btn btn-primary">Second</span>';
  														}

  														$output .= "<tr>";
  														$output .= "<td>".$sn."</td>";
  													 	$output .= "<td>".get_user_school($con, $row['type_id'])."</td>";
  														$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
  														$output .= "<td>".$row['title']."</td>";
  														$output .= "<td>".$row['code']."</td>";
  														$output .= "<td>".$row['unit']."</td>";
  														$output .= "<td>".$semester."</td>";
  														$output .= "<td>".$row['level']."</td>";
  														$output .= "<td>".$course_type."</td>";
  														$output .= '<td>
                                          <div class="actions">
                                          <a href="dashboard?hubs=edit_course&id='.$row['id'].'" id="'.$id.'" class="btn btn-sm bg-success-light me-2">
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
									 $.post("php/delete_course.php",{id:id},

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
