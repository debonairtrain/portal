     <br/>
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- blank block -->

    <button type="button" class="btn btn-primary btn-style" data-toggle="modal"
                    data-target="#exampleModalScrollable">
                    Add Course
                  </button> 
   <center> <h4>COURSES</h4></center>
    <div class="data-tables">
      <div class="row">
          <!-- forms 2 -->
          <div class="col-lg-12 mb-4">
            <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <form action="#" method="post">
                       
                        
                        <div class="form-row">
                           
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">School</label>
                                <select id="school_id" name="school_id" onchange="get_faculty_list_by_school_id(this.value)" class="form-control input-style">
                                    
                                    <?=get_all_school($con);?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Faculty</label>
                                <select id="faculty_id" name="faculty_id" onchange="get_department_list_by_faculty_id(this.value)" class="form-control input-style">
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Department</label>
                                <select id="department_id" name="department_id" onchange="get_programe_list_by_department_id(this.value)" class="form-control input-style">
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Programme</label>
                                <select id="prog_id" name="prog_id" onchange="level_active()" class="form-control input-style">
                                   
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Level</label>
                                <select id="level_id" name="level_id" class="form-control input-style" style="display:none">
                                    <option selected>Choose...</option>
                                   <?php for($i=100; $i<=900; $i+=100){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    }?>
                                </select>
                            </div>
                            <!--<div class="form-group col-md-3">
                                <label for="inputZip" class="input__label">Course Code</label>
                                <input type="text" class="form-control input-style" id="course_code" name="course_code">
                            </div>-->
                           
                        </div>
                        
                       <center> <button type="submit" name="load_course" class="btn btn-primary btn-style mt-4">Search</button></center>
                    </form>
                </div>
                 </div>
            </div>
            <!-- //forms 2 -->
          
                   
            
         <?php
  
  if(isset($_POST['load_course'])){
      
      $school_id=mysqli_real_escape_string($con,$_POST['school_id']);
      $faculty_id=mysqli_real_escape_string($con,$_POST['faculty_id']);
      $department_id=mysqli_real_escape_string($con,$_POST['department_id']);
      $prog_id=mysqli_real_escape_string($con,$_POST['prog_id']);
      $level=mysqli_real_escape_string($con,$_POST['level_id']);
     ?>
     
  <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <center>
                <h3>DEPARTMENT OF <?=get_department_by_id($con,$department_id)?></h3>
                <h4 > First Semester Courses (<?=get_programme_by_id($con,$prog_id)?>)</h4>
                <h5><?=$level;?> LEVEL</h5>
                </center><br/>
            
            <div class="table-responsive ">
                <center>
              <table id="exampe" class="display table-bordered" style="width:100%; text-align: center;">
                  
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Course</th>
                    <th>Course Code</th>
                    <th>Course Unit</th>
                    <th>Course Type</th>
                   
                     <th></th>
                  </tr>
                </thead>
                <tbody>
     <?php
      
      	$sqlmg=mysqli_query($con, "select * from courses where department_id='$department_id' and programme_id='$prog_id'  and level='$level' and course_status !='0' and semester='1' ") ;
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
													$sn=1;	
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $course_id= $row_s['id'];
														   
														   
														   $course_type = $row_s['course_type'];
														   $semester = $row_s['semester'];
														   $level = $row_s['level'];
														   $course_status = $row_s['course_status'];
														   if($course_type =='1'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
														  
														   if($course_status==1){
																$brk1='selected';
																$brk2='';
															}else{
																$brk1='';
																$brk2='selected';
															}
											
      
 ?>
        
                    
                    
                  <tr>
                    <td><?=$sn;?></td>
                    <td><?=get_course_by_id($con,$course_id);?></td>
                    <td><?=get_course_code_by_id($con,$course_id);?></td>
                    <td><?=get_course_unit_by_id($con,$course_id)?></td>
                   
                   
                    <td><?=$sel;?></td>
                    <td>
													<select class="form-control input-style"  name="a_rank" id="publish_id<?=$course_id;?>" onchange="change_publish(<?=$course_id;?>)" style="color:red;">
																
																<option value="1" <?=$brk1;?>> Show</option>
																<option value="2" <?=$brk2;?>> Hide</option>
																
																
																</select>
												
												</td>
					  <td><a href="#" onclick="load_edit_course(<?=$course_id?>)"> <label class="fa fa-edit"></label></a></td>
                     <td><a href="#" onclick="delete_course(<?=$course_id?>)"> <label class="fa fa-trash"></label></a></td>
                  </tr>
                  
          
<?php
$sn++;
}
    	}
	}
	
	?>
	
	</tbody>
              </table>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div> 
    
    
    
    
    
    
    
    
    
    <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <center>
                <h3>DEPARTMENT OF <?=get_department_by_id($con,$department_id)?></h3>
                <h4 > Second Semester Courses (<?=get_programme_by_id($con,$prog_id)?>)</h4>
                <h5><?=$level;?> LEVEL</h5>
                </center><br/>
            
            <div class="table-responsive ">
                <center>
              <table id="exampe" class="display table-bordered" style="width:100%; text-align: center;">
                  
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Course</th>
                    <th>Course Code</th>
                    <th>Course Unit</th>
                   <th>Course Type</th>
                    
                    <th></th>
                  </tr>
                </thead>
                <tbody>
     <?php
      
      	$sqlmg=mysqli_query($con, "select * from courses where department_id='$department_id' and programme_id='$prog_id'  and level='$level' and course_status !='0' and semester='2' ") ;
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
													$sn=1;	
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														  $course_id= $row_s['id'];
														   
														   
														   $course_type = $row_s['course_type'];
														   $semester = $row_s['semester'];
														   $level = $row_s['level'];
														   $course_status = $row_s['course_status'];
														   if($course_type =='1'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
														  
														   if($course_status==1){
																$brk1='selected';
																$brk2='';
															}else{
																$brk1='';
																$brk2='selected';
															}
											
      
 ?>
        
                    
                    
                  <tr>
                    <td><?=$sn;?></td>
                    <td><?=get_course_by_id($con,$course_id);?></td>
                    <td><?=get_course_code_by_id($con,$course_id);?></td>
                    <td><?=get_course_unit_by_id($con,$course_id)?></td>
                   
                   
                    <td><?=$sel;?></td>
                    <td>
													<select class="form-control input-style"  name="a_rank" id="publish_id<?=$course_id;?>" onchange="change_publish(<?=$course_id;?>)" style="color:red;">
																
																<option value="1" <?=$brk1;?>> Show</option>
																<option value="2" <?=$brk2;?>> Hide</option>
																
																
																</select>
												
												</td>
											<td><a href="#" onclick="load_edit_course(<?=$course_id?>)"> <label class="fa fa-edit"></label></a></td>
                     <td><a href="#" onclick="delete_course(<?=$course_id?>)"> <label class="fa fa-trash"></label></a></td>
                  </tr>
                  
                  
          
<?php
$sn++;
}
    	}
	}
	
	?>
	
	</tbody>
              </table>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div> 
