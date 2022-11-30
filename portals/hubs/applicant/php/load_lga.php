<?php
include_once('../../../db_connect/db.php');
//$local_id=$_POST['lga'];
$local_id=00;
$state_id=$_POST['state_id'];
$r = mysqli_query($con, "SELECT *  FROM lga where state_id='$state_id'  ORDER BY local_name ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($local_id == $row['local_id'])
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

?>