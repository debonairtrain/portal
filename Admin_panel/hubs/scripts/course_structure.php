<?php $rnd_hash =  md5(rand(0,100)); ?>
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
<div class="card card-table">
<div class="card-body">
  <a href="dashboard?hubs=new_structure" class="btn btn-info btn-style" >
                  Add Programme Courses
                </a> <br><br>
<div class="table-responsive">
  <table class="table table-hover datatable col-md-12">
    <thead>
                          <tr>
                              <th></th>
                              <th>School</th>
                              <th>Department</th>
                              <th>Programme</th>
                              <th>Courses</th>
                              <th>Seen As Elective</th>
                              <th>Status</th>
                              <th>Date Added</th>
                              <th>Date Modified</th>
                              <th>Action</th>
                          </tr>
                      </thead>
        <tbody>
          <?php
$select="SELECT id, school_id,  programme_id, department_id, course_id, level, seen_as_elective,  status, token,
DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added,
DATE_FORMAT(date_modified, '%M %d, %Y %l:%i:%p') as date_modified, added_by, modified_by
FROM  programmes_courses
GROUP BY token
ORDER BY date_added DESC, date_modified DESC ";
$sql_select = mysqli_query($con,$select);
$num_rows=mysqli_num_rows($sql_select);
if($num_rows > 0){
$sn=1;
while($row=mysqli_fetch_array($sql_select)){

$id=$row['id'];
$school_id=$row['school_id'];
$programme_id=$row['programme_id'];
$department_id=$row['department_id'];
$level=$row['level'];
$real_=$row['status'];
$status=$row['seen_as_elective'];
$date_added=$row['date_added'];
$date_modified=$row['date_modified'];
$token_id=$row['token'];
$school = get_user_school($con,$school_id);
$programme = get_user_programme($con,$programme_id);
$department = get_user_deparment($con,$department_id);
$courses = get_courses_for_level_programmes($con, $level, $programme_id);
if($real_=='0')
   {
     $real_ = '<span class="btn btn-info">Published</span>';
   }else if($real_=='1') {
     $real_ = '<span class="btn btn-primary">Unpublished</span>';
   }else {
     $real_ = '<span class="btn btn-danger">Not Active</span>';
   }
   if($status=='1')
      {
        $status = '<span class="btn btn-info">Core</span>';
      }else {
        $status = '<span class="btn btn-primary">Elective</span>';
      }

      echo $tr = '


          <tr>
          <td>'.$sn.'</td>
          <td>'.$school.'</td>
          <td>'.$programme.'</td>
          <td>'.$department.'</td>
          <td>'.$courses.'</td>
          <td>'.$status.'</td>
          <td>'.$real_.'</td>
          <td>'.$date_added.'</td>
             <td>'.$date_modified.'</td>
             <td class="text-end">
             <div class="actions">
             <a href="dashboard?hubs=edit_programme&token='.$token_id.'" id="'.$id.'" class="btn btn-sm bg-success-light me-2">
             <i class="fas fa-pen"></i>
             </a>
             <a href="#" onclick="delete_course_structure('.$token_id.')" class="btn btn-sm bg-danger-light">
             <i class="fas fa-trash"></i>
             </a>
             </div>
             </td>
                          <input type="hidden" id="department_id" value="'.$token_id.'"/>
          </tr>
        ';

$sn++;

}
}else {
echo '<td colspan="9">No record found</td>';
}

?>
        </tbody>
      </table>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
							function delete_course_structure(id)
							{
								//alert(id);
								if(confirm("Do you  really want to proceed?"))
								 {
									 //alert(id);
									 $.post("php/delete_course_structure.php",{id:id},

										function(response,status)
										{
											alert(response)
											//window.setTimeout(link,2000);
										});
								 }
							}
							function link(){
								location.reload();
							}
						</script>
