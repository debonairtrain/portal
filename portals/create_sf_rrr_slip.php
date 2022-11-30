<?php

ob_start();


if(isset($_GET['r'])){
	 include_once('db_connect/db.php');
	 include_once('hubs/functions.php');
	 	$rrr= $_GET['r'];
		$user_id= $_GET['u'];
    $iids= $_GET['iids'];
		$t_ref = get_transaction_reference($con,$user_id, $iids);
		$invoice_amount = 'N '.number_format(get_invoice_amount($con, $iids),2);

     $applicant_id = $user_id;
     //$invoice_amount = 'N '.number_format(get_invoice_amount($con, $invoice_id),2);
     //$invoice_desc = get_invoice_desc($con, $invoice_id);
	$sql_get_app=mysqli_query($con, "SELECT * FROM applicant WHERE id ='$user_id' ");
	if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												while($row=mysqli_fetch_assoc($sql_get_app)){
													$school_id=$row['school_id'];
													$faculty_id=$row['faculty_id'];
													$department_id=$row['department_id'];
													$programme_id=$row['programme_id'];
													$school_applied_for=$row['school_applied_for'];
													$department_applied_for=$row['department_applied_for'];
													$programme_applied_for=$row['programme_applied_for'];
													$allocate = mysqli_query($con,"SELECT * FROM applicant_guidance WHERE applicant_id ='$user_id' ") or die(mysqli_error($con));
															$row = mysqli_fetch_assoc($allocate);
															$guardian_name=$row['guardian_name'];
															$guardian_tel=$row['guardian_tel'];
															$guardian_email=$row['guardian_email'];
															$guardian_address=$row['guardian_address'];
															$guardian_relationship=$row['guardian_relationship'];
															$sponsorship_type=$row['sponsorship_type'];
															$sponsorship_name=$row['sponsorship_name'];
															$sponsorship_address=$row['sponsorship_address'];

															$allocate = mysqli_query($con,"SELECT * FROM applicant_profile WHERE applicant_id ='$user_id' ") or die(mysqli_error($con));
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
																	$fullname = $first_name.' '.$middle_name.' '.$last_name;

												}
											}
									}
	$state = show_state($con, $state_id);
	$lga = get_lga_title($con, $lga_id);
	$school = get_school_title_by_id($con, $school_applied_for);
	$department = get_department_title($con,$department_applied_for);
  $programme = get_programme_title($con,$programme_applied_for);
}
else
{
	header("Location:index");
}


      $session = get_current_session_id($con);
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
$title = str_replace ('/','_',get_user_application_number($con, $user_id)). '-App';
$title =strtoupper($title);
$author = get_user_fullname($con, $user_id).'_ GSCHST';// get_user_fullname($con, $user_id).'_ GSCHST';

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

//set the content //this is my own function
$output = '';
 $output  .= '<br/><br/><span align="center"> <img  src="images/school.jpeg" border="0" height="60" width="71" /></span>';
 $output .= '<h4 style="color:#000000;">GREAT SUCCESS COLLEGE OF HEALTH SCIENCES & TECHNOLOGY</h4>';
 $output .= '<h4 style="color:#FF0000;">GWADA, NIGER STATE.</h4>';
 $output .= '<h5 class="text-info"  style="color:#468C00; font-weight:normal">R R R - S L I P  </h5>';
 $output  .= '<h6 class="text-info"  style="color:#9999; font-weight:normal"> '. $st .' SESSION.</h6>';

if($image != '')
{
	$passport = 'uploads/'.$image;

}
else
{
	$passport = 'uploads/bg.jpg';


}

$banks = '<tr>
		  	<td width="33%">ACCESS BANK PLC</td>  <td width="33%">CITI BANK</td>  <td width="34%">DIAMOND BANK PLC</td>
		  </tr>
		  <tr>
		  	<td width="33%">ECOBANK NIGERIA PLC</td>  <td width="33%">FIDELITY BANK PLC</td>  <td width="34%">FIRST BANK OF NIGERIA PLC</td>
		  </tr>
		  <tr>
		  	<td width="33%">FIRST CITY MONUMENT BANK PLC</td>  <td width="33%">GUARANTY TRUST BANK PLC</td>  <td width="34%">HERITAGE BANK</td>
		  </tr>
		  <tr>
		  	<td width="33%">ZENITH BANK PLC</td>  <td width="33%">KEYSTONE BANK</td>  <td width="34%">SKYE BANK PLC</td>
		  </tr>
		  <tr>
		  	<td width="33%">STERLING BANK PLC</td>  <td width="33%">UNION BANK OF NIGERIA PLC</td>  <td width="34%">UNITY BANK PLC</td>
		  </tr>
		  <tr>
		  	<td width="33%">JAIZ BANK</td>  <td width="33%">STANDARD CHARTERED</td>  <td width="34%">WEMA BANK PLC</td>
		  </tr>
		  <tr>
		  	<td width="33%">STANBIC-IBTC BANK PLC</td>  <td width="33%">UNITED BANK FOR AFRICA PLC</td>  <td width="34%">GOCASHLESS OUTLET LAPAI</td>
		  </tr>

';

$pay_is = 'For payment issues, kindly text your Application Number, RRR or Transaction Reference  to this Phone Number<br>
		08142411717 (Text Only!)';


// set some text to print
$txt = <<<EOD
<br>
<div align="center"> $output </div>

 	<div align="center">
		<h2 style="border:solid thin #CCC; font-size:35px;"><b>RRR: $rrr</b></h2>
	</div>

 <h3 style="border-bottom:solid thin #CCC; margin-top:5px ">APPLICANT INFORMATION</h3>
 <table cellspacing="1"  border="1" cellpadding="1" style="font-size:11px;">
			  <tr>
				  <td width="50%">NAME : $fullname</td>
				  <td width="50%"> APPLICATION No. :<b> $application_number  </b></td>
			</tr>
			  <tr>
			  <td width="50%">PHONE NO. : $phone_no</td>
			  <td width="50%"> EMAIL : $email</td>
			  </tr>

			  <tr>
			  <td width="100%">PRESENT CONTACT ADDRESS. : $address</td>
			  </tr>


 </table>


 <h3 style="border-bottom:solid thin #CCC">PAYMENT DETAILS</h3>
 <table cellspacing="1"  border="1" cellpadding="1" style="font-size:15px;">
	  <tr >
		  <td width="50%">
			 <b>Trans. Reference: $t_ref</b>
		  </td>

		  <td width="50%">
		  	<b>Invoice Id: $iids</b>
		  </td>
	</tr>
	<tr  >
	  <td width="100%">
		  <b>Amount: $invoice_amount </b> <i style="font-size:12px;">(Description: Expected amount to be paid to the Bank)</i><br>
		  	<b>Note: Online Payment via ATM Card attract an extra Service Charge of N100 </b>
	 </td>

	</tr>
 </table>

 <br>
 <h3 style="border-bottom:solid thin #CCC">SUPPORTED BANKS FOR PAYMENTS</h3>
 <table cellspacing="1"  border="1" cellpadding="1" style="font-size:10px;">
	 $banks
 </table>
 <br>


 	<div align="center">
		<h1 style="border:solid thin #CCC; font-size:10px;">
			<b>$pay_is</b>
		</h1>
	</div>





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


// Debug the content of some variable



//temporarily use it
ob_end_clean();

//Close and output PDF document
//$pdf->Output('example_003.pdf', 'I');
$pdf->Output($title.'.pdf', 'D');


//ob_end_flush();

//============================================================+
// END OF FILE
//============================================================+
