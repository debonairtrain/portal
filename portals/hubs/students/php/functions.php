<?php
//get department name
function get_department_title($con,$id)
{
	$result = mysqli_query($con,"SELECT title FROM departments WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['title'];

	return $title;
}

//function calendardays
function day($d)
{
	$d = $d;
	$days = range(1, 31);

	foreach ($days as $value)
	{
		if($d == $value)
		{
				echo "<option value=\"$value\" selected>$value</option>\n";
		}
		else
		{
			echo "<option value=\"$value\">$value</option>\n";
		}
	}


}


//function calendar months
function month($m)
{
	$m = $m;
	$months = range(1, 12);

	foreach ($months as $value)
	{
		if($m == $value)
		{
				echo "<option value=\"$value\" selected>$value</option>\n";
		}
		else
		{
			echo "<option value=\"$value\">$value</option>\n";
		}
	}


}

//function select highest qualification
function select_highest_qualification($hiq)
{

		if ($hiq == '1')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'  selected  >Bachelor's Degree</option>";
			$output .= '<option value="2"  >HND</option>';
			$output .= '<option value="3"  >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6"  >NDA</option>';
			$output .= '<option value="7"  >OND/HND</option>';
			$output .= '<option value="8"  >Others</option>';
			$output .= '<option value="9"  >PGD</option>';
			$output .= '<option value="10"  >PH.d</option>';
			$output .= '<option value="11"  >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12"  >TCI / ACE</option>';
			$output .= '<option value="13"  >WASC /GCE OL</option>';




		}
		else if ($hiq == '2')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >Bachelor's Degree</option>";
			$output .= '<option value="2" selected >HND</option>';
			$output .= '<option value="3"  >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6"  >NDA</option>';
			$output .= '<option value="7"  >OND/HND</option>';
			$output .= '<option value="8"  >Others</option>';
			$output .= '<option value="9"  >PGD</option>';
			$output .= '<option value="10"  >PH.d</option>';
			$output .= '<option value="11"  >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12"  >TCI / ACE</option>';
			$output .= '<option value="13"  >WASC /GCE OL</option>';

		}
		else if ($hiq == '3')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" selected >HSG / GCE AL</option>';
			$output .= '<option value="4" >Masters</option>';
			$output .= '<option value="5" >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7" >OND/HND</option>';
			$output .= '<option value="8" >Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13" >WASC /GCE OL</option>';

		}
		else if ($hiq == '4')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4" selected >Masters</option>';
			$output .= '<option value="5" >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7" >OND/HND</option>';
			$output .= '<option value="8" >Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13" >WASC /GCE OL</option>';

		}
		else if ($hiq == '5')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5" selected >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7" >OND/HND</option>';
			$output .= '<option value="8" >Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13" >WASC /GCE OL</option>';

		}
		else if ($hiq == '6')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6" selected >NDA</option>';
			$output .= '<option value="7" >OND/HND</option>';
			$output .= '<option value="8" >Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13" >WASC /GCE OL</option>';

		}
		else if ($hiq == '7')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7" selected >OND/HND</option>';
			$output .= '<option value="8" >Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13" >WASC /GCE OL</option>';

		}
		else if ($hiq == '8')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7">OND/HND</option>';
			$output .= '<option value="8"   selected >Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13" >WASC /GCE OL</option>';

		}
		else if ($hiq == '9')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7">OND/HND</option>';
			$output .= '<option value="8">Others</option>';
			$output .= '<option value="9"  selected >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13" >WASC /GCE OL</option>';

		}
		else if ($hiq == '10')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7">OND/HND</option>';
			$output .= '<option value="8">Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10"  selected  >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13" >WASC /GCE OL</option>';

		}
		else if ($hiq == '11')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7">OND/HND</option>';
			$output .= '<option value="8">Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11"   selected >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13" >WASC /GCE OL</option>';

		}
		else if ($hiq == '12')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7">OND/HND</option>';
			$output .= '<option value="8">Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12" selected>TCI / ACE</option>';
			$output .= '<option value="13" >WASC /GCE OL</option>';

		}
		else if ($hiq == '13')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7">OND/HND</option>';
			$output .= '<option value="8">Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13"  selected>WASC /GCE OL</option>';

		}
		else
		{
			$output = 	'<option value="0"   selected> -- Please Select-- </option>';
			$output .=  "<option value='1'>Bachelor's Degree</option>";
			$output .= '<option value="2" >HND</option>';
			$output .= '<option value="3" >HSG / GCE AL</option>';
			$output .= '<option value="4"  >Masters</option>';
			$output .= '<option value="5"  >NCE</option>';
			$output .= '<option value="6" >NDA</option>';
			$output .= '<option value="7">OND/HND</option>';
			$output .= '<option value="8">Others</option>';
			$output .= '<option value="9" >PGD</option>';
			$output .= '<option value="10" >PH.d</option>';
			$output .= '<option value="11" >SSCE (WAEC/NECO/NABTEB)</option>';
			$output .= '<option value="12">TCI / ACE</option>';
			$output .= '<option value="13">WASC /GCE OL</option>';


		}
	return $output;

}
//end of select highest

function get_programme_title($con, $id)
{
	$result = mysqli_query($con,"SELECT title FROM programmes WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$title = $row['title'];

	return $title;
}

function get_state_title($con, $id)
{
	$result = mysqli_query($con,"SELECT name FROM states WHERE state_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$title = $row['name'];

	return $title;
}

function get_lga_title($con, $id)
{
	$result = mysqli_query($con,"SELECT local_name FROM lga WHERE local_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$title = $row['local_name'];

	return $title;
}


//function select gender
function select_gender($gd)
{

		if ($gd == 'M')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="M" selected > Male</option>';
			$output .= '<option value="F" > Female</option>';
			$output .= '<option value="F" > Others</option>';


		}
		else if ($gd == 'F')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="M"> Male</option>';
			$output .= '<option value="F" selected > Female</option>';
			$output .= '<option value="F" > Others</option>';


		}
		else
		{

			$output = '<option value="0"  selected  > -- Please Select --</option>';
			$output .= '<option value="M"> Male</option>';
			$output .= '<option value="F"> Female</option>';
			$output .= '<option value="F" > Others</option>';
		}

	return $output;

}
//end of select gender




//function select religion
function select_religion($r)
{

		if ($r == '1')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1" selected > Islam</option>';
			$output .= '<option value="2" > Christianity</option>';
			$output .= '<option value="3" > Traditional</option>';
			$output .= '<option value="4" > Others</option>';


		}
		else if ($r == '2')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > Islam</option>';
			$output .= '<option value="2" selected > Christianity</option>';
			$output .= '<option value="3" > Traditional</option>';
			$output .= '<option value="4" > Others</option>';


		}
		else if ($r == '3')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > Islam</option>';
			$output .= '<option value="2" > Christianity</option>';
			$output .= '<option value="3" selected  > Traditional</option>';
			$output .= '<option value="4" > Others</option>';


		}
		else if ($r == '4')
		{
			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="1"> Islam</option>';
			$output .= '<option value="2" > Christianity</option>';
			$output .= '<option value="3" > Traditional</option>';
			$output .= '<option value="4"  selected > Others</option>';


		}
		else
		{

			$output = '<option value="0"  selected> -- Please Select --</option>';
			$output .= '<option value="1"> Islam</option>';
			$output .= '<option value="2" > Christianity</option>';
			$output .= '<option value="3" > Traditional</option>';
			$output .= '<option value="4"  > Others</option>';
		}

	return $output;

}
//end of select religion


//function select marital status
function select_marital_status($st)
{
	//$st = '0';
		if ($st == 'single')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="single" selected > Single</option>';
			$output .= '<option value="married" > Married</option>';
			$output .= '<option value="divorced" >Divorced</option>';
			$output .= '<option value="widowed" >Widowed</option>';


		}
		else if ($st == 'married')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="single"  > Single</option>';
			$output .= '<option value="married" selected> Married</option>';
			$output .= '<option value="divorced" >Divorced</option>';
			$output .= '<option value="widowed" >Widowed</option>';


		}
		else if ($st == 'divorced')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="single"  > Single</option>';
			$output .= '<option value="married" > Married</option>';
			$output .= '<option value="divorced" selected >Divorced</option>';
			$output .= '<option value="widowed" >Widowed</option>';


		}
		else if ($st == 'widowed')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="single"  > Single</option>';
			$output .= '<option value="married" > Married</option>';
			$output .= '<option value="divorced"  >Divorced</option>';
			$output .= '<option value="widowed" selected >Widowed</option>';


		}
		else
		{

			$output = '<option value="0" selected> -- Please Select --</option>';
			$output .= '<option value="single"  > Single</option>';
			$output .= '<option value="married" > Married</option>';
			$output .= '<option value="divorced" >Divorced</option>';
			$output .= '<option value="widowed" >Widowed</option>';

		}

	return $output;

}
//end of select marrital status


