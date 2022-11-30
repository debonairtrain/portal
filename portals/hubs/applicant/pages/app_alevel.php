<div class="card col-md-12">
  <br><br>
<?php
 echo get_applicant_alevel($con, $user_id)

?>
<form id="save_alevel" method="POST">
					<div class="row">


                                         <div class="col-md-12"><h3 class="panel-heading"> <label style="color:green; font-weight:bold">Add New A-Level Qualification</label><h3/> <hr/></div>

                                           <div class="form-group col-md-6">
                             							<label for="email"><i class="fa fa-tags"> </i> Institution Attended<span style="color:red"> *</span></label>
                             							<input type="text" value="" class="form-control" placeholder="Enter Institution Attended" name="school" required>
                             							</div>


                                          <div class="form-group col-md-3">
                            							<label for="email">Attended From<span style="color:red"> *</span></label>
                                          <select name="start_year1" class="form-control" >
                                              <option value="0"> --Start Year-- </option>
                                                    <?=year($con);?>
                                                  </select>
                            							</div>
                                          <div class="form-group col-md-3">
                            							<label for="email"><i class="fa fa-time"> </i> Attended To<span style="color:red"> *</span></label>
                                          <select name="end_year1" class="form-control" required="required">
                                           <option value="0"  > --End Year-- </option>
                                              <?=year($con);?>
                                           </select>
                            							</div>
                                          <div class="col-md-12"><hr/></div>

                                          <div class="form-group col-md-6">
                            							<label for="email"><i class="fa fa-tags"> </i> Programme/ Course Studied<span style="color:red"> *</span></label>
                            							<input type="text" value="" class="form-control" placeholder="Enter Programme/Course Studied" name="course" required>
                            							</div>
                                          <div class="form-group col-md-6">
                                            <label class="control-label"><i class="fa fa-certificate"></i> Qualification Obtained </label>
                                               <div class="controls">
                                                      <select name="cert1" class="form-control" id="cert1" onchange="display()">
                                                   <?=select_cert3($con);?>
                                                  </select>
                                               </div>
                            							</div>
                                          <div class="col-md-12"><hr/></div>
                                          <div class="row col-md-12" id="main_cert">
                    												<div class="col-lg-6 col-md-12 col-sm-12" id="cert2_hide">
                    												<label class="control-label"><i class="fa fa-percent"></i>  Class of Certificate</label>

                    													  <select name="result1" class="form-control">
                    														   <?=select_class_degree($con);?>
                    														 </select>
                    												</div>
                    											  <div class="col-lg-6 col-md-12 col-sm-12" id="cert1_hide">
                    															<label for="email">CGPA Attained:</label>
                    															<input type="text" value="" class="form-control" placeholder="Enter CGPA" name="cgpa">
                    															</div>
                    										</div>

                                          <div class="col-md-12" id="cert3_hide" style="display:none;"><hr/></div>








                                          <div class="col-md-12" id="nce_show" style="display:none;">


                                         <div class="alert alert-info">PLEASE KINDLY NOTE THAT <b>TEACHING PRACTICE</b> IS NOT INCLUDED!</div>
                                         <div class="row">

                                          <div class="col-md-6"> <!-- col6 -->
                                              <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> /Subject 1 </label>
                                                      <div class="controls">
                                                          <input type="text" name="sub2_1" class="form-control" value="<?php
                                    											if(!empty($subject_1)){
                                    												echo $subject_1;
                                    											}
                                    											?>">

                                                      </div>
                                              </div>

                                          </div> <!-- end of col6-->
                                          <div class="col-md-6"> <!-- col6 -->

                                                <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> / Grade </label>
                                                      <div class="controls">
                                                             <select name="grd2_1" class="form-control" >
                                                               <?=select_nce_grade($grade_1);?>
                                                         </select>
                                                      </div>
                                                </div>

                                          </div> <!-- end of col6-->

                                          <div class="col-md-6"> <!-- col6 -->
                                              <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> /Subject 2 </label>
                                                      <div class="controls">
                                                          <input type="text" name="sub2_2" class="form-control" value="<?php
                                    											if(!empty($subject_2)){
                                    												echo $subject_2;
                                    											}
                                    											?>">

                                                      </div>
                                              </div>

                                          </div> <!-- end of col6-->
                                          <div class="col-md-6"> <!-- col6 -->

                                                <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> / Grade </label>
                                                      <div class="controls">
                                                             <select name="grd2_2" class="form-control" >
                                                               <?=select_nce_grade($grade_2);?>
                                                         </select>
                                                      </div>
                                                </div>

                                          </div> <!-- end of col6-->

                                          <div class="col-md-6"> <!-- col6 -->
                                              <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> /Subject 3 </label>
                                                      <div class="controls">
                                                          <input type="text" name="sub2_3" class="form-control" value="<?php
                                    											if(!empty($subject_3)){
                                    												echo $subject_3;
                                    											}
                                    											?>">
                                                      </div>
                                              </div>

                                          </div> <!-- end of col6-->
                                          <div class="col-md-6"> <!-- col6 -->

                                                <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> / Grade </label>
                                                      <div class="controls">
                                                             <select name="grd2_3" class="form-control" >
                                                               <?=select_nce_grade($grade_3);?>
                                                         </select>
                                                      </div>
                                                </div>

                                          </div> <!-- end of col6-->
																					<div class="col-md-12"> <!-- col6 -->

                                                <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> / Year of Graduation </label>
                                                      <div class="controls">
                                                             <input type="date" class="form-control" name="date"/>
                                                      </div>
                                                </div>

                                          </div> <!-- end of col6-->

                                          </div>




                                        </div><!-- /.panel body -->


                                        <div class="col-md-12" id="ijmb_show" style="display:none;">

                                          <div class="row">


                                          <div class="col-md-6"> <!-- col6 -->
                                              <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> /Subject 1 </label>
                                                      <div class="controls">
                                                          <input type="text" name="sub3_1" class="form-control" value="<?php
                                    											if(!empty($subject_1)){
                                    												echo $subject_1;
                                    											}
                                    											?>">

                                                      </div>
                                              </div>

                                          </div> <!-- end of col6-->
                                          <div class="col-md-6"> <!-- col6 -->

                                                <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> / Grade </label>
                                                      <div class="controls">
                                                             <select name="grd3_1" class="form-control" >
                                                               <?=select_nce_grade($grade_1);?>
                                                         </select>
                                                      </div>
                                                </div>

                                          </div> <!-- end of col6-->

                                          <div class="col-md-6"> <!-- col6 -->
                                              <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> /Subject 2 </label>
                                                      <div class="controls">
                                                          <input type="text" name="sub3_2" class="form-control" value="<?php
                                    											if(!empty($subject_2)){
                                    												echo $subject_2;
                                    											}
                                    											?>">

                                                      </div>
                                              </div>

                                          </div> <!-- end of col6-->
                                          <div class="col-md-6"> <!-- col6 -->

                                                <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> / Grade </label>
                                                      <div class="controls">
                                                             <select name="grd3_2" class="form-control" >
                                                               <?=select_nce_grade($grade_2);?>
                                                         </select>
                                                      </div>
                                                </div>

                                          </div> <!-- end of col6-->

                                          <div class="col-md-6"> <!-- col6 -->
                                              <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> /Subject 3 </label>
                                                      <div class="controls">
                                                          <input type="text" name="sub3_3" class="form-control" value="<?php
                                    											if(!empty($subject_3)){
                                    												echo $subject_3;
                                    											}
                                    											?>">
                                                      </div>
                                              </div>

                                          </div> <!-- end of col6-->
                                          <div class="col-md-6"> <!-- col6 -->

                                                <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> / Grade </label>
                                                      <div class="controls">
                                                             <select name="grd3_3" class="form-control" >
                                                               <?=select_nce_grade($grade_3);?>
                                                         </select>
                                                      </div>
                                                </div>

                                          </div> <!-- end of col6-->
																					<div class="col-md-12"> <!-- col6 -->

                                                <div class="form-group">
                                                   <label class="control-label"><i class="fa fa-certificate"></i> / Year of Graduation </label>
                                                      <div class="controls">
                                                             <input type="date" class="form-control" name="date2"/>
                                                      </div>
                                                </div>


                                          </div> <!-- end of col6-->
                                          </div>
                                    </div> <!-- end of panel 1 -->
                                    <?php if(is_applicant_admitted($con,$user_id)==true){
                                      echo "<span class='alert alert-danger col-md-10 ml-4 mt-3 text-center'>You have been admitted, You can't change your A-Level.....<span>";
                                    }else {
                                      echo '</div><div id="saving_alevel" class="mt-3">
                                      <center><button type="submit" class="btn btn-info btn-lg"><span>Save</span></button>
                                      </center>
                                      </div>';
                                    } ?>

