<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Users</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Add Staff</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">

                          <form class="row" method="Post" action="#" id="add_staff_user">

                      <div class="form-group col-md-6">
                      <label for="email">First Name:</label>
                      <input type="text" name="f_name" placeholder="First Name" class="form-control" value=""  required  >
                      </div>
                      <div class="form-group col-md-6">
                      <label for="pwd">Middle Name:</label>
                      <input type="text" name="m_name" placeholder="Middle Name" class="form-control"  value="">
                      </div>
                      <div class="form-group col-md-6">
                      <label for="pwd">Last Name:</label>
                      <input type="text" name="l_name" placeholder="Last Name" class="form-control" value=""  required >
                      </div>
                      <div class="form-group col-md-6">
                     <label for="pwd">Email:</label>
                     <input type="text" name="email" placeholder="Email" class="form-control" value=""  required >
                     </div>
                     <div class="form-group col-md-6">
                     <label for="pwd">Phone Number:</label>
                     <input type="tel" name="tel" placeholder="Phone Number" class="form-control" value=""  required >
                     </div>
                      <div class="form-group col-md-6">
                      <label for="email">Marital Status:</label>
                      <select class="form-control" name="ms" required>
                        <?=select_applicant_marital_status($gc=0)?>
                      </select>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="pwd">Gender:</label>
                      <select class="form-control" name="gender" required>
                        <?php echo select_applicant_gender($gd=0)?>
                      </select>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="pwd">Religion:</label>
                      <select class="form-control" name="religion" required>
                        <?php echo select_applicant_religion($g=0)?>
                      </select>
                      </div>
											<div class="form-group col-md-4">
                      <label for="pwd">Faculty:</label>
                      <select class="form-control" name="faculty_id">
												<option value="0" selected disabled>---Choose Faculty</option>
												<?php echo select_faculty($con,$id=0)?>
                      </select>
                      </div>
											<div class="form-group col-md-4">
                      <label for="pwd">Department:</label>
											<select class="form-control" name="department_id">
												<option value="0" selected disabled>---Choose Department</option>
												<?php echo select_department($con,$id=0)?>
                      </select>
                      </div>
											<div class="form-group col-md-4">
                      <label for="pwd">Staff Type:</label>
											<select class="form-control" name="staff_type">
												<option value="0" selected disabled>--- Choose Type</option>
												<option value="1">Academic Staff</option>
												<option value="2">Non Academic Staff</option>
                      </select>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="pwd">Staff Number:</label>
                      <input type="text" name="staff_id" placeholder="Staff Number" value="" class="form-control" required>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="pwd">Date of Birth:</label>
                      <input type="date" class="form-control" value="" placeholder="Enter Date of Birth" name="dob" required>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="pwd">Image:</label>
                      <input type="file" class="form-control" value="" placeholder="Select Image" name="image" required>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="pwd">Country:</label>
                      <select class="form-control" name="country" required>
                          <?php echo select_applicant_nationality($nf=00)?>
                      </select>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="pwd">State:</label>
                      <select class="form-control" name="state" id="state_id" onchange="load_lga()" required>
                        <option value="0" selected disabled>-- Choose State</option>
                        <?php echo select_applicant_state($con, $st=0);?>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="pwd">LGA:</label>
                      <select class="form-control" name="lga" id="lga" required>
												<option value="0" selected disabled>---Choose LGA</option>
                         <?php echo select_applicant_lga($con, $id=0); ?>
                      </select>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="pwd">Role:</label>
                      <select class="form-control" name="role" disabled>

                         <option value="0">Staff</option>


                      </select>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="pwd">User Status:</label>
                      <select class="form-control" name="status" id="status" required>
                        <option value="0">-- Choose User Status</option>
                        <option value="1">Unblock</option>
                         <option value="2">Block</option>
                      </select>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="pwd">Status:</label>
                      <select class="form-control" name="user_status" id="user_status" required>
                         <?php echo select_user_status($st=0);?>
                      </select>
                      </div>
                      <div class="form-group col-md-12">
                      <label for="pwd">Address:</label>
                      <textarea name="address" class="form-control" rows="8" cols="80"></textarea>
                      </div>
                      <center>
                      <div id="button">
                        <center>
                        <button class="btn btn-info" ><span class="fa fa-plus"> Submit</span> </button>
                      <a href="dashboard?hubs=staffs" class="btn btn-warning" style="margin-left:20px; margin-bottom:10px;"><span class="fa fa-times"> Cancel</span> </a>

                      </div>
                        </center>
                      <div id="login_out" class="col-12">

                      </div>


    </form>
                        </div>

                        <script type="text/javascript">
                        $(document).ready(function(e){



                       $("#add_staff_user").submit(function(event){
                         event.preventDefault(); //prevent default action
                         var post_url = "php/add_staff.php"; //get form action url
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
                               window.location.href = "dashboard?hubs=staffs&Successfully Added";
                             }else{
                               swal(response);
                             $("#login_out").html(response);


                           }
                           });

                       });
                   });
                        function load_lga(){
                        			var state_id = document.getElementById("state_id").value;
                        			$.post('php/load_lga.php',{state_id:state_id},
                        			function(response,status){
                        			document.getElementById("lga").innerHTML =response;
                        			});
                        }

                        function link(){
                        	location.reload();
                        }
                        </script>
</div>
</div>
</div>
</div>
