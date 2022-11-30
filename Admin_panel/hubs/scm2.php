 
  <br/><br/>
  
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active" ><a href="dashboard?hubs=payment_confirm">Payment Confirmation</a></a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="dashboard?hubs=scm">Search Invoice</a></li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- blank block -->
<div class="page-content-wrapper">
  <div class="page-content">


<br><br>
<?php 
   if(isset($_GET['invoice_id'])){
    include_once('../db_connect/db.php');
    $iid= base64_decode($_GET['invoice_id']);





	//invoice to
	$invoice_type  = get_invoice_type($con,$iid);//get invoice type
	$invoice_to = get_invoice_invoice_to($con,$iid);
	$pay_to = get_invoice_pay_to($con,$iid); //get who to pay the invoce to
	$invoice_for_id = get_invoice_for($con,$iid); //get what the invoice is made for
	$title = get_invoice_title($con,$iid); // get the invocie title
	$description = get_invoice_desc($con,$iid); //get the invoice desc
	$amount = get_invoice_amount($con,$iid); //get the invocie amount
	$total_amount = get_invoice_total_amount($con,$iid); //get invoice total amount
	$credit = get_invoiced_credit($con,$iid); //get invoice credit
    $invoice_date = get_invoice_date($con,$iid);
    $invoice_due_date = get_invoice_due_date($con,$iid);

	$a_no = get_applicant_application_number($con,$invoice_to);


	 //candidates details
	 $fullname = get_applicant_fullname($con, $invoice_to);
	 $email = get_applicant_email2($con,$invoice_to);
	 $phone_no = get_applicant_phone_no($con,$invoice_to);
	 $address = get_applicant_address($con,$invoice_to);


//get current session
$session = get_current_session($con,$id = 1); //get current session



 $session_title = get_current_session_title($con,$session); //get session title
 
 if($invoice_for_id=='1')
 {
     $invoice_for ='APPLICATION FEE PAYMENT';
 }else if($invoice_for_id=='2')
 {
     $invoice_for ='ACCEPTANCE FEE PAYMENT';
 }else if($invoice_for_id=='3')
 {
    $invoice_for ='HOSTEL FEE PAYMENT';   
 }else if($invoice_for_id=='4')
 {
     $invoice_for ='FRESH SCHOOL FEE PAYMENT';
 }else if($invoice_for_id=='5')
 {
     $invoice_for ='RETURNING SCHOOL FEE PAYMENT';
 }
    }
?>
     <li class="list-group-item help block" style="text-align:center;">
        Description (<?=$session_title;?> Academic Session)
    </li>
    <br>
    <form action="#" method="post" id="confirm_payment">
        <button class="btn btn-success">Confirm Payment</button>
        <input type="hidden" name="invoice_for_id" value="<?php echo $invoice_for_id;?>">
        <input type="hidden" name="invoice_to" value="<?php echo $invoice_to;?>">
        <input type="hidden" name="invoice_id" value="<?php echo $iid;?>">
        <input type="hidden" name="invoice_amount" value="<?php echo $total_amount;?>">
        <input type="hidden" name="invoice_desc" value="<?php echo $description;?>">
        <div id="confirm_error"></div>
    </form>
    <table class="table">
        <thead>
            <th width="40%">Invoice Id Details</th>
            <th width="30%">Invoice To</th>
            <th width="30%">Pay Too</th>
        </thead>

            <tr>
                <td width="40%">
                    Invoice #
                    <span class="badge badge-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$iid;?></span>
                    <br>
                    Invoice Date: <?=$invoice_date;?>
                    <br>
                    Due Date: <?=$invoice_due_date;?>

                    <li class="list-group-item help block">
                        <span>
                            <h2><b><?=$invoice_for;?></b></h2>
                        </span>
                    </li>
                </td>

                <td width="30%">
                    FullName: <span  style="font-weight:bold;"><?=$fullname;?></span>
                    <br>
                    Application No.: <span  style="font-weight:bold;"><?=$a_no;?></span>
                    <br>
                    Phone Number: <span style="font-weight:bold;"><?=$phone_no;?></span>
                    <br>
                    Address: <span style="font-weight:bold;"><?=$address;?></span>
                    <br>
                    <hr>

                    <li class="list-group-item help block" style="height:auto;">
                        <span>
                            <?=$description;?>
                        </span>
                    </li>

                    <li class="list-group-item help block">
                        <span>
                            SUB TOTAL:
                        </span>
                        <span><?=$total_amount;?></span>
                    </li>

                    <li class="list-group-item help block">
                        <span>
                            CREDIT:
                        </span>
                        <span >N<?=$credit;?></span>
                    </li>
                </td>

                <td width="30%">
                   <?=$pay_to;?>
                    
                    <hr>

                    <li class="list-group-item help block" style="height:auto; font-size:40px; font-weight:bold;">
                        <span>
                            TOTAL - N<?php echo number_format(($total_amount),2);?>
                        </span>
                    </li>
                </td>

            </tr>

        </tbody>
    </table>

                  </div>
                </div>
    <script >
            $(document).ready(function(e){
                //alert();
            $("#confirm_payment").submit(function(event){
            event.preventDefault(); //prevent default action
            var post_url = "php/confirm_payment.php"; //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            
            $("#confirm_error").html('<div style="margin-top:10px"><center>Confirming Payment, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
            
            var form_data = new FormData(this); //Creates new FormData object
            
            //alert(request_method);
            $.ajax({
            url : post_url,
            type: request_method,
            data : form_data,
            contentType: false,
            cache: false,
            processData:false
            }).done(function(response){ //
            //alert(response);
            if(response==1){
             window.location = "dashboard?hubs=payment_confirm";
            }else{
              alert(response);
            $("#confirm_error").html('');
            
            
            }
            });
            
            });
            });
</script>
