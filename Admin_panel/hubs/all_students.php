      <br/>
	<nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
       <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Students</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- blank block -->

    <button type="button" class="btn btn-primary btn-style" data-toggle="modal"
                    data-target="#exampleModalScrollable"><i class="fa fa-plus"></i>
                    Add Student
    </button> 
    <a href="dashboard?hubs=view_students" type="button" class="btn btn-info btn-style">
                    Total Students <span class="badge badge-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_total_students($con, $session);?></span>
    </a>
    <a href="dashboard?hubs=paid_students" type="button" class="btn btn-success btn-style">
                    Total Paid Students <span class="badge badge-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_total_paid_students($con, $session);?></span>
    </a>
    <a href="dashboard?hubs=not_paid_students" type="button" class="btn btn-warning btn-style">
                    Total Not Paid Students <span class="badge badge-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_total_not_paid_students($con, $session);?></span>
    </a>
    <form method="POST" action="#">
        <div class="form-group">
	<select style="border-radious:10px 20px 10px; width: 60%; " onchange=view_appicant() name ="department_id" id="department_id">
	<option>----Choose Department</option>
			<?php echo get_all_departments($con);?>
    </select>
    <button type="submit" class="btn btn-info btn-style" name="search_dept">
                    Search
                  </button></div> </form>
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4" >
            <h3 class="card__title position-absolute"> <!-- Button trigger modal -->
                  
                  
                  All Students</h3>
				 
            <div class="table-responsive"  style="width:100%">
			
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>App. Number</th>
                    <th>Gender</th>
                    <th>School</th>
                    <th>Department</th>
                    <th>Programme</th>
                    <th>Phone Number</th>
                    <th>State</th>
                    <th>LGA</th>
                    <th>Passport</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="msg">
                 <?php
                 
                 if(isset($_POST['search_dept'])){
                     
                 
                  $id=mysqli_real_escape_string($con,$_POST['department_id']);

	$output ='';
	$sqlmg=mysqli_query($con, "SELECT students.id AS std_id, students.school_id, students.department_id, students.programme_id, students.matric_number,
		 students.state_id, students.lga_id, students.first_name, students.last_name, students.middle_name, students.phone_no, students.gender, students.email,
		  DATE_FORMAT(students.date_added, '%M %d, %Y %l:%i:%p') as date_added, school_fee_payments.student_id
		  FROM  students, school_fee_payments

		  WHERE students.department_id = '$id' AND students.id = school_fee_payments.student_id AND students.session='$session'

		  ORDER BY students.matric_number ASC");
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
														
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														$output .= "<tr>";
														$output .= "<td <a href='#'>>".$row_s['first_name'].' '.$row_s['middle_name'].' '.$row_s['last_name']."</a></td>";
														$output .= "<td>".$row_s['matric_number']."</td>";
														$output .= "<td>".$row_s['gender']."</td>";
														$output .= "<td>".get_applicant_school($con, $row_s['school_id'])."</td>";
														$output .= "<td>".get_applicant_department($con, $row_s['department_id'])."</td>";
														$output .= "<td>".get_applicant_programme($con, $row_s['programme_id'])."</td>";
														$output .= "<td>".$row_s['phone_no']."</td>";
														$output .= "<td>".get_state_title($con, $row_s['state_id'])."</td>";
														$output .= "<td>".get_lga_title($con, $row_s['lga_id'])."</td>";
														$output .= "<td>".get_student_image($con, $row_s['std_id'])."</td>";
														$output .= '<td><a href="dashboard?hubs=view_student&api='.base64_encode($row_s['std_id']).'" class="btn btn-warning btn-sm" >  View Record </a></td>';
														



			$output .= "</tr>";
													}
											   	}else{
													$output .="<td colspan='11'>No data available in table</td>";
												}
											}
	echo $output;
                 }
?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>  

