<div class="card col-md-12">
  <br><br>
<form id="save_contact" method="POST">
	<div class="row mt-4">
										<label class="col-md-12" style="color:red; font-weight:bold;font-size:16px;">Contact Information</label><hr/>
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
											<textarea class="form-control" name="address" row="3" cols="50px"> <?php if(!empty($address)){
												echo $address;
											}
											?></textarea>
										  </div>
										  <div class="form-group col-md-6">
											<label for="email">Permanent Address:</label>
											<textarea class="form-control" name="p_address" row="3" cols="50px"><?php if(!empty($permanent_address)){
													echo $permanent_address;
												}
												?></textarea>
										  </div>
										<label class="col-md-12" style="color:red; font-weight:bold;font-size:16px;">Parent/Guardian Details</label><hr/>
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

										  <label class="col-md-12" style="color:red; font-weight:bold;font-size:16px;">Sponsorship Type</label><hr/>
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
                      <?php if(is_applicant_admitted($con,$user_id)==true){
                        echo "<span class='alert alert-danger col-md-10 ml-4 mt-3 text-center'>You have been admitted, You can't update your Contact Information.....<span>";
                      }else {
                        echo '</div><center><div id="saving_contact">
                        <button type="submit" class="btn btn-info btn-lg"><span>Save</span></button>

                        </div></center>';
                      } ?>



											<div id="output_contact" class="col-md-12" style="color:red; font-weight:bold">

											</div>
											<br>
	</div>
			</form>
			<script type="text/javascript">
			$(document).ready(function(e){



					$("#save_contact").submit(function(event){
						event.preventDefault(); //prevent default action
						var post_url = "hubs/applicant/php/update_contact.php"; //get form action url
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