<br>


<div id="output_alevel">

</div>
<br><br>
  </form>
  </div>
<script type="text/javascript">
  $(document).ready(function(e){



      $("#save_alevel").submit(function(event){
        event.preventDefault(); //prevent default action
        var post_url = "hubs/applicant/php/update_alevel"; //get form action url
        var request_method = $(this).attr("method"); //get form GET/POST method

        $("#output_alevel").html('<div style="margin-top:10px"><center>saving olevel Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
        document.getElementById("saving_alevel").style.display = "none";
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

			// $('#save_alevel')[0].reset();
             document.getElementById("saving_alevel").style.display = "block";
             $("#output_alevel").html("");
              swal("Record Successfully Inserted");
			  window.setTimeout(link,2000);


            }else{

            $("#output_alevel").html(response);
            document.getElementById("saving_alevel").style.display = "block";
            swal(response);

			//link();
            }
          });

      });
  });

  function delete_alevel(token){
//alert(token);

		var c=confirm("Are you sure you want to delete these item(s)?");
	     if(c){
         $.post("hubs/applicant/php/delete_alevel", {token:token},function(response, status){
           alert(response);
		   window.setTimeout(link,2000);
         });
       }else{
         swal("You record is still safe");
       }
  }

  function display(){
	  var cert1=document.getElementById("cert1").value;

		var x = document.getElementById('main_cert');
		var d = document.getElementById('ijmb_show');
		var v = document.getElementById('nce_show');
		var h = document.getElementById('cert3_hide');
		x.style.display = 'none';
		d.style.display = 'none';
		v.style.display = 'none';
		h.style.display = 'none';

		if(cert1 == '2'){
			if (v.style.display === 'none') {
				v.style.display = 'block';
				d.style.display = 'none';
				x.style.display = 'none';
				h.style.display = 'none';

			  } else {
				v.style.display = 'none';
			  }
		}else if(cert1 == '3'){
			if (d.style.display === 'none') {
				d.style.display = 'block';
				v.style.display = 'none';
				x.style.display = 'none';
				h.style.display = 'none';

			  } else {
				d.style.display = 'none';
			  }
		}else{

				x.style.display = 'block';
				d.style.display = 'none';
				v.style.display = 'none';
				h.style.display = 'none';

		}

  }

  function link(){
	  location.reload();
  }
</script>
