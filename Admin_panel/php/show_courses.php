<?php

//This is the page that returns courses base on value passed
// this course are in check boxes which belongs to department, programmes and levels
// in the future version we may add semester, since some courses are semester dependent




//include the headers resources

require_once('../hubs/functions.php');

include_once('../db_connect/db.php');




if($_REQUEST)

{

	$dept 	= $_REQUEST['dept']; //collec the department and level
	$levl 	= $_REQUEST['levl'];
	$prog_type 	= $_REQUEST['prog_type'];


	echo
	'<div> <label class="label label-info"> First Semester Courses</label>';




		//$checked_carts = explode(',' , $carts);

		$query = "SELECT * FROM courses WHERE department_id = '$dept' AND level = '$levl' AND semester = '1' AND course_status = '1' ORDER BY title";

		$result = mysqli_query($con, $query);

		if(mysqli_num_rows($result) > 0 )
		{

			echo
			'<table class="table  display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
			<thead>
						<th><!--<input type="checkbox" id="check_all" data-toggle = "tooltip" title = "Check All"   value="">--></th>
						<th>Courses</th>
						<th><label class="label label-info pull-right"> Seen as elective</label> </th>


			</thead>
		  <tbody>';


			while ($row_carts = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{

				echo '<tr>';


					echo "<td width='5%'><input type='checkbox' name='course[]' value='".$row_carts['id']."' /></td>
					     <td width='75%'>".ucfirst($row_carts['title']).' <b>'.($row_carts['code'])."</b>  </td>
						 <td width='20%'>

						 <div class='btn-group' data-toggle='buttons' >
						   <label class='btn btn-primary btn-small' >
						   		 <input id='option1' value='1'  type='radio' name='seen_as_elective".$row_carts['id']."'  autocomplete='off'  />Yes

						   </label>

						   <label class='btn btn-primary btn-small active' >
						   		 <input id='option2' value='0' type='radio' name='seen_as_elective".$row_carts['id']."'  autocomplete='off' checked /> No

						   </label>

						 </div>



						 </td>"; //<input  type='checkbox' name='seen_as_elective[]' value='yes' />



				//}

				echo '</tr>';

			}



			 echo
			 '</tbody>
			  </table>';

		}
		else

		{
				echo '<span class="label label-danger">No courses Added Yet!</span>';
		}


	echo  //end of first semester courses
	'</div>
	<br>
	<div>
		<label class="label label-info"> Second Semester Courses</label>';




		//$checked_carts = explode(',' , $carts);

		$query2 = "SELECT * FROM courses WHERE department_id = '$dept' AND level = '$levl' AND semester = '2'  AND course_status = '1' ORDER BY title";

		$result2 = mysqli_query($con, $query2);

		if(mysqli_num_rows($result2) > 0 )
		{

			echo
			'<table class="table  display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
			<thead>
						<th></th>
						<th>Courses</th>
						<th><label class="label label-info pull-right"> Seen as elective</label> </th>


			</thead>
		  <tbody>';


			while ($row_carts2 = mysqli_fetch_array($result2, MYSQLI_ASSOC))
			{

				echo '<tr>';


					echo "<td width='5%'><input type='checkbox' name='course[]' value='".$row_carts2['id']."' /></td>
					     <td width='75%'>".ucfirst($row_carts2['title']).' <b>'.($row_carts2['code'])."</b>  </td>
						 <td width='20%'>

						 <div class='btn-group' data-toggle='buttons' >
						   <label class='btn btn-primary btn-small' >
						   		 <input id='option1' value='1' type='radio' name='seen_as_elective".$row_carts2['id']."'  autocomplete='off'  />Yes

						   </label>

						   <label class='btn btn-primary btn-small active' >
						   		 <input id='option2' value='0' type='radio' name='seen_as_elective".$row_carts2['id']."'  autocomplete='off' checked /> No

						   </label>

						 </div>



						 </td>";

				echo '</tr>';

			}



			 echo
			 '</tbody>
			  </table>';

		}
		else

		{
				echo '<span class="label label-danger">No courses Added Yet!</span>';
		}


	echo  //end of first semester courses
	'</div>';

}

?>
