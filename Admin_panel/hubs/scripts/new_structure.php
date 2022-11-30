<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage CMS</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Course Structure</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">
      <div class="col-md-12">
        <div class="tabbable-line">


          <div class="tab-content">
            <div class="tab-pane active fontawesome-demo" id="tab1">
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-box">

                    <div class="card-body ">
                      <div class="col-md-12">
                        <form class="" action="#" method="post" id="save_course_structure">
                        <div class="col-md-8" style="float:left;">
                          <fieldset>



                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="level">Level</label>
                                    <div class="col-md-12">
                                       <div class="input-group" >

                                      <select name="level" class="form-control input-sm"  id="level">

                                        <?php echo select_level($level)?>

                                      </select>
                                    <div class="input-group-addon"><span class="ast">*</span></div>

                                        </div>

                                    </div>

                                  </div>


                                   <div class="form-group">
                                    <label class="col-sm-3 control-label" for="programme_type">School</label>
                                    <div class="col-md-12">
                                      <div class="input-group">

                                      <select id="search_prog_type_id" class="form-control input-sm" name="school_id" required>
                                      <option value="0">---select</option>
                                      <?php select_school($con,$school_id)?>
                                      </select>


                                          <div class="input-group-addon"><span class="ast">*</span></div>

                                        </div>

                                         <span class="help-block">Diploma / Advance Diploma or Cert</span>
                                    </div>

                                  </div>


                                 <div class="form-group">
                                <label class="col-sm-3 control-label" for="search_department_id">Department</label>
                                <div class="col-md-12">

                                  <div  class="input-group">
                                  <select  class="form-control input-sm" name="search_department" id="department_id" onchange="load_programme()" >
                                   <option value="0"> ---- Choose Department --- </option>
                                    <?php select_department_real($con,$department_id='0')?>
                                   </select>

                                        <div class="input-group-addon"><span class="ast">*</span></div>

                                        </div>
                                    </div>

                                </div>

                                <div class="form-group" id="show_programme">
                                <label class="col-sm-3 control-label" for="programme_id">Programme</label>
                                  <div  class="col-md-12" id="hide_sub_programme" ><!---->

                                     <div class="input-group">
                                          <select   name="sub_programme"  id="programme_id" class="form-control input-sm">
                                          <option value="0">--Choose Programme --</option>
                                          <?php echo select_programme($con,$department_id)?>
                                          </select>

                                        <div class="input-group-addon"><span class="ast">*</span></div>

                                        </div>
                                  </div>


                                   <div  class="col-md-12" id="show_sub_programme" ><!---->



                                  </div>

                                </div>



                                 <div class="form-group">
                                <label class="col-md-12 control-label" for="courses">Choose courses from departments / levels</label>
                                  <div class="col-md-12" style="min-height:200px; min-width:200px; height:auto;">



                                    <br><br>
                                  <div class="input-group">
                                    <div class="btn btn-info" style="height:30px;"> Level <span class="ast">*</span></div>
                                    <select  class="form-control input-sm" name="level2"  id="levl">
                                        <?php echo select_level($level)?>
                                    </select>

                                    </div>    <!-- / level -->


                                    <br>

                                      <div class="input-group">
                                      <div class="btn btn-info" style="height:30px;"> Department <span class="ast">*</span></div>

                                        <select  class="form-control input-sm" name="department2"  id="search_department_id2" >
                                         <option value="0"> ---- Choose Department --- </option>
                                         <?php select_department($con,$department_id='0')?>
                                         </select>

                                      </div>

                                      <br>
                                      <p align="center"><img src="images/loader.gif"  id="loader2" alt="please wait" />	</p>
                                      <div id="show_courses">

                                      </div><!-- / show courses -->


                                     <span class="help-block">Here select level and department you want to pick a course from, then check the courses</span>
                                  </div>









                                </div>





                           <div class="form-group">
                                <label class="col-sm-2 control-label" for="gender">Status</label>
                                <div class="col-md-12">

                                  <select id="status" class="form-control input-sm" name="status" required>

                                  <?php echo select_user_status($course_type)?>

                                   </select>


                                </div>

                              </div>
                              <div id="saving_register" >
                  							<center><button type="submit" class="btn btn-info" >Submit </button>
																<a href="dashboard?hubs=course_structure" type="submit" class="btn btn-warning" >Calcel </a></center>
                  						</div>
                              <div id="login_out">
                              </div>
                        </div>
                        <div class="col-md-4" style="float:right;">
                          <h4>Instructions on how to add  courses to programmes /level (courses to offer)</h4>

                         <ol class="list-group">
                         <li class="list-group-item">1-  First level, is the level that you want to set the courses <b>FOR</b></li>
                         <li class="list-group-item">2 - First department is the department you want to set the courses <b>FOR</b> </li>
                         <li class="list-group-item">3 - Programme is the programme you want to set the courses <b>FOR</b> </li>



                           <ul class="list-list-group">


                              <li class="list-group-item"> 3a- Second level is the level you want to choose the course(s) <b>FROM</b>
                              </li>

                              <li class="list-group-item"> 3b- Second department is the department you want to choose the course(s) <b>FROM</b></li>
                              <li class="list-group-item"> 3c- Check list all the courses you want to attach as (courses to offer by a particular programme per level)
                              </li>

                               <li class="list-group-item"> 3d- Finally, by the right hand side of every course, there is a button to switch yes,
                                if a course is taken as an elective in every attachments.
                              </li>

                             </ul>

                         </li>

                         <li class="list-group-item">4- Users must beware of status functionality - "when to publish and when not to publish".</li>
                         </ol>

                        </div>







                    </div><!-- /col-lg- 6 -->
                    </form>
                    </fieldset>

                      </div>




                    </div>
                    </div>
                  </div>
                </div>




              </div>
            </div>

<script type="text/javascript">
function load_programme(){




      var department_id = document.getElementById("department_id").value;

      //alert(department_id);

      $.post('php/load_programme.php',{department_id:department_id},
      function(response,status){

      document.getElementById("programme_id").innerHTML =response;

      });
}

$('#loader2').hide();
			$('#search_department_id2').change(function(){



				$('#loader2').show();	//show the loader

				var levl = $('#levl').val();
				var dept = $('#search_department_id2').val();
        //alert(dept);
				//collect the programme type
				var prog_type = $('#search_prog_type_id').val();


				if(levl  == '' || dept == '' )
				{
					alert('Please select either level or department');
				}
				else
				{
					var data='dept='+dept+'&levl='+levl+'&prog_type='+prog_type;


				}



				$.ajax({
					type:"GET",
					url:"php/show_courses.php",
					data:data,
					success:function(html) {
					$('#loader2').hide();

					$('#show_courses').html(html);

					}
				});



			 	return false;

			 });


            $(document).ready(function(e){



           $("#save_course_structure").submit(function(event){
             event.preventDefault(); //prevent default action
             var post_url = "php/save_course_structure.php"; //get form action url
             var request_method = $(this).attr("method"); //get form GET/POST method

             $("#login_out").html('<div style="margin-top:10px"><center>Processing, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

             var form_data = new FormData(this); //Creates new FormData object


               $.ajax({
                 url : post_url,
                 type: request_method,
                 data : form_data,
                 contentType: false,
                 cache: false,
                 processData:false
               }).done(function(response){ //
                 alert(response);
                 if(response==1){
                  // $("body").load("dashboard").hide().fadeIn(1500).delay(6000);
                   alert(response);
                 }else{

                 $("#login_out").html(response);


                 }
               });

           });
       });

</script>

            <!-- Modal -->

        </div>
</div>
</div>
</div>
</div>
