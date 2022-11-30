              <div class="card-header">
                <h5 class="card-title text-success">PAYMENT CONFIRMATION PAGE</h5>
              </div>
              <div class="card-body">
                  <?php
				  include_once('remita_constants_acc.php');
                    if(isset($_GET['api']) && isset($_GET['tref']) && isset($_GET['osp'])){
                        $iid= base64_decode($_GET['api']);
                        $tref= base64_decode($_GET['tref']);
                        $amount= base64_decode($_GET['osp']);

												//collect it
												$iids = mysqli_real_escape_string($con, $_GET['api']);

												//pass iid to a reference
												$_SESSION['iidar'] = $iids;

                    	//invoice to
                    	$invoice_type  = get_invoice_type($con,$iid);//get invoice type
                    	$invoice_to = get_invoice_invoice_to($con,$iid);
                    	$pay_to = get_invoice_pay_to($con,$iid); //get who to pay the invoce to
                    	$invoice_for = get_invoice_for($con,$iid); //get what the invoice is made for
                    	$title = get_invoice_title($con,$iid); // get the invocie title
                    	$description = get_invoice_desc($con,$iid); //get the invoice desc
                    	$amount = get_invoice_amount($con,$iid); //get the invocie amount
                    	$total_amount = get_invoice_total_amount($con,$iid); //get invoice total amount
                    	$credit = get_invoiced_credit($con,$iid); //get invoice credit

											//pass it to session
								      $_SESSION['amnttr'] = $total_amount; //for remita
								      //$_SESSION['amtextra'] = 315;
								      $_SESSION['amtextra'] = 0;


                    	 $payment_status = get_invoice_payment_status($con,$iid); //get the invoice payment status

                    	$ofusware_share  = 1500;

                    	$remita_share = 323; //vogue pay share


                    	$total_amountt = $total_amount;
                        $school_share = $total_amountt  - $ofusware_share;
                        $school_share = $school_share;
                         $remita_share = 0;
                         $ss = $school_share;
                    	//candidates details
                        $fullname = get_user_fullname($con, $invoice_to);
                        $email = get_user_email($con,$invoice_to);
                        $phone_no = get_user_phone_no($con,$invoice_to);
                    	$a_no = get_user_application_number($con,$invoice_to);

                    //get current session
                        $session = get_current_session($con,$id = 1); //get current session
                        $session_title = get_current_session_title($con,$session); //get session title
                        // ////// remita processing codes starts here
                        $totalAmount = $total_amountt;
                        $timesammp=DATE("dmyHis");
                        $orderID = $tref;
                        $payerName = $fullname;
                        $payerEmail = $email;
                        $payerPhone = $phone_no;
                        $responseurl = PATH . "dashboard?sms=pay_response_accept&hubs=c81e728d9d4c2f636f067f89cc14862c";
                        $hash_string = MERCHANTID . SERVICETYPEID . $orderID . $totalAmount . $responseurl . APIKEY;
                        $hash = hash('sha512', $hash_string);
                        $itemtimestamp = $timesammp;
                        $itemid1="RETURNING SCHOOL FEE";//"itemid1";
                        $itemid2="ICT INFRASTUCTURE  FEE";//"34444".$itemtimestamp;
                        $beneficiaryName="IBBU Institute of Continuing Education and Elearning";
                        $beneficiaryName2="JD Lab Education Collection Account";
                        $beneficiaryAccount="3125288609"; //first bank 2033178028  //second account 3125288609
                        $beneficiaryAccount2="0767630685";//0767630685
                        $bankCode="011";//old code 511080786 //first bank code 011
                        $bankCode2="044";
                        $beneficiaryAmount = $ss;//"900";
                        $beneficiaryAmount2 = $ofusware_share; //"50";
                        $deductFeeFrom=1;
                        $deductFeeFrom2=0;

                        //The JSON data.
                        $content = '{"merchantId":"'. MERCHANTID
                        .'"'.',"serviceTypeId":"'.SERVICETYPEID
                        .'"'.",".'"totalAmount":"'.$totalAmount
                        .'","hash":"'. $hash
                        .'"'.',"orderId":"'.$orderID
                        .'"'.",".'"responseurl":"'.$responseurl
                        .'","payerName":"'. $payerName
                        .'"'.',"payerEmail":"'.$payerEmail
                        .'"'.",".'"payerPhone":"'.$payerPhone
                        .'","lineItems":[
                        {"lineItemsId":"'.$itemid1.'","beneficiaryName":"'.$beneficiaryName.'","beneficiaryAccount":"'.$beneficiaryAccount.'","bankCode":"'.$bankCode.'","beneficiaryAmount":"'.$beneficiaryAmount.'","deductFeeFrom":"'.$deductFeeFrom.'"},
                        {"lineItemsId":"'.$itemid2.'","beneficiaryName":"'.$beneficiaryName2.'","beneficiaryAccount":"'.$beneficiaryAccount2.'","bankCode":"'.$bankCode2.'","beneficiaryAmount":"'.$beneficiaryAmount2.'","deductFeeFrom":"'.$deductFeeFrom2.'"}
                        ]}';

                         $curl = curl_init();

                        curl_setopt_array($curl, array(
                          CURLOPT_URL => "https://login.remita.net/remita/ecomm/split/init.reg",
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_SSL_VERIFYPEER => false,
                          CURLOPT_ENCODING => "",
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 30,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => "POST",
                          CURLOPT_POSTFIELDS => $content,
                          CURLOPT_HTTPHEADER => array(
                            "Cache-Control: no-cache",
                            "Content-Type: application/json",
                          ),
                        ));

                        //curl_setopt($curl, CURLOPT_PROXY, $proxy_ip); //////
                        $json_response = curl_exec($curl);
                        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                        curl_close($curl);
                        $jsonData = substr($json_response, 6, -1);
                        $response = json_decode($jsonData, true);
                        //var_dump($response);
                         $statuscode = $response['statuscode'];
                        $statusMsg = $response['status'];


												if($invoice_type==1)
												{
													$transaction_type = 1; //registration returning student
												  $transaction_for = 1; //registration fee
												  $payment_method = 1; //1 for remita pay
												}else if($invoice_type==2)
												{
													$transaction_type = 2; //registration returning student
												  $transaction_for = 2; //registration fee
												  $payment_method = 1; //1 for remita pay
												}else if($invoice_type==3)
												{
													$transaction_type = 3; //registration returning student
												  $transaction_for = 3; //registration fee
												  $payment_method = 1; //1 for remita pay
												}



					  $iid2 = $iid;//pass invoice id
					  $title2 = $title;
					  $desc2 = $description;

					    if(!r_trf_exist($con, $tref, $invoice_to) && $tref != '')
					    {



							  $qry23="INSERT INTO `remita_webpay_transaction_log` (`invoice_id`, `transaction_type`, `user_id`, `transaction_for`,
							   `transaction_reference`, `title`, `description`, `amount`, `date_added`)

								VALUES ('".$iid2."','$transaction_type','".$invoice_to."','$transaction_for','$tref','".$title2."','".$desc2."','$total_amountt',NOW())";

							  $rst23 =  mysqli_query($con, $qry23);

							  if($rst23)
							  {//end of if update is successful


							  //do nothing for now

							  }
							  else
							  {
								   $msg =   '&nbsp;&nbsp;SERVER ERROR: Transaction Log has issues, we are sorry for the incovenience.';

								   header("Location: payments&error=".urlencode($msg)."&qlk=".md5(8)."&iid=".$iid);

							  }
						}//en dof if check
          ?>
					<div class="row">

											 <div class="col-md-4 help-block">
												 <p class="help-block">Invoice # <span class="badge badge-success"><?php echo $iid ;?></span></p>
													 Invoice Date: <?php echo get_invoice_date($con,$iid) ;?><br>
													 Due Date: <?php echo get_invoice_due_date($con,$iid) ;?><br>
													 Expire Date / Time: <?php echo get_invoice_exp_date($con,$iid) ;?>

											 </div><!-- /.col  md 4-->

											 <div class="col-md-4">
												 <p class="help-block">Invoice To </p>
													 <?php echo get_user_fullname($con,$invoice_to); ?><br><?php echo '<b>MATRIC NO.: '.strtoupper($a_no).'</b><br/>'; ?>
													 <?php echo get_user_address($con,$invoice_to); ?><br>
													 <?php echo show_state($con, get_user_state_id($con,$invoice_to)); ?><br>
														<?php //echo show_country(get_user_country_id($invoice_to)); ?>.<br>


											 </div><!-- /.col  md 4-->


											 <div class="col-md-4">

												 <p class="help-block">Pay To </p>
													 <?php echo $pay_to; ?><br>

											 </div><!-- /.col  md 4-->




										 </div><!-- /.col  md 12-->
										 <div class="row">
										 <button class="badge badge-success" style="font-size: 30px; margin-left:20px" disabled><?php echo '<b>TRANSACTION REF: '.strtoupper($tref).'</b><br/>'; ?></button>
										    <br/><br/>
										 <button class="badge badge-danger" style="font-size: 10px; margin-left:20px" disabled><b></b>Note:</b> Remita Processing fee is N 415</button>
										 </div>
										 <div class="row">
										     <div class="col-md-3 col-sm-12">
										         <br>
										         <button class="badge badge-success" style="font-size: 30px; float:left;" data-toggle="modal" data-target="#myModal">Yes Pay</button>
										     </div>
										     <div class="col-md-9 col-sm-12">
										         <br>
										         <button class="badge badge-danger" style="font-size: 60px; float:right;" disabled><?php echo 'N'.number_format($amount ,2); ?></button>
										     </div>
										 </div>
              </div>
           
