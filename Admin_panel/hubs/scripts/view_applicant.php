<?php
if(isset ($_GET['xd'] ,  $_GET['id']))

{

  $id = $_GET['xd'];

}
if(isset($_GET['api'])){
          $id=base64_decode($_GET['api']);

        }else{
             $id=0;
        }
 $app_id = get_applicant_number($con,$id);
 ?>
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Admission</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">View Applicant</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  									<div class="col-md-12">
                      <?php if(is_applicant_admitted($con, $id) == '0'){ ?>
  <button type="button" class="btn btn-primary btn-style" data-bs-toggle="modal" data-bs-target="#myModall_admit_applicant">
                Admit Candidate

</button>
 <?php }else if(is_applicant_admitted($con, $id) == '1'){?>
<button type="button" class="btn btn-warning btn-style" data-bs-toggle="modal" data-bs-target="#myModall_admit_applicant">
                Change Admission
 </button>
 <?php } else{ ?>

                                   <?php }  ?>
<?php if(get_applicant_credential($con, $id) == ' ' ){  ?>
<a type="button" class="btn btn-primary btn-style" target="_blank"   href="https://eportals.ibbuconsult.com.ng/pd/uploads/credential/<?php echo get_applicant_credential($con, $id); ?>">
                View Credential
 </a>
 <?php }else{?>
<button type="button" class="btn btn-danger btn-style" data-toggle="modal"
                data-target="#exampleModalScrollable2">
                No Credential
 </button>
 <?php } ?>
