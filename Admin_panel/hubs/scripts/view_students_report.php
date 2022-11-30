<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Reports</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">View Students Report</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="col-md-12">
                          <button type="button" class="btn btn-info" name="button"> Total Active Applicants <span class="btn btn-default" style="width: 60px ;background-color:white; color:green;  border-radius: 8px;"><?php echo get_total_students($con, $session)?></span> </button>
                      <button type="button" class="btn btn-info" name="button"> Total Resticated Applicants <span class="btn btn-default" style="width: 60px ;background-color:white; color:green;  border-radius: 8px;">0</span></button><br><br>

                      <div class="col-md-12">
                      <div class="accordion custom-accordion" id="custom-accordion-one">
                      <div class="card mb-1">
                      <div class="card-header border-0" id="headingOne">
                      <h5 class="accordion-faq m-0 position-relative">
                      <a class="custom-accordion-title text-reset d-block" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseNine">
                      Faculties <i class="mdi mdi-chevron-down accordion-arrow"></i>
                      </a>
                      </h5>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#custom-accordion-one">
                      <div class="card-body">
                        <div class="panel-body">
                             <?php
                              //$sess = 3;
                                $q = "SELECT * FROM faculties WHERE status='1' ORDER BY title ";
                                $r = mysqli_query($con, $q);

                                if(mysqli_num_rows($r)>0)
                                {

                                    while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
                                    {

                                        $id = $row['id']; // collect the id
                                        $title = $row['title']; //collect the title
                  					  $programme_type = $row['school_id']; //collect the title
                            ?>
                           <!-- bar for faculty -->
                           <div class="row">
                          <span class="pull-left" style="margin-left:14px; font-size:12px"><?php echo $title; ?> /<span class="help-block"> <?php echo get_user_faculty($con, $row['id']); ?></span></span>
                          <span class="pull-right"><span class="pull-right" style="font-size:12px">
                          <?php echo get_percent($value = get_total_faculty_students($con, $programme_type,$id), $total = get_total_students($con,$session)); ?>%</span>
                          </div>

                          <div class="progress">

                              <div class="progress-bar <?php  echo get_color (get_percent($value = get_total_faculty_students($con, $id, $session), $total = get_total_students($con, $session))); ?>"
                                  style="width: <?php echo get_percent($value = get_total_faculty_students($con, $id, $session), $total = get_total_students($con, $session)); ?>%">
                              </div>

                          </div>



                         <?php
                        }//end of while
                    }//end of if

                  ?>
                      </div>
                      </div>
                      </div>
                      <div class="card mb-1">
                      <div class="card-header border-0" id="headingTwo">
                      <h5 class="accordion-faq m-0 position-relative">
                      <a class="custom-accordion-title text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseFive">
                      Departments <i class="mdi mdi-chevron-down accordion-arrow"></i>
                      </a>
                      </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#custom-accordion-one">
                      <div class="card-body">
                      <?php //include('profile/student/contact.php'); ?>
                      </div>
                      </div>
                      </div>
                      <div class="card mb-1">
                      <div class="card-header border-0" id="headingThree">
                      <h5 class="accordion-faq m-0 position-relative">
                      <a class="custom-accordion-title text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseSix">
                      Programmes <i class="mdi mdi-chevron-down accordion-arrow"></i>
                      </a>
                      </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#custom-accordion-one">
                      <div class="card-body">
                      <?php //include('profile/student/programme.php'); ?>
                      </div>
                      </div>
                      </div>
                      <div class="card mb-1">
                      <div class="card-header border-0" id="headingFour">
                      <h5 class="accordion-faq m-0 position-relative">
                      <a class="custom-accordion-title text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseSeven">
                      Gender <i class="mdi mdi-chevron-down accordion-arrow"></i>
                      </a>
                       </h5>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#custom-accordion-one">
                      <div class="card-body">
                      <?php //include('profile/student/previous.php'); ?>
                      </div>
                      </div>
                      </div>
                      <div class="card mb-1">
                      <div class="card-header border-0" id="headingFive">
                      <h5 class="accordion-faq m-0 position-relative">
                      <a class="custom-accordion-title text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseSeven">
                      Level <i class="mdi mdi-chevron-down accordion-arrow"></i>
                      </a>
                       </h5>
                      </div>
                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#custom-accordion-one">
                      <div class="card-body">
                      <?php// include('profile/student/health.php'); ?>
                      </div>
                      </div>
                      </div>
                      <div class="card mb-1">
                      <div class="card-header border-0" id="headingSix">
                      <h5 class="accordion-faq m-0 position-relative">
                      <a class="custom-accordion-title text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSeven">
                      States <i class="mdi mdi-chevron-down accordion-arrow"></i>
                      </a>
                       </h5>
                      </div>
                      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
                      <div class="card-body">
                      <?php// include('profile/student/health.php'); ?>
                      </div>
                      </div>
                      </div>
                      <div class="card mb-1">
                      <div class="card-header border-0" id="headingSix">
                      <h5 class="accordion-faq m-0 position-relative">
                      <a class="custom-accordion-title text-reset collapsed d-block" data-bs-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSeven">
                      LGA <i class="mdi mdi-chevron-down accordion-arrow"></i>
                      </a>
                       </h5>
                      </div>
                      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
                      <div class="card-body">
                      <?php// include('profile/student/health.php'); ?>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>

                        </div>



</div>
</div>
</div>
</div>
