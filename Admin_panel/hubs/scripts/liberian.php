<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Office of the Liberian</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Dashboard</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0 datatable">
          <thead>
            <tr>
              <th></th>
                                       <th>Full Name</th>
                                       <th>Staff Number</th>
                                       <th>Phone Number</th>
                                       <th>Email</th>
                                       <th>Address</th>
                                       <th>Designation</th>
                                       <th>Status</th>
                                   </tr>
</thead>
<?php




$select="SELECT * FROM admin_users WHERE admin_role_id = '4' AND status='1' ";
$sql_select = mysqli_query($con,$select);
$num_rows=mysqli_num_rows($sql_select);
if($num_rows > 0){
	 $sn=1;
	 while($row=mysqli_fetch_array($sql_select)){

			 $id=$row['id'];
			 $admin_role_id=$row['admin_role_id'];
       $first_name=$row['first_name'];
			 $middle_name=$row['middle_name'];
			 $last_name=$row['last_name'];
			 $phone_number=$row['phone_number'];
			 $gender=$row['gender'];
       $email=$row['email'];
       $status=$row['status'];
			 $staff_id=$row['staff_id'];
       $desgnation = get_user_desgnation($con,$admin_role_id);
       $name = $first_name.' '.$middle_name.' '.$last_name;
			 if($status=='1')
					 {
             $status = '<span class="btn btn-info">Active</span>';
           }else {
             $status = '<span class="btn btn-danger">Suspended</span>';
           }
			 echo $tr = '

       <tbody>
           <tr>
              <td>'.$sn.'</td>
               <td>'.$name.'</td>
               <td>'.$staff_id.'</td>
               <td>'.$phone_number.'</td>
               <td>'.$email.'</td>
               <td>'.$gender.'</td>
               <td>'.$desgnation.'</td>
               <td>'.$status.'</td>
           </tr>
         ';

$sn++;
	 }
}else {
	 echo '<td colspan="11">No record found</td>';
}

?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
