
              <div class="card-header">
                <h5 class="card-title">Payments Requery Status</h5>
              </div>
              <div class="card-body">

								</<?php


								//includes functions and classes for remita constants
								require 'remita_constants_sch.php';

								$orderID = "";
								if( isset( $_GET['txnref'] )) {
								$orderID = $_GET["txnref"];
								}
								$response_code ="";
								$rrr = "";
								$response_message = "";
								//Verify Transaction
								function remita_transaction_details($orderId){
										$mert =  MERCHANTID;
										$api_key =  APIKEY;
										$concatString = $orderId . $api_key . $mert;
										$hash = hash('sha512', $concatString);
										$url 	= CHECKSTATUSURL . '/' . $mert  . '/' . $orderId . '/' . $hash . '/' . 'orderstatus.reg';
										//  Initiate curl
										$ch = curl_init();
										// Disable SSL verification
										curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
										// Will return the response, if false it print the response
										curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
										// Set the url
										curl_setopt($ch, CURLOPT_URL,$url);
										// Execute
										$result=curl_exec($ch);
										// Closing
										curl_close($ch);
										$response = json_decode($result, true);
										return $response;
									}
									if($orderID !=null){
										$response = remita_transaction_details($orderID);
										$response_code = $response['status'];
										if (isset($response['RRR']))
											{
											$rrr = $response['RRR'];
											}
										$response_message = $response['message'];
								}



								//$response_code = '00';

					if($response_code == '01' || $response_code == '00')
					{



						$user_id = get_invoice_to_using_txnref($con, $orderID); //get the user id from

						//get the invoice details
							$iid = get_invoice_id_using_txnref($con, $orderID);

							//invoice to
							 $invoice_type  = get_invoice_type($con, $iid);//get invoice type
							 $invoice_to = get_invoice_invoice_to($con, $iid);
							 $pay_to = get_invoice_pay_to($con, $iid); //get who to pay the invoce to


							 $invoice_for = get_invoice_for($con, $iid); //get what the invoice is made for
							 $invoice_title = get_invoice_title($con, $iid); // get the invocie title
							 $invoice_desc = get_invoice_desc($con, $iid); //get the invoice desc

							 $invoice_amount = get_invoice_total_amount($con, $iid);


							$application_number = get_user_application_number($con, $user_id);
							$mno = str_replace('/','',$m_no);

							//$level = '100'; //get user level
							$level = get_user_level_per_programme($con, $user); //get user level
							$programme_type = get_user_programme_type_admitted_to($con, $user_id); //programme type
							$department = get_user_department_admitted_to($con, $user_id); //department
							$programme  = get_user_programme_admitted_to($con, $user_id);//programme


							$full_name = get_user_fullname($con, $user_id);//get full names

							//get current session
							$session = get_current_session($con, $id = 1); //get current session
							$session_title = get_current_session_title($con, $session); //get session title

							//get current semester
							$semester = get_current_semester($con, $id = 1); //get current semester
							$semester_title = get_semester_title($con, $semester); //get semester title

						//collect the commission
						$remita_share = '415';
						//$vat_fix = '15';

						$extra_tot_m = $remita_share;

						$stud_id = get_student_id_application_number($con, $m_no, $level);



						if(!student_id_exist_payments($con, $stud_id, $session,$semester) ) //in future add session to match exactly the candidate
						{

		 					$payment_year = date('Y');//payment year

					 //now i am adding cart_id , school_id, school_applied_for, change other names to last name and middle name rememeber,
			 $q = "SELECT  `school_id`, `department_id`, `programme_id`, `school_applied`,
					`department_applied`, `programme_applied`, `application_number`, `country_id`, `state_id`,
					`lga_id`, `first_name`,  `middle_name`, `last_name`, `phone_no`, `pdf_file`, `gender`, `religion`, `day`, `month`, `year`,
					 `marital_status`, `email`, `place_of_birth`,  `address`, `permanent_address`, `image`, `H_status`,
					 `blood_group`, `disability`, `entry_mode`, `medi`,  `guardian_name`, `guardian_tel`, `guardian_address`,
					 `guardian_relationship`, `sponsorship_type`, `sponsorship_name`, `sponsorship_address`,
					 `admission_status`, `admission_criteria`, `date_admitted`, `admission_serial_no`

					FROM `applicant`

					WHERE application_number = '$application_number';";

			 $r = mysqli_query($con,$q);


			 if(mysqli_num_rows($r) > 0)
			 {//if succesfully fetch applicant recor


					 //$initial = 0 ;

					 $total_in_programme = get_total_programme_students($programme_type,$programme,$level);

					 $total_in_programme = $total_in_programme + 1;

					 //generate matric number
					 $applicant_matric_number = generate_matric_number($con, $programme_type, $programme, $level, $total_in_programme);

				 //exit(print_r($row = mysqli_fetch_array($r, MYSQLI_ASSOC)));

				 while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))//fetch data to be migrated
				 {

					 //chedk if student has been added already an collect info if added //review this dont depend on this function
					 if(!application_number_exist($con, $application_number, $level))
					 {

								//collect the variables for inserting and check for special string using
								$fn = mysqli_real_escape_string($con,$row['first_name']); //first name
								$md_n = mysqli_real_escape_string($con,$row['middle_name']);
								$on = mysqli_real_escape_string($con,$row['last_name']);
								$pn = mysqli_real_escape_string($con,$row['phone_no']);
							 $e = mysqli_real_escape_string($con,$row['email']);
							 $add = mysqli_real_escape_string($con,$row['address']);
							 $padd = mysqli_real_escape_string($con,$row['permanent_address']);
							 $pob = mysqli_real_escape_string($con,$row['place_of_birth']);
							 $gn = mysqli_real_escape_string($con,$row['guardian_name']);
							 $gr = mysqli_real_escape_string($con,$row['guardian_relationship']);
							 $gt = mysqli_real_escape_string($con,$row['guardian_tel']);
							 $ga = mysqli_real_escape_string($con,$row['guardian_address']);
							 $sn = mysqli_real_escape_string($con,$row['sponsorship_name']);
							 $sa = mysqli_real_escape_string($con,$row['sponsorship_address']);
							 $ac = mysqli_real_escape_string($con,$row['admission_criteria']);
							 $med = mysqli_real_escape_string($con,$row['medi']);
							 $spt = mysqli_real_escape_string($con,$row['sponsorship_type']);


							 //get applicants info
							 $qq = "INSERT INTO `students`(`id`, `school_id`, `department_id`, `programme_id`, `school_applied`,`department_applied`,
							 `programme_applied`, `country_id`, `state_id`, `lga_id`,  `first_name`,`middle_name`, `last_name`, `phone_no`, `pdf_file`, `gender`,
							 `medi`,  `day`, `month`, `year`, `marital_status`, `number`, `application_number`, `username`, `password`, `email`,
								`address`, `permanent_address`, `image`, `blood_type`, `disability`, `mode_of_entry`, `award_in_view`,
								 `status`, `place_of_birth`, `religion`, `level`, `H_status`,
								`date_added`, `guardian_name`, `guardian_relationship`, `guardian_tel`, `guardian_address`,
								`sponsorship_type`, `sponsorship_name`, `sponsorship_address`, `date_admitted`, `admission_serial_no`)
								VALUES (NULL,'".$row['school_id']."','".$row['department_id']."','".$row['programme_id']."',
								'".$row['school_applied']."','".$row['department_applied']."','".$row['programme_applied']."','".$row['country_id']."','".$row['state_id']."',
								'".$row['lga_id']."','".$fn."','".$md_n."','".$on."','".$pn."',
								'".$row['pdf_file']."','".$row['gender']."','".$med."','".$row['day']."','".$row['month']."',
								'".$row['year']."','".$row['marital_status']."',('$applicant_matric_number'),'$application_number', ('$applicant_matric_number'),
								'".md5('0000')."','".$e."','".$add."','".$padd."','".$row['image']."','".$row['blood_type']."',
								'".$row['disability']."','".$row['entry_mode']."','1','1','".$pob."','".$row['religion']."',
								'$level','".$row['H_status']."',NOW(),'".$gn."','".$gr."',
								'".$gt."','".$ga."','$spt','".$sn."',
								'".$sa."', '".$ac."', '".$row['date_admitted']."', '".$row['admission_serial_no']."')";

								$rr = mysqli_query($con,$qq);


								 if($rr)//mysqli_affected_rows($con)
								 {

										$latest_student_id =  mysqli_insert_id($con); //do something like inserting in school fee payment for the latest student added

										if(has_paid_school_fee($con, $student_id,$session))
				 					 {
				 						 //echo '<br/><br/> <a target="_blank" href="create_app_payment_slip.php?qlk='.md5(8).'&me='.$invoice_to.'" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Click here to Print / Download Payment Receipt"><i class="glyphicon glyphicon-print"> </i> Print / Download Receipt</a>';
				 							echo '<li class="list-group-item list-group-item-info"><h4>Payment Already Processed!</h4></li><br>';

				 					 }//end of if applicnt id exist in payment
				 					 else
				 					 {

										 $payment_year = date('Y');//payment year  //payment method is 2

										 $qry33="INSERT INTO `school_fee_payments`(`id`, `programme_type_id`, `department_id`, `programme_id`,
											`session`, `semester`, `student_id`, `payment_status`, `invoice_id`,
											`title`, `description`, `amount`, `date_added`)
										 VALUES (NULL,'$programme_type','$department','$programme',
										 '$session','$semester','$invoice_to','1', '$iid','$invoice_title','$invoice_desc','$invoice_amount',NOW())";
											 //update invoice status to paid
										 $rr33 = mysqli_query($con,$qry33);



											 if($rr33)//mysqli_affected_rows($con)
											 {
											 //if done finally collect all info for receipt
												mysqli_query($con,"UPDATE invoices SET payment_status = '1' WHERE invoice_id = '$iid'");

											 $applicant_fee_payments_entered = true;

											 }
											 else
											 {
												 //show
												 echo $msg5 =  'System Error!. We are sorry for inconvinience.Please Retry again. Thank you.';

											 }

										}//end of if student doesnt exist

								 }
								 else
								 {
									 //show
								 echo $msg5 =  'System Error!. We are sorry for inconvinience.Please Retry again. Thank you.';

								}//end of if insert doesent work
					 }//end of if applicant doesnt exist system
					 else
					 {//but if applicant exist

						 //check for the applicant id in students table
						 $student_id = get_student_id_application_number($con, $application_number, $level);




						 if(student_id_exist_payments($con, $student_id, $session, $semester))
						 {

							 mysqli_query($con,"UPDATE invoices SET payment_status = '1' WHERE invoice_id = '$iid'");



						 }
						 else
						 {//if appicant is in students table and hant made payment tell the banker to retry
						 echo '<li class="list-group-item list-group-item-info"><h3>Payment already processed</h3></li><br>';

						 }
					 }//take infor mation to display only

				 }//end of while row fetching

		 }
		 else
		 {
				//else tell the admin to reprint

			 echo $msg =  '<li class="list-group-item list-group-item-danger"><h3> System Error! We are sorry for inconvenience.Please Retry again. Thank you. (02)</h3></li><br>';
		}

	}//end of if applicnt id exist in payment
	else
	{
	 echo '<li class="list-group-item list-group-item-info"><h3>Payment already processed</h3></li><br>';
	}

						$transaction_type = 3; //returning students
						$transaction_for = 3; //registration fee
						//$payment_method = 1; //1 for remita  epay, 2 - bank branch payment


						$iid2 = $iid;//pass invoice id
						$title2 = $title;
						$desc2 = $description;


						//get payment status using
						$payment_status = get_payment_status_by_resp_code($response_code);
						//$amt = $amt / 100;
						//$amt = $tot;

						//$rrr = '98908098';
						if($rrr != '')
						{


							if($rrr != '' && $orderID != '')
							{

								$qry23="UPDATE  `remita_webpay_transaction_log`  SET
								 `payment_method` = '$payment_method', `payment_status` = '$payment_status', `response_code` = '$response_code', `response_description` = '$response_message',
								 `total_paid_by_buyer` = '$invoice_amount',`extra_charges_by_merchant` = '$extra_tot_m',
									`transaction_id` = '$rrr',  `email` = '$email', `transaction_date` = NOW()

								 WHERE transaction_reference = '$orderID'";

								$rst23 =  mysqli_query($con, $qry23);
								if($rst23)
								{//end of if update is successful

								}
								else
								{

								}


							}//en dof if check

						}//end of RRR aint empty



					}//end of if response code is successull



								?>
 <?php echo remita_response_code($response_code, $rrr, $response_message, $orderID ); ?>




              </div>
            