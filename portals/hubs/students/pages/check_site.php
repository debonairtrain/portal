<?php
@session_start();

include_once('../../../db_connect/db.php');

if(isset($_SESSION['student_id'])){
	$student_id=$_SESSION['student_id'];

//get datas from the form
  $iddd= $_POST['site'];
$output='';
$bedspace ='';
$category_id ="";
$site_id  ="";

//get user's details
$q = "SELECT student_id, CONCAT_WS(' ', first_name, middle_name, last_name) as name, phone_no,
gender,matric_number, email,level,programme_id,image


   FROM students WHERE student_id='$student_id' ";
$r = mysqli_query($con , $q) ;



//in the table below result_table stands for resullt fetch throug seraching table(ajax)


if(mysqli_num_rows($r) > 0)
{//show table

  while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
//get programme Title

  {
    $gen = $row['gender'];
    if($gen=='F'){
      $gender= "Female";
    }else{
      $gender="Male";
    }

		//QuickHashIntHash
		$img=$row['image'];

					if($img==""){

				$pic='<img src="../uploads/bg.jpg" width="120px" height="130px" class="img-circle"/>';
			}else{

				$pic='<img src="../uploads/'.$img.'" width="120px" height="130px" class="img-circle"/>';

			}
    //get hostel block




    //get hostel block
    $result = mysqli_query($con,"SELECT * FROM hostel_categories WHERE hostel_site = '$iddd' and gender='$gender' ORDER BY RAND() ") or die(mysqli_error($con));
      while($ok = mysqli_fetch_assoc($result)){



      $title = $ok['title'];
      $site_id = $ok['hostel_site'];
      $cat_id=$ok['id'];
			 $total_room=$ok['bed_space'];
      if(@$title==""){
        $title="no available hostel block yet";
      }else{
        $title==$title;
      }

			// checking if available free block SPACE
			$count_Cat = mysqli_query($con, "SELECT *FROM hostel_allocation WHERE hostel_categories='$cat_id' AND status='0' ");
			if($count_Cat){
				$sql_row_cat=mysqli_num_rows($count_Cat);

				if( $sql_row_cat < $total_room){
					$category_id=$cat_id;
					break;
				}else{
					$category_id="";

				}
			}




		}

      //get hostel room
      $result = mysqli_query($con,"SELECT * FROM hostel_rooms WHERE hostel_categories = '$category_id' and hostel_site='$site_id' AND reserved=0 ORDER BY RAND() ") or die(mysqli_error($con));
			if($result){
				$num_rooms=mysqli_num_rows($result);
				if($num_rooms > 0){

					while($okk = mysqli_fetch_assoc($result)){
						$room_id=$okk['id'];
						$room_title = $okk['title'];
						 $total_bedspace=$okk['bedspace'];

						$count = mysqli_query($con, "SELECT *FROM hostel_allocation WHERE room_id='$room_id' AND status='0' ");
						if($count){
							 $sql_row_room=mysqli_num_rows($count);

							if( $sql_row_room < $total_bedspace){
								$room_id== $room_id;



								$chk = mysqli_query($con, "SELECT *FROM hostel_allocation WHERE student_id='$student_id' AND status='0' ") or die(mysqli_error($con));
								if($chk){

									$sql_row=mysqli_num_rows($chk);
									if($sql_row > 0){
										$vv=mysqli_fetch_assoc($chk);
										$cat_idd = $vv['hostel_categories'];
										$room_idd = $vv['room_id'];

										//get his room title
										$allocate = mysqli_query($con,"SELECT  title FROM hostel_rooms WHERE id='$room_idd' ") or die(mysqli_error($con));
											$sql_room = mysqli_fetch_assoc($allocate);
											$Room_title = $sql_room['title'];

											//get his room title
											$allocate = mysqli_query($con,"SELECT  title FROM hostel_sites WHERE id='$iddd' ") or die(mysqli_error($con));
												$sql_site = mysqli_fetch_assoc($allocate);
												$Site_title = $sql_site['title'];

											//get his category title
											$allocate = mysqli_query($con,"SELECT  title FROM hostel_categories WHERE id='$cat_idd' ") or die(mysqli_error($con));
												$sql_category = mysqli_fetch_assoc($allocate);
												$Cat_title = $sql_category['title'];





												echo '

											<div class="col-md-12" style="padding-left:0px; padding-right:0px;">
														<div class="list-group">
															<ul class="list-group">
																<li class="list-group-item list-group-item-info">
																	<h3>My Bed Space Information/ Make Payment</h3>
																</li>
															</ul>



														</div>


											</div>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">'.strtoupper($Site_title).' ------- '.strtoupper($Cat_title).' ------- '.strtoupper($Room_title).'</h3>
												</div>
												<div class="panel-body">';



												echo '
													<label class="alert alert-danger">
														You have already been allocated room, proceed to payment please!
													</label><br>
													<table width="100%" class="table">
														<tr>
															<td width="10%">'.$pic.'</td>
															<td width="90%">
																<table width="100%">
																	<tr>
																		<td width="100%"><h3 class="label label-success" style="font-size:12px;">NAME: '.strtoupper($row['name']).'</h3><hr/>


																		</td>
																	</tr>
																	<tr>
																		<td width="100%"><h3 class="label label-success" style="font-size:12px;">Matric Number: '.strtoupper($row['number']).'</h3><hr/>

																		</td>
																	</tr>
																	<tr>
																		<td width="100%"><h3 class="label label-success" style="font-size:12px;">Phone Number: '.strtoupper($row['phone_no']).'</h3><hr/>

																		</td>
																	</tr>
																	<tr>
																		<td width="100%"><h3 class="label label-success" style="font-size:12px;">Email: '.strtoupper($row['email']).'</h3><hr/>


																		</td>
																	</tr>
																	<tr>
																		<td width="100%"><h3 class="label label-success" style="font-size:12px;">Gender: '.strtoupper($gender).'</h3><hr/>


																		</td>
																	</tr>
																</table>
																<!-- PROCEED TO PAYMENT --> <a class="btn btn-primary" style="width:80%; margin-top:20px;" href="dashboard.php?act=payments" data-toggle="tooltip" title="Click here to Proceed to payment" data-placement="top"><i class="glyphicon glyphicon-ok"> </i> PROCEED TO PAYMENT</a>
															</td>
														</tr>

													</table><hr/>';


										}else{
										//insert into hostel allocation table

												$insert = mysqli_query($con, "INSERT INTO hostel_allocation(hostel_site,hostel_categories,room_id,student_id,status,chk_in_date_time)
												VALUES('$iddd','$cat_id','$room_id','$student_id','0',NOW())") or die(mysql_error($con));
												if($insert){

													mysqli_query($con, "UPDATE students SET hostel_allocation = '1' WHERE id='$student_id' ");


													//get his room title
													$allocate = mysqli_query($con,"SELECT  title FROM hostel_rooms WHERE id='$room_id' ") or die(mysqli_error($con));
														$sql_room = mysqli_fetch_assoc($allocate);
														$Room_title = $sql_room['title'];

														//get his room title
														$allocate = mysqli_query($con,"SELECT  title FROM hostel_sites WHERE id='$iddd' ") or die(mysqli_error($con));
															$sql_site = mysqli_fetch_assoc($allocate);
															$Site_title = $sql_site['title'];

														//get his category title
														$allocate = mysqli_query($con,"SELECT  title FROM hostel_categories WHERE id='$cat_id' ") or die(mysqli_error($con));
															$sql_category = mysqli_fetch_assoc($allocate);
															$Cat_title = $sql_category['title'];

													echo '

												<div class="col-md-12" style="padding-left:0px; padding-right:0px;">
															<div class="list-group">
																<ul class="list-group">
																	<li class="list-group-item list-group-item-info">
																		<h3>My Bed Space Information/ Make Payment</h3>
																	</li>
																</ul>



															</div>


												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<h3 class="panel-title" style="font-size:20px; font-weight:bold;">'.strtoupper($Site_title).' ------- '.strtoupper($Cat_title).' ------- '.strtoupper($Room_title).'</h3>
													</div>
													<div class="panel-body">';



													echo '
														<br>
														<table width="100%" class="table">
															<tr>
																<td width="10%">'.$pic.'</td>
																<td width="90%">
																	<table width="100%">
																		<tr>
																			<td width="100%"><h3 class="label label-success" style="font-size:12px;">NAME: '.strtoupper($row['name']).'</h3><hr/>


																			</td>
																		</tr>
																		<tr>
																			<td width="100%"><h3 class="label label-success" style="font-size:12px;">Matric Number: '.strtoupper($row['matric_number']).'</h3><hr/>

																			</td>
																		</tr>
																		<tr>
																			<td width="100%"><h3 class="label label-success" style="font-size:12px;">Phone Number: '.strtoupper($row['phone_no']).'</h3><hr/>

																			</td>
																		</tr>
																		<tr>
																			<td width="100%"><h3 class="label label-success" style="font-size:12px;">Email: '.strtoupper($row['email']).'</h3><hr/>


																			</td>
																		</tr>
																		<tr>
																			<td width="100%"><h3 class="label label-success" style="font-size:12px;">Gender: '.strtoupper($gender).'</h3><hr/>


																			</td>
																		</tr>
																	</table>
																	<!-- PROCEED TO PAYMENT --> <a class="btn btn-primary" style="width:80%; margin-top:20px;" href="dashboard.php?act=payments" data-toggle="tooltip" title="Click here to Proceed to payment" data-placement="top"><i class="glyphicon glyphicon-ok"> </i> PROCEED TO PAYMENT</a>
																</td>
															</tr>

														</table><hr/>';


													}



										}
									}


									break;
								}else{

									$room_title="!No accommodation at the moment, Check back much later";

				          $output= '<br><br>



										<div class="alert alert-danger">
										  '.strtoupper($room_title).'
										</div>';

								}



							}


						}

					}else{
							$room_title="no available room yet, check back later!";

		          $output= '<br><br>



								<div class="alert alert-danger">
								  '.strtoupper($room_title).'
								</div>


		        ';
					}















        }
}

}

echo $output;

}

?>
