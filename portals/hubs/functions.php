<?php
//get department name
function get_department_title($con,$id)
{
	$result = mysqli_query($con,"SELECT title FROM departments WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['title'];

	return $title;
}


function get_programme_title($con, $id)
{
	$result = mysqli_query($con,"SELECT title FROM programmes WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$title = $row['title'];

	return $title;
}


function show_programme_type($pt)
{

		if ($pt == '1')
		{
			$output = 'Postgraduate';

		}
		else if ($pt == '2')
		{
			$output = 'Undergraduate';

		}
		else if ($pt == '3')
		{
			$output = 'PART TIME DEGREE';

		}
		else if ($pt == '4')
		{
			$output = 'Certificate';

		}
		else
		{

			$output = 'NIL';

		}

	return $output;

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
		else if ($n == '0')
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
function select_state($con,$state_id)
{
	$r = mysqli_query($con, "SELECT *  FROM states  ORDER BY name ");
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



function select_lga($con,$state,$lga)
{
	$r = mysqli_query($con,"SELECT *  FROM lga where state_id='$state' ORDER BY local_name ");
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


//select school
function select_school($con)
{
	$r = mysqli_query($con, "SELECT *FROM schools  WHERE school_status ='1' ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($school == $row['id'])
			{
				$output = "<option class='col-md-5' value=\"$row[id]\" selected>";
				$output .=  $row['title'];
				$output .="</option>";

			}
			else
			{
				$output = "<option class='col-md-5' value=\"$row[id]\" >";
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
//end of select school


//select department
function select_programme($con, $programme_applied_for)
{
	$r = mysqli_query($con, "SELECT *FROM programmes  WHERE real_ = '0' ORDER BY title ");
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

//get department id for  a programme
function get_department_id_from_programmes($con, $p)
{
	$result = mysqli_query($con, "SELECT department_id FROM programmes WHERE id = '$p'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['department_id'];

	return $v;


}

//get department id for  a programme
function get_school_code_by_id($con, $p)
{
	$result = mysqli_query($con, "SELECT * FROM schools WHERE id = '$p'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['code'];

	return $v;


}

//function fetch user study_mode
	function get_user_study_mode($con, $id)
	{

		$result = mysqli_query($con,"SELECT cart_id FROM students WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['cart_id'];


		return $v;
	}


//get department id for  a programme
function get_school_title_by_id($con, $p)
{
	$result = mysqli_query($con, "SELECT * FROM schools WHERE id = '$p'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['title'];
	return $v;
}

//Function to fetch current semester
	function get_current_semester($con, $id)
	{
		$result = mysqli_query($con, "SELECT * FROM semesters WHERE semester_running_status = '$id'");
		$row = mysqli_fetch_assoc($result);
		$id = $row['semester_id'];

	return $id;
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
function get_current_session($con)
{
	$result = mysqli_query($con, "SELECT * FROM academic_year WHERE academic_running_status = '1'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['end_year'];

	return $v;


}

function get_applied_school_id($con, $id)
{
	$result = mysqli_query($con,"SELECT school_id FROM departments WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$school_id = $row['school_id'];

	return $school_id;
}

function get_applied_faculty_id($con, $id)
{
	$result = mysqli_query($con,"SELECT faculty_id FROM departments WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$faculty_id = $row['faculty_id'];

	return $faculty_id;
}

//get current academic year
function get_current_session_id($con)
{
	$result = mysqli_query($con, "SELECT * FROM academic_year WHERE academic_running_status = '1'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['academic_year_id'];

	return $v;


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
	function get_total_num_applicant($con, $s)
	{
		//get total invoice


		$q = "SELECT COUNT(id) FROM applicant WHERE session_id='$s'";
		$r = mysqli_query($con, $q);
		$row = mysqli_fetch_array($r,MYSQLI_NUM);

		return $row[0];

	}

	//function taht generate app no
		function generate_application_number_for_applicant($con)
		{



			$session = get_current_session_id($con);

			//get the session title

	         $session_title = get_current_session_title($con, $session);
	         $total_num = get_total_num_applicant($con,$session);
	        $year = substr ($session_title,2,2);
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
			$app_number = 'APP/'.$year.'/'.$g_coded; //give the matric number if not exist


	       if(applicant_no_exist($con, $g_coded))
			{
				$app_number = 'APP/'.$year.'/'.$g_coded + 1; //if it exist add 1 to it

			}





			return $app_number;










		}//end of generate apl no

//function taht generate app no
	function generate_application_number_for_applicants($con, $school_id)
	{

		$total_num = get_total_num_applicants($con, $school_id);


		//add 1 to $g_code and tek to d db
		$g_coded = $total_num + 1;


		$len_g_coded  = strlen($g_coded); //check lenght

		if($len_g_coded == '1')
		{
			$g_coded = '0000'.$g_coded;
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
		}



		if(applicant_no_exist($con, $g_coded))
		{
			$g_coded = $g_coded + 1; //if it exist add 1 to it

		}





		return $g_coded;




	}//end of generate apl no

	//check if applicant no  already exist
	function applicant_no_exist($con, $iid)
	{
		//check if invoice id generated exist
		$q1 = "SELECT application_number FROM applicant_profile WHERE application_number = '$iid'";
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
											    '<table id="example" class="table table-bordered " cellspacing="0" width="100%" style="font-size:12px;">
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
												    $output .= '<td style="padding:0px;margin:0px;"><button class="btn btn-warning btn-sm" id="action" onclick="delete_alevel('.$row['id'].')" style="width:70px; margin-right:-22px; padding:0px;"><span>delete</span></button></td>';
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
															$output .= '<td style="padding:0px;margin:0px;"><a href="includes/php/delete_credential.php" class="btn btn-info btn-lg" id="action" onclick="action()" style="width:133px; margin-right:-162px; padding:0px;"><span>delete</span></a></td>';
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

		//check if admitted and display MODAL  button
		function get_user_admission_status($con, $applicant_id,$id)
		{
				$result = mysqli_query($con,"SELECT * FROM applicant_profile WHERE applicant_id = '$applicant_id'
				 AND admission_status= $id ");
				$row = mysqli_fetch_assoc($result);
				$v = $row['admission_status'];



				return $v;

				//return value

		}

		//check if admitted and display MODAL  button
		function is_applicant_admitted($con, $applicant_id)
		{
				$result = mysqli_query($con,"SELECT * FROM applicant_profile WHERE applicant_id = '$applicant_id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['admission_status'];
				return $v;

				//return value

		}


		//check if admitted and display button
		function is_admitted($con, $id)
		{
				$result = mysqli_query($con, "SELECT * FROM applicant_profile WHERE applicant_id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$admission_status = $row['admission_status'];
				$app_no = $row['application_number'];

				$student_id = get_student_id_by_app_no($con, $app_no);



				if($admission_status == '0')
				{
					return '0';
				}
				else
				{
					return '1';
				}
		}


		// function that check if a user has finally submitted his/her application
			function check_final_submission($con, $user_id,$session)
			{
				$result = mysqli_query($con,"SELECT final_submission  FROM applicant_profile WHERE applicant_id = '$user_id'");
				$row = mysqli_fetch_assoc($result);
				$status = $row['final_submission'];

				if($status == '0' OR empty($status))
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
								 else if(has_paid_applicant_fee($con, $user_id, $session))
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
									  <input id="save_declaration" class="btn btn-success btn btn-info btn-lg btn-md" value="C o n f i r m  -  D e c l a r a t i o n  -  &  -  S u b m i t  -  A p p l i c a t i o n" type="submit"  data-toggle="tooltip" title="Click here to submit"/>


									  </div>
										</form>
										';

								}



						    return $output;


				}
				else
				{
					return '<div class="hide_me" >
							<div class="alert alert-info in"><button class=" btn btn-info btn-lg close" data-dismiss="alert" type="button">X</button>
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

		//function to get applicant alevel
			function get_applicant_credentials ($con, $id)
			{
				$output = '';
				$sql_get_app=mysqli_query($con, "SELECT * FROM applicant_credential where applicant_id ='$id' AND status='1' ");


												if($sql_get_app){
													$sql_get_app_row=mysqli_num_rows($sql_get_app);
														if($sql_get_app_row >0){

															$output =
													    '<table id="example" class=" table-bordered table-striped" cellspacing="0" width="100%" style="font-size:12px; margin-top:5px;">
													    <thead>
															<th>S/N</th>
															<th>FILE</th>
															<th>NAME</th>
															<th>ACTION</th>
													    </thead>
													    <tfoot>

													          <th>S/N</th>
													          <th>FILE</th>
													          <th>NAME</th>
													          <th>ACTION</th>

													    </tfoot>

													    <tbody>';

															while($row=mysqli_fetch_assoc($sql_get_app)){
																$user_image = '<img class="card-img-top" src="assets/uploads/'.$row['file_name'].'" style="width:100px;" alt="Card image cap">';
																$idd = $row['id'];
																@$sn+= 1;

																$output .= "<tr>";
														    $output .= "<td>".$sn."</td>";
																$output .= "<td>".$user_image."</td>";
														    $output .= "<td>".$row['file_type']."</td>";
														    $output .= '<td style="padding:0px;margin:0px;"><a href="#" class="btn btn-warning btn-sm" id="action" onclick="delete_credential('.$idd.')" style="width:70px; margin-right:-22px; padding:0px;"><span>delete</span></a></td>';
																$output .= "</tr>";



															}
														}

														else
														{//show the msg

														    $output =
														         '<br><div class="alert alert-danger alert-dismissable">
														        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
														        <img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
														         </div>';


														}



														$output .=
														'</tbody>
														  </table>';

												}
												return $output;
			}



			//function to get applicant alevel
				function get_student_credentials ($con, $id)
				{
					$output = '';
					$sql_get_app=mysqli_query($con, "SELECT * FROM student_credential where student_id ='$id' AND status='1' ");


													if($sql_get_app){
														$sql_get_app_row=mysqli_num_rows($sql_get_app);
															if($sql_get_app_row >0){

																$output =
																'<table id="example" class=" table-bordered table-striped" cellspacing="0" width="100%" style="font-size:12px; margin-top:5px;">
																<thead>
																<th>S/N</th>
																<th>FILE</th>
																<th>NAME</th>
																<th>ACTION</th>
																</thead>
																<tfoot>

																			<th>S/N</th>
																			<th>FILE</th>
																			<th>NAME</th>
																			<th>ACTION</th>

																</tfoot>

																<tbody>';

																while($row=mysqli_fetch_assoc($sql_get_app)){
																	$user_image = '<img class="card-img-top" src="assets/uploads/'.$row['file_name'].'" style="width:100px;" alt="Card image cap">';
																	$idd = $row['id'];
																	@$sn+= 1;

																	$output .= "<tr>";
																	$output .= "<td>".$sn."</td>";
																	$output .= "<td>".$user_image."</td>";
																	$output .= "<td>".$row['file_type']."</td>";
																	$output .= '<td style="padding:0px;margin:0px;"><a href="#" class="btn btn-warning btn-sm" id="action" onclick="delete_credential('.$idd.')" style="width:70px; margin-right:-22px; padding:0px;"><span>delete</span></a></td>';
																	$output .= "</tr>";



																}
															}

															else
															{//show the msg

																	$output =
																			 '<br><div class="alert alert-danger alert-dismissable">
																			<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
																			<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
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

//function that gets  department base on user id
	  function  get_user_department_id($con, $user_id)
	  {

		  $result = mysqli_query($con, "SELECT department_id FROM students WHERE id = '$user_id'");
			  $row = mysqli_fetch_assoc($result);
			  $department_id = $row['department_id'];

		  return $department_id;

	  }


		//function that gets programme_id base on user id
	 function  get_user_programme_id($con, $user_id)
	 {

		 $result = mysqli_query($con,"SELECT programme_id FROM students WHERE id = '$user_id'");
			 $row = mysqli_fetch_assoc($result);
			 $v = $row['programme_id'];

		 return $v;

	 }



	 //Function to fetch user level
	function get_user_level($con,$id)
	{

		$result = mysqli_query($con,"SELECT level FROM students WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$level = $row['level'];

	return $level;
	}

	//function that gets programme type _id base on user id
	  function  get_user_programme_type_id($con, $user_id)
	  {

		  $result = mysqli_query($con,"SELECT school_id FROM students WHERE id = '$user_id'");
			  $row = mysqli_fetch_assoc($result);
			  $v = $row['school_id'];

		  return $v;

	  }

		//Function to fetch current semester
	function get_current_session_title($con, $id)
	{

		$result = mysqli_query($con,"SELECT * FROM academic_year WHERE academic_year_id = '$id'");
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

		//function select programme_type
		function select_programme_type($pt)
		{

				if ($pt == '1')
				{
					$output = '<option value="0" > -- Please Select --</option>';
					$output .= '<option value="1" selected > Advanced Diploma</option>';
					$output .= '<option value="2" > Diploma </option>';
					$output .= '<option value="3" > Certificate </option>';



				}
				else if ($pt == '2')
				{
					$output = '<option value="0" > -- Please Select --</option>';
					$output .= '<option value="1"> Advanced Diploma</option>';
					$output .= '<option value="2" selected > Diploma </option>';
					$output .= '<option value="3" > Certificate </option>';



				}
				else if ($pt == '3')
				{
					$output = '<option value="0" > -- Please Select --</option>';
					$output .= '<option value="1"> Advanced Diploma</option>';
					$output .= '<option value="2"> Diploma </option>';
					$output .= '<option value="3" selected  > Certificate </option>';



				}
				else
				{

					$output = '<option value="0"  selected > -- Please Select --</option>';
					$output .= '<option value="1"> Advanced Diploma</option>';
					$output .= '<option value="2" > Diploma </option>';
					$output .= '<option value="3" > Certificate </option>';

				}

			return $output;

		}
		//end of select programme_type

		//function fetch user entry_mode
			function get_user_entry_mode($con, $id)
			{

				$result = mysqli_query($con, "SELECT mode_of_entry FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['mode_of_entry'];


				return $v;
			}


			//function fetch user entry_year
			function get_user_entry_year($con, $id)
			{

				$result = mysqli_query($con, "SELECT entry_year FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['entry_year'];


				return $v;
			}


			//function fetch user get_user_award_in_view
			function get_user_award_in_view($con, $id)
			{

				$result = mysqli_query($con, "SELECT award_in_view FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['award_in_view'];


				return $v;
			}



			//function fetch user get_user_activities
			function get_user_activities($con, $id)
			{

				$result = mysqli_query($con, "SELECT activities FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['activities'];


				return $v;
			}

				//function fetch user get_highest qualififcation
			function get_user_highest_qualification($con, $id)
			{

				$result = mysqli_query($con, "SELECT highest_qualification FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['highest_qualification'];


				return $v;
			}

				//function fetch user get obtained_institution
			function get_user_institution_obtained($con, $id)
			{

				$result = mysqli_query($con, "SELECT institution_obtained FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['institution_obtained'];


				return $v;
			}

				//function fetch user get first_degree
			function get_user_first_degree($con, $id)
			{

				$result = mysqli_query($con,"SELECT first_degree FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['first_degree'];


				return $v;
			}


		//function select study_mode
function select_study_mode($sm)
{

		if ($sm == '1')
		{
			$output = 	'<option value="1" selected >Full-Time</option>';
			$output .= '<option value="2"  >Part-Time</option>';
			$output .= '<option value="3"  >Others</option>';



		}
		else if ($sm == '2')
		{
			$output = 	'<option value="1" >Full-Time</option>';
			$output .= '<option value="2"  selected >Part-Time</option>';
			$output .= '<option value="3"  >Others</option>';



		}
		else if ($sm == '3')
		{

			$output = 	'<option value="1" >Full-Time</option>';
			$output .= '<option value="2" >Part-Time</option>';
			$output .= '<option value="3" selected >Others</option>';

		}

		else
		{

			$output = 	'<option value="1"  selected >Full-Time</option>';
			$output .= '<option value="2" >Part-Time</option>';
			$output .= '<option value="3" >Others</option>';

		}

	return $output;

}
//end of select study_mode

//function select entry_mode
function select_entry_mode($sm)
{

		if ($sm == '1')
		{
			$output  = 	'<option value="0"> -- Please Select  --</option>';
			$output .= 	'<option value="1" selected >Certificate</option>';
			$output .= 	'<option value="2" >UTME/ JAMB</option>';
			$output .= '<option value="3"  >Direct Entry</option>';
			$output .= '<option value="4"  >Others</option>';



		}
		else if ($sm == '2')
		{
			$output  = 	'<option value="0"> -- Please Select  --</option>';
			$output .= 	'<option value="1"  >Certificate</option>';
			$output .= 	'<option value="2" selected>UTME/ JAMB</option>';
			$output .= '<option value="3"  >Direct Entry</option>';
			$output .= '<option value="4"  >Others</option>';



		}
		else if ($sm == '3')
		{

			$output  = 	'<option value="0"> -- Please Select  --</option>';
			$output .= 	'<option value="1"  >Certificate</option>';
			$output .= 	'<option value="2" >UTME/ JAMB</option>';
			$output .= '<option value="3" selected >Direct Entry</option>';
			$output .= '<option value="4"  >Others</option>';

		}
		else if ($sm == '4')
		{

			$output  = 	'<option value="0"> -- Please Select  --</option>';
			$output .= 	'<option value="1"  >Certificate</option>';
			$output .= 	'<option value="2" >UTME/ JAMB</option>';
			$output .= '<option value="3"  >Direct Entry</option>';
			$output .= '<option value="4" selected >Others</option>';

		}
		else
		{

			$output  = 	'<option value="0" selected> -- Please Select  --</option>';
			$output .= 	'<option value="1"  >Certificate</option>';
			$output .= 	'<option value="2" >UTME/ JAMB</option>';
			$output .= '<option value="3"  >Direct Entry</option>';
			$output .= '<option value="4"  >Others</option>';

		}

	return $output;

}
//end of select entry_mode

//function that gets programme duration
function  get_programme_duration($con, $id)
{

	$result = mysqli_query($con,"SELECT duration FROM programmes WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['duration'];

	return $v;

}

//function that gets programme max duration
function  get_max_programme_duration($con, $id)
{

	$result = mysqli_query($con,"SELECT maximum_duration FROM programmes WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['maximum_duration'];

	return $v;

}

//function that gets  faculty id base on user id
function  get_faculty_id($con, $user_id)
{
	$result = mysqli_query($con, "SELECT faculty_id FROM students WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$faculty_id = $row['faculty_id'];

	return $faculty_id;

}

//select faculties
function select_faculty($con, $f)
{

	$r = mysqli_query($con,"SELECT id, title  FROM faculties  ORDER BY title");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($f == $row['id'])
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
//end of select faculty

//function select award_in_view
function select_award_in_view($aiv)
{

		if ($aiv == '1')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .= '<option value="1"  selected  >O.D</option>';
			$output .= '<option value="2"  > O.N.D </option>';
			$output .= '<option value="3"  > N.D </option>';
			$output .= '<option value="4"  >HND</option>';
			$output .= '<option value="5"  > B.Sc </option>';
			$output .= '<option value="6"  >MSC</option>';
			$output .= '<option value="7"  > MPHIL </option>';
			$output .= '<option value="8"  > PhD </option>';



		}
		else if ($aiv == '2')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .= '<option value="1"    >O.D</option>';
			$output .= '<option value="2"  selected> O.N.D </option>';
			$output .= '<option value="3"  > N.D </option>';
			$output .= '<option value="4"  >HND</option>';
			$output .= '<option value="5"  > B.Sc </option>';
			$output .= '<option value="6"  >MSC</option>';
			$output .= '<option value="7"  > MPHIL </option>';
			$output .= '<option value="8"  > PhD </option>';


		}
		else if ($aiv == '3')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .= '<option value="1"    >O.D</option>';
			$output .= '<option value="2"  > O.N.D </option>';
			$output .= '<option value="3"  selected> N.D </option>';
			$output .= '<option value="4"  >HND</option>';
			$output .= '<option value="5"  > B.Sc </option>';
			$output .= '<option value="6"  >MSC</option>';
			$output .= '<option value="7"  > MPHIL </option>';
			$output .= '<option value="8"  > PhD </option>';


		}
		else if ($aiv == '4')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .= '<option value="1"    >O.D</option>';
			$output .= '<option value="2"  > O.N.D </option>';
			$output .= '<option value="3"  > N.D </option>';
			$output .= '<option value="4"  selected>HND</option>';
			$output .= '<option value="5"  > B.Sc </option>';
			$output .= '<option value="6"  >MSC</option>';
			$output .= '<option value="7"  > MPHIL </option>';
			$output .= '<option value="8"  > PhD </option>';


		}
		else if ($aiv == '5')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .= '<option value="1"    >O.D</option>';
			$output .= '<option value="2"  > O.N.D </option>';
			$output .= '<option value="3"  > N.D </option>';
			$output .= '<option value="4"  >HND</option>';
			$output .= '<option value="5"  selected> B.Sc </option>';
			$output .= '<option value="6"  >MSC</option>';
			$output .= '<option value="7"  > MPHIL </option>';
			$output .= '<option value="8"  > PhD </option>';


		}
		else if ($aiv == '6')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .= '<option value="1"    >O.D</option>';
			$output .= '<option value="2"  > O.N.D </option>';
			$output .= '<option value="3"  > N.D </option>';
			$output .= '<option value="4"  >HND</option>';
			$output .= '<option value="5"  > B.Sc </option>';
			$output .= '<option value="6"  selected>MSC</option>';
			$output .= '<option value="7"  > MPHIL </option>';
			$output .= '<option value="8"  > PhD </option>';


		}
		else if ($aiv == '7')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .= '<option value="1"    >O.D</option>';
			$output .= '<option value="2"  > O.N.D </option>';
			$output .= '<option value="3"  > N.D </option>';
			$output .= '<option value="4"  >HND</option>';
			$output .= '<option value="5"  > B.Sc </option>';
			$output .= '<option value="6"  >MSC</option>';
			$output .= '<option value="7"  selected> MPHIL </option>';
			$output .= '<option value="8"  > PhD </option>';


		}
		else if ($aiv == '8')
		{
			$output = 	'<option value="0"> -- Please Select-- </option>';
			$output .= '<option value="1"    >O.D</option>';
			$output .= '<option value="2"  > O.N.D </option>';
			$output .= '<option value="3"  > N.D </option>';
			$output .= '<option value="4"  >HND</option>';
			$output .= '<option value="5"  > B.Sc </option>';
			$output .= '<option value="6"  >MSC</option>';
			$output .= '<option value="7"  > MPHIL </option>';
			$output .= '<option value="8" selected > PhD </option>';


		}

		else
		{
			$output = 	'<option value="0" selected> -- Please Select-- </option>';
			$output .= '<option value="1"    >O.D</option>';
			$output .= '<option value="2"  > O.N.D </option>';
			$output .= '<option value="3"  > N.D </option>';
			$output .= '<option value="4"  >HND</option>';
			$output .= '<option value="5"  > B.Sc </option>';
			$output .= '<option value="6"  >MSC</option>';
			$output .= '<option value="7"  > MPHIL </option>';
			$output .= '<option value="8"  > PhD </option>';


		}
	return $output;

}
//end of select award in view

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

function checking_register_courses($con,$student_id,$academic_year,$prog_cos_id){

	$sqlmg=mysqli_query($con, "SELECT * FROM students_courses where student_id ='$student_id' and session_id='$academic_year' and course_id='$prog_cos_id' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														return 1;

													}else{
													    return 0;
													}
											}


}

function total_first_semester_credit_unit($con,$student_id,$academic_year){
	$tt=0;
	$sqlmg=mysqli_query($con, "select * from students_courses where student_id ='$student_id' and session_id='$academic_year'  and semester ='1' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														while($row_s=mysqli_fetch_assoc($sqlmg)){

														    $tt +=$row_s['course_unit'];
														}
													}
											}

	return $tt;
}



function total_second_semester_credit_unit($con,$student_id,$academic_year){
	$tt=0;
	$sqlmg=mysqli_query($con, "select * from students_courses where student_id ='$student_id' and session_id='$academic_year'  and semester ='2' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														while($row_s=mysqli_fetch_assoc($sqlmg)){

														    $tt +=$row_s['course_unit'];
														}
													}
											}

	return $tt;
}

function get_enrollment_id($con,$student_id,$academic_year){

	$sqlmg=mysqli_query($con, "select * from enrollments where student_id ='$student_id' and academic_year_id='$academic_year' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['enrollment_id'];
													}
											}


}


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


//Function to fetch check if payment has been made by particular applicant
	function has_paid_school_fee($con, $user_id)
	{
		$q = "SELECT student_id FROM school_fee_payments
					WHERE student_id = '$user_id'";
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

	//function view transaction log
	function view_remita_pay_transaction_log_min($con,$user_id, $t_type, $t_for)
	{


	//query the database
	$query = "SELECT `id`, `invoice_id`, `transaction_type`, `user_id`, `transaction_for`, `payment_method`,
	`payment_status`, `response_code`, `response_description`, `transaction_id`,`transaction_reference`, `merchant_reference`,
	`title`, `description`, `amount`, DATE_FORMAT(date_added, '%b %e, %Y /  %l:%i:%p') as date_added, email, total_paid_by_buyer,transaction_date

	FROM `remita_webpay_transaction_log`

	WHERE user_id = '$user_id' AND transaction_type = '$t_type' AND transaction_for = '$t_for'


	ORDER BY id DESC";
	$result = mysqli_query($con,$query);



	if(mysqli_num_rows($result) > 0)
	{//show table


	$output =
	'<table id="example" class="table table-bordered" cellspacing="0" width="100%" style="font-size:12px;">
		<thead>

					<th>Invoice #</th>
					<th>Transaction Ref.</th>
					<th>Date / Time</th>
					<th>Status</th>
					<th>Action</th>


		</thead>

	 <!-- <tfoot>

		</tfoot>-->

		<tbody>';


	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$output .= "<tr>";
		$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".$row['invoice_id']."</td>"; //group belong to admin or user
		$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".$row['transaction_reference']."</td>";

		$output .= "<td>".$row['transaction_date']."</td>";
		$output .= "<td>".transaction_status($row['payment_status'])."</td>";
		$output .= '<td>'.transaction_status_for_log($row['payment_status'],$row['transaction_reference'],$t_type, $t_for).'</td>';
		//$output .= "<td>".$row['email']."</td>";

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






	}//end of view transaction log for remita

	//function transaction status
		function transaction_status_for_log($id,$tref,$t_type, $t_for)
		{
			if($id == '1')
			{
				//return '<label class="label label-success"> SUCCESSFUL </label>';
			}
			//elseif($t_type == 0 && $t_for == 1)
			elseif($t_type == 1 )
			{
				return  '<a class="btn btn-info btn-lg" href="dashboard?hub=check_trxn_app_status&txnref='.$tref.'" class="btn btn-primary" > <span>Re-query</span> </a>';
			}elseif($t_type == 2 )
			{
				return  '<a class="btn btn-info btn-lg" href="dashboard?hub=check_trxn_acc_status&txnref='.$tref.'" class="btn btn-primary" > <span>Re-query</span> </a>';
			}elseif($t_type == 3 )
			{
				return  '<a class="btn btn-info btn-lg" href="dashboard?hub=check_trxn_sch_status&txnref='.$tref.'" class="btn btn-primary" > <span>Re-query</span> </a>';
			}
			elseif($t_type == 4 )
			{
				return  '<a class="btn btn-info btn-lg" href="dashboard?hub=check_trxn_sch_ret_status&txnref='.$tref.'" class="btn btn-primary" > <span>Re-query</span> </a>';
			}
		}


	//function transaction status
	function transaction_status($id)
	{
		if($id == '1')
		{
			return '<label class="label label-success"> SUCCESSFUL </label>';
		}
		else
		{
			return  '<label class="label label-danger"> FAILED </label>';
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


				if($invoce_type == 1)
				{
					$output .= '<td><a class="btn btn-info" href="dashboard?hub=view_invoice&qlk='.md5(8).'&iid='.$row['invoice_id'].'"> View Invoice</a></td>';

				}
				else if($invoce_type == 2)
				{
					$output .= '<td><a class="btn btn-info" href="dashboard?hub=view_invoice2&qlk='.md5(8).'&iid='.$row['invoice_id'].'"> View Invoice</a></td>';

				}
				else if($invoce_type == 3)
				{
					$output .= '<td><a class="btn btn-info" href="dashboard?hub=view_invoice3&qlk='.md5(8).'&iid='.$row['invoice_id'].'"> View Invoice</a></td>';
				}
				else if($invoce_type == 4)
				{
					$output .= '<td><a class="btn btn-info" href="dashboard?hub=view_invoice3&qlk='.md5(8).'&iid='.$row['invoice_id'].'"> View Invoice</a></td>';
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

			//function fetch user programme type applied for
			function get_user_programme_type_applied_for($con,$id)
			{
				$result = mysqli_query($con,"SELECT school_applied_for FROM applicant WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$v = $row['school_applied_for'];


				return $v;
			}

			//function fetch user department applied for
				function get_user_department_applied_for($con, $id)
				{
					$result = mysqli_query($con,"SELECT department_applied_for FROM applicant WHERE id = '$id'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['department_applied_for'];


					return $v;
				}

				//Function to fetch  application_fee title
				function get_application_fee_title($con, $sess) //$pt programme type , $d -department , $p -programme id, $s semester
				{
					$result = mysqli_query($con,"SELECT title FROM set_application_fee_payments WHERE session = '$sess'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['title'];

				return $v;
				}

					//Function to fetch application_fee desc
				function get_application_fee_desc($con, $sess)
				{
					$result = mysqli_query($con,"SELECT description FROM set_application_fee_payments WHERE  session = '$sess' ");
					$row = mysqli_fetch_assoc($result);
					$v = $row['description'];

				return $v;
				}

					//Function to fetch  application _fee  total amountamount
				function get_application_fee_total_amount($con,$sess)
				{
					$result = mysqli_query($con,"SELECT total_amount FROM set_application_fee_payments WHERE session = '$sess'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['total_amount'];

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


					//Function to fetch  application_fee title
						function get_acceptance_fee_title($con, $sess) //$pt programme type , $d -department , $p -programme id, $s semester
						{
							$result = mysqli_query($con,"SELECT title FROM set_acceptance_fee_payments WHERE session = '$sess'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['title'];

						return $v;
						}

						//Function to fetch application_fee desc
						function get_acceptance_fee_desc($con, $sess)
						{
							$result = mysqli_query($con,"SELECT description FROM set_acceptance_fee_payments WHERE  session = '$sess' ");
							$row = mysqli_fetch_assoc($result);
							$v = $row['description'];

						return $v;
						}

						//Function to fetch  application _fee  total amountamount
						function get_acceptance_fee_total_amount($con,$sess)
						{
							$result = mysqli_query($con,"SELECT total_amount FROM set_acceptance_fee_payments WHERE session = '$sess'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['total_amount'];

						return $v;
						}

						//Function to fetch  application_fee amount
						function get_acceptance_fee_amount($con,$sess)
						{
							$result = mysqli_query($con,"SELECT amount FROM set_acceptance_fee_payments WHERE session = '$sess'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['amount'];

						return $v;
						}

						//function fetch user programme type
					function get_user_programme_type_admitted_to($con,$id)
					{
						$result = mysqli_query($con,"SELECT school_id FROM applicant WHERE id = '$id'");
						$row = mysqli_fetch_assoc($result);
						$v = $row['school_id'];


						return $v;
					}

					//function fetch user programme_admitted_to
							function get_user_programme_admitted_to($con,$id)
							{
								$result = mysqli_query($con,"SELECT programme_id FROM applicant WHERE id = '$id'");
								$row = mysqli_fetch_assoc($result);
								$v = $row['programme_id'];


								return $v;
							}
					//function fetch user programme type
				function get_student_programme_type($con,$id)
				{
					$result = mysqli_query($con,"SELECT school_id FROM students WHERE id = '$id'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['school_id'];


					return $v;
				}

					//function fetch user department_admitted_to
						function get_user_department_admitted_to($con,$id)
						{
							$result = mysqli_query($con,"SELECT department_id FROM applicant WHERE id = '$id'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['department_id'];


							return $v;
						}

						//function fetch user department_admitted_to
							function get_student_department($con,$id)
							{
								$result = mysqli_query($con,"SELECT department_id FROM students WHERE id = '$id'");
								$row = mysqli_fetch_assoc($result);
								$v = $row['department_id'];


								return $v;
							}

						//function fetch user programme_admitted_to
						function get_student_programme($con,$id)
						{
							$result = mysqli_query($con,"SELECT programme_id FROM students WHERE id = '$id'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['programme_id'];


							return $v;
						}

						//Function to fetch  school_fee title
						function get_school_fee_title($con,$level, $s) //$pt programme type , $d -department , $p -programme id, $s semester
						{
							$result = mysqli_query($con,"SELECT title FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['title'];

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
						function get_school_fee_total_amount_non_indigene($con,$level, $s)
						{
							$result = mysqli_query($con,"SELECT total_non_indigene FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['total_non_indigene'];

						return $v;
						}


						//Function to fetch  school_fee desc
						function get_school_fee_desc($con,$level, $s)
						{
							$result = mysqli_query($con,"SELECT description FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['description'];

						return $v;
						}

						//function to check if nigerlite 1
						function is_nigerlite($con,$u)
						{
							$result = mysqli_query($con,"SELECT state_id FROM applicant WHERE state_id = 27 AND id = '$u'");
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

						//function to check if nigerlite 1
						function is_nigerlite_student($con,$u)
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


						//Function to fetch  school_fee amount
						function get_school_fee_amount($con,$level, $s)
						{
							$result = mysqli_query($con,"SELECT amount FROM set_school_fee_payments_for_students WHERE level = '$level' AND session = '$s'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['amount'];

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

					//check if admitted and display MODAL  button
					function get_user_email($con, $applicant_id)
					{
							$result = mysqli_query($con,"SELECT email FROM applicant_profile WHERE applicant_id = '$applicant_id'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['email'];
							return $v;
					}

					//check if admitted and display MODAL  button
					function get_student_email($con, $user_id)
					{
							$result = mysqli_query($con,"SELECT email FROM students WHERE id = '$user_id'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['email'];
							return $v;
					}

					//function show state
						function show_state($con,$c)
						{
							$r = mysqli_query($con,"SELECT  name  FROM states WHERE state_id = '$c'");
							$row = mysqli_fetch_assoc($r);

						    return $row['name'];

						}
						//end of show state

						//function show state
							function get_lga_title($con,$c)
							{
								$r = mysqli_query($con,"SELECT  local_name  FROM lga WHERE local_id = '$c'");
								$row = mysqli_fetch_assoc($r);

							    return $row['local_name'];

							}
							//end of show state

						//function fetch user state id
					function get_user_state_id($con,$id)
					{
						$result = mysqli_query($con,"SELECT state_id FROM applicant_profile WHERE applicant_id = '$id'");
						$row = mysqli_fetch_assoc($result);
						$sid = $row['state_id'];

						return $sid;
					}

					//function fetch user state id
				function get_student_state_id($con,$id)
				{
					$result = mysqli_query($con,"SELECT state_id FROM students WHERE id = '$id'");
					$row = mysqli_fetch_assoc($result);
					$sid = $row['state_id'];

					return $sid;
				}


					//function dat get user address
						function get_user_address($con,$user_id)
						{
							$q = "SELECT address FROM applicant_profile WHERE applicant_id = '$user_id'";
							$r = mysqli_query($con,$q);
							$row = mysqli_fetch_assoc($r);

							return $row['address'];


						}

						//function dat get user address
							function get_student_address($con,$user_id)
							{
								$q = "SELECT address FROM students WHERE id = '$user_id'";
								$r = mysqli_query($con,$q);
								$row = mysqli_fetch_assoc($r);

								return $row['address'];


							}

					//Functions to fetch user's Full name
						function get_user_fullname($con, $user_id)
						{
							$result = mysqli_query($con,"SELECT * FROM applicant_profile WHERE applicant_id = '$user_id'");
							$row = mysqli_fetch_assoc($result);
							$first_name = $row['first_name'];
							$middle_name = strtoupper($row['middle_name']);
							$last_name = $row['last_name'];

							$user_fullname = $last_name . ", " . $first_name ." ".$middle_name;

						return $user_fullname;
						}

						//Functions to fetch user's Full name
							function get_student_fullname($con, $user_id)
							{
								$result = mysqli_query($con,"SELECT * FROM students WHERE id = '$user_id'");
								$row = mysqli_fetch_assoc($result);
								$first_name = $row['first_name'];
								$middle_name = strtoupper($row['middle_name']);
								$last_name = $row['last_name'];

								$user_fullname = $last_name . ", " . $first_name ." ".$middle_name;

							return $user_fullname;
							}

					//check if admitted and display MODAL  button
					function get_user_phone_no($con, $applicant_id)
					{
							$result = mysqli_query($con,"SELECT phone_no FROM applicant_profile WHERE applicant_id = '$applicant_id'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['phone_no'];
							return $v;
					}

					//check if admitted and display MODAL  button
					function get_student_phone_no($con, $user_id)
					{
							$result = mysqli_query($con,"SELECT phone_no FROM students WHERE id = '$user_id'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['phone_no'];
							return $v;
					}

					//check if admitted and display MODAL  button
					function get_transaction_reference($con, $user_id, $invoice)
					{
							$result = mysqli_query($con,"SELECT transaction_reference FROM remita_webpay_transaction_log WHERE invoice_id='$invoice' AND user_id = '$user_id'");
							$row = mysqli_fetch_assoc($result);
							$v = $row['transaction_reference'];
							return $v;
					}

					//Function to fetch check ifparticular transaction reference exist
						function r_trf_exist($con, $trf,$uaid)
						{
							$q = "SELECT transaction_reference FROM remita_webpay_transaction_log
							      WHERE  transaction_reference = '$trf'
								  AND  	user_id  = '$uaid'";

							$result = mysqli_query($con,$q);
							if(mysqli_num_rows($result) > 0 )
							{
								return true;


							}
							else
							{
								return false;


							}

						}
						//end of remita trf exist

						//function tohandle remita pay response code
							function remita_response_code($stat, $rrr, $desc, $iid )
							{
								$mes = '<ul class="list-group">';

								if($stat == '01' || $stat == '00')
								{
									$mes .= '<li class="list-group-item list-group-item-success"><p><i class="glyphicon glyphicon-exclamation-sign"></i> Your transaction is Approved and being processed. <br/>';
									$mes .= '<h2>Transaction Successful</h2>';
									$mes .= "<h4> Transaction #ref: $iid</h4>";
									$mes .= "<br/><h3> Remita Retrieval Reference: $rrr </h3></p></li>";


								}
								else if($stat == '021')
								{
									$mes .= '<li class="list-group-item list-group-item-info"><p><i class="glyphicon glyphicon-exclamation-sign"></i> RRR!. <br/> ';
									$mes .= '<h2>RRR Generated Successfully</h2>';
									$mes .= "<h4>Transaction #ref: $iid</h4>";
												$mes .= "<br/><h3> Remita Retrieval Reference: $rrr </h3> You can take this RRR to Remita Enabled Banks to make payment!</p></li>";


								}
								else
								{
									$mes .= '<li class="list-group-item list-group-item-danger"><p><i class="glyphicon glyphicon-exclamation-sign"></i> <h2>Your Transaction was not Successful.</h2> <br/> ';


									if($rrr !=null)
									{
										$mes .= "<br/><h3> Remita Retrieval Reference: $rrr </h3>";
									}
									$mes .= "<h4>Transaction #ref: $iid</h4>";
												$mes .= "<br/> <strong>Reason:  $desc </strong> <br/><br/> ";
									$mes .= "Click view invoice on the top to try again!</p></li>";

								}

								$mes .='</ul>';


								return $mes;
							}

								//payment status
						    function get_payment_status_by_resp_code($resp_code)
							{
								if($resp_code == '00' || $resp_code == '01')
								{
									return 1;
								}
								else
								{
									return  2;
								}

							}//end of payments status

					//remita processing starts here
					function generate_remita_txn_ref()
					{

						//add random four values before adding to the database
						$add_random_value = mt_rand(100, 999);
						$code = $add_random_value;
						$tid = date("Ymdhis$code");

						return $tid;
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

					//Function to fetch  invoice title
									function get_invoice_title($con,$iid)
									{
										$result = mysqli_query($con,"SELECT title FROM invoices WHERE invoice_id = '$iid'");
										$row = mysqli_fetch_assoc($result);
										$v = $row['title'];

										$v = preg_replace('/[^A-Za-z0-9\-]/', ' ', $v);

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


					//function dat get user application number
						function get_user_application_number($con,$user_id)
						{
						$q = "SELECT application_number FROM applicant_profile WHERE applicant_id = '$user_id'";
						$r = mysqli_query($con,$q);
						$row = mysqli_fetch_assoc($r);

						return $row['application_number'];


						}

						//function dat get user application number
							function get_user_matric_number($con,$user_id)
							{
							$q = "SELECT matric_number FROM students WHERE id = '$user_id'";
							$r = mysqli_query($con,$q);
							$row = mysqli_fetch_assoc($r);

							return $row['matric_number'];


							}

				//Function to fetch  application_fee amount
				function get_application_fee_amount($con,$sess)
				{
					$result = mysqli_query($con,"SELECT amount FROM set_application_fee_payments WHERE session = '$sess' ");
					$row = mysqli_fetch_assoc($result);
					$v = $row['amount'];

				return $v;
				}
				//function fetch user programme_applied_for
					function get_user_programme_applied_for($con, $id)
					{
						$result = mysqli_query($con,"SELECT programme_applied_for FROM applicant WHERE id = '$id'");
						$row = mysqli_fetch_assoc($result);
						$v = $row['programme_applied_for'];


						return $v;
					}


	//Function to fetch check if payment has been made by particular applicant
		function has_paid_hostel_fee($con, $user_id)
		{
			$q = "SELECT student_id FROM hostel_fee_payments
						WHERE student_id = '$user_id'";
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

	$q = "SELECT image FROM students WHERE id = '$user_id'";
	$r = mysqli_query($con,$q);
	$row = mysqli_fetch_assoc($r);

	return $row['image'];


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

	function get_course_by_id($con,$course_id){

$sqlmg=mysqli_query($con, "select * from courses where id ='$course_id' ");

									if($sqlmg){
										$sqlmg_row=mysqli_num_rows($sqlmg);
											if($sqlmg_row >0){

												$row_s=mysqli_fetch_assoc($sqlmg);

													 return $row_s['title'];
											}
									}


}


//function to get total units of courses a student carried per semester
function get_total_course_unit_registered_per_semester($con, $student_id, $session, $semester)
{

	$result = mysqli_query($con,"SELECT SUM(course_unit) AS summed_up FROM students_courses WHERE student_id = '$student_id' AND session_id = '$session' AND semester = '$semester'");
	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['summed_up'];

	return $summed_up;
}


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

		//function that shows courses to register
		function courses_to_register($con, $student_id, $semester,$dept, $programme, $level, $pt)
		{



			//collect pre checked check boxes from session incase the page ahead bounces back
			if(isset($_SESSION['cs']))
			{
				$carts = $_SESSION['cs'];

			}
			else
			{
				$carts = pre_check_courses($con, $student_id,$level,$semester, $session = get_current_session_id($con));

			}

			//comment incase
			//DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added,
			//	 DATE_FORMAT(date_modified, '%M %d, %Y %l:%i:%p') as date_modified, added_by, modified_by
			//query the database
			$q = "SELECT c.id as cid, c.title, c.course_description, c.programme_id, c.department_id, c.code, c.unit, c.level, c.semester, c.course_type,
				 c.course_description, pc.department_id AS pc_did,
				  pc.programme_id AS pc_pid, pc.course_id AS pc_cid, pc.seen_as_elective, pc.session_id, pc.semester AS pc_semester, pc.level AS pc_level, pc.programme_type_id, pc.status
				  FROM courses c, programmes_courses pc
				  WHERE c.semester = '$semester'
				  AND pc.course_id = c.id
				  AND pc.programme_id = '$programme'
				  AND pc.level = '$level'
				  AND pc.status = '1'
          AND pc.programme_type_id = '$pt'

				  GROUP BY c.id
				  ORDER BY  pc.seen_as_elective ASC, c.code ASC;";

			$r = mysqli_query($con,$q);
			$sn = 0 ;
			if(mysqli_num_rows($r) > 0)
			{//show table


				  $output =
				  '<table class="table table-bordered" cellspacing="0" width="100%" style="font-size:12px;">
					<thead>
								<th>S/N</th>
								<th>Code</th>
								<th>Title</th>
								<th>Type</th>
								<th>Credit Unit</th>
								<!--<th>Level</th>-->
								<!--<th>Semester</th>-->
								<th> <!--<input type="checkbox" id="selecctall" data-toggle = "tooltip" title = "Check All"   value="">--></th>


					</thead>
				  <tbody>';

				while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
				{


					//get the course totals to add up units to show
					//add total unit carried
					$t ='0';
					$total_units = 0;
					$total_unit = $total_units + get_course_unit($con, $row['cid']);
					$t += $total_unit;
					$output .= "<tr>";
					@$output .= "<td>".$sn = $sn+1 ."</td>";
					$output .= "<td>".$row['code']."</td>";
					$output .= "<td> <a href=''>".$row['title']."</a></td>";
					$output .= "<td>".seen_as_elective($row['seen_as_elective'])."</td>";
				    $output .= "<td>".$row['unit']."</td>";
					//$output .= "<td>".$row['level']."</td>";
					//$output .= "<td>".$row['semester']."</td>";


					//check if the passed ids are in new 1
					//the course id to check will be from programmes_courses table since its the 1 we used to know courses u wd do
					if(preg_match( "/\b".$row['cid']."\b/i", $carts))
					{
						$output .="<td><input type='checkbox' value='".$row['cid']."' name='course[]' id='course' class='checkbox1'  checked /></td>" ;

					}
					else
					{
						$output .="<td><input type='checkbox' value='".$row['cid']."' name='course[]' id='course' class='checkbox1' /></td>" ;

					}


					$output .= "</tr>";


				}

				$output .= "<tr>";
					$output .= "<td colspan='4'></td>";
					//$output .= "<td>Total - </td>";
					$output .= "<td>Sub Total </td>";
					$output .= "<td>".$t."</td>";
					$output .= "</tr>";
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


		}//end of function


		//function to pre check the courses
function pre_check_courses($con, $student,$level,$semester, $session)
{
		$courses = array();


		$q3 = "SELECT id, student_id, programme_id, course_id, course_unit,session_id,  level, semester, date_added
			   FROM  students_courses
			   WHERE
			   student_id = '$student'
			   AND semester = '$semester'

			   AND session_id = '$session'"; //AND level = '$level' didnt use level again because it was preventing to call other courses from different level

		$r3 = mysqli_query($con,$q3);
	    $sn = 0 ;

	    $output = '';

				while($row3 = mysqli_fetch_array($r3, MYSQLI_ASSOC))
				{

						$courses[] = $row3['course_id'];
					//}

				}


			  $new_courses = implode(' ', $courses);



		return $new_courses;

}
?>
