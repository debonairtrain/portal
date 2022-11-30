<div class="card col-md-12" style="margin-top:10px;">
<form class="row mt-5 mb-4" method="Post" action="#" id="save_contact">
										<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Contact Information <hr style="height:1px; background:#4ec870;"> </label>
										<div class="form-group col-md-6">
											<label for="email">Phone Number:</label>
											<input type="tel" name="phone" value="<?php
											if(!empty($phone_no)){
												echo $phone_no;
											}
											?>" class="form-control" placeholder="Enter Phone Number" required>
										  </div>
										  <div class="form-group col-md-6">
											<label for="email">Email:</label>
											<input type="email" name="email" value="<?php if(!empty($email)){
												echo $email;
											}
											?>" class="form-control" placeholder="Enter email" >
										  </div>
										  <div class="form-group col-md-6">
											<label for="email">Present Address:</label>
											<textarea class="form-control" name="address" row="3" cols="50px"><?php if(!empty($address)){
												echo $address;
											}
											?> </textarea>
										  </div>
										  <div class="form-group col-md-6">
											<label for="email">Permanent Address:</label>
											<textarea class="form-control" name="p_address" row="3" cols="50px"> <?php if(!empty($permanent_address)){
													echo $permanent_address;
												}
												?></textarea>
										  </div>
											<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Guardian Information <hr style="height:1px; background:#4ec870;"> </label>
										  <div class="form-group col-md-4">
											<label for="email">Guardian FullName:</label>
											<input type="text" name="g_name" class="form-control" placeholder="Enter guardian name"
											value="<?php if(!empty($guardian_name)){
												echo $guardian_name;
											}
											?>" >
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">Guardian Phone Number:</label>
											<input type="text" name="g_phone" class="form-control" value="<?php if(!empty($guardian_tel)){
												echo $guardian_tel;
											}
											?>" placeholder="Enter guardian phone number" >
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">Guardian Email:</label>
											<input type="text" name="g_email" class="form-control" value="<?php if(!empty($guardian_email)){
												echo $guardian_email;
											}
											?>" placeholder="Enter guardian email" >
										  </div>
										  <div class="form-group col-md-6">
											<label for="pwd">Guardian Relationship:</label>
											<input type="text" name="g_relationship" class="form-control" value="<?php if(!empty($guardian_relationship)){
												echo $guardian_relationship;
											}
											?>" placeholder="Enter password" >
										  </div>

										   <div class="form-group col-md-6">
											<label for="email">Guardian Address:</label>
											<textarea class="form-control" name="g_address" row="3" cols="80px"><?php if(!empty($guardian_address)){
													echo $guardian_address;
												}
												?></textarea>
										  </div>

<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Sponsorship Information <hr style="height:1px; background:#4ec870;"> </label>
										  <div class="form-group col-md-6">
											<label for="email">Sponsor FullName:</label>
											<input type="text" class="form-control" placeholder="Enter sponsorship name" value="<?php if(!empty($sponsorship_name)){
												echo $sponsorship_name;
											}
											?>" name="s_name">
										  </div>
										  <div class="form-group col-md-6">
											<label for="pwd">Sponsor Type:</label>
											<select class="form-control" name="s_type">
												<?php echo select_sponsorship_type($sponsorship_type);?>
											</select>
										  </div>

										   <div class="form-group col-md-12">
											<label for="email">Sponsor Address:</label>
											<textarea class="form-control" name="s_address" row="3" cols="50px"><?php if(!empty($sponsorship_address)){
													echo $sponsorship_address;
												}
												?></textarea>
										  </div><hr/>

											<div id="output_contact">

											</div>
											<div class="course-content" id="saving_contact">
										 <button type="submit" style="width:100px; margin-left:20px;" class="btn btn-success"><span>Save</span></button>
										  </div>

			</form>

	</div>
	<script type="text/javascript">
				$(document).ready(function(e){



						$("#save_contact").submit(function(event){
							event.preventDefault(); //prevent default action
							var post_url = "hubs/students/php/update_contact.php"; //get form action url
							var request_method = $(this).attr("method"); //get form GET/POST method

							$("#output_contact").html('<div style="margin-top:10px"><center>Saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
							document.getElementById("saving_contact").style.display = "none";
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


									 document.getElementById("saving_contact").style.display = "block";
									 $("#output_contact").html("");
									  alert("Contact Updated");
										window.setTimeout(link,2000);


									}else{

									$("#output_contact").html(response);
									document.getElementById("saving_contact").style.display = "block";

									}
								});

						});
				});

				function link(){
					location.reload();
				}

				</script>
