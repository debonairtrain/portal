<div class="login-area" style="margin-top:10px;">
<form class="row" method="post" action="#" id="add_contact">
										<div class="form-group col-md-6">
											<label for="email">Phone Number:</label>
											<input type="tel" name="phone" value="<?php echo get_applicant_phone_no($con,$id); ?>" class="form-control" placeholder="Enter Phone Number" required>
										  </div>
										  <div class="form-group col-md-6">
											<label for="email">Email:</label>
											<input type="email" name="email" value="<?php echo get_applicant_email2($con,$id); ?>" class="form-control" placeholder="Enter email" >
										  </div>
										  <div class="form-group col-md-6">
											<label for="email">Present Address:</label>
											<textarea class="form-control" name="address" rows="6px" cols="30px"><?php  echo get_applicant_address($con,$id);?></textarea>
										  </div>
										  <div class="form-group col-md-6">
											<label for="email">Permanent Address:</label>
											<textarea class="form-control" name="p_address" rows="6px" cols="30px"><?php  echo get_applicant_permanent_address($con,$id);?></textarea>
										  </div>
											<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Guardian Information <hr style="height:1px; background:#4ec870;"> </label>
										  <div class="form-group col-md-4">
											<label for="email">Guardian FullName:</label>
											<input type="text" name="g_name" class="form-control" placeholder="Enter guardian name"
											value="<?php echo  get_applicant_guardian_name($con,$id); ?>" >
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">Guardian Phone Number:</label>
											<input type="text" name="g_phone" class="form-control" value="<?php echo get_applicant_guardian_tel($con,$id);?>" placeholder="Enter guardian phone number" >
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">Guardian Email:</label>
											<input type="text" name="g_email" class="form-control" value="<?php echo get_applicant_guardian_email($con,$id);?>" placeholder="Enter guardian email" >
										  </div>
										  <div class="form-group col-md-6">
											<label for="pwd">Guardian Relationship:</label>
											<input type="text" name="g_relationship" class="form-control" value="<?php echo get_applicant_guardian_relationship($con,$id); ?>" placeholder="Enter password" >
										  </div>

										   <div class="form-group col-md-6">
											<label for="email">Guardian Address:</label>
											<textarea class="form-control" name="g_address" rows="6px" cols="40px"><?php echo get_applicant_guardian_address($con,$id); ?></textarea>
										  </div>

											<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Sponsorship Information <hr style="height:1px; background:#4ec870;"> </label>
										  <div class="form-group col-md-6">
											<label for="email">Sponsor FullName:</label>
											<input type="text" class="form-control" placeholder="Enter sponsorship name" value="<?php  echo get_applicant_sponsorhip_name($con,$id); ?>" name="s_name">
										  </div>
										  <div class="form-group col-md-6">
											<label for="pwd">Sponsor Type:</label>
											<select class="form-control" name="s_type">
												<?php echo select_applicant_sponsorship_type(get_applicant_sponsorship_type($con,$id));?>
											</select>
										  </div>

										   <div class="form-group col-md-12">
											<label for="email">Sponsor Address:</label>
											<textarea class="form-control" name="s_address" rows="6px" cols="30px"><?php echo get_applicant_sponsorship_address($con,$id); ?></textarea>
										  </div><hr/>
											<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Action <hr style="height:1px; background:#4ec870;"> </label>
											<div class="col-md-12" id="contact_error">

											</div>
											<input type="hidden" name="app_id" value="<?=$id;?>">
											<div class="form-group col-md-6" id="">
											<button type="submit" class="btn btn-success" name="button">Submit</button>
											</div>

			</form>

	</div>
	<script type="text/javascript">
					$(document).ready(function(e){
					$("#add_contact").submit(function(event){
					event.preventDefault(); //prevent default action
					var post_url = "php/applicant/update_contact.php"; //get form action url
					var request_method = $(this).attr("method"); //get form GET/POST method

					$("#contact_error").html('<div style="margin-top:10px"><center>Updating, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

					var form_data = new FormData(this); //Creates new FormData object


					$.ajax({
					url : post_url,
					type: request_method,
					data : form_data,
					contentType: false,
					cache: false,
					processData:false
					}).done(function(response){ //
					//alert(response);
					if(response==1){
					    alert('Contact Updated Successful');
						//window.setTimeout(link,2000);
						$("#contact_error").html('');
					}else{
						alert(response);
					$("#contact_error").html('');


					}
					});

					});
					});

			function link(){
			location.reload();
			}
	</script>