<script>
function view_applicant()
{
	$("#msg").html('<tr><td colspan="6"><center>Loading, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></td></tr>');
	var department_id = document.getElementById('department_id').value;
	$.post("php/load_applicant.php",{department_id:department_id},
	function(response,status)
	{
			document.getElementById('msg').innerHTML=response;
	});
}
</script>

    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalScrollableTitle">Add Student</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-left">
                          <form action="#" id="add_student" method="post">
                              <div class="form-group col-md-12 col-sm-12">
                                <label for="inputEmail4" class="input__label">Matric Number</label>
                                <input type="text" name="matric_no" class="form-control input-style"
                                    placeholder="Matric Number" required>
                            </div>
                              <div class="form-row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="inputEmail4" class="input__label">Surname</label>
                                <input type="text" name="l_name" class="form-control input-style"
                                    placeholder="Surname" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="inputPassword4" class="input__label">First Name</label>
                                <input type="text" name="f_name" class="form-control input-style"
                                    placeholder="First Name" required>
                            </div>
                             <div class="form-group col-md-4 col-sm-12">
                                <label for="inputPassword4" class="input__label">Middle Name</label>
                                <input type="text" name="m_name" class="form-control input-style" 
                                    placeholder="Middle Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">Email</label>
                                <input type="email" name="email" class="form-control input-style" id="inputEmail4"
                                    placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Phone Number</label>
                                <input type="tel" name="tel" class="form-control input-style"
                                    placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row mb-4">

                        <div class="col-sm-12 col-md-6">

                            <label for="inputState" class="form-label">Gender</label>
                                <select id="inputState" name="gender" class="form-select form-control">
                                    <?php echo select_gender($gender);?>
                                 </select>

                        </div>
                        <div class="col-sm-12 col-md-6">
                        <label for="inputState" class="form-label">Religion</label>
                            <select id="inputState" name="religion" class="form-select form-control">
                                <?php echo select_religion($religion);?>

                             </select>
                        </div>
                    </div>
                    <div class="row mb-4">

                        <div class="col-sm-12 col-md-4">

                            <label for="inputState" class="form-label">Country</label>
                                <select id="inputState" name="country" class="form-select form-control">
                                    <?=select_nationality($nationality = 159);?>

                                 </select>

                        </div>
                        <div class="col-sm-12 col-md-4">
                        <label for="inputState" class="form-label">State</label>
                            <select id="state_id" onchange="load_lga()" name="state" class="form-select form-control">
                                <option selected>Choose...</option>
                                <?=select_state($con,$id=0);?>
                             </select>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="inputState" class="form-label">Lga</label>
                                <select id="lga_name" name="lga" class="form-select form-control">
                                    
                                </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12 col-md-4">
                        <label for="inputState" class="form-label">Level</label>
                            <select id="inputState" name="level" class="form-select form-control">
                                <?=select_level($st=0);?>
                             </select>
                        </div>
                        <div class="col-sm-12 col-md-4">

                            <label for="inputState" class="form-label">Date of Birth</label>
                             <input type="date" class="form-control" placeholder="Date of Birth" name="dob" value="<?php if(isset($_POST['c_password'])) echo($_POST['c_password'])?>" required>
                        </div>
                        <div class="col-sm-12 col-md-4">
                        <label for="inputState" class="form-label">Marital Status</label>
                            <select id="inputState" name="matrital_status" class="form-select form-control">
                                <?=select_marital_status($st=0);?>
                             </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                            <div class="col-sm-12 col-md-6">
                            <label for="inputState" class="form-label">Department</label>
                                <select id="depart_id" onchange="load_programme()" name="department" class="form-select form-control">
                                    <option>--select---</option>
                                    <?=select_department($con, $department_applied_for=0);?>
                                 </select>
                            </div>

                        <div class="col-sm-12 col-md-6">

                            <label for="inputState" class="form-label">Programme</label>
                                <select id="programme" name="programme" class="form-select form-control">
                                    <option>--select---</option>
                                    
                                 </select>
                        </div>
                        </div> 
                        <div class="register-submit" id="saving_student">
                          <button type="submit"  class="btn btn-primary" style="width:100%; background-color:#4a6350; border: none; padding-top:10px; padding-bottom:10px; height:50px;"><span>Add Student</span></button>
                        </div>

                        <div id="student_error">
                        </div>
                    </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <script type="text/javascript">
$(document).ready(function(e){



    $("#add_student").submit(function(event){
      event.preventDefault(); //prevent default action
      var post_url = "php/add_student.php"; //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method

      $("#student_error").html('<div style="margin-top:10px"><center>Adding Student Data, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
      document.getElementById("saving_student").style.display = "none";
      var form_data = new FormData(this); //Creates new FormData object


        $.ajax({
          url : post_url,
          type: request_method,
          data : form_data,
          contentType: false,
          cache: false,
          processData:false
        }).done(function(response){ //

            

          $("#student_error").html(response);
          document.getElementById("saving_student").style.display = "block";


        });

    });
});

function load_lga(){




			var state_id = $("#state_id").val();

			//alert(state_id);
			$.post('php/load_lga.php',{state_id:state_id},
			function(response,status){
            //alert(response);
			document.getElementById("lga_name").innerHTML =response;

			});
}


function load_programme(){




			var department_id = $("#depart_id").val();

			//alert(department_id);
			$.post('php/load_programme.php',{department_id:department_id},
			function(response,status){

			document.getElementById("programme").innerHTML =response;

			});
}
</script>