//function select marital status
function select_credential_status($st)
{

		if ($st == 'waec')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="waec" selected > WAEC</option>';
			$output .= '<option value="neco" > NECO</option>';
			$output .= '<option value="nd" >ND</option>';
			$output .= '<option value="nce" >NCE</option>';
			$output .= '<option value="hnd" >HND</option>';
			$output .= '<option value="bsc" >BSC</option>';
			$output .= '<option value="msc" >MSC</option>';
			$output .= '<option value="mphil" >MPHIL</option>';


		}
		else if ($st == 'neco')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="waec"  > WAEC</option>';
			$output .= '<option value="neco" selected> NECO</option>';
			$output .= '<option value="nd" >ND</option>';
			$output .= '<option value="nce" >NCE</option>';
			$output .= '<option value="hnd" >HND</option>';
			$output .= '<option value="bsc" >BSC</option>';
			$output .= '<option value="msc" >MSC</option>';
			$output .= '<option value="mphil" >MPHIL</option>';


		}
		else if ($st == 'nd')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="waec"  > WAEC</option>';
			$output .= '<option value="neco" > NECO</option>';
			$output .= '<option value="nd" selected>ND</option>';
			$output .= '<option value="nce" >NCE</option>';
			$output .= '<option value="hnd" >HND</option>';
			$output .= '<option value="bsc" >BSC</option>';
			$output .= '<option value="msc" >MSC</option>';
			$output .= '<option value="mphil" >MPHIL</option>';


		}
		else if ($st == 'nce')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="waec"  > WAEC</option>';
			$output .= '<option value="neco" > NECO</option>';
			$output .= '<option value="nd" >ND</option>';
			$output .= '<option value="nce" selected>NCE</option>';
			$output .= '<option value="hnd" >HND</option>';
			$output .= '<option value="bsc" >BSC</option>';
			$output .= '<option value="msc" >MSC</option>';
			$output .= '<option value="mphil" >MPHIL</option>';


		}
		else if ($st == 'hnd')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="waec"  > WAEC</option>';
			$output .= '<option value="neco" > NECO</option>';
			$output .= '<option value="nd" >ND</option>';
			$output .= '<option value="nce" >NCE</option>';
			$output .= '<option value="hnd" selected>HND</option>';
			$output .= '<option value="bsc" >BSC</option>';
			$output .= '<option value="msc" >MSC</option>';
			$output .= '<option value="mphil" >MPHIL</option>';


		}
		else if ($st == 'bsc')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="waec"  > WAEC</option>';
			$output .= '<option value="neco" > NECO</option>';
			$output .= '<option value="nd" >ND</option>';
			$output .= '<option value="nce" >NCE</option>';
			$output .= '<option value="hnd" >HND</option>';
			$output .= '<option value="bsc" selected>BSC</option>';
			$output .= '<option value="msc" >MSC</option>';
			$output .= '<option value="mphil" >MPHIL</option>';


		}
		else if ($st == 'msc')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="waec"  > WAEC</option>';
			$output .= '<option value="neco"> NECO</option>';
			$output .= '<option value="nd" >ND</option>';
			$output .= '<option value="nce" >NCE</option>';
			$output .= '<option value="hnd" >HND</option>';
			$output .= '<option value="bsc" >BSC</option>';
			$output .= '<option value="msc" selected>MSC</option>';
			$output .= '<option value="mphil" >MPHIL</option>';


		}
		else if ($st == 'mphil')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="waec"  > WAEC</option>';
			$output .= '<option value="neco"> NECO</option>';
			$output .= '<option value="nd" >ND</option>';
			$output .= '<option value="nce" >NCE</option>';
			$output .= '<option value="hnd" >HND</option>';
			$output .= '<option value="bsc" >BSC</option>';
			$output .= '<option value="msc" >MSC</option>';
			$output .= '<option value="mphil" selected>MPHIL</option>';


		}
		else
		{

			$output = '<option value="0" selected> -- Please Select --</option>';
			$output .= '<option value="waec"  > WAEC</option>';
			$output .= '<option value="neco" > NECO</option>';
			$output .= '<option value="nd" >ND</option>';
			$output .= '<option value="nce" >NCE</option>';
			$output .= '<option value="hnd" >HND</option>';
			$output .= '<option value="bsc" >BSC</option>';
			$output .= '<option value="msc" >MSC</option>';
			$output .= '<option value="mphil" >MPHIL</option>';

		}

	return $output;

}
//end of select marrital status


//nationality

//function select nationality
function select_nationality($n)
{

		if ($n == '159')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="159" selected > Nigerian</option>';
			$output .= '<option value="Others" > NON Nigerian</option>';


		}
		else if ($n == 'Others')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="159" > Nigerian</option>';
			$output .= '<option value="Others"  selected>  NON Nigerian</option>';


		}
		else
		{

			$output = '<option value="0"  selected > -- Please Select --</option>';
			$output .= '<option value="159"> Nigerian</option>';
			$output .= '<option value="Others" > Others</option>';
		}

	return $output;

}
//end




