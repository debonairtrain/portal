  <br/>
	<nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Admitted Applicants</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- blank block -->

    <form method="POST" action="#">
	<select style="border-radious:10px 20px 10px; width: 60%; " onchange=view_appicant() name ="department_id" id="department_id">
	<option>----Choose Department</option>
			<?php echo get_all_departments($con);?>
    </select>
    <button type="submit" class="btn btn-info btn-style" name="search_dept">
                    Search
                  </button> </form>
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4" >
            <h3 class="card__title position-absolute"> <!-- Button trigger modal -->
                  
                  
                  All Applicants</h3>
				 
            <div class="table-responsive"  style="width:100%">
			
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>App. Number</th>
                    <th>Gender</th>
                    <th>Applied School</th>
                    <th>Applied Department</th>
                    <th>Applied Programme</th>
                    <th>Phone Number</th>
                    <th>State</th>
                    <th>LGA</th>
                    <th>Passport</th>
                    <th>Admission Status</th>
                  </tr>
                </thead>
                <tbody id="msg">
                 <?php
                 
                 if(isset($_POST['search_dept'])){
                     
                 
                 $id=mysqli_real_escape_string($con,$_POST['department_id']);

	$output ='';
	$sqlmg=mysqli_query($con, "SELECT applicant.id, applicant.school_applied, applicant.department_applied, applicant.programme_applied, applicant.application_number,
		 applicant.state_id, applicant.lga_id, applicant.first_name, applicant.last_name, applicant.middle_name, applicant.phone_no, applicant.gender,  applicant.email,
		  DATE_FORMAT(applicant.date_added, '%M %d, %Y %l:%i:%p') as date_added,
		  DATE_FORMAT(applicant.date_modified, '%M %d, %Y %l:%i:%p') as date_modified, applicants_fee_payments.applicant_id
		  FROM  applicant, applicants_fee_payments

		  WHERE applicant.programme_applied = '$id' AND applicant.id = applicants_fee_payments.applicant_id AND applicant.session_id='$session' AND applicant.admission_status='1'

		  ORDER BY applicant.application_number ASC");
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
														
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														$output .= "<tr>";
														$output .= "<td> <a href='#'>".$row_s['first_name'].' '.$row_s['middle_name'].' '.$row_s['last_name']."</a></td>";
														$output .= "<td>".$row_s['application_number']."</td>";
														$output .= "<td>".$row_s['gender']."</td>";
														$output .= "<td>".get_applicant_school($con, $row_s['school_applied'])."</td>";
														$output .= "<td>".get_applicant_department($con, $row_s['department_applied'])."</td>";
														$output .= "<td>".get_applicant_programme($con, $row_s['programme_applied'])."</td>";
														$output .= "<td>".$row_s['phone_no']."</td>";
														$output .= "<td>".get_applicant_state($con, $row_s['state_id'])."</td>";
														$output .= "<td>".get_applicant_lga($con, $row_s['lga_id'])."</td>";
														$output .= "<td>".get_applicant_image($con, $row_s['id'])."</td>";
														$output .= "<td>".is_admitted($con, $row_s['id'])."</td>";
														



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