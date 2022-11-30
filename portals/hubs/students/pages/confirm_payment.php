<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title text-success">PAYMENT CONFIRMATION PAGE</h5>
              </div>
              <div class="card-body">
                  <?php
                  include_once('remita_constants_sf.php');
                    if(isset($_GET['api']) && isset($_GET['tref']) && isset($_GET['osp'])){
                       $iid= base64_decode($_GET['api']);
                        $tref= base64_decode($_GET['tref']);
                        $amount= base64_decode($_GET['osp']);

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



                    	 $payment_status = get_invoice_payment_status($con,$iid); //get the invoice payment status

                    	$ofusware_share  = 1500;

                    	$remita_share = 323; //vogue pay share


                    	$total_amountt = $total_amount;
                        $school_share = $total_amountt  - $ofusware_share;
                        $school_share = $school_share;
                         $remita_share = 0;
                         $ss = $school_share;
                    	//candidates details
                        $fullname = get_student_fullname($con, $invoice_to);
                        $email = get_student_email($con,$invoice_to);
                        $phone_no = get_student_phone_no($con,$invoice_to);
                    	$a_no = get_user_matric_number($con,$invoice_to);

                    //get current session
                        $session = get_current_session_id($con); //get current session
                        $session_title = get_current_session_title($con,$session); //get session title
                        // ////// remita processing codes starts here
                        $totalAmount = $total_amountt;
                        $timesammp=DATE("dmyHis");
                        $orderID = $tref;
                        $payerName = $fullname;
                        $payerEmail = $email;
                        $payerPhone = $phone_no;
                        $responseurl = PATH . "dashboard?hub=pay_response?hubs=c81e728d9d4c2f636f067f89cc14862c";
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





                    }else
                    {
                      header('location: payments');
                    }
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
													 <?php echo get_student_fullname($con,$invoice_to); ?><br><?php echo '<b>MATRIC NO.: '.strtoupper($a_no).'</b><br/>'; ?>
													 <?php echo get_student_address($con,$invoice_to); ?><br>
													 <?php echo show_state($con, get_student_state_id($con,$invoice_to)); ?><br>
														<?php //echo show_country(get_user_country_id($invoice_to)); ?>.<br>


											 </div><!-- /.col  md 4-->


											 <div class="col-md-4">

												 <p class="help-block">Pay To </p>
													 <?php echo $pay_to; ?><br>

											 </div><!-- /.col  md 4-->




										 </div><!-- /.col  md 12-->
										 <div class="">
										 <button class="badge badge-success" style="font-size: 30px; margin-left:20px" disabled><?php echo '<b>TRANSACTION REF: '.strtoupper($tref).'</b><br/>'; ?></button>
										    <br/><br/>
										 <button class="badge badge-danger" style="font-size: 10px; margin-left:20px" disabled><b></b>Note:</b> Remita Processing fee is N 415</button>
                   </div><br>
										 <div class="row">
										     <div class="col-md-3">

										         <button class="badge badge-primary float-left" style="font-size: 30px;" data-toggle="modal" data-target="#myModal">Yes Pay</button>
										     </div>
										     <div class="col-md-9">

										         <button class="badge badge-danger float-right" style="font-size: 60px;" disabled><?php echo 'N'.number_format($amount ,2); ?></button>
										     </div>
										 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
