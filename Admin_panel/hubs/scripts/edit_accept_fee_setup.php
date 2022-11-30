<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Finance Setup</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Edit Acceptance Fee Setup</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="col-md-12">

														<?php
	                          if (isset($_GET['api'])) {
	                                //$id = $_GET['api'];
                                  $id= base64_decode($_GET['api']);
	                            }
	                            $select="SELECT *
																  FROM  set_acceptance_fee_payments
																	WHERE id = $id ";
	                            $sql_select = mysqli_query($con,$select);
	                            $num_rows=mysqli_num_rows($sql_select);
	                            if($num_rows > 0){
	                            $sn=1;
	                            while($row=mysqli_fetch_array($sql_select)){

																$id=$row['id'];
																$programme_type_id=$row['programme_type_id'];
																$department_id=$row['department_id'];
																$programme_id=$row['programme_id'];
																$academic_year_id=$row['session'];
																$title=$row['title'];
																$description=$row['description'];
																$amount=$row['amount'];
																$partly_amount=$row['partly_amount'];
																$total_amount=$row['total_amount'];
																$status=$row['status'];

	                            }
	                            }else {
	                            echo '<td colspan="7">No record found</td>';
	                            }

	                          ?>
														<form method="post" id="edit_accept_fee_setup">
															<input type="hidden" name="id" value="<?php echo $id;?>">
															<div class="form-group">
																<label for="to" class="">Type:</label>
																<select class="form-control" name="school">
																	<?php echo select_school($con, $programme_type_id)?>

																</select>

															</div>

															<div class="form-group">
																<label for="subject" class="">Faculty:</label>
																<select class="form-control" name="faculty">
																	<?php echo select_faculty($con, $programme_type_id)?>

																</select>
															</div>
															<div class="form-group">
																<label for="subject" class="">Department:</label>
																<select class="form-control" id="department" onchange="load_programme()" name="department_id">
																	<option value="0">--Select Department--</option>
																	<?php echo select_department($con, $department_id)?>
																</select>
															</div>
															<div class="form-group">
																<label for="subject" class="">Programme:</label>
																<select class="form-control" name="programme_id" id="programme_id">
																	<?php echo select_programme($con, $programme_id)?>

																</select>
															</div>
															<div class="form-group">
																<label for="subject" class="">Title:</label>
																<input type="text" name="title" value="<?php echo $title;?>" class="form-control" placeholder="Enter Title">
															</div>
															<div class="form-group">
																<label for="subject" class="">Description:</label>
																<textarea name="description" rows="4" cols="80" class="form-control"><?php echo $description;?></textarea>
															</div>
															<div class="form-group">
																<label for="subject" class="">Amount:</label>
																<input type="text" name="amount" value="<?php echo $amount;?>" class="form-control" placeholder="Enter Amount">
															</div>
															<div class="form-group">
																<label for="subject" class="">Partly Amount:</label>
																<input type="text" name="partly_amount" value="<?php echo $partly_amount;?>" class="form-control" placeholder="Enter Partly Amount">
															</div>
															<div class="form-group">
																<label for="subject" class="">Total Amount:</label>
																<input type="text" name="total_amount" value="<?php echo $total_amount;?>" class="form-control" placeholder="Enter Total Amount">
															</div>
															<div class="form-group">
																<label for="subject" class="">Status:</label>
																<select class="form-control" name="status">
																	<?php echo select_user_status($con, $status)?>

																</select>
															</div>
														<center>	<div class="btn-group margin-top-20 " id="saving_register" >

																	<button
																	class="btn btn-info btn-sm"><i
																		class="fa fa-check"></i> Submit</button> &nbsp;&nbsp;
																		<a href="dashboard?hubs=app_fee_setup" type="submit" class="btn btn-warning btn-sm" name="button"><i
																			class="fa fa-times"></i>Cancel</a>


															</div></center>
															<div id="login_out">
									            </div>
														</form>
                          </div>
													<script type="text/javascript">
							                 $(document).ready(function(e){



							                $("#edit_accept_fee_setup").submit(function(event){
							                  event.preventDefault(); //prevent default action
							                  var post_url = "php/edit_accept_fee_setup.php"; //get form action url
							                  var request_method = $(this).attr("method"); //get form GET/POST method

							                  $("#login_out").html('<div style="margin-top:10px"><center>Processing, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

							                  var form_data = new FormData(this); //Creates new FormData object
							                    $.ajax({
							                      url : post_url,
							                      type: request_method,
							                      data : form_data,
							                      contentType: false,
							                      cache: false,
							                      processData:false
							                    }).done(function(response){ //
							                      if(response==1){
							                        window.location.href = "dashboard?hubs=accept_fee_setup&Successfully Updated";
							                      }else{
							                      $("#login_out").html(response);
							                      }
							                    });

							                });
							            });
													function load_programme(){
				                  			var department_id = document.getElementById("department").value;
				                  			$.post('php/load_programme.php',{department_id:department_id},
				                  			function(response,status){
				                  			document.getElementById("programme_id").innerHTML =response;

				                  			});
				                  }
							                </script>
</div>
</div>
</div>
</div>