<button type="button" class="btn btn-danger btn-style" data-toggle="modal"
                data-target="#exampleModalScrollable2">
                Go Back
 </button><br><br><br>
 <div class="row">

                              <div class="col-lg-8 mb-4">
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
                              <?php include('profile/applicant/biodata.php'); ?>
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
                              <?php include('profile/applicant/contact.php'); ?>
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
                              <?php include('profile/applicant/programme.php'); ?>
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
                              <?php include('profile/applicant/previous.php'); ?>
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
                                <?php if(isset($_GET['api'])){
                                          $id=base64_decode($_GET['api']);

                                        }else{
                                             $id=0;
                                        } ?>
                              <?php include('profile/applicant/health.php'); ?>
                              </div>
                              </div>
                              </div>
                              </div>
                                <?php echo date('Y:M:D H:i:s') ; ?>
                              </div>
                              <div class="col-md-4">
					<h4> Exam Type 1</h4>

  <?php

  							  $q = "SELECT `id`, `applicant_id`, `exam_type`, `exam_year`, `exam_month`, `subject1`, `grade1`, `subject2`,
  								   `grade2`, `subject3`, `grade3`, `subject4`, `grade4`, `subject5`, `grade5`, `subject6`, `grade6`,
  								   `subject7`, `grade7`, `subject8`, `grade8`, `subject9`, `grade9`, `exam_no`, `type`
  								   FROM `applicants_olevel` WHERE applicant_id = '$id' AND type = '1'";
  							  $r = mysqli_query($con,$q);

  							  //if(mysqli_num_rows($r) > 0 )
  			  //				{

  								  $rec = mysqli_fetch_array($r,MYSQLI_ASSOC)
  								  //while($rec = mysqli_fetch_array($r,MYSQLI_ASSOC))
  			  //					{

  						  ?>

	<table class="table table-condensed">

	<tr>
	<td width="100%">
	<label for="edit-olexam1">Exam Number</label>
	<input VALUE="<?php  echo $rec['exam_no']; ?>" type="text" class="form-control" name="exam_no" readonly="readonly" >
	</td>
	</tr>
	</table>


	<table class="table table-condensed">
	<tr>
	<td width="100%">
	<label for="edit-olexam1">OLevel Examination Type (1) </label>
	<select id="edit-olexam1" name="olexam1" class="form-control"  disabled="disabled">
    <?php echo select_applicant_exam_type($rec['exam_type']); ?>
	</select>
	</td>
	</tr>
	</table>


	<table class="table table-condensed">
	<tr>
	<td width="50%">
		<label for="edit-eyear1">Examination Year</label>
	<select id="edit-eyear1" name="eyear1" class="form-control" disabled="disabled" >

	<option value="0">-- Please Select -- </option>
    <?php  echo year($rec['exam_year']); ?>
	</select>
	<td>
	<td width="50%">
		<label for="edit-emonth1">Month</label>
	<select id="edit-emonth1" name="emonth1" class="form-control"  disabled="disabled">
    <?php echo select_applicant_exam_month($rec['exam_month']); ?>
	</select>
	</td>
	</tr>
	</table>


	<table class="table table-condensed">
	<tr class="active">
		<td width="5%">S/N</td>
		<td width="65%">Subjects</td>
		<td width="30%">Grades</td>
	</tr>
	<tr class="active">
		<td width="5%">1</td>
		<td width="65%">
			<select name="sub1" class="form-control"  disabled="disabled">
			 <option value="0">-- Please Select -- </option>
       <?php  echo select_applicant_subjects($con, $rec['subject1']); ?>
			</select>
		</td>
		<td width="30%">
			<select  name="grd1" class="form-control" disabled="disabled">
        <?php  echo  select_applicant_subject_grade($rec['grade1']); ?>
			</select>
		</td>
	</tr>
	<tr class="active">
		<td width="5%">2</td>
		<td width="65%">
			<select name="sub2" class="form-control" disabled="disabled">
			<option value="0">-- Please Select -- </option>
      <?php  echo select_applicant_subjects($con, $rec['subject2']); ?>
			</select>
		</td>
		<td width="30%">
			<select name="grd2" class="form-control" disabled="disabled">
        <?php  echo  select_applicant_subject_grade($rec['grade2']); ?>
			</select>
		</td>
	</tr>
	<tr class="active">
		<td width="5%">3</td>
		<td width="65%">
			<select name="sub3" class="form-control" disabled="disabled">
			<option value="0">-- Please Select -- </option>
        <?php echo select_applicant_subjects($con, $rec['subject3']); ?>
			</select>
		</td>
		<td width="30%">
			<select name="grd3" class="form-control" disabled="disabled" >
        <?php  echo  select_applicant_subject_grade($rec['grade3']); ?>
			</select>
		</td>
	</tr>
	<tr class="active">
		<td width="5%">4</td>
		<td width="65%">
			<select name="sub4" class="form-control" disabled="disabled">
			<option value="0">-- Please Select -- </option>
        <?php  echo select_applicant_subjects($con, $rec['subject4']); ?>
			</select>
		</td>
		<td width="30%">
			<select name="grd4" class="form-control" disabled="disabled">
        <?php  echo  select_applicant_subject_grade($rec['grade4']); ?>
			</select>
		</td>
	</tr>
	<tr class="active">
		<td width="5%">5</td>
		<td width="65%">
			<select name="sub5" class="form-control" disabled="disabled">
			<option value="0">-- Please Select -- </option>
        <?php echo select_applicant_subjects($con, $rec['subject5']); ?>
			</select>
		</td>
		<td width="30%">
			<select name="grd5" class="form-control" disabled="disabled">
        <?php  echo  select_applicant_subject_grade($rec['grade5']); ?>
			</select>
		</td>
	</tr>
	<tr class="active">
		<td width="5%">6</td>
		<td width="65%">
			<select name="sub6" class="form-control"  disabled="disabled">
			<option value="0">-- Please Select -- </option>
        <?php  echo select_applicant_subjects($con, $rec['subject6']); ?>
			</select>
		</td>
		<td width="30%">
			<select name="grd6" class="form-control" disabled="disabled" >
        <?php  echo  select_applicant_subject_grade($rec['grade6']); ?>
			</select>
		</td>
	</tr>
	<tr class="active">
		<td width="5%">7</td>
		<td width="65%">
			<select name="sub7" class="form-control"  disabled="disabled">
			<option value="0">-- Please Select -- </option>
      <?php   echo select_applicant_subjects($con, $rec['subject7']);?>
			</select>
		</td>
		<td width="30%">
			<select name="grd7" class="form-control" disabled="disabled">
        <?php   echo  select_applicant_subject_grade($rec['grade7']);?>
			</select>
		</td>
	</tr>
	<tr class="active">
		<td width="5%">8</td>
		<td width="65%">
			<select name="sub8" class="form-control" disabled="disabled" >
			<option value="0">-- Please Select -- </option>
        <?php echo select_applicant_subjects($con, $rec['subject8']); ?>
			</select>
		</td>
		<td width="30%">
			<select name="grd8" class="form-control"  disabled="disabled">
        <?php echo  select_applicant_subject_grade($rec['grade8']); ?>
			</select>
		</td>
	</tr>

	<tr class="active">
		<td width="5%">9</td>
		<td width="65%">
			<select name="sub9" class="form-control" disabled="disabled">
			<option value="0">-- Please Select -- </option>
        <?php echo select_applicant_subjects($con, $rec['subject9']); ?>
			</select>
		</td>
		<td width="30%">
			<select name="grd9" class="form-control" disabled="disabled">
        <?php  echo  select_applicant_subject_grade($rec['grade9']); ?>
			</select>
		</td>
	</tr>
	</table>
	<hr/>
	 <h4> Exam Type 2</h4>

   <?php

   							  $q = "SELECT `id`, `applicant_id`, `exam_type`, `exam_year`, `exam_month`, `subject1`, `grade1`, `subject2`,
   								   `grade2`, `subject3`, `grade3`, `subject4`, `grade4`, `subject5`, `grade5`, `subject6`, `grade6`,
   								   `subject7`, `grade7`, `subject8`, `grade8`, `subject9`, `grade9`, `exam_no`, `type`
   								   FROM `applicants_olevel` WHERE applicant_id = '$id' AND type = '2'";
   							  $r = mysqli_query($con,$q);

   							  //if(mysqli_num_rows($r) > 0 )
   			  //				{

   								  $rec2 = mysqli_fetch_array($r,MYSQLI_ASSOC)
   								  //while($rec2 = mysqli_fetch_array($r,MYSQLI_ASSOC))
   			  //					{

   						  ?>
