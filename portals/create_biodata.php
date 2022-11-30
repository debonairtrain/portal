<?php

ob_start();


if(isset($_GET['app'])){
	 include_once('db_connect/db.php');
    $applicant_id= $_GET['app'];
    include_once('scripts/functions.php');
	$sql_get_app=mysqli_query($con, "select * from applicant where md5(id) ='$applicant_id' ");
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
													$dob = $row['dob'];
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
	$state = show_state($con, $state_id);
	$lga = get_lga_title($con, $lga_id);
	$full_name=strtoupper($last_name.' '. $first_name.' '. $middle_name);
	$school = get_school_title($con, $school_applied_for);
	$department = get_department_title($con,$department_applied_for);
	$programme = get_programme_title($con,$programme_applied_for);
	$ms = select_marital_status($marital_status);
	$religion = select_religion($religion);
}
else
{
	header("Location:apply");
}


     $session = get_current_session($con, $id='1');
    $st = get_current_session_title($con, $session);

     $st = strval($st); 


// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf_include.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
		//$image_file = K_PATH_IMAGES.'logo.jpg';
		//$this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
		//$this->SetFont('helvetica', 'B', 14);
		// Title
		//$this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M'); original commented 
		//$this->Cell(0, 15, 'GREAT SUCCESS COLLEGE OF HEALTH SCIENCES & TECHNOLOGY, GWADA.', 0, false, 'C', 0, '', 0, false, 'M', 'M');
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, date("y.m.d")."SOURCE: www.ofusware.com -  GSCHST APPLICATION Portal,  Page ".$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


//customly collect the title
$title = str_replace ('/','_',get_user_application_number($con, $applicant_id)). '-App';
$title =strtoupper($title);
$author = get_user_fullname($con, $applicant_id).'_ GSCHST';// get_user_fullname($con, $applicant_id).'_ GSCHST';

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($author);
$pdf->SetTitle($title);
$pdf->SetSubject('Bio - data ');
$pdf->SetKeywords('GSCHST, PDF, details, slip, '.$session.'');


// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);



// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
//$pdf->SetFont('times', 'BI', 12) original;
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage();



//for imge
 $image = get_user_image($con, $applicant_id);//get image
if($image != '')
{
	$passport = 'uploads/'.$image;

}
else
{
	$passport = 'uploads/bg.jpg';

	
}



//set the content //this is my own function  GREAT SUCCESS COLLEGE OF HEALTH SCIENCES & TECHNOLOGY
$output = '';
 $output  .= '<br/><br/><span align="center"> <img  src="images/school.jpeg" border="0" height="60" width="71" /></span>';
 $output .= '<h4 style="color:#000000;">GREAT SUCCESS COLLEGE OF HEALTH SCIENCES & TECHNOLOGY</h4>';
 $output .= '<h4 style="color:#FF0000;">GWADA, NIGER STATE.</h4>';
 $output .= '<h5 class="text-info"  style="color:#468C00; font-weight:normal">A C K N O W L E D G E M E N T - S L I P  </h5>';
 $output  .= '<h6 class="text-info"  style="color:#9999; font-weight:normal"> '. $st .' SESSION.</h6>';







// set some text to print
$txt = <<<EOD
<div align="center"> $string_ </div> 

