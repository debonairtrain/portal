
              <div class="card-header">
                <h5 class="card-title">Payments Requery Status</h5>
              </div>
              <div class="card-body">

								</<?php


								//includes functions and classes for remita constants
								require 'remita_constants_acc.php';

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


							$m_no = get_user_application_number($con, $user_id);
							$mno = str_replace('/','',$m_no);

							//$level = '100'; //get user level
							$level = get_user_level($con, $user); //get user level
							$programme_type = get_user_programme_type_applied_for($con, $user_id); //programme type
							$department = get_user_department_applied_for($con, $user_id); //department
							$programme  = get_user_programme_applied_for($con, $user_id);//programme


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



					 if(has_paid_acceptance_fee_session($con, $student_id,$session))
					 {
						 //echo '<br/><br/> <a target="_blank" href="create_app_payment_slip.php?qlk='.md5(8).'&me='.$invoice_to.'" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Click here to Print / Download Payment Receipt"><i class="glyphicon glyphicon-print"> </i> Print / Download Receipt</a>';
							echo '<li class="list-group-item list-group-item-info"><h4>Payment Already Processed!</h4></li><br>';

					 }//end of if applicnt id exist in payment
					 else
					 {

								 $payment_year = date('Y');//payment year  //payment method is 2

								 $qry44="INSERT INTO `acceptance_fee_payments`(`id`, `programme_type_id`, `department_id`, `programme_id`,
									`session`, `semester`, `student_id`, `payment_status`, `invoice_id`,
									`title`, `description`, `amount`, `date_added`)
								 VALUES (NULL,'$programme_type','$department','$programme',
								 '$session','$semester','$invoice_to','1', '$iid','$invoice_title','$invoice_desc','$invoice_amount',NOW())";


								 $rst44 =  mysqli_query($con, $qry44);


								 if(mysqli_affected_rows($con))
									{//end of if update is successful


										//query
										$q441 = "UPDATE invoices SET payment_status = 1 WHERE invoice_id = '$iid'"; //update invoice to paid where payment status is 1
										$r441 = mysqli_query($con, $q441);

										if(mysqli_affected_rows($con))
										{//end of if update is successful

												//clear some sessions
											 $school_fee_payments_entered = true;

										}
										else
										{
											 echo $msg =   '&nbsp;&nbsp;SERVER ERROR: Error(1).';

										}//end of if invoice is updated

									}
									else
									{
										$msg =   '&nbsp;&nbsp;SERVER ERROR: Error(2).';

										//header("Location: gateway.php?act=view_invoices3&error=".urlencode($msg)."&qlk=".md5(2)."&auth=".sha1(md5(2))."&iid=".$iid);

									}//end of if inserted

					 }

						$transaction_type = 2; //returning students
						$transaction_for = 2; //registration fee
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
           