<table class="table table-condensed">

<tr>
<td width="100%">
<label for="edit-olexam2">Exam Number</label>
<input VALUE="<?php echo $rec2['exam_no']; ?>" type="text" class="form-control" name="exam_no2" readonly="readonly" >
</td>
</tr>
</table>


<table class="table table-condensed">
<tr>
<td width="100%">
<label for="edit-olexam2">OLevel Examination Type (2) </label>
<select id="edit-olexam1" name="olexam2" class="form-control" disabled="disabled">
  <?php echo select_applicant_exam_type($rec2['exam_type']); ?>
</select>
</td>
</tr>
</table>


<table class="table table-condensed">
<tr>
<td width="50%">
<label for="edit-eyear2">Examination Year </label>
<select id="edit-eyear2" name="eyear2" class="form-control"disabled="disabled" >
<option value="0">-- Please Select -- </option>
  <?php echo year($rec2['exam_year']); ?>
</select>
<td>
<td width="50%">
<label for="edit-emonth2">Month</label>
<select id="edit-emonth2" name="emonth2" class="form-control" disabled="disabled" >
  <?php echo select_applicant_exam_month($rec2['exam_month']); ?>
</select>
</td>
</tr>
</table>


<table class="table table-condensed">
<tr class="active">
<td width="5%">S/N</td>
<td width="65%">Subject</td>
<td width="30%">Grade</td>
</tr>
<tr class="active">
<td width="5%">1</td>
<td width="65%">
	<select name="s_sub1" class="form-control" disabled="disabled" >
		<option value="0">-- Please Select -- </option>
    <?php  echo select_applicant_subjects($con, $rec2['subject1']); ?>
	</select>
</td>
<td width="30%">
	<select  name="s_grd1" class="form-control" disabled="disabled">
    <?php  echo  select_applicant_subject_grade($rec2['grade1']);?>
	</select>
