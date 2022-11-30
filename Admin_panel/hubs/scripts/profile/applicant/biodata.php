<?php


          $up_path = '../pd/uploads/';


        ?>
<div class="login-area" style="margin-top:10px;">
<form class="row" method="Post" action="#" id="add_biodata">
  <table class="table table-bordered table-striped table-hover">

      <tbody>
        <tr>

           <td >
             <a href="#" class="btn-default" data-toggle="modal" data-target="#myModall">
               <?php echo get_applicant_image($con, $id);?> </a>
           </td>
         </tr>

          <tr>
          <td>Application No. :<b><?php  echo  get_applicant_application_number($con,$id); ?></b>   </td>

        </tr>
       </tbody>
    </table>
    <div class="form-group col-md-4">
											<label for="pwd">Last Name:</label>
											<input type="text" name="l_name" placeholder="Middle Name" class="form-control"  value="<?php  echo get_user_last_name($con,$id);?>"  required>
										  </div>
                      <div class="form-group col-md-4">
											<label for="email">First Name:</label>
											<input type="text" name="f_name" placeholder="First Name" class="form-control" value="<?php echo get_user_first_name($con, $id);?>"  required  >
										  </div>

										  <div class="form-group col-md-4">
											<label for="pwd">Middle Name:</label>
											<input type="text" name="m_name" placeholder="Middle Name" class="form-control" value="<?php  echo get_user_middle_name($con,$id);?>"   >
										  </div>

										  <div class="form-group col-md-6">
											<label for="email">Marital Status:</label>
                      <select name="marital" class="form-control">
                        <?php echo select_applicant_marital_status(get_applicant_ms($con, $id)); ?>
                      </select>
										  </div>
										  <div class="form-group col-md-6">
											<label for="pwd">Gender:</label>
											<select class="form-control" name="gender" required>
                        <?php echo select_applicant_gender(get_applicant_gender($con, $id));?>
											</select>
										  </div>
										  <div class="form-group col-md-6">
											<label for="pwd">Religion:</label>
											<select class="form-control" name="religion" required>
                        <?php echo select_applicant_religion(get_applicant_religion($con, $id)); ?>
											</select>
										  </div>
										  <div class="form-group col-md-6">
											<label for="pwd">Place of Birth:</label>
											<input type="text" name="pob" value="<?php echo  get_applicant_pob($con,$id);?>" class="form-control" required>
										  </div>
											<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Date of Birth <hr style="height:1px; background:#4ec870;"> </label>
										  <div class="form-group col-md-4">
											<label for="pwd">Day:</label>
											<select class="form-control" name="day">
                        <option value="0"  > --DD-- </option>
												<?php echo day(get_applicant_day($con,$id)); ?>
											</select>
										  </div>
											<div class="form-group col-md-4">
											<label for="pwd">Month:</label>
											<select class="form-control" name="month">
                        <option value="0"> --MM-- </option>
                        <?php echo month(get_applicant_month($con,$id)); ?>
											</select>
										  </div>
											<div class="form-group col-md-4">
											<label for="pwd">Year:</label>
											<select class="form-control" name="year">
                        <option value="0"  > --YYYY-- </option>
                        <?php echo year(get_applicant_year($con,$id)); ?>?>
											</select>
										  </div>
<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Nationality <hr style="height:1px; background:#4ec870;"> </label>
										  <div class="form-group col-md-4">
											<label for="pwd">Country:</label>
											<select class="form-control" name="country" required>
												 <?php echo  select_applicant_nationality(get_applicant_nationality($con,$id)) ;?>
											</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">State:</label>
											<select class="form-control" name="state" id="state_id" onchange="load_lga()" required>
                        <option value="0">-- Choose State</option>
												<<?php echo  select_applicant_state($con, get_applicant_state_id($con,$id)) ;?>

												</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="pwd">LGA:</label>
											<select class="form-control" name="lga" id="lga" required>
                        <option value="0">-- Choose LGA</option>
                                          <?php echo select_applicant_lga($con, get_applicant_lga_id($con,$id)); ?>
											</select>
										  </div>
                      <input type="hidden" name="app_id" value="<?=$id;?>">
								<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Action <hr style="height:1px; background:#4ec870;"> </label>

								<div class="form-group col-md-6" id="">
								<button type="submit" class="btn btn-success" name="button">Submit</button>
								</div>
                <div class="col-md-12" id="login_out">

                </div>


