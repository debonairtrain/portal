<?php
session_start();
//error_reporting(0);
include_once('db_connect/db.php');
if(isset($_SESSION['user_id'])){
	$user_id=$_SESSION['user_id'];
	$role_id=$_SESSION['role_id'];
  include_once('hubs/functions.php');
  $session_id = get_current_session_id($con);
	$current_semester = get_current_semester($con, $id = 1);
	// include_once('hubs/applicant_functions.php');
	if ($role_id==='6') {
		include_once('hubs/students/php/get_student_by_id.php');
	}else if($role_id=='7'){
    include_once('hubs/applicant/php/get_applicant_by_id.php');
    include_once('hubs/applicant/php/get_applicant_profile_by_id.php');
    include_once('hubs/applicant/php/get_applicant_guidance_by_id.php');
		include_once('hubs/applicant/php/get_applicant_olevel_by_id.php');
    $app_dept =  strtoupper (get_department_title($con,$department_applied_for));
    $app_prog = strtoupper (get_programme_title($con, $programme_applied_for));
    $prog_type =  strtoupper (show_programme_type($school_id));
    $full_name=$middle_name .', '. $first_name .' '. $last_name;

          if($image==""){

        $images='<img src="uploads/bg.jpg" alt="" class="img-responsive"/>';
        }else{

        $images='<img src="uploads/'.$image.'" alt="" class="img-responsive"/>';

        }
	}
}else {
	header('location: logout.php');
}

