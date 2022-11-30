<?php
ob_start();
//Functions to fetch user's Full name
	function get_applicant_fullname($con, $user_id)
	{
		$result = mysqli_query($con, "SELECT * FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$first_name = $row['first_name'];
		$other_names = $row['last_name'];
		$middle_name = $row['middle_name'];

		$user_fullname = $first_name . " " . $middle_name. " " . $other_names;

	return $user_fullname;
	}



//Functions to fetch user's application number
	function get_applicant_application_number($con, $user_id)
	{
		$result = mysqli_query($con, "SELECT application_number FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$application_number = $row['application_number'];


	return $application_number;
	}



//Function to fetch email
	function get_applicant_email2($con, $user_id)
	{
		$result = mysqli_query($con, "SELECT email FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$email = $row['email'];

	return $email;
	}



	//Function to fetch phone number
	function get_applicant_phone_no($con, $user_id)
	{
		$result = mysqli_query($con, "SELECT phone_no FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$ph = $row['phone_no'];

	return $ph;
	}



	//function dat get user address
	function get_applicant_address($con, $user_id)
	{
		$q = "SELECT address FROM applicant_profile WHERE applicant_id = '$user_id'";
		$r = mysqli_query($con, $q);
		$row = mysqli_fetch_assoc($r);

		return $row['address'];


	}




	//function dat get user image by id
	function get_applicant_image2($user_id)
	{
	$q = "SELECT image FROM applicant_profile WHERE applicant_id = '$user_id'";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_assoc($r);

	return $row['image'];


	}


//function select school
function select_school($con, $school_id)
{
	$r = mysqli_query($con, "SELECT id, title  FROM schools WHERE school_status ='1' ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			if($school_id == $row['id'])
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
//end of select school

//function fetch user programme type applied for
function get_user_programme_type_applied_for($con,$id)
{
	$result = mysqli_query($con, "SELECT school_applied_for FROM applicant WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['school_applied_for'];


	return $v;
}



//function select department
function select_department($con, $department_id)
{
	$r = mysqli_query($con, "SELECT id, title  FROM departments WHERE department_status = '1'  ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			if($department_id == $row['id'])
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
//end of select faculties

	//Function to fetch role name
	function get_role_title($role_id)
	{
		$result = mysqli_query($con, "SELECT * FROM roles WHERE id = '$role_id'");
		$row = mysqli_fetch_assoc($result);
		$role_title = $row['role_title'];

	return $role_title;
	}

	//Functions to fetch user's first name
	function get_applicant_first_name($user_id)
	{
		$result = mysqli_query($con, "SELECT first_name FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$first_name = $row['first_name'];


	return $first_name;
	}

	//Functions to fetch user's other names
	function get_applicant_other_names($user_id)
	{
		$result = mysqli_query($con, "SELECT other_names FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$on = $row['other_names'];


	return $on;
	}

	//Functions to fetch user's marital status
	function get_applicant_ms($con, $user_id)
	{
		$result = mysqli_query($con, "SELECT marital_status FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$ms = $row['marital_status'];


	return $ms;
	}


		//Functions to fetch user's gender
	function get_applicant_gender($con, $user_id)
	{
		$result = mysqli_query($con, "SELECT gender FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$gd = $row['gender'];


	return $gd;
	}



		//Functions to fetch user's religion
	function get_applicant_religion($con, $user_id)
	{
		$result = mysqli_query($con, "SELECT religion FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$religion = $row['religion'];


	return $religion;
	}



		//Functions to fetch user's place of birth
	function get_applicant_pob($con,$user_id)
	{
		$result = mysqli_query($con, "SELECT place_of_birth FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['place_of_birth'];


	return $v;
	}



	//function fetch user day
	function get_applicant_day($con, $id)
	{
		$result = mysqli_query($con, "SELECT day FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$day = $row['day'];

		return $day;
	}




	//function fetch user month
	function get_applicant_month($con, $id)
	{
		$result = mysqli_query($con, "SELECT month FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$month = $row['month'];

		return $month;
	}



	//function fetch user year
	function get_applicant_year($con, $id)
	{
		$result = mysqli_query($con, "SELECT year FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$year = $row['year'];

		return $year;
	}


	//function fetch user nationality
	function get_applicant_nationality($con, $id)
	{
		$result = mysqli_query($con, "SELECT country_id FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$n = $row['country_id'];

		return $n;
	}



	//function fetch user country
	function get_applicant_country_id($id)
	{
		$result = mysqli_query($con, "SELECT country_id FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$country_id = $row['country_id'];

		return $country_id;
	}


	//function fetch user state id
	function get_applicant_state_id($con, $id)
	{
		$result = mysqli_query($con, "SELECT state_id FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$sid = $row['state_id'];

		return $sid;
	}

	//function fetch user lga id
	function get_applicant_lga_id($con, $id)
	{
		$result = mysqli_query($con, "SELECT lga_id FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$lid = $row['lga_id'];

		return $lid;
	}




	//function get user permanent address

	function get_applicant_permanent_address($con, $id)
	{
		$result = mysqli_query($con, "SELECT permanent_address FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['permanent_address'];


		return $v;
	}




	//function get user guardian_name
	function get_applicant_guardian_name($con, $id)
	{
		$result = mysqli_query($con, "SELECT guardian_name FROM applicant_guidance WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['guardian_name'];


		return $v;
	}




	//function get user guardian_relationship
	function get_applicant_guardian_relationship($con, $id)
	{
		$result = mysqli_query($con, "SELECT guardian_relationship FROM applicant_guidance WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['guardian_relationship'];


		return $v;
	}


		//function get guardian_tel
	function get_applicant_guardian_tel($con, $id)
	{
		$result = mysqli_query($con, "SELECT guardian_tel FROM applicant_guidance WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['guardian_tel'];


		return $v;
	}

  //function get guardian_tel
  function get_applicant_guardian_email($con, $id)
  {
  $result = mysqli_query($con, "SELECT guardian_email FROM applicant_guidance WHERE applicant_id = '$id'");
  $row = mysqli_fetch_assoc($result);
  $v = $row['guardian_email'];


  return $v;
  }


	//function get guardian_address
	function get_applicant_guardian_address($con, $id)
	{
		$result = mysqli_query($con, "SELECT guardian_address FROM applicant_guidance WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['guardian_address'];


		return $v;
	}



	//function get user sponsorhip type
	function get_applicant_sponsorship_type($con, $id)
	{
		$result = mysqli_query($con, "SELECT sponsorship_type FROM applicant_guidance WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['sponsorship_type'];


		return $v;
	}


	//function get user sponsorhip type
	function get_applicant_sponsorhip_name($con, $id)
	{
		$result = mysqli_query($con, "SELECT sponsorship_name FROM applicant_guidance WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['sponsorship_name'];


		return $v;
	}


	//function get user sponsorhip address
	function get_applicant_sponsorship_address($con, $id)
	{
		$result = mysqli_query($con, "SELECT sponsorship_address FROM applicant_guidance WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['sponsorship_address'];


		return $v;
	}



//function fetch user programme type
	function get_applicant_programme_type($id)
	{
		$result = mysqli_query($con, "SELECT programme_type_applied_for FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['programme_type_applied_for'];


		return $v;
	}

	//function fetch user programme type applied for
	function get_applicant_programme_type_applied_for($con, $id)
	{
		$result = mysqli_query($con, "SELECT school_applied FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['school_applied'];


		return $v;
	}

//function fetch user programme_applied_for
	function get_applicant_programme_applied_for($con, $id)
	{
		$result = mysqli_query($con, "SELECT programme_applied_for FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['programme_applied_for'];


		return $v;
	}

function select_bg($n)
	{

			if ($n == 'AB')
			{
				$output = '<option value="0"> -- Please Select --</option>';
				$output .= '<option value="AB" selected> AB</option>';
				$output .= '<option value="O">  O </option>';
				$output .= '<option value="O+">  O+ </option>';
				$output .= '<option value="A+"> A+</option>';
				$output .= '<option value="B+"> B+</option>';


			}
			else if ($n == 'O' )
			{

				$output = '<option value="0"> -- Please Select --</option>';
				$output .= '<option value="AB" > AB</option>';
				$output .= '<option value="O" selected>  O </option>';
				$output .= '<option value="O+">  O+ </option>';
				$output .= '<option value="A+"> A+</option>';
				$output .= '<option value="B+"> B+</option>';

			}else if ($n == 'O+' )
			{

				$output = '<option value="0"> -- Please Select --</option>';
				$output .= '<option value="AB" > AB</option>';
				$output .= '<option value="O">  O </option>';
				$output .= '<option value="O+" selected>  O+ </option>';
				$output .= '<option value="A+"> A+</option>';
				$output .= '<option value="B+"> B+</option>';

			}
			else if ($n == 'A+' )
			{

				$output = '<option value="0"> -- Please Select --</option>';
				$output .= '<option value="AB" > AB</option>';
				$output .= '<option value="O" >  O </option>';
				$output .= '<option value="O+">  O+ </option>';
				$output .= '<option value="A+" selected> A+</option>';
				$output .= '<option value="B+"> B+</option>';

			}
			else if ($n == 'B+' )
			{

				$output = '<option value="0"> -- Please Select --</option>';
				$output .= '<option value="AB" > AB</option>';
				$output .= '<option value="O" >  O </option>';
				$output .= '<option value="O+">  O+ </option>';
				$output .= '<option value="A+" > A+</option>';
				$output .= '<option value="B+" selected> B+</option>';

			}
			else
			{
				$output = '<option value="0"  selected> -- Please Select --</option>';
				$output .= '<option value="AB" > AB</option>';
				$output .= '<option value="O" >  O </option>';
				$output .= '<option value="O+">  O+ </option>';
				$output .= '<option value="A+" > A+</option>';
				$output .= '<option value="B+"> B+</option>';
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

//function fetch user credential
	function get_applicant_credential($con,$id)
	{
		$result = mysqli_query($con, "SELECT pdf_file FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['pdf_file'];

		return $v;
	}

	//check if admitted and display MODAL  button
	function is_applicant_admitted($con, $id)
	{
			$result = mysqli_query($con, "SELECT * FROM applicant_profile WHERE applicant_id = '$id'");
			$row = mysqli_fetch_assoc($result);
			$admission_status = $row['admission_status'];



			return $admission_status;

			//return value

	}

//function select programme
function select_programme($con, $programme_id)
{
	$r = mysqli_query($con, "SELECT id, title  FROM programmes  ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			if($programme_id == $row['id'])
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
//end of select faculties



	//function fetch applicant programme type
	function get_applicant_programme_type_admitted_to($id)
	{
		$result = mysqli_query($con, "SELECT type_id FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['type_id'];


		return $v;
	}



//function fetch applicant department admitted into
	function get_applicant_department_admitted_to($id)
	{
		$result = mysqli_query($con, "SELECT department_id FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['department_id'];


		return $v;
	}

//function fetch applicant programme admitted into
	function get_applicant_programme_admitted_to($id)
	{
		$result = mysqli_query($con, "SELECT programme_id FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['programme_id'];


		return $v;
	}

	//function to fetch actual programme id
	function get_applicant_actual_programme_id($id)
	{
		$result = mysqli_query($con, "SELECT parent_programme_id FROM programmes WHERE id = '$id' AND real_=0 ");
		$row = mysqli_fetch_assoc($result);
		$v = $row['parent_programme_id'];


		return $v;
	}


	//function fetch user level per programme
	function get_applicant_level_per_programme($id)
	{
		$result = mysqli_query($con, "SELECT level  FROM programmes WHERE id = '$id'  AND real_=0 ");
		$row = mysqli_fetch_assoc($result);
		$v = $row['level'];


		return $v;
	}


	//function fetch applicant programme admission serial no
	function get_applicant_programme_admission_no($id)
	{
		$result = mysqli_query($con, "SELECT admission_serial_no FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['admission_serial_no'];


		return $v;
	}



//function fetch user department applied for
	function get_applicant_department_applied_for($con, $id)
	{
		$result = mysqli_query($con, "SELECT department_applied_for FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['department_applied_for'];


		return $v;
	}

    //function fetch user school applied for
	function get_applicant_school_applied($con, $id)
	{
		$result = mysqli_query($con, "SELECT school_applied_for FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['school_applied_for'];


		return $v;
	}

	//function fetch user entry_year
	function get_applicant_entry_year($con, $id)
	{
		$result = mysqli_query($con, "SELECT entry_year FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['entry_year'];


		return $v;
	}



	//function fetch user health status
	function get_applicant_h_status($con, $id)
	{
		$result = mysqli_query($con, "SELECT H_status FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['H_status'];

		return $v;
	}



	//function fetch user disability
	function get_applicant_disability($con, $id)
	{
		$result = mysqli_query($con, "SELECT disability FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['disability'];

		return $v;
	}

	//function fetch user blood group
	function get_applicant_bg($con, $id)
	{
		$result = mysqli_query($con, "SELECT blood_type FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['blood_type'];


		return $v;
	}





	//function fetch user medication
	function get_applicant_medication($con, $id)
	{
		$result = mysqli_query($con, "SELECT medi FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['medi'];

		return $v;
	}


//function select marital status
function select_applicant_marital_status($st)
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
//Functions to fetch user's first name
	function get_user_first_name($con, $user_id)
	{
		$result = mysqli_query($con, "SELECT first_name FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$first_name = $row['first_name'];


	return $first_name;
	}

	//Functions to fetch user's other names
	function get_user_last_name($con,$user_id)
	{
		$result = mysqli_query($con, "SELECT last_name FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$ln = $row['last_name'];


	return $ln;
	}

  //Functions to fetch user's other names
	function get_user_middle_name($con,$user_id)
	{
		$result = mysqli_query($con, "SELECT middle_name FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$mn = $row['middle_name'];


	return $mn;
	}



//function select gender
function select_applicant_gender($gd)
{

		if ($gd == 'M')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="M" selected > Male</option>';
			$output .= '<option value="F" > Female</option>';


		}
		else if ($gd == 'F')
		{
			$output = '<option value="0" > -- Please Select --</option>';
			$output .= '<option value="M"> Male</option>';
			$output .= '<option value="F" selected > Female</option>';


		}
		else
		{

			$output = '<option value="0"  selected  > -- Please Select --</option>';
			$output .= '<option value="M"> Male</option>';
			$output .= '<option value="F"> Female</option>';
		}

	return $output;

}
//end of select gender








//function select religion
function select_applicant_religion($r)
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


//function show religion
function show_applicant_religion($r)
{

		if ($r == '1')
		{

			$output .= 'Islam';

		}
		else if ($r == '2')
		{

			$output .= 'Christianity';


		}
		else if ($r == '3')
		{

			$output .= 'Traditional';

		}
		else if ($r == '4')
		{

			$output .= 'Others';


		}
		else
		{


			$output .= 'NIL';
		}

	return $output;

}
//end of show religion











//function select nationality
function select_applicant_nationality($n)
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

function show_applicant_nationality($n)
{

		if ($n == 'Nigerian')
		{
			$output = 'Nigerian';



		}
		else if ($n == 'Others')
		{
			$output = 'NON Nigerian';


		}
		else
		{

			$output = 'NIL';
		}

	return $output;

}



//function select sponsorship type
function select_applicant_sponsorship_type($r)
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
			$output .= '<option value="1"  > Private</option>';
			$output .= '<option value="2" > Governmental</option>';
			$output .= '<option value="3"> Others</option>';
			$output .= '<option value="4"  > Nil</option>';
		}

	return $output;

}
//end of select sponsorship type

//function show sponsorship type
function show_applicant_sponsorship_type($r)
{

		if ($r == '1')
		{

			$output = 'Private';



		}
		else if ($r == '2')
		{

			$output = 'Self';


		}
		else if ($r == '3')
		{
			$output = 'Governmental';



		}
		else if ($r == '4')
		{
			$output = 'Others';


		}
		else if ($r == '5')
		{
			$output = 'Nil';



		}
		else
		{

			$output = 'Nil';
		}

	return $output;

}
//end of show sponsorship type



//function select programme_type
function select_applicant_programme_type($pt)
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


//function show programme_type
function show_applicant_programme_type($pt)
{

		if ($pt == '1')
		{
			$output = 'PT Degree';

		}
		else if ($pt == '2')
		{
			$output = 'Diploma';

		}
		else if ($pt == '3')
		{
			$output = 'Certificate';

		}
		else
		{

			$output = 'NIL';

		}

	return $output;

}
//end of show programme_type



//function select study_mode
function select_applicant_study_mode($sm)
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





//function select H status
function select_applicant_h_status($n)
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



//function show H status
function show_applicant_h_status($n)
{

		if ($n == 'Normal')
		{
			$output = 'Normal';


		}
		else if ($n == 'Handicapped')
		{
			$output = 'Handicapped';


		}
		else if ($n == 'Others')
		{
			$output = 'Others';


		}
		else
		{
			$output = 'NIL';


		}

	return $output;

}
//show applicant h status

//function select disability
function select_applicant_disability($n)
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
function select_applicant_bg($n)
{

		if ($n == 'AB')
		{
			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="AB" selected> AB</option>';
			$output .= '<option value="O">  O </option>';
			$output .= '<option value="A+"> A+</option>';
			$output .= '<option value="B+"> B+</option>';


		}
		else if ($n == 'O' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="AB" > AB</option>';
			$output .= '<option value="O" selected>  O </option>';
			$output .= '<option value="A+"> A+</option>';
			$output .= '<option value="B+"> B+</option>';

		}
		else if ($n == 'A+' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="AB" > AB</option>';
			$output .= '<option value="O" >  O </option>';
			$output .= '<option value="A+" selected> A+</option>';
			$output .= '<option value="B+"> B+</option>';

		}
		else if ($n == 'B+' )
		{

			$output = '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="AB" > AB</option>';
			$output .= '<option value="O" >  O </option>';
			$output .= '<option value="A+" > A+</option>';
			$output .= '<option value="B+" selected> B+</option>';

		}
		else
		{
			$output = '<option value="0"  selected> -- Please Select --</option>';
			$output .= '<option value="AB" > AB</option>';
			$output .= '<option value="O" >  O </option>';
			$output .= '<option value="A+" > A+</option>';
			$output .= '<option value="B+"> B+</option>';
		}

	return $output;

}
//end of blood group selection


//function select exam _type
function select_applicant_exam_type($st)
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



//function select subjects
function select_applicant_subjects($con, $c)
{
	$r = mysqli_query($con, "SELECT id, title  FROM o_level_subjects  ORDER BY title ");
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


//function select exam month
function select_applicant_exam_month($hiq)
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



//function select highest qualification
function select_applicant_subject_grade($hiq)
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
//end of select highest





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








//function select country
function select_applicant_country($c)
{
	$r = mysqli_query($con, "SELECT id, country_name  FROM countries  ORDER BY country_name ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($c == $row['id'])
			{
				$output = "<option value=\"$row[id]\" selected>";
				$output .=  $row['country_name'];
				$output .="</option>";

			}
			else
			{
				$output = "<option value=\"$row[id]\" >";
				$output .= $row['country_name'];
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
//end of select country_name




//function show country title
function show_applicant_country($c)
{
	$r = mysqli_query($con, "SELECT  country_name  FROM countries WHERE id = '$c'");
	$row = mysqli_fetch_assoc($r);

    return $row['country_name'];

}
//end of show country_name


//function show country title
function get_user_study_mode($con, $id)
{
	$r = mysqli_query($con, "SELECT  study_mode  FROM applicant_profile WHERE applicant_id = '$id'");
	$row = mysqli_fetch_assoc($r);

    return $row['study_mode'];

}
//end of show country_name



//function select state
function select_applicant_state($con, $state)
{
	$r = mysqli_query($con, "SELECT state_id, name  FROM states  ORDER BY name ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($state == $row['state_id'])
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


//function show state
function show_applicant_state($c)
{
	$r = mysqli_query($con, "SELECT  title  FROM state WHERE id = '$c'");
	$row = mysqli_fetch_assoc($r);

    return $row['title'];

}
//end of show state



function select_applicant_lga($con, $lga)
{
	$r = mysqli_query($con, "SELECT local_id, local_name  FROM lga  ORDER BY local_name ");
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



//function show lga
function show_applicant_lga($c)
{
	$r = mysqli_query($con, "SELECT  title  FROM lga WHERE id = '$c'");
	$row = mysqli_fetch_assoc($r);

    return $row['title'];

}
//end of show state





//select department
function select_applicant_department($department)
{
	$r = mysqli_query($con, "SELECT id, title  FROM departments  ORDER BY title");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($department == $row['id'])
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
//end of select department




//select programme
function select_applicant_programme($p)
{
	$r = mysqli_query($con, "SELECT id, title  FROM programmes WHERE real_=0 ORDER BY title");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($p == $row['id'])
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
//end of select programmes




//function calendar yer
function year($y)
{
	$y = $y;
	$years = range(1950, 2050);

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


//get programme name
function get_applicant_programme_title($id)
{
	$result = mysqli_query($con, "SELECT title FROM programmes WHERE id = '$id'  AND real_=0 ");
		$row = mysqli_fetch_assoc($result);
		$title = $row['title'];

	return $title;
}
//

//get department name
function get_applicant_department_title($id)
{
	$result = mysqli_query($con, "SELECT title FROM departments WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['title'];

	return $title;
}




//function that gets  department base on user id
function  get_applicant_department_id($user_id)
{
	$result = mysqli_query($con, "SELECT department_id FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$department_id = $row['department_id'];

	return $department_id;

}


//function that gets programme_id base on user id
function  get_applicant_programme_id($user_id)
{
	$result = mysqli_query($con, "SELECT programme_id FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$programme_id = $row['programme_id'];

	return $programme_id;

}


//function that gets  applicant admitted criteria base on user id
function  get_applicant_admitted_condition($con, $user_id)
{
	$result = mysqli_query($con, "SELECT admission_criteria FROM applicant_profile WHERE applicant_id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['admission_criteria'];

	return $v;

}



//function that gets programme duration
function  get_programme_duration($con,$id)
{
	$result = mysqli_query($con, "SELECT duration FROM programmes WHERE id = '$id'  AND real_=0 ");
		$row = mysqli_fetch_assoc($result);
		$v = $row['duration'];

	return $v;

}



//function that gets programme max duration
function  get_max_programme_duration($con, $id)
{
	$result = mysqli_query($con, "SELECT maximum_duration FROM programmes WHERE id = '$id'  AND real_=0 ");
		$row = mysqli_fetch_assoc($result);
		$v = $row['maximum_duration'];

	return $v;

}

//function that gets department id by user id
function  get_dept_id($user_id)
{
	$result = mysqli_query($con, "SELECT department_id FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$course_id = $row['department_id'];

	return $course_id;

}







	//function to check if application or form sales is on // application is on 1
	function get_application_status()
	{
		$result = mysqli_query($con, "SELECT * FROM control WHERE id = 1");
		$row = mysqli_fetch_assoc($result);
		$status = $row['status'];

		if($status == 1)
		{
			return true;
		}
		else
		{
			return false;
		}


	}

	//Function to fetch applicant school id
	function get_applicant_school_id($con, $id)
	{
		$result = mysqli_query($con, "SELECT school_id FROM programmes WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$school_id = $row['school_id'];

	return $school_id;
	}

	//Function to fetch applicant school id
	function get_applicant_faculty_id($con, $id)
	{
		$result = mysqli_query($con, "SELECT faculty_id FROM programmes WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$faculty_id = $row['faculty_id'];

	return $faculty_id;
	}

	##############################################
		//Educational History functions start//
    ##############################################

	//Function to fetch primary school name
	function get_applicant_school1($user_id)
	{
		$result = mysqli_query($con, "SELECT school1 FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$s1 = $row['school1'];

	return $s1;
	}

	function get_applicant_start_year1($id)
	{
		$result = mysqli_query($con, "SELECT start_year1 FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$sy1 = $row['start_year1'];
		return $sy1;
	}

	//function fetch user FSCL end year
	function get_applicant_end_year1($id)
	{
		$result = mysqli_query($con, "SELECT end_year1 FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$ey1 = $row['end_year1'];
		return $ey1;
	}

	//Functions to fetch user's fscl cert
	function get_applicant_cert1($user_id)
	{
		$result = mysqli_query($con, "SELECT cert1 FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$c1 = $row['cert1'];


	return $c1;
	}


	//Functions to fetch user's result 1
	function get_applicant_result1($user_id)
	{
		$result = mysqli_query($con, "SELECT result1 FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$c1 = $row['result1'];


	return $c1;
	}

	//Function to fetch secondary school name
	function get_applicant_school2($user_id)
	{
		$result = mysqli_query($con, "SELECT school2 FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$s2 = $row['school2'];

	return $s2;
	}

	//function fetch user secondary Start year
	function get_applicant_start_year2($id)
	{
		$result = mysqli_query($con, "SELECT start_year2 FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$sy2 = $row['start_year2'];
		return $sy2;
	}
	//function fetch user secondary end year
	function get_applicant_end_year2($id)
	{
		$result = mysqli_query($con, "SELECT end_year2 FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$ey2 = $row['end_year2'];
		return $ey2;
	}


	//Functions to fetch user's sec cert
	function get_applicant_cert2($con, $user_id)
	{
		$result = mysqli_query($con, "SELECT cert2 FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$c2 = $row['cert2'];


	return $c2;
	}



	//Functions to fetch user's result 2
	function get_applicant_result2($user_id)
	{
		$result = mysqli_query($con, "SELECT result2 FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$c1 = $row['result2'];


	return $c1;
	}


	//Function to fetch school3 name
	function get_applicant_school3($user_id)
	{
		$result = mysqli_query($con, "SELECT school3 FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$s3 = $row['school3'];

	return $s3;
	}

	//function fetch user school3 Start year
	function get_applicant_start_year3($id)
	{
		$result = mysqli_query($con, "SELECT start_year3 FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$sy3 = $row['start_year3'];
		return $sy3;
	}
	//function fetch user school3 end year
	function get_applicant_end_year3($id)
	{
		$result = mysqli_query($con, "SELECT end_year3 FROM applicant WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$ey3 = $row['end_year3'];
		return $ey3;
	}

	//Functions to fetch user school3 cert
	function get_applicant_cert3($user_id)
	{
		$result = mysqli_query($con, "SELECT cert3 FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$c3 = $row['cert3'];


	return $c3;
	}

	//Functions to fetch user school3 result
	function get_applicant_result3($user_id)
	{
		$result = mysqli_query($con, "SELECT result3 FROM applicant WHERE id = '$user_id'");
		$row = mysqli_fetch_assoc($result);
		$r3 = $row['result3'];


	return $r3;
	}




	//function cert 3
function show_cert3($r)
{

		if ($r == '1')
		{

			$output = 'ND';


		}
		else if ($r == '2')
		{

			$output = 'NCE';



		}
		else if ($r == '3')
		{

			$output = 'HND';



		}
		else if ($r == '4')
		{

			$output = 'BSC';



		}
		else if ($r == '5')
		{


			$output = 'MSC';



		}
		else if ($r == '6')
		{


			$output = 'MPHIL';

		}
		else if ($r == '7')
		{


			$output = 'MTECH';


		}
		else if ($r == '8')
		{


			$output = 'Others';


		}
		else
		{


			$output = 'NIL';
		}

	return $output;

}
//end of show cert 3


//function show class cert
function show_class_cert($r)
{

		if ($r == '1')
		{

			$output = 'First Class';


		}
		else if ($r == '2')
		{

			$output = 'Distinction';



		}
		else if ($r == '3')
		{

			$output = 'Second Class Upper';



		}
		else if ($r == '4')
		{

			$output = 'Upper Division';



		}
		else if ($r == '5')
		{


			$output = 'Second Class Lower';



		}
		else if ($r == '6')
		{


			$output = 'Lower Division';

		}
		else if ($r == '7')
		{


			$output = 'Third Class';


		}
		else if ($r == '8')
		{


			$output = 'Pass';


		}
		else
		{


			$output = 'NIL';
		}

	return $output;

}
//end of show class of cert

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

?>