</div>
</form>
<script >
$(document).ready(function(e){
    //alert();
$("#add_biodata").submit(function(event){
event.preventDefault(); //prevent default action
var post_url = "php/applicant/add_biodata.php"; //get form action url
var request_method = $(this).attr("method"); //get form GET/POST method

$("#login_out").html('<div style="margin-top:10px"><center>Updating, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

var form_data = new FormData(this); //Creates new FormData object

//alert(request_method);
$.ajax({
url : post_url,
type: request_method,
data : form_data,
contentType: false,
cache: false,
processData:false
}).done(function(response){ //

if(response==1){

  alert('Biodata Updated Successful');
  $("#login_out").html('');
 // window.setTimeout(link,2000);
}else{
  alert(response);
$("#login_out").html('');


}
});

});
});

function load_lga(){




      var state_id = document.getElementById("state_id").value;

      //swal(lga);

      $.post('php/load_lga.php',{state_id:state_id},
      function(response,status){

      document.getElementById("lga").innerHTML =response;

      });
}
function link(){
location.reload();
}
</script>


<!-- passport Modal -->
<div class="modal fade" id="myModall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload your passport</h4>
      </div>
      <div class="modal-body">
      <div class="col-md-7" style="padding-right:0px">

      <form id="save_passport" method="post" enctype="multipart/form-data">
        <?php if(empty(get_applicant_image($con,$id))){ ?>
         <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModall"> <img class="thumbnail img-responsive text-center" style="height:170px;"  src="../../../images/bg.jpg" ></img></a>

        <?php }else{ ?>
                       <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModall"> <?php echo get_applicant_image($con, $id);?></a><!-- passed mymodall for upload -->


                <?php } ?>

         <input type="file" name="image" required/>


         <input type="hidden" name="app_id" value="<?=$id;?>">

    </center>
      </div>
      <div class="col-md-7" style="padding-left:0px">
        <div class="list-group">
        <div class="form-group">
          <div class="list-group">
          <div><button class="btn btn-login btn-green" disabled><span><h4>Instructions</h4></span></button></div>
            Your picture to be uploaded MUST conform with the following:<br/>

                        * Jpeg format ONLY<br/>
                        * Less than 30KB<br/>
                        * Exactly 150px by 150px<br/>
                        * Recent Photograph<br/>
                        * Of good quality<br/>
                        * Of plain white background<br/>
        </div>

        </div>
      </div>
      </div>
			<div class="modal-footer">
					<div id="saving_passport">
			 <button type="submit"  class="btn btn-login btn-green"  value="Upload File"> <span>Upload PASSPORT</span> </button>

			<button type="button" class="btn btn-login btn-green" data-dismiss="modal"> <span>Close</span> </button>
			</div>
			<div id="output_passport">

			</div>

		 </div>

		</form>
		<script type="text/javascript">
		$(document).ready(function(e){



		$("#save_passport").submit(function(event){
		event.preventDefault(); //prevent default action
		var post_url = "php/applicant/upload_image"; //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method

		$("#output_passport").html('<div style="margin-top:10px"><center>saving Data, please wait...<br/><img src="../../../images/ajax-loader1.gif" width="10%"/></center></div>');
		document.getElementById("saving_passport").style.display = "none";
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


			 document.getElementById("saving_passport").style.display = "block";
			 $("#output_passport").html("");
				//swal("");
				alert("Passport Uploaded");
			//	window.setTimeout(link,2000);

			}else{

		//	$("#output_passport").html(response);
			document.getElementById("saving_passport").style.display = "block";
			alert(response);
			 $("#output_passport").html("");
		}
		});

		});
		});

		function link(){
			location.reload();
		}
		</script>



    </div>
  </div>
</div>
</div>
<!-------------------------------passport modal ------------------------------------------------------------------->