</td>
</tr>
<tr class="active">
<td width="5%">2</td>
<td width="65%">
	<select name="s_sub2" class="form-control" disabled="disabled">
	<option value="0">-- Please Select -- </option>
  <?php echo select_applicant_subjects($con, $rec2['subject2']); ?>
	</select>
</td>
<td width="30%">
	<select name="s_grd2" class="form-control" disabled="disabled">
    <?php echo  select_applicant_subject_grade($rec2['grade2']); ?>
	</select>
</td>
</tr>
<tr class="active">
<td width="5%">3</td>
<td width="65%">
	<select name="s_sub3" class="form-control" disabled="disabled">
	<option value="0">-- Please Select -- </option>
    <?php echo select_applicant_subjects($con, $rec2['subject3']); ?>
	</select>
</td>
<td width="30%">
	<select name="s_grd3" class="form-control" disabled="disabled">
      <?php  echo  select_applicant_subject_grade($rec2['grade3']);?>
	</select>
</td>
</tr>
<tr class="active">
<td width="5%">4</td>
<td width="65%">
	<select name="s_sub4" class="form-control" disabled="disabled" >
	<option value="0">-- Please Select -- </option>
  <?php  echo select_applicant_subjects($con, $rec2['subject4']); ?>
	</select>
</td>
<td width="30%">
	<select name="s_grd4" class="form-control" disabled="disabled" >
    <?php  echo  select_applicant_subject_grade($rec2['grade4']); ?>
	</select>
</td>
</tr>
<tr class="active">
<td width="5%">5</td>
<td width="65%">
	<select name="s_sub5" class="form-control" disabled="disabled" >
		 <option value="0">-- Please Select -- </option>
     <?php echo select_applicant_subjects($con, $rec2['subject5']); ?>
	</select>
</td>
<td width="30%">
	<select name="s_grd5" class="form-control" disabled="disabled">
    <?php  echo  select_applicant_subject_grade($rec2['grade5']); ?>
	</select>
</td>
</tr>
<tr class="active">
<td width="5%">6</td>
<td width="65%">
	<select name="s_sub6" class="form-control" disabled="disabled">
	<option value="0">-- Please Select -- </option>
  <?php  echo select_applicant_subjects($con, $rec2['subject6']); ?>
	</select>
</td>
<td width="30%">
	<select name="s_grd6" class="form-control" disabled="disabled">
    <?php echo  select_applicant_subject_grade($rec2['grade6']);?>
	</select>
</td>
</tr>
<tr class="active">
<td width="5%">7</td>
<td width="65%">
	<select name="s_sub7" class="form-control" disabled="disabled">
	<option value="0">-- Please Select -- </option>
    <?php  echo select_applicant_subjects($con, $rec2['subject7']);?>
	</select>
</td>
<td width="30%">
	<select name="s_grd7" class="form-control" disabled="disabled">
    <?php  echo  select_applicant_subject_grade($rec2['grade7']); ?>
	</select>
</td>
</tr>
<tr class="active">
<td width="5%">8</td>
<td width="65%">
	<select name="s_sub8" class="form-control" disabled="disabled" >
	<option value="0">-- Please Select -- </option>
    <?php  echo select_applicant_subjects($con, $rec2['subject8']);?>
	</select>
</td>
<td width="30%">
	<select name="s_grd8" class="form-control" disabled="disabled">
    <?php  echo  select_applicant_subject_grade($rec2['grade8']);?>
	</select>
</td>
</tr>

<tr class="active">
<td width="5%">9</td>
<td width="65%">
	<select name="s_sub9" class="form-control" disabled="disabled">
	 <option value="0">-- Please Select -- </option>
    <?php  echo select_applicant_subjects($con, $rec2['subject9']); ?>
	</select>
</td>
<td width="30%">
	<select name="s_grd9" class="form-control" disabled="disabled">
    <?php  echo  select_applicant_subject_grade($rec2['grade9']); ?>
	</select>