<?php } ?>
      
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         </div>
      <div class="modal-body">

									<?php

			                if($statuscode=='025')
											{

			                  $rrr = trim($response['RRR']);
			                  $new_hash_string = MERCHANTID . $rrr . APIKEY;
			                  $new_hash = hash('sha512', $new_hash_string);

									?>

                        <?php //echo $rrr; ?><?php //echo MERCHANTID; ?>
                        <form action="<?php echo GATEWAYRRRPAYMENTURL; ?>" method="POST">
                        <input id="merchantId" name="merchantId" value="<?php echo MERCHANTID; ?>" type="hidden"/>
                        <input id="rrr" name="rrr" value="<?php echo $rrr; ?>" type="hidden"/>
                        <input id="responseurl" name="responseurl" value="<?php echo $responseurl; ?>" type="hidden"/>
                        <input id="hash" name="hash" value="<?php echo $new_hash;?>" type="hidden"/>

                          <h3>RRR:  <?php echo $rrr?> </h3>
                            <label class="control-label">Please Choose Payment Type</label>


                                <select id="paymenttype" name="paymenttype" class="form-control">
                                    <option value=""> -- Select --</option>
                                    <!--<option value="REMITA_PAY"> Remita Account Transfer</option>-->
                                   <option value="Interswitch"> Verve Card</option>
                                    <option value="UPL"> Visa</option>
                                    <option value="UPL"> MasterCard</option>
                                    <!-- <option value="PocketMoni"> PocketMoni</option>-->
                                    <option value="RRRGEN"> POS</option>
                                  <!--  <option value="ATM"> ATM</option>-->
                                    <option value="BANK_BRANCH">BANK BRANCH</option>
                                    <option value="BANK_INTERNET">BANK INTERNET</option>
                                </select>



                         <h4 id="rrr_info" class="hidden" >Are you sure you want to proceed with the payments online?</h4>


                        <?php


                				}
                        else
                				{

			                    echo  '<div class="alert alert-danger alert-dismissable">
			                            <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
			                              &nbsp;&nbsp; <i class="glyphicon glyphicon-exclamation-sign"></i>  Error Generating RRR -'.$statusMsg.'
			                        </div>';
			                  }


                        ?>




			</div><!-- /body -->


            <div class="modal-footer">

            <?php
			 if($statuscode=='025')
			 {

         ?>

            <a target="_blank"  href="create_sf_rrr_slip.php?r=<?php echo $rrr.'&qlk='.md5(rand(1,100)).'&u='.$user_id;?>" class="btn btn-info ">PRINT RRR TO PAY VIA BANK</a>

              <!--	<input id="yes_btn" type="submit" class="btn btn-sm btn-danger hidden disabled" name="" value="Not Available Now" / disabled>-->

            <input id="yes_btn" type="submit" class="btn btn-sm btn-success hidden" name="submit" value="YES,PAY ONLINE" />




                  <?php


        }

        ?>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


           </div>




            </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