<?php	
 }
  
?>
     



    <div class="modal fade  bd-example-modal-lg" id="exampleModalScrollable" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalScrollableTitle">Add Courses</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-left">
                          <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <form action="#" id="add_courses" method="post">
                       
                        
                        <div class="form-row">
                           
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">School</label>
                                <select id="school_id_add" name="school_id" onchange="get_faculty_list_by_school_id_add(this.value)" class="form-control input-style" required>
                                    
                                    <?=get_all_school($con);?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Faculty</label>
                                <select id="faculty_id_add" name="faculty_id" onchange="get_department_list_by_faculty_id_add(this.value)" class="form-control input-style" required>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Department</label>
                                <select id="department_id_add" name="department_id" onchange="get_programe_list_by_department_id_add(this.value)" class="form-control input-style" required>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Programme</label>
                                <select id="prog_id_add" name="prog_id" class="form-control input-style" required> 
                                   
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputState" class="input__label">Level</label>
                                <select id="level_id_add" name="level_id" class="form-control input-style" required>
                                    <option selected>Choose...</option>
                                   <?php for($i=100; $i<=900; $i+=100){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    }?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState" class="input__label">Course Title</label>
                                <input type="text" name="course_title" class="form-control input-style" required/>
                                   
                               
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" class="input__label">Course Code</label>
                                <input type="text" name="course_code" class="form-control input-style" required/>
                                   
                               
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Semester</label>
                                <select id="semester_id" name="semester_id" class="form-control input-style" required>
                                  <option value="0">Choose</option> 
                                  <option value="1">First</option> 
                                  <option value="2">Second</option> 
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Course Type</label>
                                <select id="course_type" name="course_type" class="form-control input-style" required>
                                  <option value="0">Choose</option> 
                                  <option value="1">Core</option> 
                                  <option value="2">Elective</option> 
                                </select>
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Course Unit</label>
                                <select id="course_unit" name="course_unit" class="form-control input-style" required>
                                  <option selected>Choose...</option>
                                   <?php for($i=0; $i<=10; $i+=1){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    }?>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Prerequisite Course</label>
                                <select id="prerequisite_of" name="prerequisite_of"   class="selectpicker form-control input-style"  multiple  data-live-search="true">
                                    
                                    <?=get_all_courses($con);?>
                                </select>
                            </div>
                              <div id="saving_register" class="form-group col-md-12">
                       <center> <button type="submit" name="load_course" class="btn btn-primary btn-style mt-4">Add</button></center></div>
                        </div>
                         <div id="output_register" class="form-group col-md-12">
                          </div>
                      
                    </form>
                </div>
                 </div>
            </div>
                          </div>
                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- editing modal-->
                  <div class="modal fade  bd-example-modal-lg" id="edit_modal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Course</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-left">
                          <div class="card card_border py-2 mb-4">
                            <div class="card-body">
                                <form action="#" id="edit_courses" method="post">
                                    
                                </form>
                            </div>
                           <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 
                              </div>
                            </div>
                          </div>
                         </div>
                     </div>
