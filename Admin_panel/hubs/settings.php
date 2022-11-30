<br><br>
<script >
        $(document).ready(function(e){
            //alert();
            $("#profile_update").submit(function(event){
            event.preventDefault(); //prevent default action
            var post_url = "php/update_profile.php"; //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            
            $("#profile_error").html('<div style="margin-top:10px"><center>Updating, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
            
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
        //swal(response);
        if(response==1){
         
                  swal('Profile Updated Successful');
                  $("#profile_error").html('');
        }else{
            swal(response);
            $("#profile_error").html('');
        
        
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

$(document).ready(function(e){
            //alert();
            $("#password_reset").submit(function(event){
            event.preventDefault(); //prevent default action
            var post_url = "php/update_password.php"; //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            
            $("#password_error").html('<div style="margin-top:10px"><center>Updating, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
            
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
        //swal(response);
        if(response==1){
         
                  swal('Profile Updated Successful');
                  $("#password_error").html('');
        }else{
            swal(response);
            $("#password_error").html('');
        
        
        }
        });
        
    });
});


function link(){
location.reload();
}
</script>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <?php 
            
            $sqlmg=mysqli_query($con, "SELECT * FROM  admin_users WHERE id ='$staff_id' ");
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
														
													$row_s=mysqli_fetch_assoc($sqlmg);
													$first_name = $row_s['first_name'];
													$middle_name = $row_s['middle_name'];	
													$last_name = $row_s['last_name'];
													$staff_number = $row_s['staff_id'];
													$email = $row_s['email'];
													$phone_number = $row_s['phone_number'];
													$country_id = $row_s['country_id'];
													$state_id = $row_s['state_id'];
													$lga_id = $row_s['lga_id'];
													$gender = $row_s['gender'];
													$dob = $row_s['dob'];
													$address = $row_s['address'];
													$image = $row_s['image'];
													$marital_status = $row_s['marital_status'];
													$name = $last_name.' '.$first_name.' '.$middle_name;
													}
											   	}else{
													$output .="<td colspan='11'>No data available in table</td>";
												}
											
            
        ?>
        <div class="cards__heading">
                    <label class="btn btn-info" disabled>PROFILE DETAILS UPDATE</label>
                </div>
        <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <form action="#" method="post" id="profile_update">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">NAME</label>
                                <input type="text" class="form-control input-style" id="inputEmail4"
                                    placeholder="Name" value="<?=$name;?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">STAFF ID</label>
                                <input type="text" class="form-control input-style" id="inputPassword4"
                                    placeholder="Staff ID" value="<?=$staff_number;?>" readonly>
                            </div>
                            <input type="hidden" name="staff_id" value="<?=$staff_id;?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">EMAIL</label>
                                <input type="email" class="form-control input-style" id="inputEmail4"
                                    placeholder="Email" value="<?=$email;?>" name="email" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">PHONE NUMBER</label>
                                <input type="tel" class="form-control input-style" id="inputPassword4"
                                    placeholder="Phone Number" name="tel" value="<?=$phone_number;?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">GENDER</label>
                                <select class="form-control" name="gender" required>
                        <?php echo select_applicant_gender($gender);?>
											</select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">DATE OF BIRTH</label>
                                <input type="date" class="form-control input-style" id="inputPassword4"
                                    placeholder="Date of Birth" name="dob" value="<?=$dob;?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">ADDRESS</label>
                                <input type="text" class="form-control input-style" id="inputEmail4"
                                    placeholder="Address" name="address" value="<?=$address;?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">MARITAL STATUS</label>
                                <select name="marital" class="form-control">
                        <?php echo select_applicant_marital_status($marital_status); ?>
                      </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">IMAGE</label>
                                <input type="file" class="form-control input-style" id="inputEmail4"
                                    placeholder="Image" name="image" value="<?=$image;?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">COUNTRY</label>
                                <select class="form-control" name="country" required>
												 <?php echo  select_applicant_nationality($country_id) ;?>
								</select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">STATE</label>
                                <select class="form-control" name="state" id="state_id" onchange="load_lga()" required>
                                    <option value="0">-- Choose State</option>
												<<?php echo  select_applicant_state($con, $state_id) ;?>

												</select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">LGA</label>
                                <select class="form-control" name="lga" id="lga" required>
                        <option value="0">-- Choose LGA</option>
                                          <?php echo select_applicant_lga($con, $lga_id); ?>
											</select>
                            </div>
                        </div>
                       
                        
                        <button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>
                        <div id="profile_error">
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <div class="col-md-6 col-sm-12">
        
         <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <label class="btn btn-info" disabled>PROFILE DETAILS UPDATE</label>
                </div>
                <div class="card-body">
                    <form action="#" method="post" id="password_reset">
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">Current Password</label>
                            <input type="password" class="form-control input-style" name="o_password" id="exampleInputPassword1"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">New Password</label>
                            <input type="password" class="form-control input-style" name="n_password" id="exampleInputPassword1"
                                placeholder="Password" required>
                        </div>
                        <input type="hidden" value="<?=$staff_id;?>" name="staff_id">
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">Confirm Password</label>
                            <input type="password" class="form-control input-style" name="c_password" id="exampleInputPassword1"
                                placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Reset Now</button>
                        <div id="password_error"></div>
                    </form>
                </d
    </div>
</div>
