<div class="card col-md-12">
  <br><br>
<form id="save_programme" method="POST">
	<div class="row mt-4">
										<label class="col-md-12" style="color:red; font-weight:bold;font-size:16px;">Programme Information</label><hr/>
										<div class="form-group col-md-6">
											<label for="email">Department:</label>
											<select class="form-control" id="department_id" name="department" onchange="load_programme()" required >
												<option value="0"  > --Please Department-- </option>
													<?php echo select_department($con, $department_applied_for); ?>
												</select>
										  </div>

										<div class="form-group col-md-6">
										<label for="email">Programme:</label>
										<select class="form-control" id="programme" name="programme" required>
											<option value="0">--Choose Programme --</option>
												<?php echo select_programme($con, $programme_applied_for); ?>
												</select>
										</div>
                    <?php if(is_applicant_admitted($con,$user_id)==true){
                      echo "<span class='alert alert-danger col-md-10 ml-4 mt-3 text-center'>You have been admitted, You can't change your programme.....<span>";
                    }else {
                      echo '</div><div id="saving_programme">
                      <center><button type="submit" class="btn btn-info btn-lg"><span>Save</span></button>
                      </center>
                      </div>';
                    } ?>
									

										  <div id="output_programme">

										  </div>
											<br>
												</div>
										</form>
										<script type="text/javascript">
										$(document).ready(function(e){



												$("#save_programme").submit(function(event){
													event.preventDefault(); //prevent default action
													var post_url = "hubs/applicant/php/update_programme"; //get form action url
													var request_method = $(this).attr("method"); //get form GET/POST method

													$("#output_programme").html('<div style="margin-top:10px"><center>Saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
													document.getElementById("saving_programme").style.display = "none";
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


															 document.getElementById("saving_programme").style.display = "block";
															 $("#output_programme").html("");
															  alert("Programme Updated");
																window.setTimeout(link,2000);


															}else{

															$("#output_programme").html(response);
															document.getElementById("saving_programme").style.display = "block";

															}
														});

												});
										});
										function load_programme(){




										var department_id = $("#department_id").val();

										//alert(department_id);
										$.post('hubs/applicant/pages/load_programme.php',{department_id:department_id},
										function(response,status){

										document.getElementById("programme").innerHTML =response;

										});
}
										function link(){
											location.reload();
										}
										</script>
