<?php $output = ''; ?>
<div class="card col-md-12">
<form id="save_credential" method="POST">
<label class="col-md-12 mt-4" for="dob" style="font-size:20px; font-weight:bold;">Credentials Uploads <hr style="height:1px; background:#4ec870;"> </label>
<div class="form-group row">
<label for="inputPassword" class="col-sm-2 col-form-label">Credential Type:</label>
<div class="col-sm-10">
	<select style="height:50px;" class="form-control" name="file_name">
	 <option value="0">---- Select -----</option>
	 <option value="PhD">PhD</option>
	 <option value="MSC">MSC</option>
	 <option value="BSc">BSc</option>
	 <option value="WAEC/NECO">WAEC/NECO</option>
	 <option value="Primary Cert">Primary Cert</option>
	 <option value="Birth Certificate">Birth Certificate</option>
   <option value="State of Origin Cert">State of Origin Cert</option>
   <option value="jamb result">Jamb Result</option>
	 <option value="health record">Health Resord</option>
	 <option value="C.V">C.V</option>
	 <option value="Professional Certificate">Professional Certificate</option>
	 <option value="Others">Others</option>
 </select>
</div>
</div>
<div class="form-group row">
<label for="inputPassword" class="col-sm-2 col-form-label">File Upload:</label>
<div class="col-sm-10">
	<input type="file" name="image" value="" style="height:50px;" class="form-control" required>
</div>
</div>
<input type="hidden" name="staffid" value="<?php echo $staffid; ?>">
<div id="saving_credential">
<center><button type="submit" onclick="add()"  class="btn btn-primary btn-lg"><span>Save</span></button>
</center>
</div>

<div id="output_credential" style="font-size:18px; text-align:center;color:red;font-weight:bold;">

</div>

</form>
<?php
 echo get_student_credentials($con, $user_id)

?>
</div>
<script type="text/javascript">
$(document).ready(function(e){



		$("#save_credential").submit(function(event){
			event.preventDefault(); //prevent default action
			var post_url = "hubs/students/php/update_credential"; //get form action url
			var request_method = $(this).attr("method"); //get form GET/POST method

			$("#output_credential").html('<div style="margin-top:10px"><center>Saving Data, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
			document.getElementById("saving_credential").style.display = "none";
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


					 document.getElementById("saving_credential").style.display = "block";
					 $("#output_credential").html("Credential updated");
						window.setTimeout(link,2000);

					}else{

					$("#output_credential").html(response);
					document.getElementById("saving_credential").style.display = "block";

					}
				});

		});
});

function delete_credential(token){
//alert(token);

  var c=confirm("Are you sure you want to delete these item(s)?");
     if(c){
       $.post("hubs/students/php/delete_credential", {token:token},function(response, status){
         alert(response);
     window.setTimeout(link,2000);
       });
     }else{
       swal("You record is still safe");
     }
}

function link(){
	location.reload();
}
</script>