<div align="center"> $output </div>
 
 
 <h6 style="border-bottom:solid thin #CCC; margin-bottom:3px;">BIODATA</h6>
 
 <table cellspacing="1"  border="1" cellpadding="1" style="font-size:11px;">
			  
			  <tr><td width="50%"> NAME : $full_name</td>
			  <td width="30%"> APPLICATION No. :<b> $application_number  </b></td>
			  <td width="20%"> GENDER : $gender</td>
			  </tr> 
			
			   <tr>
			   
			   <td width="50%"> DATE OF BIRTH : $dob</td>
			   <td width="50%"> PLACE OF BIRTH: $place_of_birth</td>
			  </tr> 
			  <tr>
			    
			  </tr>
			  <tr>
			  <td width="30%"> COUNTRY OF ORIGIN: $country</td>
			  <td width="35%"> STATE / L.G.A:  $state  /  $lga</td>
			  <td width="35%"> NATIONALITY: NIGERIAN</td>
			  </tr> 
		
			  
			  
		
 </table>
 
 <br><br>
 
 <h6 style="border-bottom:solid thin #CCC">CONTACT INFORMATION</h6>
 <table cellspacing="1"  border="1" cellpadding="1" style="font-size:11px;">
			  
			  <tr>
			  <td width="50%">PHONE NO. : $phone_no</td>
			  <td width="50%"> EMAIL : $email</td>
			  </tr> 
			  <tr>
			  <td width="100%">PRESENT CONTACT ADD. : $address</td>
			  </tr>
			  
			   <tr>
			  <td width="100%">PERM. CONTACT ADD. : $permanent_address</td>
			  </tr> 
			
			
			  <tr>
			  <td width="100%">PARENT / GUARDIAN : </td>
			  </tr> 
			
			  <tr>
			  <td width="50%">NAME : $guardian_name</td>
			  <td width="50%"> R/SHIP : $guardian_relationship</td>
			  </tr> 
			  
			  <tr>
			  <td width="30%">TEL: $guardian_tel</td>
			  <td width="70%">ADDRESS : $guardian_address</td>
			  </tr> 
			
			  <tr>
			  <td width="100%">SPONSORSHIP: </td>
			  </tr>
			  
			   <tr>
			  <td width="35%">TYPE: $sponsorship_type</td>
			  <td width="65%">NAME: $sponsorship_name</td>
			  </tr> 
			  <tr>
			  <td width="100%">ADDRESS: $sponsorship_address</td>
			  </tr>
			  
			
		
 </table>
 <br><br>
 
  <h6 style="border-bottom:solid thin #CCC">ACADEMIC INFORMATION</h6>
 <table cellspacing="1"  border="1" cellpadding="1" style="font-size:11px;">
			  
			  <tr><td width="100%">APPLIED SCHOOL : $school</td>
			 
			  </tr> 
			
			   <tr>
			   
			  <td width="50%"> APPLIED DEPARTMENT: $department</td>
			   <td width="50%"> APPLIED PROGRAMME : $programme</td>
			 
			  </tr> 
			  
			 
			
		
 </table>

 
 <br><br>
 
		
		
<h6 style="border-bottom:solid thin #CCC">HEALTH  INFORMATION</h6>
 <table cellspacing="1"  border="1" cellpadding="1" style="font-size:11px;">
			  
			  <tr><td width="35%">HEALTH STATUS : $H_status</td>
			  <td width="35%"> DISABILITY : $disability </td>
			  <td width="30%"> BLOOD GROUP : $blood_type </td>
			  </tr> 
			
			   <tr><td width="100%">MEDICATIONS: $medi </td>
			  </tr> 
			  
			 
 </table>
 
 
<br><br>
 
		

 
 
 
 <br><br>
 <table cellspacing="1"  border="1" cellpadding="1" style="font-size:11px;">
			  
			  <tr>
			  <td width="100%">I certify that the information entered herein is to the best of my knowledge & belief, correct & complete. <br>
			  ..............................................................................................................................
			  .............................</td>  
			  </tr> 
			
			   <tr><td width="100%">(SIGNATURE OF APPLICANT's & DATE)</td></tr> 
			  
			 
 </table>
		  


EOD;

// print a block of text using Write()
//$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);

//$pdf->writeHTML($txt, true, false, false, false, '');

// ---------------------------------------------------------






// -- set new background ---

//// get the current page break margin
//$bMargin = $pdf->getBreakMargin();
//// get current auto-page-break mode
//$auto_page_break = $pdf->getAutoPageBreak();
//// disable auto-page-break
//$pdf->SetAutoPageBreak(false, 0);
//// set bacground image
//$img_file = K_PATH_IMAGES.'bg.jpg';
//$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
//// restore auto-page-break status
//$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
//// set the starting point for the page content
//$pdf->setPageMark();


$pdf->writeHTML($txt, true, false, false, false, '');

// ---------------------------------------------------------




//Close and output PDF document
//$pdf->Output('example_003.pdf', 'I');
$pdf->Output($title.'.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+