<script>


$(document).ready(function(e){



    $("#add_courses").submit(function(event){
      event.preventDefault(); //prevent default action
      var post_url = "php/courses/add_courses.php"; //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method

      $("#output_register").html('<div style="margin-top:10px"><center>Adding Course Data, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
      document.getElementById("saving_register").style.display = "none";
      var form_data = new FormData(this); //Creates new FormData object


        $.ajax({
          url : post_url,
          type: request_method,
          data : form_data,
          contentType: false,
          cache: false,
          processData:false
        }).done(function(response){ //



          $("#output_register").html(response);
          document.getElementById("saving_register").style.display = "block";


        });

    });
    
    
    
    $("#edit_courses").submit(function(event){
      event.preventDefault(); //prevent default action
      var post_url = "php/courses/edit_courses.php"; //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method

      $("#output_register_edit").html('<div style="margin-top:10px"><center>Editing Course Data, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
      document.getElementById("saving_register_edit").style.display = "none";
      var form_data = new FormData(this); //Creates new FormData object


        $.ajax({
          url : post_url,
          type: request_method,
          data : form_data,
          contentType: false,
          cache: false,
          processData:false
        }).done(function(response){ //



          $("#output_register_edit").html(response);
          document.getElementById("saving_register_edit").style.display = "block";


        });

    });
    
    
    
    
    
    
    
    
    
});



function get_faculty_list_by_school_id(token){
  // var token =document.getElementById('school_id').value; 
 
     $.post("php/get_faculty_list_by_school_id.php",
  {
    token: token
  },
  function(data, status){
  
   $("#faculty_id").html(data);
  });
}



function get_department_list_by_faculty_id(token){
 
     $.post("php/get_department_list_by_faculty_id.php",
  {
    token: token
  },
  function(data, status){
  
   $("#department_id").html(data);
  });
}


function get_programe_list_by_department_id(token){
 
     $.post("php/get_programe_list_by_department_id.php",
  {
    token: token
  },
  function(data, status){
  
   $("#prog_id").html(data);
  });
}



function level_active(){
    
    document.getElementById("level_id").style.display = "block";
}

function load_edit_course(token){
     $("#edit_courses").html('<div style="margin-top:10px"><center>Loading Course Data, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
     
     $('#edit_modal').modal('show')
     $.post("php/courses/load_edit_course",{token:token},
			function(response,status){
				
					$("#edit_courses").html(response);
      
			});
   
}


function delete_course(token){
    
   	var result = confirm("Are you sure to delete this Course ?");
    if(result){
        // Delete logic goes here
    
		
		 	$.post("php/courses/delete_course",{token:token},
			function(response,status){
				
				if(response == 1 ){
					
					 
					  alert("Course Deleted");

				
					 
					
				}else{
					
					alert(response);
				}
			
			 
			});
			
	}
}

 function change_publish(token){
//	alert(token);
	var publish="publish_id"+token;
	var publish_id=document.getElementById(publish).value;
	
	$.post("php/courses/update_publish_course.php",{token:token,publish_id:publish_id},
			function(response,status){ // Required Callback Function
			
				if(response==1){
					if(publish_id==1){
						alert("Course published successfully");
					}else{
						alert("Course Hide successfully");
					}
					//window.setTimeout(links_Article, 3000);
					
				}else{
						alert("Course not published successfully");
		//alert(response);
            }					
			    
			});
 }
 
 
 
 //adding course
 
 
 function get_faculty_list_by_school_id_add(token){
  // var token =document.getElementById('school_id').value; 
 
     $.post("php/get_faculty_list_by_school_id.php",
  {
    token: token
  },
  function(data, status){
  
   $("#faculty_id_add").html(data);
  });
}



function get_department_list_by_faculty_id_add(token){
 
     $.post("php/get_department_list_by_faculty_id.php",
  {
    token: token
  },
  function(data, status){
  
   $("#department_id_add").html(data);
  });
}


function get_programe_list_by_department_id_add(token){
 
     $.post("php/get_programe_list_by_department_id.php",
  {
    token: token
  },
  function(data, status){
  
   $("#prog_id_add").html(data);
  });
}












 //adding course
 
 
 function get_faculty_list_by_school_id_edit(token){
  // var token =document.getElementById('school_id').value; 
 
     $.post("php/get_faculty_list_by_school_id.php",
  {
    token: token
  },
  function(data, status){
  
   $("#faculty_id_edit").html(data);
  });
}



function get_department_list_by_faculty_id_edit(token){
 
     $.post("php/get_department_list_by_faculty_id.php",
  {
    token: token
  },
  function(data, status){
  
   $("#department_id_edit").html(data);
  });
}


function get_programe_list_by_department_id_edit(token){
 
     $.post("php/get_programe_list_by_department_id.php",
  {
    token: token
  },
  function(data, status){
  
   $("#prog_id_edit").html(data);
  });
}
	
</script>