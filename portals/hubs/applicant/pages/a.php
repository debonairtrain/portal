<?php
	#################################################################
	#	Author of the script
	#	Name: Adamu Ezra
	#	Official company email: ezra@jdlab.ng
	#	Date created: 27/05/2020
	#	Date Modified: 05/06/2020
	#	Purpose of creation: To create admission letter slip


ob_start();


//include my own function
include 'includes/functions.php';

if(isset($_GET['u']))
{
	$u = $_GET['u'];
	//$s = $_GET['s'];
}
else
{
	header("Location: dashboard.php?act=default");

}


$session = get_current_session($id = '1'); //current session is always
$st = get_session_title($session);

$st = strval($st); 


///get admission no
$admission_no = get_student_mat_no($u);//get student matric no
$appno = get_applicant_number($u);

$name = get_applicant_fullname($u);
$n_address = get_student_next_of_kin_address($u);
$number = get_student_phone_no2($u);
$n_name = get_student_next_of_kin_name($u);
$email = get_student_email2($u);

$passport = get_student_image($u);



//get student department id
$prog = (get_student_programme_id($u));
//echo $u;
$programme = strtoupper(get_programme_title($prog));
$pt = strtoupper(show_programme_type($prog));
$dept_title  = strtoupper(get_department_title(get_student_department_id($u)));

//query th db



// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf_include.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
	//	$image_file = K_PATH_IMAGES.'logo.png';
	//	$this->Image($image_file, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
	//	$this->SetFont('helvetica', 'B', 14);
		// Title
	//	//$this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M'); original commented 
	//	$this->Cell(0, 15, 'NIGER STATE COLLEGE OF NURSING SCIENCES ', 0, false, 'C', 0, '', 0, false, 'M', 'M');
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, "SOURCE: www.somidwiferyminna.edu.ng - ePortal,  Page ".$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}


// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//customly collect the title
$title = str_replace ('/','_',$admission_no). '- ACCEPTANCE LETTER';
$title =strtoupper($title);
$author = 'SOMIDWIFERY';


// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($author);
$pdf->SetTitle($title);
$pdf->SetSubject('Bio - data ');
$pdf->SetKeywords('SOMIDWIFERY, PDF, acceptance letter, letter, '.$session.'');


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
$pdf->SetFont('times', '', 11);

// add a page
$pdf->AddPage();



//get logo
$logo = 'images/logo_opt.png';

//set the content //this is my own function
$output = '';


 $output  .= '<span align="center"> <img  src="'.$logo.'" border="0" height="79" width="90" /></span>';
 $output .= '<h4 style="color:#468C00;">NIGER STATE COLLEGE OF NURSING SCIENCES</h4>';
 $output .= '<h5 >(OFFICE OF THE REGISTRAR)</h5>';
  
 $output  .= '<br/><h6  align="center" style="font-weight:bold">ADMISSION ACCEPTANCE FORM </h2>';
 $output22  .= '<br/><h3  align="center" >I
 '.$name.'  Hereby accept this offer 
 of admission granted to me. By this, I sign an undertaking to abide by 
 the school rules and regulations throughout my training. </h3>';		  

//contact info

$output2 = '';
$output2 = '<table cellspacing="1"  border="0" cellpadding="1" style="font-size:11px;">
			  
			  <tr><td width="35%">NAME : <strong>'.$name.'</strong></td>
			  <td width="35%"> </td>
			  <td width="30%"> </td>
			  </tr> 
			
			   <tr>
			    <td width="35%">Gender : <strong>'.$gender.'</strong></td>
			   <td width="35%" align="right">Admission No. :<br/><strong>'. $admission_no.'</strong></td>
			   <td width="30%" align="left" rowspan="3"><img src="../uploads/'.$passport.'" height="80" width="79" /></td>
			  
			  </tr> 
			  
			  <tr>
			  <td width="35%">State: <strong>'.$state.'</strong> <br/> L.G.A:   <strong> '.$lga.'</strong></td>
			  <td width="35%" align="right">Course : <br/><strong>'.$programme.'</strong></td>
			  <td width="30%"> </td>

			 
			  </tr> 
		
			  
			  <tr>
			  <td width="35%">  </td>
			  <td width="35%"> </td>
			  <td width="30%"> </td>
			  </tr> 
		
 </table>';



$signage = '<img src="images/logo.png" height="51" width="130" />';
//}//end of query



//$today_date = date('Y-m-d-His');
//$today_date = '29th June, 2016';


// set some text to print
$txt = <<<EOD



  <div align="center"> $output </div>
<div align="right" style="font-size:11px;" ><b> $ref_no </b></div>
<strong>Application No: $appno</strong><br/>

$output22<br>

<br><br><br>
  
<table style="font-size:12px;" border="1" cellspacing="0" cellpadding="1">
  
  <tbody>
    <tr>
      <td>APPLICANT’S NAME: </td>
      <td>&nbsp;$name</td>
    </tr>
   <tr>
      <td>GSM NO: </td>
      <td>&nbsp;$number</td>
    </tr>
    <tr>
      <td>EMAIL ADDRESS: </td>
      <td>&nbsp;$email</td>
    </tr>
    <tr>
    <td colspan="2" ><strong>NEXT OF KIN</strong></td>
    </tr>
    <tr>
      <td>NAME : </td>
      <td>&nbsp;$n_name</td>
    </tr>
    <tr>
      <td>ADDRESS:  </td>
      <td>&nbsp;$n_address</td>
    </tr>
    <tr>
      <td colspan="2">SIGNATURE OF NEXT OF KIN: </td>
      
    </tr>
    
  </tbody>
</table>
<br/>
<br/>
<br/>

STUDENT’S SIGNATURE & DATE: ______________________________________________________



 

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
