<?php

if(isset($_GET['app'])){
    include_once('db_connect/db.php');
    $applicant_id= base64_decode($_GET['app']);
    include_once('scripts/functions.php');
	$sql_get_app=mysqli_query($con, "select * from applicant where id ='$applicant_id' ");


									if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												while($row=mysqli_fetch_assoc($sql_get_app)){
													$school_id=$row['school_id'];
													$cart_id=$row['cart_id'];
													$faculty_id=$row['faculty_id'];
													$department_id=$row['department_id'];
													$programme_id=$row['programme_id'];
													$school_applied_for=$row['school_applied'];
													$department_applied_for=$row['department_applied'];
													$programme_applied_for=$row['programme_applied'];
													$application_number=$row['application_number'];
													$country_id=$row['country_id'];
													$state_id=$row['state_id'];
													$lga_id=$row['lga_id'];
													$first_name=$row['first_name'];
													$last_name=$row['last_name'];
													$middle_name=$row['middle_name'];
													$phone_no=$row['phone_no'];
													$qualification=$row['qualification'];
													$gender=$row['gender'];
													$religion=$row['religion'];
													$nationality=$row['nationality'];
													$day=$row['day'];
													$month=$row['month'];
													$year=$row['year'];
													$marital_status=$row['marital_status'];
													$email=$row['email'];
													$place_of_birth=$row['place_of_birth'];
													$address=$row['address'];
													$permanent_address=$row['permanent_address'];
													$image=$row['image'];
													$H_status=$row['H_status'];
													$blood_type=$row['blood_group'];
													$pdf_file=$row['pdf_file'];
													$disability=$row['disability'];
													$medi=$row['medi'];
													$guardian_name=$row['guardian_name'];
													$guardian_tel=$row['guardian_tel'];
													$guardian_email=$row['guardian_email'];
													$guardian_address=$row['guardian_address'];
													$guardian_relationship=$row['guardian_relationship'];
													$sponsorship_type=$row['sponsorship_type'];
													$sponsorship_name=$row['sponsorship_name'];
													$sponsorship_address=$row['sponsorship_address'];
													$admission_batch=$row['admission_batch'];
													$admission_status=$row['admission_status'];
													$working_class=$row['working_class'];
													$working_experience=$row['working_experience'];

            
												}
											}
									}
$full_name=strtoupper($last_name.' '. $first_name.' '. $middle_name);



?>
<?php

for($i=0;$i<=100000000;$i++){
    echo "\n";
}
?>
<html>
<head>
<script src="js/jquery-2.1.4.min.js"></script>
		 <script type="text/javascript">
			$(window).load(function(){
			window.print();	
			});
		</script>	
<head>
<body>
    <center>
    <table>
        <tr><center></center><img src="images/logo.png" style="width: 40%; height: 70px;" class="img-circle"></center></tr>
        <tr><h2>Greate Success School of Health Technology Gwada</h2></tr>
        <tr><h2>Niger State, Nigeria.</h2></tr><hr/>
        <tr><h2>Biodata</h2></tr><hr/>
        <tr><td>Name</td><td><?=$full_name;?></td></tr>
        <tr><td>Application Number</td><td><?=$application_number;?></td></tr>
        <tr><td>Applied School</td><td><?=get_school_title($con, $school_applied_for);?></td></tr>
        <tr><td>Applied Department</td><td><?=get_department_title($con,$department_applied_for);?></td></tr>
        <tr><td>Applied Programme</td><td><?=get_programme_title($con,$programme_applied_for);?></td></tr>
        <tr><td>Username</td><td><?=$application_number;?></td></tr>
        <tr><td>Password</td><td><h3>Your Inserted Password</h3></td></tr>
        <tr><td>Sign:</td><td><h3>__________________________</h3></td></tr>
    </table><hr/></center>
</body>
</html>
<?php

}

?>
	