</td>
</tr>
</table>
				</div>
      </div>


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
           </script>
           <div class="modal fade" id="myModall_admit_applicant" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
           <div class="modal-dialog modal-dialog-scrollable" role="document">
           <div class="modal-content">
           <div class="modal-header">
           <h5 class="modal-title" id="scrollableModalTitle">Upload your passport</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">

             <form action="" method="post" enctype="multipart/form-data" id="admit_applicant">






			                             <div class="form-group">
			                                <label for="programme_type">Programme Type  <span class="ast">*</span></label>
			                                  <div class="input-group">
			                                  <select name="programme_school" class="form-control"  id="search_prog_type_id" disabled="disabled">
                                          <?php echo select_school($con, $id); ?>
			                                   </select>
			                                    <div class="input-group-addon"> <span class="ast">*</span></div>
			                              </div>




			                         <br/>

			                             <div class="form-group">
			                              <label for="department">Department  </label>

			                               <div  class="input-group">
			                                   <!-- <div class="input-group">-->
			                                    <select name="department" class="form-control"  id="search_department_id">
			                                    <option value="0"  > --Please Select-- </option>
                                          <?php if(!isset($con, $_SESSION['dep'])){ echo select_department($con, $dep = get_applicant_department_applied_for($con, $id));}else{ echo select_department($con, $_SESSION['dep']);} ?>
			                                     </select>
			                                      <div class="input-group-addon"><span class="ast">*</span></div>

			                                  </div>

			                            </div>



			                         <br/>

			                             <div class="form-group" id="show_programme">

			                            	<div   id="hide_sub_programme" ><!---->

			                         	    <img src="images/loader.gif"  id="loader1" alt="please wait" />
			                                  <label  for="sub_programme_id">Programme</label>
			                          		   <div class="input-group">
			                                      <select   name="sub_programme"  id="sub_programme_id" class="form-control">

			                                      <option value="">--Choose Programme --</option>
                                            <?php if(!isset($con, $_SESSION['prog'])){ echo select_programme($con, get_applicant_programme_applied_for($con, $id));}else{ echo select_programme($con, $_SESSION['prog']);} ?>
			                                      </select>

			                                  	<div class="input-group-addon"><span class="ast">*</span></div>

			                                    </div>
			                             	</div>


			                                   <div   id="show_sub_programme"  style="width:100%;min-width:100%;"><!---->




			                                  </div>

			                          	</div>

			                            <?php if(isset($_GET['api'])){
                                            $id=base64_decode($_GET['api']);

                                          }else{
                                               $id=0;
                                          } ?>
                                  <input type="hidden" name="app_id" value="<?php echo $id;?>">
			                             <div class="form-group">
			                                <label for="description" class="control-label">Notes</label>
			                                <textarea class="form-control input-sm" id="description" rows="3" name="description" ><?php echo get_applicant_admitted_condition($con, $id); ?></textarea>

			                              </div>




			                      </div>
			                      <div id="admit_error"></div>

			                <div class="modal-footer">
			                 <button type="submit"  class="btn btn-success"  value="Admit Candidate"> Admit Candidate</button>
			                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


			               </div>

			              </form>
                    <script type="text/javascript">
                    $(document).ready(function(e){
                    $("#admit_applicant").submit(function(event){
                    event.preventDefault(); //prevent default action
                    var post_url = "php/applicant/admit_applicant2.php"; //get form action url
                    var request_method = $(this).attr("method"); //get form GET/POST method

                    $("#admit_error").html('<div style="margin-top:10px"><center>Admiting, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

                    var form_data = new FormData(this); //Creates new FormData object


                    $.ajax({
                    url : post_url,
                    type: request_method,
                    data : form_data,
                    contentType: false,
                    cache: false,
                    processData:false
                    }).done(function(response){ //
                    //swal(response);
                    if(response==1){
                      alert('Admitted Successful');
                      $("#admit_error").html(' ');
                      window.setTimeout(link,2000);
                    }else{
                      alert(response);
                    $("#admit_error").html(' ');
                    }
                    });

                    });
                    });

                    function link(){
                    location.reload();
                    }
                    </script>
           </div>

           <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

           </div>
           </div>
           </div>
           </div>
