<?php 
session_start();
include_once('../../db_connect/db.php');
include_once('../../hubs/functions.php');
$course_id=mysqli_real_escape_string($con,$_POST['token']);

$sqlmg=mysqli_query($con, "select * from courses where id='$course_id' ") ;
											
											if($sqlmg){
											   	
											   	    
											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){
												$row_s=mysqli_fetch_assoc($sqlmg);
														   $course_id= $row_s['id'];
														    $school_id = $row_s['school_id'];
														     $faculty_id = $row_s['faculty_id'];
														      $department_id = $row_s['department_id'];
														    $programme_id = $row_s['programme_id'];
														   $course_title = $row_s['title'];
														   $course_code = $row_s['code'];
														   $course_type = $row_s['course_type'];
														   $course_unit = $row_s['unit'];
														   $semester = $row_s['semester'];
														   $prerequisite_of = $row_s['prerequisite_of'];
														   
														   $level = $row_s['level'];
														   $course_status = $row_s['course_status'];
														   if($course_type =='1'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
														   
														   if($course_type =='1'){
														       $ss1='selected';
														       $ss2='';
														   }else{
														       $ss2='selected';
														       $ss1='';
														   }
														   
														   if($semester =='1'){
														       $s1='selected';
														       $s2='';
														   }else{
														       $s2='selected';
														       $s1='';
														   }
														  
														  
												}			  
												
											}		  
														
?>
<div class="form-row">
                           
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">School</label>
                                <select id="school_id_edit" name="school_id" onchange="get_faculty_list_by_school_id_edit(this.value)" class="form-control input-style" required>
                                    
                                    <?=get_all_school_selected($con,$school_id);?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Faculty</label>
                                <select id="faculty_id_edit" name="faculty_id" onchange="get_department_list_by_faculty_id_edit(this.value)" class="form-control input-style" required>
                                    <?=get_all_faculty_selected($con,$faculty_id);?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Department</label>
                                <select id="department_id_edit" name="department_id" onchange="get_programe_list_by_department_id_edit(this.value)" class="form-control input-style" required>
                                   
                                     <?=get_all_departments_selected($con,$department_id);?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Programme</label>
                                <select id="prog_id_edit" name="prog_id" class="form-control input-style" required> 
                                   <?=get_all_programme_selected($con,$department_id,$programme_id);?>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputState" class="input__label">Level</label>
                                <select id="level_id_edit" name="level_id" class="form-control input-style" required>
                                    <option selected>Choose...</option>
                                   <?php for($i=100; $i<=900; $i+=100){
                                       if($i == $level){
                                            echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                       }else{
                                         echo '<option value="'.$i.'">'.$i.'</option>';  
                                       }
                                    }?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState" class="input__label">Course Title</label>
                                <input type="text" name="course_title" class="form-control input-style" value="<?=$course_title;?>" required/>
                                   
                               
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" class="input__label">Course Code</label>
                                <input type="text" name="course_code" class="form-control input-style" value="<?=$course_code;?>" required/>
                                   <input type="hidden" name="$course_id" class="form-control input-style" value="<?=$course_id;?>" required/>
                                   
                               
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Semester</label>
                                <select id="semester_id" name="semester_id" class="form-control input-style" required>
                                  <option value="0">Choose</option> 
                                  <option value="1" <?=$s1?>>First</option> 
                                  <option value="2" <?=$s2?>>Second</option> 
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                
                                <label for="inputState" class="input__label">Course Type</label>
                                <select id="course_type" name="course_type" class="form-control input-style" required>
                                  <option value="0">Choose</option> 
                                  <option value="1" <?=$ss1?>>Core</option> 
                                  <option value="2" <?=$ss2?>>Elective</option> 
                                </select>
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Course Unit</label>
                                <select id="course_unit" name="course_unit" class="form-control input-style" required>
                                  <option selected>Choose...</option>
                                   <?php
                                   for($i=0; $i<=10; $i+=1){
                                       if($i == $course_unit){
                                           echo '<option value="'.$i.'" selected>'.$i.'</option>'; 
                                       }else{
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                       }
                                   
                                    }?>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="inputState" class="input__label">Prerequisite Course</label>
                                <select id="prerequisite_of" name="prerequisite_of"   class="form-control input-style" >
                                    
                                    <?=get_all_courses_selected($con,$prerequisite_of);?>
                                </select>
                            </div>
                    <div id="saving_register_edit" class="form-group col-md-12">
                       <center> <button type="submit" name="load_course" class="btn btn-primary btn-style mt-4">Edit</button></center></div>
                       
                         <div id="output_register_edit" class="form-group col-md-12">
                          </div>
                          
                </div>