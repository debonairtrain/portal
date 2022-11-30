<?php
session_start();
include_once('../db_connect/db.php');
if(isset($_SESSION['id'])){
    $student_id = $_SESSION['id'];
  	include_once('functions.php');
    $session = get_current_session($con, $id = '1'); //current session is always

    //get datas from the form
    $iddd = $_POST['site'];
    $output = '';
    $bedspace = '';
    $category_id = "";
    $site_id = "";


      //get user's details
       $q = "SELECT id, CONCAT_WS(' ', first_name, middle_name,last_name) as name, `phone_no`, `gender`,`matric_number`,
      `email`,`level`,`programme_id`, `image` FROM students WHERE id='$student_id'";
      $r = mysqli_query($con, $q);
      //in the table below result_table stands for resullt fetch throug seraching table(ajax)

      if (mysqli_num_rows($r) > 0) { //show table

          while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
          //get programme Title

          {
             $gender = $row['gender'];
              if($gender=='M'){
                $gender = 'Male';
              }else{
                $gender = 'Female';
              }

              //QuickHashIntHash
              $img = $row['image'];

              if ($img == "") {

                  $pic = '<img src="../uploads/jp.jpg" width="120px" height="130px" class="img-circle"/>';
              } else {

                  $pic = '<img src="../uploads/user.jpg" width="120px" height="130px" class="img-circle"/>';
              }
              //get hostel block

              //get hostel block
              $result = mysqli_query($con, "SELECT * FROM hostel_blocks WHERE campus_id = '$iddd' and gender = '$gender' ORDER BY RAND() ") or die(mysqli_error($con));
              if($result)
              {
                $sqlmg_row=mysqli_num_rows($result);
                  if($sqlmg_row >0){
                while ($row = mysqli_fetch_assoc($result)) {

                     $title = $row['title'];
                    $site_id = $row['campus_id'];
                     $cat_id = $row['id'];
                    $total_room = $row['bed_space'];


                    // checking if available free block SPACE
                    $count_Cat = mysqli_query($con, "SELECT * FROM hostel_allocation WHERE block_id='$cat_id' AND status='1' ");
                    if ($count_Cat) {
                         $sql_row_cat = mysqli_num_rows($count_Cat);

                        if ($sql_row_cat < $total_room) {
                            $category_id = $cat_id;
                            break;
                        } else {
                            $category_id = "";

                        }
                    }
                }
                //get hostel room
                      $result = mysqli_query($con, "SELECT * FROM hostel_rooms WHERE block_id ='$category_id' AND campus_id='$site_id' AND reserved='0' ORDER BY RAND() ") or die(mysqli_error($con));
                      if ($result) {
          				 $num_rooms = mysqli_num_rows($result);

                          if ($num_rooms > 0) {

                              while ($okk = mysqli_fetch_assoc($result)) {
                                  $room_id = $okk['id'];
                                  $room_title = $okk['title'];
                                   $total_bedspace = $okk['bedspace'];

                                  $count = mysqli_query($con, "SELECT * FROM hostel_allocation WHERE room_id='$room_id' AND status='1' ");
                                  if ($count) {
                                      $sql_row_room = mysqli_num_rows($count);
                                      if ($sql_row_room < $total_bedspace) {
                                          $room_id == $room_id;

                                          $chk = mysqli_query($con, "SELECT * FROM hostel_allocation WHERE student_id='$student_id' AND status='1' ") or die(mysqli_error($con));
                                          if ($chk) {

                                              $sql_row = mysqli_num_rows($chk);
                                              if ($sql_row > 0) {
                                                  $vv = mysqli_fetch_assoc($chk);
                                                  $cat_idd = $vv['block_id'];
                                                  $room_idd = $vv['room_id'];

                                                  //get his room title
                                                  $allocate = mysqli_query($con, "SELECT  title FROM hostel_rooms WHERE id='$room_idd' ") or die(mysqli_error($con));
                                                  $sql_room = mysqli_fetch_assoc($allocate);
                                                  $Room_title = $sql_room['title'];

                                                  //get his room title
                                                  $allocate = mysqli_query($con, "SELECT  title FROM hostel_campuses WHERE id='$iddd' ") or die(mysqli_error($con));
                                                  $sql_site = mysqli_fetch_assoc($allocate);
                                                  $Site_title = $sql_site['title'];

                                                  //get his category title
                                                  $allocate = mysqli_query($con, "SELECT  title FROM hostel_blocks WHERE id='$cat_idd' ") or die(mysqli_error($con));
                                                  $sql_category = mysqli_fetch_assoc($allocate);
                                                  $Cat_title = $sql_category['title'];

                                                  $img = get_user_image($con, $student_id);

                                                  if ($img == "") {

                                                      $pic = '<img src="../uploads/jp.jpg" width="120px" height="130px" class="img-circle"/>';
                                                  } else {

                                                      $pic = '<img src="../uploads/user.jpg" width="120px" height="130px" class="img-circle"/>';
                                                  }

                                                  echo '
                      										<div class="col-md-12" style="padding-left:0px; padding-right:0px;">
                      											<div class="list-group">
                      												<ul class="list-group">
                      													<li class="list-group-item list-group-item-success">
                      														<h3>My Bed Space Information/ Make Payment</h3>
                      													</li>
                      												</ul>
                      											</div>
                      										</div>

                      										<div class="panel panel-default">
                      											<div class="panel-heading">
                      												<h3 class="panel-title">' . strtoupper($Site_title) . ' ------- ' . strtoupper($Cat_title) . ' ------- ' . strtoupper($Room_title) . '</h3>
                      											</div>
                      											<div class="panel-body">';

                                                              echo '
                      										<label class="alert alert-danger">
                      											You have already been allocated room, proceed to payment please!
                      										</label><br>
                      										<table width="100%" class="table">
                      											<tr>
                      												<td width="10%">' . $pic . '</td>
                      												<td width="90%">
                      												<table width="100%">
                      													<tr>
                      														<td width="100%"><h3 class="label label-default" style="font-size:12px;">NAME: ' . strtoupper(get_user_fullname($con, $student_id)) . '</h3><hr/></td>
                      													</tr>
                      													<tr>
                      														<td width="100%"><h3 class="label label-default" style="font-size:12px;">Matric Number: ' . strtoupper(get_user_matric_number($con, $student_id)) . '</h3><hr/></td>
                      													</tr>
                      													<tr>
                      														<td width="100%"><h3 class="label label-default" style="font-size:12px;">Phone Number: ' . strtoupper(get_user_phone_no($con, $student_id)) . '</h3><hr/></td>
                      													</tr>
                      													<tr>
                      														<td width="100%"><h3 class="label label-default" style="font-size:12px;">Email: ' . strtoupper(get_user_email($con, $student_id)) . '</h3><hr/></td>
                      													</tr>
                      													<tr>
                      														<td width="100%"><h3 class="label label-default" style="font-size:12px;">Gender: ' . strtoupper($gender) . '</h3><hr/></td>
                      													</tr>
                      												</table>
                      												<!-- PROCEED TO PAYMENT --> <a class="btn btn-primary" style="width:80%; margin-top:20px;" href="hostel_payment" data-toggle="tooltip" title="Click here to Proceed to payment" data-placement="top"><i class="glyphicon glyphicon-ok"> </i> PROCEED TO PAYMENT</a>
                      											</td>
                      										</tr>

                      									</table><hr/>';

                                              } else {
                                                  //insert into hostel allocation table

                                                  $insert = mysqli_query($con, "INSERT INTO hostel_allocation(school_id,type_id,campus_id,block_id,room_id,student_id,`status`,chk_in_date_time, `session_id`)
          												                VALUES('1','1','$iddd','$cat_id','$room_id','$student_id','1',NOW(), '$session')") or die(mysql_error($con));
                                                  if ($insert) {
                                                      mysqli_query($con, "UPDATE students_nce SET hostel_allocation = '1' WHERE id='$student_id' ");

                                                      //get his room title
                                                      $allocate = mysqli_query($con, "SELECT  title FROM hostel_rooms WHERE id='$room_id' ") or die(mysqli_error($con));
                                                      $sql_room = mysqli_fetch_assoc($allocate);
                                                      $Room_title = $sql_room['title'];

                                                      //get his room title
                                                      $allocate = mysqli_query($con, "SELECT  title FROM hostel_campuses WHERE id='$iddd' ") or die(mysqli_error($con));
                                                      $sql_site = mysqli_fetch_assoc($allocate);
                                                      $Site_title = $sql_site['title'];

                                                      //get his category title
                                                      $allocate = mysqli_query($con, "SELECT  title FROM hostel_blocks WHERE id='$cat_id' ") or die(mysqli_error($con));
                                                      $sql_category = mysqli_fetch_assoc($allocate);
                                                      $Cat_title = $sql_category['title'];

                                                      echo '

                  												<div class="col-md-12" style="padding-left:0px; padding-right:0px;">
                  															<div class="list-group">
                  																<ul class="list-group">
                  																	<li class="list-group-item list-group-item-success">
                  																		<h3>My Bed Space Information/ Make Payment</h3>
                  																	</li>
                  																</ul>



                  															</div>


                  												</div>

                  												<div class="panel panel-default">
                  													<div class="panel-heading">
                  														<h3 class="panel-title" style="font-size:20px; font-weight:bold;">' . strtoupper($Site_title) . ' ------- ' . strtoupper($Cat_title) . ' ------- ' . strtoupper($Room_title) . '</h3>
                  													</div>
                  													<div class="panel-body">';

                                                              echo '
                  														<br>
                  														<table width="100%" class="table">
                  															<tr>
                  																<td width="10%">' . $pic . '</td>
                  																<td width="90%">
                  																	<table width="100%">
                  																		<tr>
                  																			<td width="100%"><h3 class="label label-default" style="font-size:12px;">NAME: ' . strtoupper($row['name']) . '</h3><hr/>


                  																			</td>
                  																		</tr>
                  																		<tr>
                  																			<td width="100%"><h3 class="label label-default" style="font-size:12px;">Matric Number: ' . strtoupper($row['number']) . '</h3><hr/>

                  																			</td>
                  																		</tr>
                  																		<tr>
                  																			<td width="100%"><h3 class="label label-default" style="font-size:12px;">Phone Number: ' . strtoupper($row['phone_no']) . '</h3><hr/>

                  																			</td>
                  																		</tr>
                  																		<tr>
                  																			<td width="100%"><h3 class="label label-default" style="font-size:12px;">Email: ' . strtoupper($row['email']) . '</h3><hr/>


                  																			</td>
                  																		</tr>
                  																		<tr>
                  																			<td width="100%"><h3 class="label label-default" style="font-size:12px;">Gender: ' . strtoupper($gender) . '</h3><hr/>


                  																			</td>
                  																		</tr>
                  																	</table>
                  																	<!-- PROCEED TO PAYMENT --> <a class="btn btn-primary" style="width:80%; margin-top:20px;" href="dashboard.php?sms=payment" data-toggle="tooltip" title="Click here to Proceed to payment" data-placement="top"><i class="glyphicon glyphicon-ok"> </i> PROCEED TO PAYMENT</a>
                  																</td>
                  															</tr>

                  														</table><hr/>';

                                                  }

                                              }
                                          }

                                          break;
                                      } else {

                                          $room_title = "!No accommodation at the moment, Check back much later";

                                          $output = '<br><br>



                    										<div class="alert alert-danger">
                    										  ' . strtoupper($room_title) . '
                    										</div>';

                                      }

                                  }

                              }

                          } else {
                              $room_title = "no available room yet, check back later!";

                              $output = '<br><br>



          								<div class="alert alert-danger">
          								  ' . strtoupper($room_title) . '
          								</div>


          		        ';
                          }

                      }
              }else {
                echo '<span class="alert alert-danger col-md-12" style="margin-top:20px">No available hostel block yet!</span>';
              }
              }else {
                echo "Error: Contact Admin";
              }

          }

      }


      }




  //  echo $output;

?>
