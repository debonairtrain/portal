<?php
include_once '../functions.php';
include_once 'remita_constants.php';
include_once('../../../db_connect/db.php');
//include_once 'includes/sms.php';

$json = file_get_contents('php://input');
$arr=json_decode($json,true);
	try {
		if($arr!=null)
		{
			foreach($arr as $key => $value)
			{
				$orderRef = $value['orderRef'];
				//Confirm transaction Status to be sure it is coming from Remita
				$response =  remita_transaction_details($orderRef);
				$response_code = $response['status'];
				$response_reason = $response['message'];
				$rrr = $response['RRR'];
			    $orderId =$response['orderId'];



    		    if($response_code == '01' || $response_code == '00' )
    			{

    						//Payment Successful, You can Update Status to Paid here on Database;

    						$user_id = get_invoice_to_using_txnref($con, $orderId); //get the user id from


    						//get the invoice details
    						$iid = get_invoice_id_using_txnref($con, $orderId);


    						 $invoice_type  = get_invoice_type($con, $iid);//get invoice type
    						 $invoice_to = get_invoice_invoice_to($con, $iid);
    						 $pay_to = get_invoice_pay_to($con, $iid); //get who to pay the invoce to
    						 $invoice_for = get_invoice_for($con, $iid); //get what the invoice is made for
    						 $invoice_title = get_invoice_title($con, $iid); // get the invocie title
    						 $invoice_desc = get_invoice_desc($con, $iid); //get the invoice desc
    						 $amount = get_invoice_amount($con, $iid); //get the invocie amount
    						 $total_amount = get_invoice_total_amount($con, $iid); //get invoice total amount
    						 $invoice_amount =	$total_amount;


    						//$level = '100'; //get user level
								$programme_type = get_user_programme_type_applied_for($con, $user_id); //programme type
								$department = get_user_department_applied_for($con, $user_id); //department
								$programme  = get_user_programme_applied_for($con, $user_id);//programme


    						 //get current session
    						 $current_session = get_current_session($con, $id = 1); //get current session
    						 $session_title = get_current_session_title($con, $current_session); //get session title

    						 //get current semester
    						 $semester = get_current_semester($con, $id = 1); //get current semester
    						 $semester_title = get_semester_title($con, $semester); //get semester title


    					   $remita_share_fix = '300';
    					   $vat_fix = '115';


    					   $extra_tot_m = $remita_share_fix + $vat_fix;


    				     $full_name = get_user_fullname($con, $invoice_to);
    					 $email = get_user_email($con, $invoice_to);
    					 $phone_no = get_user_phone_no($con, $invoice_to);


							 if(!has_paid_applicant_fee($con, $invoice_to, $current_session))
							 {


								 $payment_year = date('Y');//payment year


									$qqq1 = "INSERT INTO `applicants_fee_payments`(`id`, `programme_type_id`, `department_id`, `programme_id`,
 									`session`, `applicant_id`, `payment_method`, `invoice_id`, `amount`, `date_added`)
 								 VALUES (NULL,'$programme_type','$department','$programme','$session','$invoice_to','1', '$iid','$invoice_amount',NOW())";

									$rrr1 = mysqli_query($con,$qqq1);

											if($rrr1)//mysqli_affected_rows($dbc)
											{
												//if done finally collect all info for receipt



																				//query
																				$q441 = "UPDATE invoices SET payment_status = 1 WHERE invoice_id = '$iid'"; //update invoice to paid where payment status is 1
																				$r441 = mysqli_query($con, $q441);

																				if(mysqli_affected_rows($con))
																				{//end of if update is successful

																				echo '<li class="list-group-item list-group-item-info"><h3>Payment succesfully processed</h3></li><br>';

																				 $school_fee_payments_entered = true;

																				}
																				else
																				{
																						echo $msg =   '&nbsp;&nbsp;SERVER ERROR1: Please try again.';

																				}//end of if invoice is updated


											}
											else
											{
												echo $msg =   '&nbsp;&nbsp;SERVER ERROR: Please try again .(2)';

											}//end of if inserted

							 }//end of if student doesnt exist
							 else
							 {//if student exist

								 echo '<li class="list-group-item list-group-item-info"><h3>Payment already processed</h3></li><br>';

							 }//end of if student already exist




    				  $transaction_type = 1; //returning FEE
    				  $transaction_for = 1; //registration fee
    				  $payment_method = 1; //1 for remita pay epayments


    				  $iid2 = $iid;//pass invoice id
    				  $title2 = $title;
    				  $desc2 = $description;


    				  //get payment status using
    				  $payment_status = get_payment_status_by_resp_code($response_code);
    				  //$amt = $amt / 100;


    				  $amt = $tot;




    					if($rrr != '')
    					{


    					    if($rrr != '' && $orderId != '')
    					    {


    							//also balance the paid amount against expected and may be the transaction fee paid


    							$qry23="UPDATE  `remita_webpay_transaction_log`  SET
    							   `payment_method` = '$payment_method', `payment_status` = '$payment_status', `response_code` = '$response_code', `response_description` = '$response_message',
    							   `total_paid_by_buyer` = '$amt',`extra_charges_by_merchant` = '$extra_tot_m',
    							    `transaction_id` = '$rrr',  `email` = '$email', `transaction_date` =NOW()

    							   WHERE transaction_reference = '$orderId'";

    							$rst23 =  mysqli_query($con, $qry23);
    							if($rst23)
    							{
    									 						$response_code = '';
                            		    $rrr = '';
                            		    $orderId = '';

    							}else{
    								 echo $msg =   '&nbsp;&nbsp;SERVER ERROR: Transaction Log has issues, we are sorry for the incovenience.';
    							}
    						}//en dof if check
    					}

    		}//end of if response code is successull
			}//end of for each
		}

		exit('OK');

	}catch (Exception $e) {
		exit('Not OK');
	}




function remita_transaction_details($orderId){
	$mert =  "4012912825";//2815618357
	$api_key = "Y71O2FOB";//527461
	$mode = "Live";
	$hash_string = $orderId . $api_key . $mert;
	$hash = hash('sha512', $hash_string);
	if( $mode == 'Test' ){
		$query_url = 'http://www.remitademo.net/remita/ecomm';
		}
	else if( $mode == 'Live' ){
		$query_url = 'https://login.remita.net/remita/ecomm';
		}
	$url 	= $query_url . '/' . $mert  . '/' . $orderId . '/' . $hash . '/' . 'orderstatus.reg';
	$result = file_get_contents($url);
    $response = json_decode($result, true);
    return $response;
}
?>
