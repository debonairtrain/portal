<div class="login-area" style="margin-top:50px;">
<form class="row" method="Post" action="#" id="add_previous">
<?php
if(isset ($_GET['xd'] ,  $_GET['id']))

{

	$id = $_GET['xd'];

}
?>
										<div class="form-group col-md-4">
										<label for="email">Highest Qualification:</label>
										<select class="form-control" name="highest_qualification">
											<?php echo select_highest_qualification($idd = 0);?>
										</select>
										</div>
										<input type="hidden" name="stu_id" value="<?php echo $id;?>">

										<div class="form-group col-md-8">
										<label for="email">Institution Obtained:</label>
										<input type="text" name="institution_obtained" value="" class="form-control">
										</div>


												<div class="form-group col-md-12">
													<label for="email">Year of Graduation</label>
													<input type="date" name="graduation_year" value="" class="form-control">

													</div>

													<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Action <hr style="height:1px; background:#4ec870;"> </label>
													<div id="login_out">

													</div>

													<div class="form-group col-md-6" id="">
													<button type="submit" class="btn btn-success" name="button">Submit</button>
													</div>
													<div class="" id="login_out">

													</div>

										</form>
</div>
<script type="text/javascript">
				$(document).ready(function(e){
				$("#add_previous").submit(function(event){
				event.preventDefault(); //prevent default action
				var post_url = "php/students/update_previous.php"; //get form action url
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
					alert('Updated Successful');
					window.setTimeout(link,2000);
				}else{
					alert(response);
				//$("#login_out").html(response);


				}
				});

				});
				});

		function link(){
		location.reload();
		}
</script>
