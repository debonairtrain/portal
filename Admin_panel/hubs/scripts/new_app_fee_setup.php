<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Finance Setup</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Add Application Fee Setup</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="compose-mail">
																<form method="post" id="add_app_fee_setup">
																	<div class="form-group">
																		<label for="to" class="">Type:</label>
																		<select class="form-control" name="school">
																			<?php echo select_school($con, $id=0)?>

																		</select>

																	</div>

																	<div class="form-group">
																		<label for="subject" class="">Faculty:</label>
																		<select class="form-control" name="faculty">
																			<?php echo select_faculty($con, $id=0)?>

																		</select>
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Department:</label>
																		<select class="form-control" id="department" onchange="load_programme()" name="department_id">
                                      <option value="0">--Select Department--</option>
                                      <?php echo select_department($con, $id='0')?>
																		</select>
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Programme:</label>
																		<select class="form-control" name="programme_id" id="programme_id">
																			<?php echo select_programme($con, $id=0)?>

																		</select>
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Title:</label>
																		<input type="text" name="title" value="" class="form-control" placeholder="Enter Title">
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Description:</label>
																		<textarea name="description" rows="4" cols="80" class="form-control"></textarea>
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Amount:</label>
																		<input type="text" name="amount" value="" class="form-control" placeholder="Enter Amount">
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Partly Amount:</label>
																		<input type="text" name="partly_amount" value="" class="form-control" placeholder="Enter Partly Amount">
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Total Amount:</label>
																		<input type="text" name="total_amount" value="" class="form-control" placeholder="Enter Total Amount">
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Status:</label>
																		<select class="form-control" name="status">
																			<?php echo select_user_status($con, $id=0)?>

																		</select>
																	</div>
																	<center><div class="btn-group margin-top-20 " id="saving_register">
																		<button
																			class="btn btn-info btn-sm margin-right-10"><i
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



							                $("#add_app_fee_setup").submit(function(event){
							                  event.preventDefault(); //prevent default action
							                  var post_url = "php/add_app_fee_setup.php"; //get form action url
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
							                        window.location.href = "dashboard?hubs=app_fee_setup&Successfully Added";
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