//function select state
function select_state($con, $state_id)
{
	//$state_id = '0';
	$r = mysqli_query($con, "SELECT *  FROM states  ORDER BY name ASC");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($state_id == $row['state_id'])
			{
				$output = "<option value=\"$row[state_id]\" selected>";
				$output .=  $row['name'];
				$output .="</option>";

			}
			else
			{
				$output = "<option value=\"$row[state_id]\" >";
				$output .= $row['name'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select state



function select_lga($con,$state,$lga)
{
	//$state = 0;
	//$lga = 0;
	$r = mysqli_query($con,"SELECT *  FROM lga  ORDER BY local_name ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($lga == $row['local_id'])
			{
				$output = "<option value=\"$row[local_id]\" selected>";
				$output .=  $row['local_name'];
				$output .="</option>";

			}
			else
			{
				$output = "<option value=\"$row[local_id]\" >";
				$output .= $row['local_name'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select lga




//function select sponsorship type
function select_sponsorship_type($r)
{

		if ($r == '1')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1" selected > Private</option>';
			$output .= '<option value="2" > Self</option>';
			$output .= '<option value="3" > Governmental</option>';
			$output .= '<option value="4" > Others</option>';
			$output .= '<option value="5" > Nil</option>';


		}
		else if ($r == '2')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1" > Private</option>';
			$output .= '<option value="2" selected  > Self</option>';
			$output .= '<option value="3" > Governmental</option>';
			$output .= '<option value="4" > Others</option>';
			$output .= '<option value="5" > Nil</option>';



		}
		else if ($r == '3')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1" > Private</option>';
			$output .= '<option value="2"  > Self</option>';
			$output .= '<option value="3" selected  > Governmental</option>';
			$output .= '<option value="4" > Others</option>';
			$output .= '<option value="5" > Nil</option>';


		}
		else if ($r == '4')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1" > Private</option>';
			$output .= '<option value="2" > Self</option>';
			$output .= '<option value="3" > Governmental</option>';
			$output .= '<option value="4" selected > Others</option>';
			$output .= '<option value="5" > Nil</option>';



		}
		else if ($r == '5')
		{
			$output = '<option value="0"  > -- Please Select --</option>';
			$output .= '<option value="1" > Private</option>';
			$output .= '<option value="2" > Self</option>';
			$output .= '<option value="3" > Governmental</option>';
			$output .= '<option value="4" > Others</option>';
			$output .= '<option value="5" selected > Nil</option>';



		}
		else
		{

			$output = '<option value="0" selected  > -- Please Select --</option>';
			$output .= '<option value="1" > Private</option>';
			$output .= '<option value="2" > Self</option>';
			$output .= '<option value="3" > Governmental</option>';
			$output .= '<option value="4" > Others</option>';
			$output .= '<option value="5" > Nil</option>';
		}

	return $output;

}
//end of select sponsorship type




//select department
function select_programme($con, $programme_applied_for)
{
	$r = mysqli_query($con, "SELECT *FROM programmes  WHERE real_ = 0 AND id=$programme_applied_for ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($programme_applied_for == $row['id'])
			{
				$output = "<option class='col-md-4' value=\"$row[id]\" selected>";
				$output .=  $row['title'];
				$output .="</option>";

			}
			else
			{
				$output = "<option class='col-md-4' value=\"$row[id]\" >";
				$output .= $row['title'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select programme


//select department
function select_programme_new($con)
{
	$r = mysqli_query($con, "SELECT *FROM programmes  WHERE real_ = 0 ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($programme_applied_for == $row['programme_id'])
			{
				$output = "<option class='col-md-4' value=\"$row[programme_id]\" selected>";
				$output .=  $row['title'];
				$output .="</option>";

			}
			else
			{
				$output = "<option class='col-md-4' value=\"$row[programme_id]\" >";
				$output .= $row['title'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select programme


//select department
function select_department($con, $department_applied_for)
{
	$r = mysqli_query($con, "SELECT *FROM departments  WHERE real_ =0 ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($department_applied_for == $row['id'])
			{
				$output = "<option class='col-md-4' value=\"$row[id]\" selected>";
				$output .=  $row['title'];
				$output .="</option>";

			}
			else
			{
				$output = "<option class='col-md-4' value=\"$row[id]\" >";
				$output .= $row['title'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select department

//select department
function select_department_title($con, $department_applied_for)
{
	$r = mysqli_query($con, "SELECT *FROM departments  WHERE id = $department_applied_for AND real_ =0 ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($department_applied_for == $row['id'])
			{
				$output = "<option class='col-md-4' value=\"$row[id]\" selected>";
				$output .=  $row['title'];
				$output .="</option>";

			}
			else
			{
				$output = "<option class='col-md-4' value=\"$row[id]\" >";
				$output .= $row['title'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select department

//get department id for  a programme
function get_department_id_from_programmes($con, $p)
{
	$result = mysqli_query($con, "SELECT department_id FROM programmes WHERE programme_id = '$p'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['department_id'];

	return $v;


}

//get department id for  a programme
function get_school_code_by_id($con)
{
	$result = mysqli_query($con, "SELECT * FROM sms_settings WHERE sms_status = '1'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['school_code'];

	return $v;


}

//Function to fetch current semester
function get_current_session_title($con, $id)
{

$result = mysqli_query($con,"SELECT * FROM academic_year WHERE academic_running_status = '$id'");
$row = mysqli_fetch_assoc($result);
$id = $row['title'];

return $id;
}


//Function to fetch  semester
		function get_semester_title_first($con, $id)
		{

			$result = mysqli_query($con,"SELECT * FROM semesters WHERE semester_id = '$id'");
			$row = mysqli_fetch_assoc($result);
			$title = $row['title'];

		return $title;
		}


		//Function to fetch current semester
				function get_semester_current_id($con, $id)
				{
					$result = mysqli_query($con, "SELECT * FROM semesters WHERE semester_id = '$id'");
					$row = mysqli_fetch_assoc($result);
					$id = $row['semester_id'];

				return $id;
				}


//get current academic year
function get_current_session($con,$id)
{
	$result = mysqli_query($con, "SELECT * FROM academic_year WHERE academic_running_status = '$id'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['id'];

	return $v;


}


//function fetch user programme type
	function get_user_programme_type_admitted_to($con,$id)
	{
		$result = mysqli_query($con,"SELECT school_id FROM students WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['school_id'];


		return $v;
	}

	//function fetch user department_admitted_to
		function get_user_department_admitted_to($con,$id)
		{
			$result = mysqli_query($con,"SELECT department_id FROM students WHERE id = '$id'");
			$row = mysqli_fetch_assoc($result);
			$v = $row['department_id'];


			return $v;
		}


		//function fetch user programme_admitted_to
		function get_user_programme_admitted_to($con,$id)
		{
			$result = mysqli_query($con,"SELECT programme_id FROM students WHERE id = '$id'");
			$row = mysqli_fetch_assoc($result);
			$v = $row['programme_id'];


			return $v;
		}

		//function fetch user level per programme
			function get_user_level_per_programme($con,$id)
			{
				$result = mysqli_query($con,"SELECT level  FROM programmes WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['level'];


				return $v;
			}


			//Function to fetch  school_fee title
				function get_school_fee_title($con,$level, $s) //$pt programme type , $d -department , $p -programme id, $s semester
				{
					$result = mysqli_query($con,"SELECT title FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s' ");
					$row = mysqli_fetch_assoc($result);
					$v = $row['title'];

				return $v;
				}


				//function to check if nigerlite 1
	function is_nigerlite($con,$u)
	{
		$result = mysqli_query($con,"SELECT state_id FROM students WHERE state_id = 27 AND id = '$u'");
		$row = mysqli_fetch_assoc($result);
		$status = $row['state_id'];


		if($status == 27)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

				//Function to fetch  school_fee desc
				function get_school_fee_desc($con,$level, $s)
				{
					$result = mysqli_query($con,"SELECT description FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['description'];

				return $v;
				}

				//Function to fetch  school_fee amount
				function get_school_fee_amount($con,$level, $s)
				{
					$result = mysqli_query($con,"SELECT amount FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['amount'];

				return $v;
				}
				//Function to fetch  school_fee amount
				function get_school_fee_amount_2($con,$level, $s)
				{
					$result = mysqli_query($con,"SELECT amount FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['amount'];

				return $v;
				}


				//Function to fetch  school_fee amount
				function get_school_fee_amount_non_indigene($con,$level, $s, $pt, $d, $p)
				{
					$result = mysqli_query($con,"SELECT amount FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s' AND programme_type_id = '$pt' AND department_id = '$d' AND programme_id = '$p'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['amount'];

				return $v;
				}


				//Function to fetch  school_fee  total amountamount
				function get_school_fee_total_amount($con,$level, $s)
				{
					$result = mysqli_query($con,"SELECT total_amount FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['total_amount'];

				return $v;
				}

				//Function to fetch  school_fee  total amountamount
				function get_school_fee_total_amount_2($con,$level, $s)
				{
					$result = mysqli_query($con,"SELECT total_amount FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['total_amount'];

				return $v;
				}


				//Function to fetch  school_fee  total amountamount
				function get_school_fee_total_amount_non_indigene($con,$level, $s)
				{
					$result = mysqli_query($con,"SELECT total_non_indigene FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['total_non_indigene'];

				return $v;
				}

				//Function to fetch  school_fee  total amountamount
				function get_school_fee_total_amount_non_indigene_2($con,$level, $s)
				{
					$result = mysqli_query($con,"SELECT total_non_indigene FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s' ");
					$row = mysqli_fetch_assoc($result);
					$v = $row['total_non_indigene'];

				return $v;
				}


//Function to fetch check if payment has been made by particular student
	function has_paid_applicant_fee_session($con,$user_id,$session)
	{
		$q = "SELECT applicant_id,session
			  FROM applicants_fee_payments
			  WHERE applicant_id = '$user_id'
			  AND session = '$session' ";
		$r = mysqli_query($con,$q);

		//$row = mysql_fetch_assoc$result);

		if(mysqli_num_rows($r)== 0)
		{
			return false;

		}
		else
		{
			return true;
		}

	}


	//Function to fetch check if payment has been made by particular student
		function has_paid_acceptance_fee_session($con,$user_id,$session)
		{
			$q = "SELECT student_id,session
				  FROM acceptance_fee_payments
				  WHERE student_id = '$user_id'
				  AND session = '$session' ";
			$r = mysqli_query($con,$q);

			//$row = mysql_fetch_assoc$result);

			if(mysqli_num_rows($r)== 0)
			{
				return false;

			}
			else
			{
				return true;
			}

		}



//get current academic year
function get_institute_code($con)
{
	$result = mysqli_query($con, "SELECT * FROM sms_settings ");
	$row = mysqli_fetch_assoc($result);
	$v = $row['school_code'];

	return $v;


}


//get total applicants
	function get_total_num_applicants($con, $sess)
	{
		//get total invoice


		$q = "SELECT COUNT(id) FROM applicants WHERE session_id='$sess'";
		$r = mysqli_query($con, $q);
		$row = mysqli_fetch_array($r,MYSQLI_NUM);

		return $row[0];

	}

//function taht generate app no
	function generate_application_number_for_applicants($con,$school_code)
	{



		$session = get_current_session($con,$id ='1');

		//get the session title
		$session_title = get_current_session_title($con, $session);

		$total_num = get_total_num_applicants($con,$session);
		//get the year from the session
		$year = substr ($session_title,2,2);

		//add 1 to $g_code and tek to d db
		$g_coded = $total_num + 1;


		$len_g_coded  = strlen($g_coded); //check lenght

		if($len_g_coded == '1')
		{
			$g_coded = '000'.$g_coded;
		}
		else if($len_g_coded == '2')
		{
			$g_coded = '00'.$g_coded;
		}
		else if($len_g_coded == '3')
		{
			$g_coded = '0'.$g_coded;
		}
		else
		{
			$g_coded = $g_coded; //add strings to invoice id
			//do nothing
		}
		$app_number = 'APP/'.$school_code.'/'.$year.'/'.$g_coded; //give the matric number if not exist


		if(applicant_no_exist($con, $g_coded))
		{
			$app_number = 'APP/'.$school_code.'/'.$year.'/'.$g_coded + 1; //if it exist add 1 to it

		}





		return $app_number;




	}//end of generate apl no

	//check if applicant no  already exist
	function applicant_no_exist($con, $iid)
	{
		//check if invoice id generated exist
		$q1 = "SELECT application_number FROM applicants WHERE application_number = '$iid'";
		$r1 = mysqli_query($con, $q1);

		if(mysqli_num_rows($r1)>0)
		{
			return true;
		}
		else
		{
			return false;
		}


	}



	//function select H status
function select_h_status($n)
{

		if ($n == 'Normal')
		{
			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="Normal" selected >Normal</option>';
			$output .= '<option value="Handicapped" >Handicapped</option>';
			$output .= '<option value="Others" >Others</option>';


		}
		else if ($n == 'Handicapped')
		{
			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="Normal" >Normal</option>';
			$output .= '<option value="Handicapped" selected >Handicapped</option>';
			$output .= '<option value="Others" >Others</option>';


		}
		else if ($n == 'Others')
		{
			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="Normal" >Normal</option>';
			$output .= '<option value="Handicapped" >Handicapped</option>';
			$output .= '<option value="Others" selected >Others</option>';


		}
		else
		{
			$output = '<option value="0" selected > -- Please Select --</option>';
			$output .= '<option value="Normal" >Normal</option>';
			$output .= '<option value="Handicapped" >Handicapped</option>';
			$output .= '<option value="Others" >Others</option>';


		}

	return $output;

}

//function select disability
function select_disability($n)
{

		if ($n == 'Blind')
		{
			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="Blind" selected> Blind</option>';
			$output .= '<option value="Deaf">  Deaf</option>';
			$output .= '<option value="Dumb">  Dumb</option>';
			$output .= '<option value="Handicapped">  Handicapped</option>';
			$output .= '<option value="None"> None</option>';
			$output .= '<option value="Others"> Others</option>';

		}
		else if ($n == 'Deaf' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="Blind"> Blind</option>';
			$output .= '<option value="Deaf"  selected>  Deaf</option>';
			$output .= '<option value="Dumb">  Dumb</option>';
			$output .= '<option value="Handicapped">  Handicapped</option>';
			$output .= '<option value="None"> None</option>';
			$output .= '<option value="Others"> Others</option>';

		}
		else if ($n == 'Dumb' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="Blind"> Blind</option>';
			$output .= '<option value="Deaf"  >  Deaf</option>';
			$output .= '<option value="Dumb" selected>  Dumb</option>';
			$output .= '<option value="Handicapped">  Handicapped</option>';
			$output .= '<option value="None"> None</option>';
			$output .= '<option value="Others"> Others</option>';

		}
		else if ($n == 'Handicapped' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="Blind"> Blind</option>';
			$output .= '<option value="Deaf"  >  Deaf</option>';
			$output .= '<option value="Dumb" >  Dumb</option>';
			$output .= '<option value="Handicapped" selected>  Handicapped</option>';
			$output .= '<option value="None"> None</option>';
			$output .= '<option value="Others"> Others</option>';

		}
		else if ($n == 'None' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="Blind"> Blind</option>';
			$output .= '<option value="Deaf"  >  Deaf</option>';
			$output .= '<option value="Dumb" >  Dumb</option>';
			$output .= '<option value="Handicapped">  Handicapped</option>';
			$output .= '<option value="None"  selected> None</option>';
			$output .= '<option value="Others"> Others</option>';

		}
		else if ($n == 'Others' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="Blind"> Blind</option>';
			$output .= '<option value="Deaf"  >  Deaf</option>';
			$output .= '<option value="Dumb" >  Dumb</option>';
			$output .= '<option value="Handicapped">  Handicapped</option>';
			$output .= '<option value="None" > None</option>';
			$output .= '<option value="Others"  selected> Others</option>';

		}
		else
		{
			$output = '<option value="0"  selected> -- Please Select --</option>';
			$output .= '<option value="Blind"> Blind</option>';
			$output .= '<option value="Deaf"  >  Deaf</option>';
			$output .= '<option value="Dumb" >  Dumb</option>';
			$output .= '<option value="Handicapped">  Handicapped</option>';
			$output .= '<option value="None" > None</option>';
			$output .= '<option value="Others" > Others</option>';
		}

	return $output;

}



//function select bg
function select_bg($n)
{

		if ($n == 'AB')
		{
			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="AB" selected> AB</option>';
			$output .= '<option value="O">  O </option>';
			$output .= '<option value="O+"> O+</option>';
			$output .= '<option value="A+"> A+</option>';
			$output .= '<option value="B+"> B+</option>';
			//$output .= '<option value="O+"> O+</option>';


		}
		else if ($n == 'O' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="AB" > AB</option>';
			$output .= '<option value="O" selected>  O </option>';
			$output .= '<option value="O+"> O+</option>';
			$output .= '<option value="A+"> A+</option>';
			$output .= '<option value="B+"> B+</option>';
			//$output .= '<option value="O+"> O+</option>';

		}
		else if ($n == 'A+' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="AB" > AB</option>';
			$output .= '<option value="O" >  O </option>';
			$output .= '<option value="O+"> O+</option>';
			$output .= '<option value="A+" selected> A+</option>';
			$output .= '<option value="B+"> B+</option>';
			//$output .= '<option value="O+"> O+</option>';

		}
		else if ($n == 'B+' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="AB" > AB</option>';
			$output .= '<option value="O" >  O </option>';
			$output .= '<option value="O+"> O+</option>';
			$output .= '<option value="A+" > A+</option>';
			$output .= '<option value="B+" selected> B+</option>';


		}else if ($n == 'O+' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="AB" > AB</option>';
			$output .= '<option value="O" >  O </option>';
			$output .= '<option value="O+" selected> O+</option>';
			$output .= '<option value="A+" > A+</option>';
			$output .= '<option value="B+"> B+</option>';


		}
		else
		{
			$output = '<option value="0"  selected> -- Please Select --</option>';
			$output .= '<option value="AB" > AB</option>';
			$output .= '<option value="O" >  O </option>';
			$output .= '<option value="O+"> O+</option>';
			$output .= '<option value="A+" > A+</option>';
			$output .= '<option value="B+"> B+</option>';

		}

	return $output;

}
//end of blood group selection


//function select exam _type
function select_exam_type($st)
{


		if ($st == 'GRADE II TEACHERS CERT.')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option  selected > GRADE II TEACHERS CERT.</option>';
			$output .= '<option > NABTEB</option>';
			$output .= '<option  >NECO</option>';
			$output .= '<option  >WAEC</option>';


		}
		else if ($st == 'NABTEB')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option > GRADE II TEACHERS CERT.</option>';
			$output .= '<option  selected  > NABTEB</option>';
			$output .= '<option  >NECO</option>';
			$output .= '<option  >WAEC</option>';


		}
		else if ($st == 'NECO')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option > GRADE II TEACHERS CERT.</option>';
			$output .= '<option > NABTEB</option>';
			$output .= '<option selected >NECO</option>';
			$output .= '<option  >WAEC</option>';


		}
		else if ($st == 'WAEC')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option > GRADE II TEACHERS CERT.</option>';
			$output .= '<option > NABTEB</option>';
			$output .= '<option>NECO</option>';
			$output .= '<option  selected>WAEC</option>';


		}
		else
		{

			$output = '<option value="0" selected > -- Please Select --</option>';
			$output .= '<option > GRADE II TEACHERS CERT.</option>';
			$output .= '<option > NABTEB</option>';
			$output .= '<option>NECO</option>';
			$output .= '<option  >WAEC</option>';

		}

	return $output;

}
//end of select exam type

//function select exam month
function select_exam_month($hiq)
{

		if ($hiq == '1')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'  selected  >JUN/JUL</option>";
			$output .= '<option value="2"  >OCT/NOV</option>';
			$output .= '<option value="3"  >NOV/DEC</option>';
			$output .= '<option value="4"  >JUNE</option>';
			$output .= '<option value="5"  >JULY</option>';
			$output .= '<option value="6"  >OCTOBER</option>';
			$output .= '<option value="7"  >NOVEMBER</option>';
			$output .= '<option value="8"  >DECEMBER</option>';


		}
		else if ($hiq == '2')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >JUN/JUL</option>";
			$output .= '<option value="2"  selected  >OCT/NOV</option>';
			$output .= '<option value="3"  >NOV/DEC</option>';
			$output .= '<option value="4"  >JUNE</option>';
			$output .= '<option value="5"  >JULY</option>';
			$output .= '<option value="6"  >OCTOBER</option>';
			$output .= '<option value="7"  >NOVEMBER</option>';
			$output .= '<option value="8"  >DECEMBER</option>';

		}
		else if ($hiq == '3')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >JUN/JUL</option>";
			$output .= '<option value="2"  >OCT/NOV</option>';
			$output .= '<option value="3"  selected  >NOV/DEC</option>';
			$output .= '<option value="4"  >JUNE</option>';
			$output .= '<option value="5"  >JULY</option>';
			$output .= '<option value="6"  >OCTOBER</option>';
			$output .= '<option value="7"  >NOVEMBER</option>';
			$output .= '<option value="8"  >DECEMBER</option>';

		}
		else if ($hiq == '4')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >JUN/JUL</option>";
			$output .= '<option value="2"  >OCT/NOV</option>';
			$output .= '<option value="3"  >NOV/DEC</option>';
			$output .= '<option value="4" selected >JUNE</option>';
			$output .= '<option value="5"  >JULY</option>';
			$output .= '<option value="6"  >OCTOBER</option>';
			$output .= '<option value="7"  >NOVEMBER</option>';
			$output .= '<option value="8"  >DECEMBER</option>';

		}
		else if ($hiq == '5')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >JUN/JUL</option>";
			$output .= '<option value="2"  >OCT/NOV</option>';
			$output .= '<option value="3"  >NOV/DEC</option>';
			$output .= '<option value="4"  >JUNE</option>';
			$output .= '<option value="5" selected >JULY</option>';
			$output .= '<option value="6"  >OCTOBER</option>';
			$output .= '<option value="7"  >NOVEMBER</option>';
			$output .= '<option value="8"  >DECEMBER</option>';

		}
		else if ($hiq == '6')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >JUN/JUL</option>";
			$output .= '<option value="2"  >OCT/NOV</option>';
			$output .= '<option value="3"  >NOV/DEC</option>';
			$output .= '<option value="4"  >JUNE</option>';
			$output .= '<option value="5"  >JULY</option>';
			$output .= '<option value="6" selected >OCTOBER</option>';
			$output .= '<option value="7"  >NOVEMBER</option>';
			$output .= '<option value="8"  >DECEMBER</option>';

		}
		else if ($hiq == '7')
		{
		    $output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >JUN/JUL</option>";
			$output .= '<option value="2"  >OCT/NOV</option>';
			$output .= '<option value="3"  >NOV/DEC</option>';
			$output .= '<option value="4"  >JUNE</option>';
			$output .= '<option value="5" >JULY</option>';
			$output .= '<option value="6"  >OCTOBER</option>';
			$output .= '<option value="7"  selected >NOVEMBER</option>';
			$output .= '<option value="8"  >DECEMBER</option>';

		}
		else if ($hiq == '8')
		{
			 $output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >JUN/JUL</option>";
			$output .= '<option value="2"  >OCT/NOV</option>';
			$output .= '<option value="3"  >NOV/DEC</option>';
			$output .= '<option value="4"  >JUNE</option>';
			$output .= '<option value="5" >JULY</option>';
			$output .= '<option value="6"  >OCTOBER</option>';
			$output .= '<option value="7" >NOVEMBER</option>';
			$output .= '<option value="8"  selected  >DECEMBER</option>';

		}
		else
		{
			$output = 	'<option value="0"  selected > -- Please Select-- </option>';
			$output .=  "<option value='1' >JUN/JUL</option>";
			$output .= '<option value="2"  >OCT/NOV</option>';
			$output .= '<option value="3"  >NOV/DEC</option>';
			$output .= '<option value="4"  >JUNE</option>';
			$output .= '<option value="5" >JULY</option>';
			$output .= '<option value="6"  >OCTOBER</option>';
			$output .= '<option value="7" >NOVEMBER</option>';
			$output .= '<option value="8"  >DECEMBER</option>';


		}
	return $output;

}
//end of select exam month

//function calendar yer
function year($y)
{
	$y = $y;
	$years = range(1950, date('Y'));

	foreach ($years as $value)
	{
		if($y == $value)
		{
	   		echo "<option value=\"$value\" selected>$value</option>\n";
		}
		else
		{
			echo "<option value=\"$value\">$value</option>\n";
		}
	}


}//end of year

//function select subjects
function select_subjects($con, $c)
{
	$r = mysqli_query($con,"SELECT id, title  FROM o_level_subjects  ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($c == $row['id'])
			{
				$output = "<option value=\"$row[id]\" selected>";
				$output .=  $row['title'];
				$output .="</option>";

			}
			else
			{
				$output = "<option value=\"$row[id]\" >";
				$output .= $row['title'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select subjects

//function select highest qualification
function select_subject_grade($hiq)
{

		if ($hiq == '1')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'  selected  >A1</option>";
			$output .= '<option value="2"  >B2</option>';
			$output .= '<option value="3"  >B3</option>';
			$output .= '<option value="4"  >C4</option>';
			$output .= '<option value="5"  >C5</option>';
			$output .= '<option value="6"  >C6</option>';
			$output .= '<option value="7"  >D7</option>';
			$output .= '<option value="8"  >E8</option>';
			$output .= '<option value="9" >F9</option>';
			$output .= '<option value="10" >AR</option>';






		}
		else if ($hiq == '2')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >A1</option>";
			$output .= '<option value="2"   selected  >B2</option>';
			$output .= '<option value="3"  >B3</option>';
			$output .= '<option value="4"  >C4</option>';
			$output .= '<option value="5"  >C5</option>';
			$output .= '<option value="6"  >C6</option>';
			$output .= '<option value="7"  >D7</option>';
			$output .= '<option value="8"  >E8</option>';
			$output .= '<option value="9"  >F9</option>';
			$output .= '<option value="10" >AR</option>';

		}
		else if ($hiq == '3')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >A1</option>";
			$output .= '<option value="2"  >B2</option>';
			$output .= '<option value="3" selected >B3</option>';
			$output .= '<option value="4"  >C4</option>';
			$output .= '<option value="5"  >C5</option>';
			$output .= '<option value="6"  >C6</option>';
			$output .= '<option value="7"  >D7</option>';
			$output .= '<option value="8"  >E8</option>';
			$output .= '<option value="9"  >F9</option>';
			$output .= '<option value="10" >AR</option>';

		}
		else if ($hiq == '4')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1' >A1</option>";
			$output .= '<option value="2"  >B2</option>';
			$output .= '<option value="3"  >B3</option>';
			$output .= '<option value="4" selected >C4</option>';
			$output .= '<option value="5"  >C5</option>';
			$output .= '<option value="6"  >C6</option>';
			$output .= '<option value="7"  >D7</option>';
			$output .= '<option value="8"  >E8</option>';
			$output .= '<option value="9"  >F9</option>';
			$output .= '<option value="10" >AR</option>';

		}
		else if ($hiq == '5')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>A1</option>";
			$output .= '<option value="2" >B2</option>';
			$output .= '<option value="3" >B3</option>';
			$output .= '<option value="4" >C4</option>';
			$output .= '<option value="5"  selected >C5</option>';
			$output .= '<option value="6"  >C6</option>';
			$output .= '<option value="7"  >D7</option>';
			$output .= '<option value="8"  >E8</option>';
			$output .= '<option value="9"  >F9</option>';
			$output .= '<option value="10" >AR</option>';

		}
		else if ($hiq == '6')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>A1</option>";
			$output .= '<option value="2" >B2</option>';
			$output .= '<option value="3" >B3</option>';
			$output .= '<option value="4" >C4</option>';
			$output .= '<option value="5" >C5</option>';
			$output .= '<option value="6" selected >C6</option>';
			$output .= '<option value="7"  >D7</option>';
			$output .= '<option value="8"  >E8</option>';
			$output .= '<option value="9"  >F9</option>';
			$output .= '<option value="10" >AR</option>';

		}
		else if ($hiq == '7')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>A1</option>";
			$output .= '<option value="2" >B2</option>';
			$output .= '<option value="3" >B3</option>';
			$output .= '<option value="4" >C4</option>';
			$output .= '<option value="5" >C5</option>';
			$output .= '<option value="6" >C6</option>';
			$output .= '<option value="7"  selected  >D7</option>';
			$output .= '<option value="8"  >E8</option>';
			$output .= '<option value="9"  >F9</option>';
			$output .= '<option value="10" >AR</option>';

		}
		else if ($hiq == '8')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>A1</option>";
			$output .= '<option value="2" >B2</option>';
			$output .= '<option value="3" >B3</option>';
			$output .= '<option value="4" >C4</option>';
			$output .= '<option value="5" >C5</option>';
			$output .= '<option value="6" >C6</option>';
			$output .= '<option value="7" >D7</option>';
			$output .= '<option value="8" selected  >E8</option>';
			$output .= '<option value="9"  >F9</option>';
			$output .= '<option value="10" >AR</option>';

		}
		else if ($hiq == '9')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>A1</option>";
			$output .= '<option value="2" >B2</option>';
			$output .= '<option value="3" >B3</option>';
			$output .= '<option value="4" >C4</option>';
			$output .= '<option value="5" >C5</option>';
			$output .= '<option value="6" >C6</option>';
			$output .= '<option value="7" >D7</option>';
			$output .= '<option value="8" >E8</option>';
			$output .= '<option value="9"  selected  >F9</option>';
			$output .= '<option value="10" >AR</option>';

		}
		else if ($hiq == '10')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'>A1</option>";
			$output .= '<option value="2" >B2</option>';
			$output .= '<option value="3" >B3</option>';
			$output .= '<option value="4" >C4</option>';
			$output .= '<option value="5" >C5</option>';
			$output .= '<option value="6" >C6</option>';
			$output .= '<option value="7" >D7</option>';
			$output .= '<option value="8" >E8</option>';
			$output .= '<option value="9"  >F9</option>';
			$output .= '<option value="10"  selected >AR</option>';

		}
		else
		{
			$output = '<option value="0"  selected  > -- Please Select-- </option>';
			$output .=  "<option value='1'>A1</option>";
			$output .= '<option value="2" >B2</option>';
			$output .= '<option value="3" >B3</option>';
			$output .= '<option value="4" >C4</option>';
			$output .= '<option value="5" >C5</option>';
			$output .= '<option value="6" >C6</option>';
			$output .= '<option value="7" >D7</option>';
			$output .= '<option value="8" >E8</option>';
			$output .= '<option value="9" >F9</option>';
			$output .= '<option value="10" >AR</option>';


		}
	return $output;

}

//function to check if user has been inserted before
	function if_student_is_available($con, $id)
	{
		$result = mysqli_query($con,"SELECT * FROM applicants_olevel WHERE applicant_id = '$id'");

		if(mysqli_num_rows($result) > 0 )
		{
			return true; //if available return true
		}
		else
		{
			return false; //else return false
		}


	}

//function to get applicant alevel
	function get_applicant_alevel ($con, $id)
	{
		$sql_get_app=mysqli_query($con, "select * FROM applicants_alevel where applicant_id ='$id' and applicant_alevel_status= '1' ");


										if($sql_get_app){
											$sql_get_app_row=mysqli_num_rows($sql_get_app);
												if($sql_get_app_row >0){

													$output =
											    '<table id="example" class="user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
											    <thead>
											          <th>S/N</th>
											          <th>INSTITUTION</th>
											          <th>QUALIFICATION</th>
											          <th>COURSE</th>
											          <th>CLASS OF DEGREE</th>
											          <th>START</th>
											          <th>END</th>
																<th>CGPA</th>
											          <th>ACTION</th>




											    </thead>
											    <tfoot>

											          <th>S/N</th>
											          <th>INSTITUTION</th>
											          <th>QUALIFICATION</th>
											          <th>COURSE</th>
											          <th>CLASS OF DEGREE</th>
											          <th>START</th>
											          <th>END</th>
																<th>CGPA</th>
											          <th>ACTION</th>

											    </tfoot>

											    <tbody>';

													while($row=mysqli_fetch_assoc($sql_get_app)){

														//getting Certificate type
														$applicant_alevel_id=$row['applicant_alevel_id'];
														$cert=$row['cert'];
														if($cert==1){
																$cert = 'ND';
														}else if($cert==2){
																$cert = 'NCE';
														}else if($cert==3){
																$cert = 'IJMB';
														}else if($cert==4){
																$cert = 'HND';
														}else if($cert==5){
																$cert = 'BSC';
														}else if($cert==6){
																$cert = 'MSC';
														}else if($cert==7){
																$cert = 'MPHIL';
														}else if($cert==8){
																$cert = 'MTECH';
														}else if($cert==9){
																$cert = 'Others';
														}


														//getting class of degree
														$degree=$row['class_of_degree'];
														if($degree==1){
																$degree = 'First Class';
														}else if($degree==2){
																$degree = 'Distinction';
														}else if($degree==3){
																$degree = 'Merit';
														}else if($degree==4){
																$degree = 'Second Class Upper';
														}else if($degree==5){
																$degree = 'Upper Division';
														}else if($degree==6){
																$degree = 'Second Class Lower';
														}else if($degree==7){
																$degree = 'Lower Division';
														}else if($degree==8){
																$degree = 'Third Class';
														}else if($degree==9){
																$degree = 'Pass';
														}


														@$sn+= 1;
												    $output .= "<tr>";
												    $output .= "<td>".$sn."</td>";
												    $output .= "<td>".$row['institution']."</td>";
												    $output .= "<td>".$cert."</td>";
												    $output .= "<td>".$row['course_of_study']."</td>";
												    $output .= "<td>".$degree."</td>";
												    $output .= "<td>".$row['start_year']."</td>";
														$output .= "<td>".$row['end_year']."</td>";
												    $output .= "<td>".$row['cgpa']."</td>";
												    $output .= '<td style="padding:0px;margin:0px;"><a href="#" class="btn btn-danger" id="action" onclick="delete_alevel('.$applicant_alevel_id.')" style="width:70px; margin-right:-22px; padding:0px;"><span>delete</span></a></td>';
														$output .= "</tr>";



													}
												}

												else
												{//show the msg

												    $output =
												         '<div class="alert alert-danger alert-dismissable">
												        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
												        <img src="images/info.png" />&nbsp;&nbsp; No record found in the system.
												         </div>';


												}



												$output .=
												'</tbody>
												  </table>';

										}
										return $output;
	}


	//function to get applicant alevel
		function get_applicant_credential ($con, $id)
		{
			$sql_get_app=mysqli_query($con, "select * FROM applicants_credential where applicant_id ='$id' AND credential_status='1' ");


											if($sql_get_app){
												$sql_get_app_row=mysqli_num_rows($sql_get_app);
													if($sql_get_app_row >0){
														$output =
												    '<table id="example" class="user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
												    <thead>
												          <th>S/N</th>
												          <th>DOCUMENT/CREDENTIAL DESCRIPTION</th>
												          <th>ACTION</th>




												    </thead>
												    <tfoot>

														<th>S/N</th>
														<th>DOCUMENT/CREDENTIAL DESCRIPTION</th>
														<th>ACTION</th>

												    </tfoot>

												    <tbody>';

														while($row=mysqli_fetch_assoc($sql_get_app)){
															@$sn+= 1;
															$id =$row['id'];
													    $output .= "<tr>";
													    $output .= "<td>".$sn."</td>";
													    $output .= "<td>".$row['file_name']."</td>";
															$output .= '<td style="padding:0px;margin:0px;"><a href="includes/php/delete_credential.php" class="btn btn-login btn-green" id="action" onclick="action()" style="width:133px; margin-right:-162px; padding:0px;"><span>delete</span></a></td>';
													    $output .= '<td style="padding:0px;margin:0px;"><input type="hidden" name="file" value='.$id.'></td>';
															$output .= "</tr>";



														}
													}

													else
													{//show the msg

													    $output =
													         '<div class="alert alert-danger alert-dismissable">
													        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
													        <img src="images/info.png" />&nbsp;&nbsp; No record found in the system.
													         </div>';


													}



													$output .=
													'</tbody>
													  </table>';

											}
											return $output;
		}


	//function select school3 college cert type
function select_cert3($col)
{

		if ($col == '1')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1" selected > ND</option>';
			$output .= '<option value="2"  > NCE</option>';
			$output .= '<option value="3" > IJMB</option>';
			$output .= '<option value="4"  > HND</option>';
			$output .= '<option value="5"  > BSC</option>';
			$output .= '<option value="6"  > MSC</option>';
			$output .= '<option value="7" > MPHIL</option>';
			$output .= '<option value="8" > MTECH</option>';
			$output .= '<option value="9"> Others</option>';


		}
		else if ($col == '2')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > ND</option>';
			$output .= '<option value="2" selected > NCE</option>';
			$output .= '<option value="3" > IJMB</option>';
			$output .= '<option value="4"  > HND</option>';
			$output .= '<option value="5"  > BSC</option>';
			$output .= '<option value="6"  > MSC</option>';
			$output .= '<option value="7" > MPHIL</option>';
			$output .= '<option value="8" > MTECH</option>';
			$output .= '<option value="9"> Others</option>';


		}
		else if ($col == '3')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > ND</option>';
			$output .= '<option value="2"  > NCE</option>';
			$output .= '<option value="3" selected> IJMB</option>';
			$output .= '<option value="4"  > HND</option>';
			$output .= '<option value="5"  > BSC</option>';
			$output .= '<option value="6"  > MSC</option>';
			$output .= '<option value="7" > MPHIL</option>';
			$output .= '<option value="8" > MTECH</option>';
			$output .= '<option value="9"> Others</option>';



		}
		else if ($col == '4')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > ND</option>';
			$output .= '<option value="2"  > NCE</option>';
			$output .= '<option value="3" > IJMB</option>';
			$output .= '<option value="4"  selected> HND</option>';
			$output .= '<option value="5"  > BSC</option>';
			$output .= '<option value="6"  > MSC</option>';
			$output .= '<option value="7" > MPHIL</option>';
			$output .= '<option value="8" > MTECH</option>';
			$output .= '<option value="9"> Others</option>';
		}
		else if ($col == '5')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > ND</option>';
			$output .= '<option value="2"  > NCE</option>';
			$output .= '<option value="3" > IJMB</option>';
			$output .= '<option value="4"  > HND</option>';
			$output .= '<option value="5"  selected> BSC</option>';
			$output .= '<option value="6"  > MSC</option>';
			$output .= '<option value="7" > MPHIL</option>';
			$output .= '<option value="8" > MTECH</option>';
			$output .= '<option value="9"> Others</option>';
		}
		else if ($col == '6')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > ND</option>';
			$output .= '<option value="2"  > NCE</option>';
			$output .= '<option value="3" > IJMB</option>';
			$output .= '<option value="4"  > HND</option>';
			$output .= '<option value="5"  > BSC</option>';
			$output .= '<option value="6"  selected> MSC</option>';
			$output .= '<option value="7" > MPHIL</option>';
			$output .= '<option value="8" > MTECH</option>';
			$output .= '<option value="9"> Others</option>';
		}
		else if ($col == '7')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > ND</option>';
			$output .= '<option value="2"  > NCE</option>';
			$output .= '<option value="3" > IJMB</option>';
			$output .= '<option value="4"  > HND</option>';
			$output .= '<option value="5"  > BSC</option>';
			$output .= '<option value="6"  > MSC</option>';
			$output .= '<option value="7" selected> MPHIL</option>';
			$output .= '<option value="8" > MTECH</option>';
			$output .= '<option value="9"> Others</option>';
		}
		else if ($col == '8')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > ND</option>';
			$output .= '<option value="2"  > NCE</option>';
			$output .= '<option value="3" > IJMB</option>';
			$output .= '<option value="4"  > HND</option>';
			$output .= '<option value="5"  > BSC</option>';
			$output .= '<option value="6"  > MSC</option>';
			$output .= '<option value="7" > MPHIL</option>';
			$output .= '<option value="8" selected> MTECH</option>';
			$output .= '<option value="9"> Others</option>';
		}
		else if ($col == '9')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > ND</option>';
			$output .= '<option value="2"  > NCE</option>';
			$output .= '<option value="3" > IJMB</option>';
			$output .= '<option value="4"  > HND</option>';
			$output .= '<option value="5"  > BSC</option>';
			$output .= '<option value="6"  > MSC</option>';
			$output .= '<option value="7" > MPHIL</option>';
			$output .= '<option value="8" > MTECH</option>';
			$output .= '<option value="9" selected> Others</option>';
		}
		else
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > ND</option>';
			$output .= '<option value="2"  > NCE</option>';
			$output .= '<option value="3" > IJMB</option>';
			$output .= '<option value="4"  > HND</option>';
			$output .= '<option value="5"  > BSC</option>';
			$output .= '<option value="6"  > MSC</option>';
			$output .= '<option value="7" > MPHIL</option>';
			$output .= '<option value="8" > MTECH</option>';
			$output .= '<option value="9"> Others</option>';


		}
	return $output;

}
//end of select college cert

//function select class of degree
function select_class_degree($cd)
{

		if ($cd == '1')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1" selected > First Class</option>';
			$output .= '<option value="2"> Distinction</option>';
			$output .= '<option value="3"> Merit</option>';
			$output .= '<option value="4"  > Second Class Upper</option>';
			$output .= '<option value="5"  > Upper Division</option>';
			$output .= '<option value="6"  > Second Class Lower</option>';
			$output .= '<option value="7"  > Lower Division</option>';
			$output .= '<option value="8"  > Third Class</option>';
			$output .= '<option value="9"  > Pass</option>';

		}

		else if ($cd == '2')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > First Class</option>';
			$output .= '<option value="2" selected> Distinction</option>';
			$output .= '<option value="3"> Merit</option>';
			$output .= '<option value="4"  > Second Class Upper</option>';
			$output .= '<option value="5"  > Upper Division</option>';
			$output .= '<option value="6"  > Second Class Lower</option>';
			$output .= '<option value="7"  > Lower Division</option>';
			$output .= '<option value="8"  > Third Class</option>';
			$output .= '<option value="9"  > Pass</option>';

		}

		else if ($cd == '3')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > First Class</option>';
			$output .= '<option value="2"> Distinction</option>';
			$output .= '<option value="3" selected> Merit</option>';
			$output .= '<option value="4"  > Second Class Upper</option>';
			$output .= '<option value="5"  > Upper Division</option>';
			$output .= '<option value="6"  > Second Class Lower</option>';
			$output .= '<option value="7"  > Lower Division</option>';
			$output .= '<option value="8"  > Third Class</option>';
			$output .= '<option value="9"  > Pass</option>';

		}

		else if ($cd == '4')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > First Class</option>';
			$output .= '<option value="2"> Distinction</option>';
			$output .= '<option value="3"> Merit</option>';
			$output .= '<option value="4" selected > Second Class Upper</option>';
			$output .= '<option value="5"  > Upper Division</option>';
			$output .= '<option value="6"  > Second Class Lower</option>';
			$output .= '<option value="7"  > Lower Division</option>';
			$output .= '<option value="8"  > Third Class</option>';
			$output .= '<option value="9"  > Pass</option>';

		}

		else if ($cd == '5')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > First Class</option>';
			$output .= '<option value="2"> Distinction</option>';
			$output .= '<option value="3"> Merit</option>';
			$output .= '<option value="4"  > Second Class Upper</option>';
			$output .= '<option value="5" selected > Upper Division</option>';
			$output .= '<option value="6"  > Second Class Lower</option>';
			$output .= '<option value="7"  > Lower Division</option>';
			$output .= '<option value="8"  > Third Class</option>';
			$output .= '<option value="9"  > Pass</option>';

		}

		else if ($cd == '6')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > First Class</option>';
			$output .= '<option value="2"> Distinction</option>';
			$output .= '<option value="3"> Merit</option>';
			$output .= '<option value="4"  > Second Class Upper</option>';
			$output .= '<option value="5"  > Upper Division</option>';
			$output .= '<option value="6" selected > Second Class Lower</option>';
			$output .= '<option value="7"  > Lower Division</option>';
			$output .= '<option value="8"  > Third Class</option>';
			$output .= '<option value="9"  > Pass</option>';

		}

		else if ($cd == '7')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > First Class</option>';
			$output .= '<option value="2"> Distinction</option>';
			$output .= '<option value="3"> Merit</option>';
			$output .= '<option value="4"  > Second Class Upper</option>';
			$output .= '<option value="5"  > Upper Division</option>';
			$output .= '<option value="6"  > Second Class Lower</option>';
			$output .= '<option value="7" selected > Lower Division</option>';
			$output .= '<option value="8"  > Third Class</option>';
			$output .= '<option value="9"  > Pass</option>';

		}

		else if ($cd == '8')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > First Class</option>';
			$output .= '<option value="2"> Distinction</option>';
			$output .= '<option value="3"> Merit</option>';
			$output .= '<option value="4"  > Second Class Upper</option>';
			$output .= '<option value="5"  > Upper Division</option>';
			$output .= '<option value="6"  > Second Class Lower</option>';
			$output .= '<option value="7"  > Lower Division</option>';
			$output .= '<option value="8"  selected> Third Class</option>';
			$output .= '<option value="9"  > Pass</option>';

		}
		else if ($cd == '9')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="1"  > First Class</option>';
			$output .= '<option value="2"> Distinction</option>';
			$output .= '<option value="3"> Merit</option>';
			$output .= '<option value="4"  > Second Class Upper</option>';
			$output .= '<option value="5"  > Upper Division</option>';
			$output .= '<option value="6"  > Second Class Lower</option>';
			$output .= '<option value="7"  > Lower Division</option>';
			$output .= '<option value="8"  > Third Class</option>';
			$output .= '<option value="9"  selected> Pass</option>';

		}


		else
		{
			$output = '<option value="0" selected> -- Please Select --</option>';
			$output .= '<option value="1"  > First Class</option>';
			$output .= '<option value="2"> Distinction</option>';
			$output .= '<option value="3"> Merit</option>';
			$output .= '<option value="4"  > Second Class Upper</option>';
			$output .= '<option value="5"  > Upper Division</option>';
			$output .= '<option value="6"  > Second Class Lower</option>';
			$output .= '<option value="7"  > Lower Division</option>';
			$output .= '<option value="8"  > Third Class</option>';
			$output .= '<option value="9"  > Pass</option>';

		}
	return $output;

}
//end of select class of degree

