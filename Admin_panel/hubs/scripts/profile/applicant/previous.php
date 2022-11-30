<div class="login-area" style="margin-top:50px;">
<form class="row" method="Post" action="#" id="add_previous">

										<div class="form-group col-md-4">
										<label for="email">Highest Qualification:</label>
										<select class="form-control" name="highest_qualification">
											<?php echo select_highest_qualification($idd = 0);?>
										</select>
										</div>
										<input type="hidden" name="app_id" value="<?php echo $id;?>">

										<div class="form-group col-md-8">
										<label for="email">Institution Obtained:</label>
										<input type="text" name="institution_obtained" value="" class="form-control">
										</div>


												<div class="form-group col-md-12">
													<label for="email">Year of Graduation</label>
													<input type="date" name="graduation_year" value="" class="form-control">

													</div>
                                                    <div id="previous_error">

													</div>
													<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Action <hr style="height:1px; background:#4ec870;"> </label>


													<div class="form-group col-md-6" id="">
													<button type="submit" class="btn btn-success" name="button">Submit</button>
													</div>


										</form>
</div>
<script type="text/javascript">
				$(document).ready(function(e){
				$("#add_previous").submit(function(event){
				event.preventDefault(); //prevent default action
				var post_url = "php/applicant/update_previous.php"; //get form action url
				var request_method = $(this).attr("method"); //get form GET/POST method

				$("#previous_error").html('<div style="margin-top:10px"><center>Updating, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

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
					alert('Updated Successful');
					$("#previous_error").html('');
			    }else{
					alert(response);
				$("#previous_error").html('');


				}
				});

				});
				});

		function link(){
		location.reload();
		}
</script>
