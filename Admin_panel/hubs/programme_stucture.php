 
  
  
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- blank block -->

    <a href="dashboard?hubs=add_programme_courses" class="btn btn-primary btn-style" >
                    Add Programme Courses
                  </a> 
    <div class="data-tables">
      <div class="row">
          <!-- forms 2 -->
          <div class="col-lg-12 mb-4">
            <div class="card card_border py-2 mb-4">
                <div class="card-body" >
                   
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
                                <select id="prog_id" name="prog_id" class="form-control input-style">
                                   
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Level</label>
                                <select id="level_id" name="level_id" class="form-control input-style">
                                    <option selected>Choose...</option>
                                   <?php for($i=100; $i<=900; $i+=100){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    }?>
                                </select>
                            </div>
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
  <div id='DivIdToPrint'>    
  <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <center>
                <h3>DEPARTMENT OF <?=get_department_by_id($con,$department_id)?></h3>
                <h4 > First Semester Courses (<?=get_programme_by_id($con,$prog_id)?>)</h4>
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
                    <th>Semester</th>
                    <th>Level</th>
                  </tr>
                </thead>
                <tbody>
     <?php
      
      	$sqlmg=mysqli_query($con, "select * from programmes_courses where department_id='$department_id' and programme_id='$prog_id'  and level='$level' and status='1' and semester='1' ") ;
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
													$sn=1;	
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $prog_cos_id= $row_s['id'];
														   $course_id= $row_s['course_id'];
														   
														   $seen_as_elective = $row_s['$seen_as_elective'];
														   $semester = $row_s['semester'];
														   $level = $row_s['level'];
														   
														   if($seen_as_elective =='0'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
														  
														   
											
      
 ?>
        
                    
                    
                  <tr>
                    <td><?=$sn;?></td>
                    <td><?=get_course_by_id($con,$course_id);?></td>
                    <td><?=get_course_code_by_id($con,$course_id);?></td>
                    <td><?=get_course_unit_by_id($con,$course_id)?></td>
                    <td><?=$level;?></td>
                   
                    <td><?=$sel;?></td>
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
      
    
    
    
    
    
    
    
    
    
    <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <center>
                <h3>DEPARTMENT OF <?=get_department_by_id($con,$department_id)?></h3>
                <h4 > Second Semester Courses (<?=get_programme_by_id($con,$prog_id)?>)</h4>
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
                    <th>Semester</th>
                    <th>Level</th>
                  </tr>
                </thead>
                <tbody>
     <?php
      
      	$sqlmg=mysqli_query($con, "select * from programmes_courses where department_id='$department_id' and programme_id='$prog_id'  and level='$level' and status='1' and semester='2' ") ;
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
													$sn=1;	
													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $prog_cos_id= $row_s['id'];
														   $course_id= $row_s['course_id'];
														   
														   $seen_as_elective = $row_s['$seen_as_elective'];
														   $semester = $row_s['semester'];
														   $level = $row_s['level'];
														   
														   if($seen_as_elective =='0'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
														  
														   
											
      
 ?>
        
                    
                    
                  <tr>
                    <td><?=$sn;?></td>
                    <td><?=get_course_by_id($con,$course_id);?></td>
                    <td><?=get_course_code_by_id($con,$course_id);?></td>
                    <td><?=get_course_unit_by_id($con,$course_id)?></td>
                    <td><?=$level;?></td>
                   
                    <td><?=$sel;?></td>
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
  <center> <button type="button" class="btn btn-primary btn-style mt-4" onclick='printDiv();'>Print</button></center>
<?php	
 }
  
?>
       
    
   
        <div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Compose New Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body p-4">
                <form action="#" method="post">
                  <div class="form-group">
                    <label for="to" class="input__label">Send to :</label>
                    <input type="text" class="form-control input-style" id="to" placeholder="examplemail@mail.com">
                  </div>
                  <div class="form-group">
                    <label for="subject" class="input__label">Subject :</label>
                    <input type="text" class="form-control input-style" id="subject" placeholder="Subject">
                  </div>
                  <div class="form-group">
                    <label for="message" class="input__label">Message :</label>
                    <textarea class="form-control input-style" id="message" inbox__grids="15"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-style border-btn" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-style btn-primary">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //mail inbox-->
    
    
    
  
<script>
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

function printDiv() 
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}


</script>