//Functions to fetch user's fscl cert
	function get_user_cert1($con,$id,$type)
	{
		$result = mysqli_query($con, "SELECT cert FROM applicants_alevel WHERE applicant_id = '$id' AND result_type = '$type'");
		$row = mysqli_fetch_assoc($result);
		$c1 = $row['cert'];


	return $c1;
	}


	//function select highest qualification
function select_nce_grade($hiq)
{

		if ($hiq == '1')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'  selected  >A</option>";
			$output .= '<option value="2"  >B</option>';
			$output .= '<option value="3"  >C</option>';
			$output .= '<option value="4"  >D</option>';
			$output .= '<option value="5"  >E</option>';
			$output .= '<option value="6"  >F</option>';







		}

		else if ($hiq == '2')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'    >A</option>";
			$output .= '<option value="2"  selected >B</option>';
			$output .= '<option value="3"  >C</option>';
			$output .= '<option value="4"  >D</option>';
			$output .= '<option value="5"  >E</option>';
			$output .= '<option value="6"  >F</option>';


		}
		else if ($hiq == '3')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'    >A</option>";
			$output .= '<option value="2"   >B</option>';
			$output .= '<option value="3" selected >C</option>';
			$output .= '<option value="4"  >D</option>';
			$output .= '<option value="5"  >E</option>';
			$output .= '<option value="6"  >F</option>';


		}else if ($hiq == '4')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'    >A</option>";
			$output .= '<option value="2"   >B</option>';
			$output .= '<option value="3"  >C</option>';
			$output .= '<option value="4"  selected >D</option>';
			$output .= '<option value="5"  >E</option>';
			$output .= '<option value="6"  >F</option>';


		}else if ($hiq == '5')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'    >A</option>";
			$output .= '<option value="2"   >B</option>';
			$output .= '<option value="3"  >C</option>';
			$output .= '<option value="4"   >D</option>';
			$output .= '<option value="5" selected  >E</option>';
			$output .= '<option value="6"  >F</option>';


		}else if ($hiq == '6')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .=  "<option value='1'    >A</option>";
			$output .= '<option value="2"   >B</option>';
			$output .= '<option value="3"  >C</option>';
			$output .= '<option value="4"   >D</option>';
			$output .= '<option value="5"   >E</option>';
			$output .= '<option value="6" selected >F</option>';


		}
		else
		{
			$output = 	'<option value="0" selected> -- Please Select-- </option>';
			$output .=  "<option value='1'   >A</option>";
			$output .= '<option value="2"  >B</option>';
			$output .= '<option value="3"  >C</option>';
			$output .= '<option value="4"  >D</option>';
			$output .= '<option value="5"  >E</option>';
			$output .= '<option value="6"  >F</option>';


		}
	return $output;

}
//end of select exam grade