if((time() - $_SESSION['last_time']) > 500){
	header('logout');
}else{
	$_SESSION['last_time'] = time();
}
?>
<!DOCTYPE html>
<html lang="en"
      dir="ltr">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Dashboard</title>
        <meta name="robots"
              content="noindex">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">
							<link rel="stylesheet"
			              href="assets/css/fullcalendar.css">
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">
              <link rel="stylesheet"
                    href="assets/css/bootstrap-touchspin.css">

              <!-- Vendor CSS -->
              <link rel="stylesheet"
                    href="assets/css/nestable.css">
              <script src="assets/js/jquery-2.1.4.min.js"></script>
              <meta http-equiv="Location" content="http://example.com/">
							<link rel="apple-touch-icon" sizes="76x76" href="assets/images/logo.png">
        <link rel="icon" type="image/jpeg" href="assets/images/logo.png">
    </head>

    <body class=" layout-fluid">
        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
        </div>
        <div class="mdk-header-layout js-mdk-header-layout">
            <div id="header"
                 data-fixed
                 class="mdk-header js-mdk-header mb-0">
                <div class="mdk-header__content">

                    <!-- Navbar -->
                  <?php include_once('hubs/nav.php'); ?>

                </div>
            </div>
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>

                            <?php

  					if(isset($_GET['hub'])){
              if ($role_id=='6') {
                $hub=$_GET['hub'];
    						include_once('hubs/students/pages/'.$hub.'.php');
              }else if ($role_id=='7') {
                $hub=$_GET['hub'];
    						include_once('hubs/applicant/pages/'.$hub.'.php');
              }

  					}else{
              if ($role_id=='6') {
                include_once('hubs/student_home.php');
              }else if ($role_id=='7') {
                include_once('hubs/app_home.php');
              }


  					}

  				?>

                        </div>

                    </div>

                    <?php include_once('hubs/header.php'); ?>

                </div>



            </div>
        </div>

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/dom-factory.js"></script>
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!-- Global Settings -->
        <script src="assets/js/settings.js"></script>

        <!-- Moment.js -->
        <script src="assets/vendor/moment.min.js"></script>
        <script src="assets/vendor/moment-range.js"></script>

        <!-- Chart.js -->
        <script src="assets/vendor/Chart.min.js"></script>
        <script src="assets/js/chartjs.js"></script>
        <script src="assets/vendor/jquery.nestable.js"></script>
        <script src="assets/vendor/jquery.bootstrap-touchspin.js"></script>
				<!-- Required by Calendar (fullcalendar) -->

        <!-- Fullcalendar -->
        <script src="assets/vendor/fullcalendar.min.js"></script>

        <!-- Init -->
        <script src="assets/js/fullcalendar.js"></script>
        <!-- Initialize -->
        <script src="assets/js/nestable.js"></script>
        <script src="assets/js/touchspin.js"></script>
        <!-- Student Dashboard Page JS -->
        <!-- <script src="assets/js/chartjs-rounded-bar.js"></script> -->

    </body>

		<div class="modal fade"
				 id="myModal"
				 tabindex="-1"
				 role="dialog"
				 aria-labelledby="myModalLabel"
				 aria-hidden="true">
				<div class="modal-dialog"
						 role="document">
						<div class="modal-content">
								<div class="modal-header">
										<button type="button"
														class="close"
														data-dismiss="modal"
														aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title"
												id="myModalLabel">New Event</h4>
								</div>
								<div class="modal-body">
										<form action="https://learnplus.demo.frontendmatter.com/student-ui-calendar.html">
												<div class="form-group">
														<label>Title</label>
														<input type="text"
																	 class="form-control">
												</div>
												<div class="row">
														<div class="col-md-6">
																<div class="form-group">
																		<label>Start</label>
																		<input type="text"
																					 class="form-control">
																</div>
														</div>
														<div class="col-md-6">
																<div class="form-group">
																		<label>End</label>
																		<input type="text"
																					 class="form-control">
																</div>
														</div>
												</div>
												<div class="form-group">
														<label>Description</label>
														<textarea name="details"
																			class="form-control"
																			rows="3"></textarea>
												</div>
										</form>
								</div>
								<div class="modal-footer text-center">
										<button type="button"
														class="btn btn-success btn-rounded">Save</button>
								</div>
						</div>
				</div>
		</div>

		<div class="modal fade" id="myModallTLOG" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabelTLOG">View Transaction Log</h4>
		      </div>
				<div class="modal-body" style="overflow:auto">
		        <?php echo view_remita_pay_transaction_log_min($con, $user_id, $invoice_type, $invoice_for); ?>
		      </div>
			  <div class="modal-footer">
		          <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"><span>Close</span> </button>
		      </div>
		      <div id="flash" class="label label-success pull-right"></div>
		      <div style="height:20px;"></div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="myModal_payment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

		            <a target="_blank"  href="create_sf_rrr_slip.php?r=<?php echo $rrr.'&qlk='.md5(rand(1,100)).'&iids='.$iid.'&u='.$user_id;?>" class="btn btn-info ">PRINT RRR TO PAY VIA BANK</a>

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
<!-- Mirrored from learnplus.demo.frontendmatter.com/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Oct 2022 19:29:57 GMT -->
</html>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Passport Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<form class="" action="" id="upload_image" method="post">
				<div class="modal-body">

	        <input type="file" name="image" class="form-control" value="" required>
					<div id="output_passport">

					</div>
	      </div>
	      <div class="modal-footer" id="saving_passport">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
			</form>
			<script type="text/javascript">
			$(document).ready(function(e){



			$("#upload_image").submit(function(event){
			event.preventDefault(); //prevent default action
			var post_url = "hubs/upload_image.php"; //get form action url
			var request_method = $(this).attr("method"); //get form GET/POST method

			$("#output_passport").html('<div style="margin-top:10px"><center>saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
			document.getElementById("saving_passport").style.display = "none";
			var form_data = new FormData(this); //Creates new FormData object


			$.ajax({
				url : post_url,
				type: request_method,
				data : form_data,
				contentType: false,
				cache: false,
				processData:false
			}).done(function(response){ //
				if(response==1){


				 document.getElementById("saving_passport").style.display = "block";
				 $("#output_passport").html("Uploaded successfully");
				}else{

				$("#output_passport").html(response);
				document.getElementById("saving_passport").style.display = "block";
				}
			});

			});
			});


			</script>
    </div>
  </div>
</div>
