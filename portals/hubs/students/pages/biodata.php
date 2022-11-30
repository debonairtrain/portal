<div class="card col-md-12" style="margin-top:10px;">
<form class="row mt-5 mb-4" method="Post" action="#" id="save_biodata">
	<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Personal Information <hr style="height:1px; background:#4ec870;"> </label>
										  <div class="form-group col-md-4">
											<label for="email">First Name:</label>
											<input type="text" name="f_name" placeholder="First Name" class="form-control" value="<?php
											if(!empty($first_name)){
												echo $first_name;
											}
											?>"  readonly  >
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">Middle Name:</label>
											<input type="text" name="m_name" placeholder="Middle Name" class="form-control"  value="<?php
											if(!empty($middle_name)){
												echo $middle_name;
											}
											?>"  readonly>
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">Last Name:</label>
											<input type="text" name="l_name" placeholder="Last Name" class="form-control" value="<?php
											if(!empty($last_name)){
												echo $last_name;
											}
											?>"  readonly >
										  </div>

										  <div class="form-group col-md-6">
											<label for="email">Marital Status:</label>
											<select class="form-control" name="marital" required>
												<?=select_marital_status($marital_status);?>
											</select>
										  </div>
										  <div class="form-group col-md-6">
											<label for="pwd">Gender:</label>
											<select class="form-control" name="gender" required>
												<?php echo select_gender($gender);?>
											</select>
										  </div>
										  <div class="form-group col-md-6">
											<label for="pwd">Religion:</label>
											<select class="form-control" name="religion" required>
												<?php echo select_religion($religion);?>
											</select>
										  </div>
										  <div class="form-group col-md-6">
											<label for="pwd">Place of Birth:</label>
											<input type="text" name="pob" value="<?php
											if(!empty($place_of_birth)){
												echo $place_of_birth;
											}
											?>" class="form-control" required>
										  </div>
											<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Date of Birth <hr style="height:1px; background:#4ec870;"> </label>
											<div class="form-group col-md-12">
										<div class="row mb-4">

                        <div class="col-sm-12 col-md-4">

                            <label for="inputState" class="form-label">Day</label>
                            <select class="form-control" name="day">
                              <?=day($day)?>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-4">

                            <label for="inputState" class="form-label">Month</label>
                              <select class="form-control" name="month">
                                <?=month($month)?>
                              </select>
                        </div>
                        <div class="col-sm-12 col-md-4">

                            <label for="inputState" class="form-label">Year</label>
                            <select class="form-control" name="year">
                              <?=year($year)?>
                            </select>
                        </div>
                        </div>
										</div>
<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Nationality <hr style="height:1px; background:#4ec870;"> </label>
										  <div class="form-group col-md-4">
											<label for="pwd">Country:</label>
											<select class="form-control" name="country" required>
												<?=select_nationality($nationality);?>
											</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">State:</label>
											<select class="form-control" name="state" id="state_id" onchange="load_lga()" required>
												<option value="0">---- Choose State ----</option>
												<?php echo select_state($con,$state_id);?>
												</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">LGA:</label>
											<select class="form-control" name="lga" id="lga" required>
												<option value="0">---select lga---</option>
												<?php echo select_lga($con,$state_id,$lga_id);?>
											</select>
										  </div>

								<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Other Information <hr style="height:1px; background:#4ec870;"> </label>
								<div class="form-group col-md-6">
								<label for="pwd">Working Class?</label>
								<select class="form-control" name="working" id="lga" required>
									<option value="0">---select lga---</option>
									<option value="1">No</option>
									<option value="2">Public</option>
									<option value="3">Private</option>
									<option value="4">NGO</option>
								</select>
								</div>
								<div class="form-group col-md-6">
								<label for="pwd">Working Experience</label>
								<input type="number" name="working_experience" value="" class="form-control">
								</div>
								<div id="output" class="col-md-12 text-danger">

										  </div>
								<div class="course-content" id="saving">
								<button type="submit" style="width:100px; margin-left:20px;" class="btn btn-success"><span>Save</span></button>
								 </div>

</div>
</form>
<script type="text/javascript">
$(document).ready(function(e){



		$("#save_biodata").submit(function(event){
			event.preventDefault(); //prevent default action
			var post_url = "hubs/students/php/update_biodata"; //get form action url
			var request_method = $(this).attr("method"); //get form GET/POST method

			$("#output").html('<div style="margin-top:10px"><center>Saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
			document.getElementById("saving").style.display = "none";
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


					 document.getElementById("saving").style.display = "block";
					 $("#output").html("");
					  //swal("");
						alert("Bio-Data Updated!");
						window.setTimeout(link,2000);

					}else{

					$("#output").html(response);
					document.getElementById("saving").style.display = "block";

				}
				});

		});
});

function load_lga(){




			var state_id = document.getElementById("state_id").value;

			//swal(lga);

			$.post('hubs/students/php/load_lga.php',{state_id:state_id},
			function(response,status){

			document.getElementById("lga").innerHTML =response;

			});
}

function link(){
	location.reload();
}
</script>
