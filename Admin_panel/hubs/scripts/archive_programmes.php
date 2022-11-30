<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage CMS</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Archive Programmes</li>
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
																	<a href="dashboard?hubs=programmes" id="addRow" class="btn btn-info" >
																		Go Back <i class="fa fa-plus"></i>
																	</a>
																</div>

															</div>

														</div>
                      <div class="datatable-wrapper table-responsive">
                        <table class="table table-striped datatable">
                          <thead>
                              <tr>
                                <th></th>
                                <th>School</th>
                                <th>Faculty</th>
                                <th>Department</th>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Status</th>
                                <th>Date Added</th>
                                <th>Date Modified</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <?php




                          $select="SELECT * FROM programmes WHERE programme_status='2' ";
                          $sql_select = mysqli_query($con,$select);
                          $num_rows=mysqli_num_rows($sql_select);
                          if($num_rows > 0){
                          $sn=1;
                          while($row=mysqli_fetch_array($sql_select)){

                            $id=$row['id'];
                            $school_id=$row['school_id'];
                            $faculty_id=$row['faculty_id'];
                             $department_id=$row['department_id'];
                             $title=$row['title'];
                             $code=$row['code'];
                             $description=$row['description'];
                             $real_=$row['programme_status'];
                             $date_added=$row['date_added'];
                             $date_modified=$row['date_modified'];
                             $school = get_user_school($con,$school_id);
                             $faculty = get_user_faculty($con,$faculty_id);
                             $department = get_user_deparment($con,$department_id);
                             if($real_=='1')
                                 {
                                   $status = '<span class="btn btn-info">Published</span>';
                                 }else {
                                   $status = '<span class="btn btn-danger">Deleted</span>';
                                 }

                             echo $tr = '

                             <tbody>
                                 <tr>
                                    <td>'.$sn.'</td>
                                    <td>'.$school.'</td>
                                    <td>'.$faculty.'</td>
                                     <td>'.$department.'</td>
                                     <td>'.$title.'</td>
                                     <td>'.$code.'</td>
                                     <td>'.$status.'</td>
                                     <td>'.$date_added.'</td>
                                     <td>'.$date_modified.'</td>
                                     <td>
                                     <a href="#" onclick="delete_school('.$row['id'].')" class="btn btn-sm bg-danger-light">
                                     <i class="fas fa-trash"></i>
                                     </a>
                                    </td>
                                                    <input type="hidden" id="department_id" value="'.$id.'"/>
                                 </tr>
                               ';
                               $sn++;

                          }
                          }else {
                          echo '<td colspan="10">No record found</td>';
                          }

?>
                              </tbody>

                        </table>
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
									 $.post("php/restore_programme.php",{id:id},

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
