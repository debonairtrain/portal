<div class="card card-user">
  <div class="image">
    <img src="">
  </div>
  <div class="card-body">
    <div class="author" style="margin-top:-130px;">
      <p ><h3 style="font-weight:bold;"><?=strtoupper($matric_number);?></h3> </p>
      <a href="#">
        <?=$images;?>
        <center><h5 class="title" style="font-size:20px; color:#4a6350;"><?=$full_name?></h5></a></center>
      <p class="description text-left" style="font-size:15px;">Department: <b><?=$app_dept;?></b></p>
    </div>

    <p class="description text-left">Programme: <b><?=$app_prog;?></b></p>
    <p class="description text-left">Gender: <b><?=$gender;?></b></p>
    <p class="description text-left">State/LGA: <b><?=$state.'/'.$lga;?></b></p>
  </div>
  <div class="card-footer">
    <hr>
    <div class="button-container">
      <div class="row">
        <div class="col-md-6 col-5">
          <a href="dashboard" type="submit" class="btn btn-primary btn-round" style="margin-left: -10px; background-color:#4a6350; hover:none;">Profile</a>
        </div>

        <div class="col-md-6 col-5">
          <a href="logout" type="submit" class="btn btn-danger btn-round" style="margin-left: 20px; background-color:#4a6350; hover:none;">Logout</a>
        </div>
      </div>
    </div>
  </div>
</div>
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
        <?php if(empty($image)){ ?>
         <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModall"> <img class="thumbnail img-responsive text-center" style="height:170px;"  src="uploads/bg.jpg" ></img></a>

        <?php }else{ ?>
                       <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModall"> <img class="thumbnail img-responsive text-center" style="height:170px;"  src="uploads/<?php echo $image; ?>" alt="Click here to upload image"></img></a><!-- passed mymodall for upload -->


                <?php } ?>

         <input type="file" name="image" required/>




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
        <div id="output_passport">

  			</div>
					<div id="saving_passport">
			 <button type="submit"  class="btn btn-login btn-green"  value="Upload File"> <span>Upload PASSPORT</span> </button>

			<button type="button" class="btn btn-login btn-green" data-dismiss="modal"> <span>Close</span> </button>
			</div>


		 </div>

		</form>
		<script type="text/javascript">
		$(document).ready(function(e){



		$("#save_passport").submit(function(event){
		event.preventDefault(); //prevent default action
		var post_url = "scripts/upload_image"; //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method

		$("#output_passport").html('<div style="margin-top:10px"><center>saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
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
				swal("Passport Uploaded");
				window.setTimeout(link,2000);

			}else{

			$("#output_passport").html(response);
			document.getElementById("saving_passport").style.display = "block";
			swal(response);
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
