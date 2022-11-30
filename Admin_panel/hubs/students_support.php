    <br/><br/>
	<nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Students Support</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- blank block -->

    
    
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
                 
                 

	$output ='';
	$sqlmg=mysqli_query($con, "SELECT id AS std_id, school_id, department_id, programme_id, matric_number, state_id, lga_id,
	        first_name, last_name, middle_name, phone_no, gender, email, DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added
		  FROM  students WHERE session='$session'

		  ORDER BY matric_number ASC");
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
														
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														$output .= "<tr>";
														$output .= "<td> <a href='#'>".$row_s['first_name'].' '.$row_s['middle_name'].' '.$row_s['last_name']."</a></td>";
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
?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>  


