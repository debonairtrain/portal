<?php

 $sqlmg=mysqli_query($con, "SELECT * FROM courses WHERE id='$token' ") ;

											if($sqlmg){


											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){

													$row_s=mysqli_fetch_assoc($sqlmg);
														   //$prog_cos_id= $row_s['id'];
													       $course_id= $row_s['id'];
													       $programme_id= $row_s['programme_id'];

														   //$seen_as_elective = $row_s['seen_as_elective'];
                               $seen_as_elective = seen_as_elective( $row_s['course_type']);
														   $semester = $row_s['semester'];
														   $level = $row_s['level'];

														   $course_unit=get_course_unit($con,$course_id);


													}
												}


?>
