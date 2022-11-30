<?php

require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge


$sql_get_app=mysqli_query($con, "SELECT * FROM applicant WHERE id ='$last_id' ");
									if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												$row=mysqli_fetch_assoc($sql_get_app);
													$school_id=$row['school_id'];
													$cart_id=$row['cart_id'];
													$faculty_id=$row['faculty_id'];
													$department_id=$row['department_id'];
													$programme_id=$row['programme_id'];
													$school_applied_for=$row['school_applied'];
													$department_applied_for=$row['department_applied'];
													$programme_applied_for=$row['programme_applied'];
													$application_number=$row['application_number'];
                                                  $stt=  get_school_title($con, $school_applied_for);

									$dept=get_department_title($con,$department_applied_for);
									$prog=get_programme_title($con,$programme_applied_for);

									$allocate = mysqli_query($con,"SELECT * FROM applicant_guidance WHERE applicant_id ='$last_id' ") or die(mysqli_error($con));
											$row = mysqli_fetch_assoc($allocate);
											$guardian_name=$row['guardian_name'];
											$guardian_tel=$row['guardian_tel'];
											$guardian_email=$row['guardian_email'];
											$guardian_address=$row['guardian_address'];
											$guardian_relationship=$row['guardian_relationship'];
											$sponsorship_type=$row['sponsorship_type'];
											$sponsorship_name=$row['sponsorship_name'];
											$sponsorship_address=$row['sponsorship_address'];

											$allocate = mysqli_query($con,"SELECT * FROM applicant_profile WHERE applicant_id ='$last_id' ") or die(mysqli_error($con));
													$rows = mysqli_fetch_assoc($allocate);
													$application_number=$rows['application_number'];
													$country_id=$rows['country_id'];
													$state_id=$rows['state_id'];
													$lga_id=$rows['lga_id'];
													$first_name=$rows['first_name'];
													$middle_name=$rows['middle_name'];
													$last_name=$rows['last_name'];
													$phone_no=$rows['phone_no'];
													$gender=$rows['gender'];
													$religion=$rows['religion'];
													$day=$rows['day'];
													$month=$rows['month'];
													$year=$rows['year'];
													$marital_status=$rows['marital_status'];
													$email=$rows['email'];
													$place_of_birth=$rows['place_of_birth'];
													$address=$rows['address'];
													$permanent_address=$rows['permanent_address'];
													$image=$rows['image'];
													$H_status=$rows['H_status'];
													$blood_type=$rows['blood_type'];
													$disability=$rows['disability'];
													$medi=$rows['medi'];
													$admission_batch=$rows['admission_batch'];
 $name = $ful_nam; // form field
  // form field
 $message = "Thanks Your Successful, registration"; // form field





 $from = "application@gschstg.sch.ng"; //enter your email address
  $to = $email; //enter the email address of the contact your sending to
 $subject = "Application TICKET"; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
$html = '<html><body>
<center><img src="https://applicants.ofusware.com/images/school.jpeg" style="width: 20%; height: 70px;" >
<h2>Greate Success School of Health Technology, Gwada</h2>
Niger State, Nigeria.
<h3>APPLICATION TICKET</h3><br/></center>
<hr/><table>

        <tr><td>Name</td><td>'.$name.'</td></tr>
        <tr><td>Application Number</td><td>'.$application_number.'</td></tr>
        <tr><td>Applied School</td><td>'.$stt.'</td></tr>
        <tr><td>Applied Department</td><td>'.$dept.'</td></tr>
        <tr><td>Applied Programme</td><td>'.$prog.'</td></tr>
        <tr><td>Username</td><td>'.$application_number.'</td></tr>
        <tr><td>Password</td><td><h3>Your Inserted Password</h3></td></tr>
        <tr><td>Sign:</td><td><h3>__________________________</h3></td></tr>
    </table><hr/>
<br/></br></br>
<center>Powered by <a href="https://ofusware.com/" target="_Blank">Ofusware Solutions</a></center>
</body></html>'; // html versions of email.

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);

//do not ever try to call these lines in reverse order
$body = $mime->get();
$headers = $mime->headers($headers);

 $host = "localhost"; // all scripts must use localhost
 $username = "gschstgs"; //  your email address (same as webmail username)
 $password = "06KDlr4f;F@9Fu"; // your password (same as webmail password)

$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
'username' => $username,'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
echo("<p>Email successfully sent! to $email</p>");
// header("Location: http://www.example.com/");
}



											}
									}
 ?>
