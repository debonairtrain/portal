      <div class="card col-md-12 mt-4 mb-4" >
        <?php //get admission status

       if(is_applicant_admitted($con, $user_id) == '1' ) //if admitted && get_admission_batch($user_id) == 1
     {
       ?>
     &nbsp;&nbsp;<h3 class="alert alert-info">Congratulations!.</h3>
               <?php
     }
     else
     {
    ?>
      &nbsp;&nbsp;<h4 class="btn btn-login btn-green"><span style="font-size:20px; color:red;">You have NOT been offered Admission yet, please check back later.</span> </h4>
   <?php

     }
     ?>
     <div class="modal-body">
     <?php //get admission status
       ////switch off the admission manager
       if(is_applicant_admitted($con, $user_id) == '1'  ) //if admitted && get_admission_batch($user_id) == 1
     {
       ?>




             <h5> You have been  offered Provisional Admission into our
                 <strong><?php echo $app_dept; ?></strong>
                 programme to study <strong><?php echo $app_prog; ?></strong> for
                 <strong><?php echo get_current_session_title($con, $id = 1); ?></strong> Academic Session.
             </h5>


               <hr/>

               <ul class="list-group">
                   <li class="list-group-item list-group-item-danger"><strong>Note to all:</strong></li>
                   <li class="list-group-item">1. Screening and Registration Exercise starts Monday 22ND, September 2019 To 3rd October, 2019.</li>
                   <li class="list-group-item">2. Acceptance Fee of N10,000 is to be paid into the Institute's Account before the screening.</li>
                   <li class="list-group-item">3. Result verification Fee for (i)O'level result : N3,000   (ii) for A'level is: N6,000 and (iii) For Teacher's Grade II results is : N5,000.. all fees are to be paid into the Institute's Account before the screening.</li>
                   <li class="list-group-item">4. All admitted candidates must come along to the screening center with <strong>payment tellers (evidence of payment)</strong> and <strong>valid scratch cards</strong> of various results entered during the application process.</li>
                 <!---<li class="list-group-item">5. Kindly note that late registration starts <strong>10th August, 2018</strong> which will attract additional fee of <strong>N10,000</strong> . </li>-->

                 <!--(Except for Teacher's Grade II results)-->





                   <li class="list-group-item">6. You are required to print your Notification Letter  and bring with you to the screening center</li>
                   <li class="list-group-item">7. You are required to bring  your <b> Application Acknowledgement Slip </b> and all<b> Valid Original Credentials</b> </li>
                   <li class="list-group-item">8. <b>Screening Center</b> is at E. T. F -  Abdullahi Kure Road, Behind G. S. S. Minna, Commissioner Quarters.
                          NIGER STATE for  help,  call 08089376869. Thanks  </li>


                  <li class="list-group-item"><a class="btn btn-info btn-lg"  style="width:100%;" href="create_application_letter.php?u=<?php echo $user_id;?>&c=<?php echo md5('EasyBrother'); ?>" data-toggle="tooltip" target="_blank" data-placement="top" data-original-title="Click here to print your NOTIFICATION Letter"> &nbsp; <span>Click here to print your Notification Letter</span></a></li>

                <!--  <li class="list-group-item"><a class="btn btn-info"  style="width:100%;" href="dashboard.php?act=payments&c=<?php //echo md5('EasyBrother'); ?>" data-toggle="tooltip"  data-placement="top" data-original-title="Click here to start Registration"><i class="glyphicon glyphicon-ok"> </i> &nbsp; Click here to start Registration / Generate Invoice</a></li>-->


               </ul>


               <?php

     }
    ?>

            </div>

              </div>
