<?php
include_once('../db_connect/db.php');
//$local_id=$_POST['lga'];
$local_id=00;
$department_id=$_POST['department_id'];
$r = mysqli_query($con, "SELECT * FROM `programmes` WHERE department_id= '$department_id' AND real_ = 0");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($local_id == $row['id'])
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

?>
