<div class="card col-md-12">
  <br><br>
<form id="save_biodata" method="POST">
	<div class="row mt-4">
										  <div class="form-group col-md-4">
											<label for="email">First Name:</label>
											<input type="text" name="f_name" class="form-control" value="<?php
											if(!empty($first_name)){
												echo $first_name;
											}
											?>"  readonly  >
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">Middle Name:</label>
											<input type="text" name="m_name" class="form-control"  value="<?php
											if(!empty($middle_name)){
												echo $middle_name;
											}
											?>"  readonly>
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">Last Name:</label>
											<input type="text" name="l_name" class="form-control" value="<?php
											if(!empty($last_name)){
												echo $last_name;
											}
											?>"  readonly >
										  </div>
										  <div class="form-group col-md-4">
											<label for="email">Marital Status:</label>
											<select class="form-control" name="marital" required>
												<?=select_marital_status($marital_status);?>
											</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">Gender:</label>
											<select class="form-control" name="gender" required>
												<?php echo select_gender($gender);?>
											</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">Religion:</label>
											<select class="form-control" name="religion" required>
											<?php echo select_religion($religion);?>
											</select>
										  </div>
										  <div class="form-group col-md-5">
											<label for="pwd">Place of Birth:</label>
											<input type="text" name="pob" value="<?php
											if(!empty($place_of_birth)){
												echo $place_of_birth;
											}
											?>" class="form-control" required>
										  </div>

											<div class="col-md-7">

                   <div class="col-md-12">
                        <div class="container">
                                <div class="row">





                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="day">DOB (Day) <span class="ast">*</span></label>
                                        <select name="day" class="form-control">
                                        	<option value="0"  > --DD-- </option>
                                           <?php day($day); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="month">DOB (Month) <span class="ast">*</span></label>
                                       			 <select name="month" class="form-control">
                                                 	<option value="0"> --MM-- </option>
                                                 	<?php month($month); ?>
                                      	         </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="year">DOB (Year) <span class="ast">*</span></label>

                                            <select name="year" class="form-control">
                                            <option value="0"  > --YYYY-- </option>
                                            <?php year($year); ?>
                                            </select>
                                        </div>
                                    </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->


                    </div><!-- /.col md 12 -->
										</div>
										  <label class="col-md-12" style="color:red; font-weight:bold;font-size:16px;">Nationality</label>

										  <hr/>
										  <div class="form-group col-md-4">
											<label for="pwd">Country:</label>
											<select class="form-control" name="country" required>
												<?=select_nationality($country_id);?>
											</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">State:</label>
											<select class="form-control" name="state" id="state_id" onchange="load_lga()" required>
												<option value="0">-- Choose State</option>
												<?=select_state($con,$state_id);?>
												</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">LGA:</label>
											<select class="form-control" name="lga" id="lga" required>
												 <?=select_lga($con,$state_id,$lga_id);?>


											</select>
										  </div>
                      <?php if(is_applicant_admitted($con,$user_id)==true){
                        echo "<span class='alert alert-danger col-md-10 ml-4 mt-3 text-center'>You have been admitted, You can't update your Bio-data.....<span>";
                      }else {
                        echo '</div><center><div id="saving">
                        <button type="submit" class="btn btn-info btn-lg"><span>Save</span></button>

                        </div></center>';
                      } ?>

											<br>


										  <div id="output" class="col-md-12" style="color:red; font-weight:bold">

										  </div>
												<br><br>
	</div>

</form>
<script type="text/javascript">
$(document).ready(function(e){



		$("#save_biodata").submit(function(event){
			event.preventDefault(); //prevent default action
			var post_url = "hubs/applicant/php/update_biodata"; //get form action url
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

			$.post('hubs/applicant/php/load_lga.php',{state_id:state_id},
			function(response,status){

			document.getElementById("lga").innerHTML =response;

			});
}

function link(){
	location.reload();
}
</script>