//check if admitted and display MODAL  button
function is_applicant_admitted($con, $applicant_id)
{
		$result = mysqli_query($con,"SELECT * FROM applicants WHERE id = '$applicant_id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['admission_status'];



		return $v;

		//return value

}

//check if admitted and display MODAL  button
function get_user_admission_status($con, $applicant_id,$id)
{
		$result = mysqli_query($con,"SELECT * FROM applicants WHERE id = '$applicant_id'
		 AND admission_status='$id' ");
		$row = mysqli_fetch_assoc($result);
		$v = $row['admission_status'];



		return $v;

		//return value

}
//Functions to fetch user's Full name
	function get_user_fullname($con, $user_id)
	{
		$result = mysqli_query($con,"SELECT * FROM students WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$first_name = $row['first_name'];
		$middle_name = strtoupper($row['middle_name']);
		$last_name = $row['last_name'];

		$user_fullname = $middle_name . ", " . $first_name ." ".$last_name;

	return $user_fullname;
	}

	//Functions to fetch user's Full name
		function get_user_email($con, $user_id)
		{
			$result = mysqli_query($con,"SELECT * FROM students WHERE id = '$user_id'");
			$row = mysqli_fetch_assoc($result);
			$email = $row['email'];

		return $email;
		}

		//Functions to fetch user's Full name
			function get_user_phone_no($con, $user_id)
			{
				$result = mysqli_query($con,"SELECT * FROM students WHERE id = '$user_id'");
				$row = mysqli_fetch_assoc($result);
				$phone_no = $row['phone_no'];

			return $phone_no;
			}

	//function dat get user address
		function get_user_address($con,$user_id)
		{
			$q = "SELECT address FROM students WHERE id = '$user_id'";
			$r = mysqli_query($con,$q);
			$row = mysqli_fetch_assoc($r);

			return $row['address'];


		}


		//function show state
		function show_state($con,$c)
		{
			$r = mysqli_query($con,"SELECT  name  FROM states WHERE state_id = '$c'");
			$row = mysqli_fetch_assoc($r);

		    return $row['name'];

		}
		//end of show state

		//function fetch user state id
	function get_user_state_id($con,$id)
	{
		$result = mysqli_query($con,"SELECT state_id FROM students WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$sid = $row['state_id'];

		return $sid;
	}


	//Function to fetch check if payment has been made by particular applicant
		function has_paid_applicant_fee($con, $user_id,$sess)
		{
			$q = "SELECT applicant_id FROM applicants_fee_payments
			      WHERE applicant_id = '$user_id' AND session='$sess'";
			$r = mysqli_query($con,$q);

			//$row = mysql_fetch_assoc$result);

			if(mysqli_num_rows($r)== 0)
			{
				return false;

			}
			else
			{
				return true;
			}

		}


		//function dat get user image by id
			function get_user_image($con, $user_id)
			{
			$q = "SELECT image FROM applicants WHERE id = '$user_id'";
			$r = mysqli_query($con,$q);
			$row = mysqli_fetch_assoc($r);

			return $row['image'];


			}

// function that check if a user has finally submitted his/her application
	function check_final_submission($con, $user_id,$session)
	{
		$result = mysqli_query($con,"SELECT final_submission  FROM applicants WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$status = $row['final_submission'];

		if($status == '0')
		{
			$output ='';
					$output .=  '<div class="hide_me">







					<p style="padding:10px; text-align:justify;"><strong> I '.get_user_fullname($con, $user_id).'</strong> hereby declare that the particulars which I have supplied throughout the application process are true to the best of
					my knowledge and belief, and that I understand I could be disqualified for any false information.
					</p>

						<div class="btn-group" data-toggle="buttons" style="margin-top:-30px; margin-left:10px;">
						   <label class="btn btn-success  btn-small" >
						   		 <input id="checkbox-id" value="yes"  type="radio" name="agreement"  autocomplete="off"  />Yes

						   </label>

						   <label class="btn btn-success btn-small active" >
						   		 <input id="checkbox-id" value="no" type="radio" name="agreement"  autocomplete="off" checked /> No

						   </label>

						 </div>';



						 if(get_user_image($con, $user_id) == '')
						 {
							 $output .='<br> <br>
										<input  class="btn btn-warning btn-green btn-md" value="P l e a s e  U p l o a d   Y o u r   P a s s p o r t" type="submit"  data-toggle="tooltip" title="YOU MUST UPLOAD YOUR PASSPORT BEFORE FINAL DECLARATION"/>


										</div>';

						 }
						 else if(!has_paid_applicant_fee($con, $user_id, $session))
						 {
							 $output .='<br> <br>

							 <div id="outputt_olevel">

			 				</div>
							 	<div id="id="saving_olevel>
										<input  class="btn btn-warning btn-green btn-md" type="submit" value="P l e a s e  M a k e P a y m e n t s   F i r s t " type="submit"  data-toggle="tooltip" title="YOU MUST PAY BEFORE FINAL DECLARATION"/>
										</div>

										</div>';
						 }
						 else
						 {



							  $output .='<br> <br>
								<form method="post" action="#" id="final_submission">
							  <input id="save_declaration" class="btn btn-success btn btn-login btn-green btn-md" value="C o n f i r m  -  D e c l a r a t i o n  -  &  -  S u b m i t  -  A p p l i c a t i o n" type="submit"  data-toggle="tooltip" title="Click here to submit"/>


							  </div>
								</form>
								';

						}



				    return $output;


		}
		else
		{
			return '<div class="hide_me" >
					<div class="alert alert-info in"><button class=" btn btn-login btn-green close" data-dismiss="alert" type="button">X</button>
			 		<i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;
					You have successfully completed your application processPlease print your Acknowledgement Slip for reference purpose, we will keep you posted on when to log back to check your Application status. Thank You

					<br>



					</div>


					<br>
					 <a class="btn btn-success"  href="create_biodata_po.php?u='.$user_id.'&s='.$session.'&me='.sha1(md5('ku')).'&e='.sha1(md5('10000')).'&m='.sha1(md5('567')).'" target="_blank" data-toggle="tooltip" data-placement="top" title="Click here to print/download"> P r i n t  -   A c k n o w l e d g e m e n t -  S l i p </a>


							  <br/>


				             <br/> <a target="_blank" href="create_app_payment_slip.php?qlk='.md5(8).'&me='.$user_id.'&s='.$session.'" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Click here to Print / Download Payment Receipt"><i class="glyphicon glyphicon-print"> </i> P r i n t / D o w n l o a d A P P F e e R e c e i p t</a>

							  </div>
					</div>';


		}


	}
	//end of election interest buttons checking


	//Function to fetch check if payment has been made by particular student
	function has_paid_school_fees($con, $user_id, $session, $semster)
	{

		$q = "SELECT student_id,session, payment_status
			  FROM school_fee_payments
			  WHERE student_id = '$user_id'
			  AND session = '$session'
			  AND semester = '$semster'
			  AND payment_status  = '1'";
		$r = mysqli_query($con,$q);

		//$row = mysql_fetch_assoc($result);

		if(mysqli_num_rows($r)== 0)
		{
			return false;

		}
		else
		{
			return true;
		}

	}


	//Function to fetch matric number
		function get_student_matric_no($con, $user_id)
		{

			$result = mysqli_query($con,"SELECT matric_number FROM students WHERE id = '$user_id'");
			$row = mysqli_fetch_assoc($result);
			$v = $row['matric_number'];


		return $v;
		}

		//Function to fetch student id
			function get_student_id($con, $mat)
			{

				$result = mysqli_query($con,"SELECT id FROM students WHERE matric_number = '$mat'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['id'];
			return $v;
			}

			function has_paid_hostel_fee($con, $user_id, $session)
			{

			    $q = "SELECT student_id,`session`, payment_status
						  FROM hostel_fee_payments
						  WHERE student_id = '$user_id'
						  AND `session` = '$session'
						  AND payment_status  = '1'";
			    $r = mysqli_query($con, $q);

			    //$row = mysql_fetch_assoc($result);

			    if (mysqli_num_rows($r) == 0) {
			        return false;

			    } else {
			        return true;
			    }

			}

			function get_hostel_category($con, $user_id)
			{

			    $result = mysqli_query($con, "SELECT `block_id` FROM `hostel_allocation` WHERE `student_id` = '$user_id' AND `status` = '1'");
			    $row = mysqli_fetch_assoc($result);
			    $v = $row['block_id'];

			    return $v;
			}

			function get_hostel_room($con, $user_id)
			{

			    $result = mysqli_query($con, "SELECT `room_id` FROM `hostel_allocation` WHERE `student_id` = '$user_id' AND `status` = '1'");
			    $row = mysqli_fetch_assoc($result);
			    $v = $row['room_id'];

			    return $v;
			}

			function get_hostel_site($con, $user_id)
			{

			    $result = mysqli_query($con, "SELECT `campus_id` FROM `hostel_allocation` WHERE `student_id` = '$user_id' AND `status` = '1'");
			    $row = mysqli_fetch_assoc($result);
			    $v = $row['campus_id'];

			    return $v;
			}

			function get_hostel_room_title($con, $id)
			{

			    $result = mysqli_query($con, "SELECT `title` FROM `hostel_rooms` WHERE `id` = '$id'");
			    $row = mysqli_fetch_assoc($result);
			    $v = $row['title'];

			    return $v;
			}

			function get_hostel_cat_title($con, $id)
			{

			    $result = mysqli_query($con, "SELECT `title` FROM `hostel_blocks` WHERE `id` = '$id'");
			    $row = mysqli_fetch_assoc($result);
			    $v = $row['title'];

			    return $v;
			}

			function get_hostel_site_title($con, $id)
			{

			    $result = mysqli_query($con, "SELECT `title` FROM `hostel_campuses` WHERE `id` = '$id'");
			    $row = mysqli_fetch_assoc($result);
			    $v = $row['title'];

			    return $v;
			}

			function get_hostel_cat_amount($con, $id)
			{

			    $result = mysqli_query($con, "SELECT `hostel_amount` FROM `hostel_blocks` WHERE `id` = '$id'");
			    $row = mysqli_fetch_assoc($result);
			    $v = $row['hostel_amount'];

			    return $v;
			}



			//function dat checks if student exist in database table for school fee
	function get_school_fee_payment_status($con,$sid,$sess)  //sid is the student id
	{
		$q = "SELECT student_id FROM school_fee_payments  WHERE student_id = '$sid' AND session = '$sess' ";
		$r = mysqli_query($con,$q);


		if(mysqli_num_rows($r) > 0)
		{
			return true;
		}
		else
		{
			return false;
		}



	}//end of function that chk if student id exist in school fee payments

	//function that get course code base on course id
		function get_course_code($con, $id)
		{

			$result = mysqli_query($con,"SELECT code FROM courses WHERE id = '$id'");
			$row = mysqli_fetch_assoc($result);
			$title = $row['code'];


		return $title;
		}

		//funcion that gets course name base on course id
	function get_course_name($con, $id)
	{

		$result = mysqli_query($con, "SELECT title FROM courses WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$title = $row['title'];


	return $title;
	}

	//funcion that gets course name base on course id
	function get_course_unit($con, $id)
	{

		$result = mysqli_query($con, "SELECT unit FROM courses WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$title = $row['unit'];


	return $title;
	}

	//function that check and show if course is seen as core or elective
		function seen_as_elective($c)
		{


			if($c == 1)
			{
				return '<h4 class="label label-default">CORE</h4>';
			}
			else if($c == 0)
			{
				return '<h4 class="label label-info">ELECTIVE</h4>';
			}
			else
			{
				return '<h4 class="label label-default">CORE</h4>';
			}
		}


		//Function to fetch check if payment has been made by particular applicant
	function has_paid_school_fee($con, $user_id, $sess)
	{
		$q = "SELECT student_id FROM school_fee_payments
					WHERE student_id = '$user_id' AND session='$sess' ";
		$r = mysqli_query($con,$q);

		//$row = mysql_fetch_assoc$result);

		if(mysqli_num_rows($r)== 0)
		{
			return false;

		}
		else
		{
			return true;
		}

	}


	//Function to fetch check if he has done registration in  a current session
		function has_done_registration($con, $user_id, $session, $semester)
		{

			$q = "SELECT student_id, session_id FROM students_courses  WHERE student_id = '$user_id' AND session_id = '$session' AND semester = '$semester'";
			$r = mysqli_query($con,$q);

			//$row = mysql_fetch_assoc($result);

			if(mysqli_num_rows($r)== 0)
			{
				return false;

			}
			else
			{
				return true;
			}

		}


	function view_invoices($con, $user_id, $invoce_type, $session)
	{

		//query the database
		$query = "SELECT `id`, `invoice_id`,`invoice_type`, `invoice_to`, `pay_to`, `invoice_for`, `payment_method`, `payment_status`,
				 `user_carts`, `title`, `description`, `amount`, `credit`, DATE_FORMAT(date_added, '%b %e, %Y') as date_added,
				 DATE_FORMAT(due_date, '%b %e, %Y') as due_date,
				 DATE_FORMAT(expire_date, '%b %e, %Y /  %l:%i:%p') as exp_date

				 FROM `invoices`
				 WHERE invoice_to = '$user_id' AND invoice_type = '$invoce_type'  AND session = '$session'


				 ORDER BY invoice_id DESC";
	   $result = mysqli_query($con,$query);



		if(mysqli_num_rows($result) > 0)
		{//show table


			$output =
			'<table id="example" class="user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
			  <thead>

						  <th>Invoice #</th>
						  <th>Amount</th>
						  <th>Invoice Date</th>
						  <th>Due Date</th>
						  <th>Status</th>
						  <th></th>



			  </thead>

			 <!-- <tfoot>




			  </tfoot>-->

			  <tbody>';


			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				$output .= "<tr>";
				$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".$row['invoice_id']."</td>"; //group belong to admin or user
				$output .= "<td> N".number_format($row['amount'])."</td>";
				$output .= "<td>".$row['date_added']."</td>";
				$output .= "<td>".$row['due_date']."</td>";
				$output .= "<td>".payment_status($row['payment_status'])."</td>";


				if($invoce_type == 4)
				{
					$output .= '<td><a class="btn btn-default" href="view_invoice?qlk='.md5(8).'&iid='.$row['invoice_id'].'"> View Invoice</a></td>';

				}
				else if($invoce_type == 5)
				{
					$output .= '<td><a class="btn btn-default" href="view_invoice2?qlk='.md5(8).'&iid='.$row['invoice_id'].'"> View Invoice</a></td>';

				}else if($invoce_type == 3)
				{
					$output .= '<td><a class="btn btn-default" href="view_invoices?qlk='.md5(8).'&iid='.$row['invoice_id'].'"> View Invoice</a></td>';

				}
				else
				{
					$output .= '<td><a class="btn btn-default" href="view_invoices?qlk='.md5(8).'&iid='.$row['invoice_id'].'"> View Invoice</a></td>';
				}
				$output .= "</tr>";

			}
		}
		else
		{//show the msg

			  $output =
					 '<div class="alert alert-danger alert-dismissable">
					  <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					  <img src="images/info.png" />&nbsp;&nbsp; No record found in the system.
					 </div>';


		}



		$output .=
		'</tbody>
	    </table>';





		return $output;






	}//end of view school fee invoices

	//function that check and show is payment status is paid or not
		function payment_status($status)
		{
			$st = $status;

			if($st == 1)
			{
				return '<h4 class="label label-success">PAID</h4>';
			}
			else
			{
				return '<h4 class="label label-danger">UNPAID</h4>';
			}
		}


	//Function to fetch current semester
	function get_current_semester($con, $id)
	{
		$result = mysqli_query($con,"SELECT * FROM semesters WHERE semester_running_status = '$id'");
		$row = mysqli_fetch_assoc($result);
		$id = $row['semester_id'];

	return $id;
	}

	//Function to fetch  application_fee title
	function get_application_fee_title($con, $sess) //$pt programme type , $d -department , $p -programme id, $s semester
	{
		$result = mysqli_query($con,"SELECT title FROM set_application_fee_payments WHERE academic_year_id = '$sess'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['title'];

	return $v;
	}

	//Function to fetch application_fee desc
	function get_application_fee_desc($con, $sess)
	{
		$result = mysqli_query($con,"SELECT description FROM set_application_fee_payments WHERE  academic_year_id = '$sess' ");
		$row = mysqli_fetch_assoc($result);
		$v = $row['description'];

	return $v;
	}

	//Function to fetch  application _fee  total amountamount
	function get_application_fee_total_amount($con,$sess)
	{
		$result = mysqli_query($con,"SELECT total_amount FROM set_application_fee_payments WHERE academic_year_id = '$sess'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['total_amount'];

	return $v;
	}

	//Function to fetch  application_fee amount
	function get_application_fee_amount($con,$sess)
	{
		$result = mysqli_query($con,"SELECT amount FROM set_application_fee_payments WHERE academic_year_id = '$sess'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['amount'];

	return $v;
	}

	//Function to fetch  invoice credit
	function get_invoice_credit($total_amount , $amount_paid)
	{

		//get total amount to be paid
		$total_amount = $total_amount;



		//get part amount paid
		$amount_paid = $amount_paid;

		//credit
		$credit = $total_amount - $amount_paid;

		 $v = $credit;

			return $v;
	}

	/* ################################# function that generates invoice id %%%%%%%%%%%%%%%%%%%%%%%%%% */
	//returns true if succesfull
	function generate_invoice_id($con, $id, $user, $type)
	{

		$total_num = get_total_num_invoices($con, $id);


		//add 1 to $g_code and tek to d db
		$g_coded = $total_num + 1;


		$len_g_coded  = strlen($g_coded); //check lenght

		if($len_g_coded == '1')
		{
			$g_coded = '00'.$g_coded;
		}
		else if($len_g_coded == '2')
		{
			$g_coded = '0'.$g_coded;
		}
		else
		{
			$g_coded = $g_coded; //add strings to invoice id
		}

		$g_coded = $g_coded.mt_rand(10000,99999);

		if(invoice_id_exist($con, $g_coded))
		{
			$g_coded = $g_coded + 1; //if it exist add 1 to it

		}




		//update invoice
		$r = mysqli_query($con, "UPDATE invoices  SET invoice_id  = '$g_coded' WHERE id = '$id' AND invoice_to = '$user' AND invoice_type = '$type'");

		if($r)
		{
			return $g_coded;
		}
		else
		{
			return '';
		}



	}//end of generate invoice id


		//get total invoices
		function get_total_num_invoices($con, $id)
		{
			//get total invoice


			$q = "SELECT COUNT(id) FROM invoices";
			$r = mysqli_query($con,$q);
			$row = mysqli_fetch_array($r,MYSQLI_NUM);

			return $row[0];

		}


		//function dat get user application number
			function get_user_matric_number($con,$user_id)
			{
			$q = "SELECT matric_number FROM students WHERE id = '$user_id'";
			$r = mysqli_query($con,$q);
			$row = mysqli_fetch_assoc($r);

			return $row['matric_number']."";


			}

			//Function to fetch  invoice title
				function get_invoice_title($con,$iid)
				{
					$result = mysqli_query($con,"SELECT title FROM invoices WHERE invoice_id = '$iid'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['title'];

					$v = preg_replace('/[^A-Za-z0-9\-]/', ' ', $v);

				return $v;
				}

				//Function to fetch  invoice type
				function get_invoice_type($con,$iid)
				{
					$result = mysqli_query($con,"SELECT invoice_type FROM invoices WHERE invoice_id = '$iid'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['invoice_type'];

				return $v;
				}


				//Function to fetch date
				function get_invoice_date($con,$iid)
				{
					$result = mysqli_query($con,"SELECT  DATE_FORMAT(date_added, '%b %e, %Y') as date_added FROM invoices WHERE invoice_id = '$iid'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['date_added'];

				return $v;
				}

				//Function to fetch due date
				function get_invoice_due_date($con,$iid)
				{
					$result = mysqli_query($con,"SELECT  DATE_FORMAT(due_date, '%b %e, %Y') as due_date FROM invoices WHERE invoice_id = '$iid'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['due_date'];

				return $v;
				}



				//Function to fetch exp date
				function get_invoice_exp_date($con,$iid)
				{
					$result = mysqli_query($con,"SELECT  DATE_FORMAT(expire_date, '%b %e, %Y /  %l:%i:%p') as exp_date FROM invoices WHERE invoice_id = '$iid'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['exp_date'];

				return $v;
				}

				//Function to fetch  invoice to
	function get_invoice_invoice_to($con,$iid)
	{
		$result = mysqli_query($con,"SELECT invoice_to FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['invoice_to'];

	return $v;
	}


	//Function to fetch  pay to
	function get_invoice_pay_to($con,$iid)
	{
		$result = mysqli_query($con,"SELECT pay_to FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['pay_to'];

	return $v;
	}


	//Function to fetch  invocie for
	function get_invoice_for($con,$iid)
	{
		$result = mysqli_query($con,"SELECT invoice_for FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['invoice_for'];

	return $v;
	}


	//Function to fetch descripion
	function get_invoice_desc($con,$iid)
	{
		$result = mysqli_query($con,"SELECT description FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['description'];

	return $v;
	}



	//Function to fetch amount
	function get_invoice_amount($con,$iid)
	{
		$result = mysqli_query($con,"SELECT amount FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['amount'];

	return $v;
	}



	//Function to fetch total amount
	function get_invoice_total_amount($con,$iid)
	{
		$result = mysqli_query($con,"SELECT total_amount FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['total_amount'];

	return $v;
	}


	//Function to fetch invoiced credit (credit of invoice generated)
	function get_invoiced_credit($con,$iid)
	{
		$result = mysqli_query($con,"SELECT credit FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['credit'];

	return $v;
	}

	//Function to fetch payment_satus
	function get_invoice_payment_status($con,$iid)
	{
		$result = mysqli_query($con,"SELECT payment_status FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['payment_status'];

	return $v;
	}

	//remita processing starts here
		function generate_remita_txn_ref()
		{

			//add random four values before adding to the database
			$add_random_value = mt_rand(100, 999);
			$code = $add_random_value;
			$tid = date("Ymdhis$code");

			return $tid;
		}

		//check if invoice id already exist
		function invoice_id_exist($con, $iid)
		{
			//check if invoice id generated exist
			$q1 = "SELECT invoice_id FROM invoices WHERE invoice_id = '$iid'";
			$r1 = mysqli_query($con,$q1);

			if(mysqli_num_rows($r1)>0)
			{
				return true;
			}
			else
			{
				return false;
			}


		}

		//function fetch user programme type applied for
		function get_user_programme_type_applied_for($con,$id)
		{
			$result = mysqli_query($con,"SELECT school_applied_for FROM applicants WHERE id = '$id'");
			$row = mysqli_fetch_assoc($result);
			$v = $row['school_applied_for'];


			return $v;
		}

		//function fetch user department applied for
			function get_user_department_applied_for($con, $id)
			{
				$result = mysqli_query($con,"SELECT department_applied_for FROM applicants WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['department_applied_for'];


				return $v;
			}

			//function fetch user programme_applied_for
				function get_user_programme_applied_for($con, $id)
				{
					$result = mysqli_query($con,"SELECT programme_applied_for FROM applicants WHERE id = '$id'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['programme_applied_for'];


					return $v;
				}


?>
