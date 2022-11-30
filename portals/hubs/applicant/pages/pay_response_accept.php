
              <div class="card-header">
                <h5 class="card-title">Payments Response</h5>
              </div>
              <div class="card-body">

								<?php
								require 'remita_constants_acc.php';


								$orderID = "";
								if( isset( $_GET['orderID'] )) {
								$orderID = $_GET["orderID"];
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

								//collect invoice id
								$iid = $_SESSION['iidar'];



								//invoice to
								$invoice_type  = get_invoice_type($con, $iid);//get invoice type
								$invoice_to = get_invoice_invoice_to($con, $iid);
								$pay_to = get_invoice_pay_to($con, $iid); //get who to pay the invoce to
								$invoice_for = get_invoice_for($con, $iid); //get what the invoice is made for
								$invoice_title = get_invoice_title($con, $iid); // get the invocie title
								$invoice_desc = get_invoice_desc($con, $iid); //get the invoice desc
								$invoice_amount = get_invoice_amount($con, $iid); //get the invocie amount

								//pass invoice to user id
						 	  $user_id =  $invoice_to;


								//$level = get_user_level($con, $user_id); //get user level
								$programme_type = get_user_programme_type_applied_for($con, $user_id); //programme type
								$department = get_user_department_applied_for($con, $user_id); //department
								$programme  = get_user_programme_applied_for($con, $user_id);//programme


							 //get current session
							 $session = get_current_session($con, $id = 1); //get current session
							 $session_title = get_current_session_title($con, $session); //get session title

							 //get current semester
							 $semester = get_current_semester($con, $id = 1); //get current semester
							 $semester_title = get_semester_title($con, $semester); //get semester title


								 $remita_share_fix = '300';
								 $vat_fix = '115';

								 $extra_tot_m = $remita_share_fix + $vat_fix;



								 	$full_name = get_user_fullname($con, $invoice_to);
								 $email = get_user_email($con, $invoice_to);
								 $phone_no = get_user_phone_no($con, $invoice_to);


								 //collect matric number
								 $m_no = get_user_application_number($con, $user_id);


								  if(isset($_GET["orderID"]))
								  {//begin if interswitch rep

								 		  //finally if none of the above happens
								 		  echo remita_response_code($response_code, $rrr, $response_message, $orderID );

								    		 $amt = $_SESSION['amnttr']; // amount passed from the confirmation page this for the interswitch collagepay

								 	   if($response_code == '00' || $response_code == '01')
								 	   {

								 								 ///check if he / she has paid fee
								 								if(has_paid_acceptance_fee_session($con, $user_id,$session))
								 								{

								 											$msg ="&nbsp;&nbsp;&nbsp;&nbsp;Acceptance fee payment for this session has been made already. Please click on payment tab to print receipt";
								 											header("Location: view_invoice2?info=".urlencode($msg)."&qlk=".md5(2)."&auth=".sha1(md5(2))."&iid=".$iid);
								 								}
								 								else
								 								{
								 									$payment_year = date('Y');//payment year

																	$qqq1 = "INSERT INTO `acceptance_fee_payments`(`id`, `programme_type_id`, `department_id`, `programme_id`,
																			 `session`, `semester`, `student_id`, `payment_status`,`payment_mode`, `invoice_id`,
																			 `title`, `description`, `amount`, `date_added`)
																			 VALUES (NULL,'$programme_type','$department','$programme',
																			'$current_session','$current_semester','$invoice_to','1','$payment_mode',
																			'$id','$invoice_title','$invoice_desc','$invoice_amount',NOW())";
																 $rrr1 = mysqli_query($con,$qqq1);

								 								  if($rrr1)//mysqli_affected_rows($dbc)
								 								  {
								 										  //query
								 										  $q441 = "UPDATE invoices SET payment_status = 1 WHERE invoice_id = '$iid'"; //update invoice to paid where payment status is 1
								 										  $r441 = mysqli_query($con, $q441);

								 										  if(mysqli_affected_rows($con))
								 										  {//end of if update is successful


								 														echo '&nbsp;&nbsp;&nbsp;<a class="btn btn-success"  href="create_payment_slip.php?me='.$user_id.'&s='.$session.'&myid='.md5('fuckusha1sha1').'."   data-toggle="tooltip" data-placement="top" title="Download / Print  ">Click here to  DOWNLOAD / PRINT </a>';

								 											 $school_fee_payments_entered = true;

								 										  }
								 										  else
								 										  {
								 											 $msg =   '&nbsp;&nbsp;SERVER ERROR: Please try again.';
								 											header("Location: view_invoice2?error=".urlencode($msg)."&qlk=".md5(2)."&auth=".sha1(md5(2))."&iid=".$iid);

								 										  }//end of if invoice is updated

								 									}
								 									else
								 									{
								 										$msg =   '&nbsp;&nbsp;SERVER ERROR: Please try again .(2)';

								 										header("Location: view_invoice2?error=".urlencode($msg)."&qlk=".md5(2)."&auth=".sha1(md5(2))."&iid=".$iid);

								 									}//end of if inserted

								 								}//end of if he / she has paid school
								 	  }//en dof json of response code








								 			  $transaction_type = 1; //students
								 			  $transaction_for = 1; //registration fee
								 			  $payment_method = 1; //1 for remita pay


								 			  $iid2 = $iid;//pass invoice id
								 			  $title2 = $title;
								 			  $desc2 = $description;


								 			  //get payment status using
								 			  $payment_status = get_payment_status_by_resp_code($response_code);
								 			  //$amt = $amt / 100;
								 			  $amt = $tot;





								 			  if($rrr != '')
								 			  {


								 			    if($rrr != '' && $orderID != '')
								 			    {



								 					  $qry23="UPDATE  `remita_webpay_transaction_log`  SET
								 					   `payment_method` = '$payment_method', `payment_status` = '$payment_status', `response_code` = '$response_code', `response_description` = '$response_message',
								 					   `total_paid_by_buyer` = '$amt',`extra_charges_by_merchant` = '$extra_tot_m',
								 					    `transaction_id` = '$rrr',  `email` = '$email', `transaction_date` =NOW()

								 					   WHERE transaction_reference = '$orderID'";

								 					  $rst23 =  mysqli_query($con, $qry23);

								 					  //if(mysqli_affected_rows($dbc))
								 					  if($rst23)
								 					  {//end of if update is successful



								 					  }
								 					  else
								 					  {
								 						  $msg =   '&nbsp;&nbsp;SERVER ERROR: Transaction Log has issues, we are sorry for the incovenience.';

								 						 header("Location: view_invoice2?error=".urlencode($msg)."&qlk=".md5(2)."&iid=".$iid);

								 					  }


								 				}//en dof if check

								 			  }


								   }

								?>

						        <div class="col-md-12">


						                <div class="col-sm-6  help-block">
						                    <h4>For Support, Email or Call : </h4>
						                    <h5><span class="fa fa-envelope"></span> info@ofusware.com </h5>
						                     <h5><span class="fa fa-phone"></span> +234- 07068643562 OR 07060439379 </h5>


						                     <img src="images/support.png" class="pull-right" />

						                  </div>
						         </div>
              </div>
           