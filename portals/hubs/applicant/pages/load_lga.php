<?php
include_once('../../../db_connect/db.php');
//$local_id=$_POST['lga'];
$local_id=00;
$state_id=$_POST['state_id'];
$output="<option> Select Lga</option>";
$r = mysqli_query($con, "SELECT *  FROM lga where state_id='$state_id'  ORDER BY local_name ");
	if(mysqli_num_rows($r) > 0 )
	{
	    
	    
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($local_id == $row['local_id'])
			{
				$output.='<option value="'.$row[local_id].'" selected>'.$row['local_name'].'</option>';
				

			}
			else
			{
			    $output.='<option value="'.$row[local_id].'">'.$row['local_name'].'</option>';
				

			}


		
		}
		
		
	}
	else
	{

		
            $output="<option> Not added yet</option>";
			
	}
	echo $output;
?>
