<?php
if(isset ($_GET['xd'] ,  $_GET['id']))

{

  $id = $_GET['xd'];

}
 //$app_id = get_applicant_number($con,$id);
 ?>
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">View Student</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  									<div class="col-md-12">
  												<a href="javascript:doit()"> <img src="assets/images/print_big.png" border=0  class="pull-right" title="Print" height="30" width="45"> </a>
                          <?php if(get_student_credential($con, $id) == '' ){  ?>  <a class="btn btn-danger btn-sm pull-right" > No Credentials </a> <?php }else{?>
                          <a class="btn btn-success btn-sm pull-right" target="_blank"   href="localhost/uploads/credential/<?php echo get_student_credential($con, $id); ?>"> View Credentials </a>
                            <?php } ?>
                          <a class="btn btn-success btn-sm pull-right" onclick="history.go(-1)";> Go Back </a>
                              <a class="btn btn-success btn-sm pull-right" onclick="reset_pw(<?=$id;?>)" style="color:white;">Reset Password</a>
                              <a class="btn btn-danger btn-sm pull-right" onclick="defer(<?=$id;?>)" style="color:white;">Defer Student</a>
                              <br><br><br>
                              <div class="col-md-12">
                              <div class="accordion custom-accordion" id="custom-accordion-one">
                              <div class="card mb-1">
                              <div class="card-header border-0" id="headingOne">
                              <h5 class="accordion-faq m-0 position-relative">
                              <a class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseNine">
                              Bio-data <i class="mdi mdi-chevron-down accordion-arrow"></i>
                              </a>
                              </h5>
                              </div>
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#custom-accordion-one">
                              <div class="card-body">
                              <?php include('profile/student/biodata.php'); ?>
                              </div>
                              </div>
                              </div>
                              <div class="card mb-1">
                              <div class="card-header border-0" id="headingTwo">
                              <h5 class="accordion-faq m-0 position-relative">
                              <a class="custom-accordion-title text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseFive">
                              Contact Information <i class="mdi mdi-chevron-down accordion-arrow"></i>
                              </a>
                              </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#custom-accordion-one">
                              <div class="card-body">
                              <?php include('profile/student/contact.php'); ?>
                              </div>
                              </div>
                              </div>
                              <div class="card mb-1">
                              <div class="card-header border-0" id="headingThree">
                              <h5 class="accordion-faq m-0 position-relative">
                              <a class="custom-accordion-title text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseSix">
                              Choice of Programmme <i class="mdi mdi-chevron-down accordion-arrow"></i>
                              </a>
                              </h5>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#custom-accordion-one">
                              <div class="card-body">
                              <?php include('profile/student/programme.php'); ?>
                              </div>
                              </div>
                              </div>
                              <div class="card mb-1">
                              <div class="card-header border-0" id="headingFour">
                              <h5 class="accordion-faq m-0 position-relative">
                              <a class="custom-accordion-title text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseSeven">
                              Academic History <i class="mdi mdi-chevron-down accordion-arrow"></i>
                              </a>
                               </h5>
                              </div>
                              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#custom-accordion-one">
                              <div class="card-body">
                              <?php include('profile/student/previous.php'); ?>
                              </div>
                              </div>
                              </div>
                              <div class="card mb-1">
                              <div class="card-header border-0" id="headingFive">
                              <h5 class="accordion-faq m-0 position-relative">
                              <a class="custom-accordion-title text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseSeven">
                              Health Information <i class="mdi mdi-chevron-down accordion-arrow"></i>
                              </a>
                               </h5>
                              </div>
                              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#custom-accordion-one">
                              <div class="card-body">
                              <?php include('profile/student/health.php'); ?>
                              </div>
                              </div>
                              </div>
                              </div>
                              </div>

  <?php echo date('Y:M:D H:i:s') ; ?>
  									</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
             function reset_pw(id)
             {
               $.post("php/reset_pw.php",{id:id},
               function(response,status)
               {
                 alert(response)

               });
             }

             function defer(id)
             {
               if(confirm("Do you  really want to proceed?"))
                {
                  $.post("php/defer_student.php",{id:id},

                   function(response,status)
                   {
                     alert(response);
                     window.setTimeout(link,2000);
                   });
                }
             }
             function link(){
               location.reload();
             }
           </script>
