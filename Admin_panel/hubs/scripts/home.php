
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Dashboard</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active"><?php echo date('Y:M:D H:i:s') ; ?></li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-one w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-user-graduate"></i>
</div>
<div class="db-info" style="overflow:hidden">
<h3><?php echo 'N'.number_format(get_total_amount_paid_applicants($con,$session),2);?></h3>
<h6>Application Fee</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-two w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-crown"></i>
</div>
<div class="db-info" style="overflow:hidden">
<h3><?php echo 'N'.number_format(get_total_amount_paid_acceptance_fee($con,$session),2);?></h3>
<h6>Acceptance Fee</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-three w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-building"></i>
</div>
<div class="db-info" style="overflow:hidden">
<h3><?php echo 'N'.number_format(get_total_amount_paid_school_fee($con,$session),2);?></h3>
<h6>School Fee</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-four w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-file-invoice-dollar"></i>
</div>
<div class="db-info">
<h3><?php echo 'N'.number_format(get_total_amount_paid_hostel_fee($con,$session),2);?></h3>
<h6>Hostel Fee</h6>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-four w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-user-graduate"></i>
</div>
<div class="db-info">
<h3><?php echo get_total_students_all($con); ?></h3>
<h6>Students</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-three w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-crown"></i>
</div>
<div class="db-info">
<h3><?php echo get_total_applicants($con); ?></h3>
<h6>Applicants</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-two w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-building"></i>
</div>
<div class="db-info">
<h3><?php echo get_total_staffs($con); ?></h3>
<h6>Staffs</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-one w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-file-invoice-dollar"></i>
</div>
<div class="db-info">
<h3><?php echo get_total_admins($con); ?></h3>
<h6>Admins</h6>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-two w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-user-graduate"></i>
</div>
<div class="db-info">
<h3><?php echo get_total_faculty($con); ?></h3>
<h6>Faculties</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-four w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-crown"></i>
</div>
<div class="db-info">
<h3><?php echo get_total_department($con); ?></h3>
<h6>Departments</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-one w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-building"></i>
</div>
<div class="db-info">
<h3><?php echo get_total_programme($con); ?></h3>
<h6>Programmes</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-three w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-file-invoice-dollar"></i>
</div>
<div class="db-info">
<h3><?php echo get_total_courses($con); ?></h3>
<h6>Courses</h6>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 d-flex">

<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Recent School Fee Payments</h5>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center">
<thead class="thead-light">
<tr>
<th>ID</th>
<th>Name</th>
<th>Matric No.</th>
<th class="text-center">Amount</th>
<th class="text-center">Date</th>
<th class="text-end">Year</th>
</tr>
</thead>
<tbody>
  <?php

  $q = "SELECT id, student_id,
        DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added,amount

      FROM  school_fee_payments WHERE session='$session' ORDER BY date_added ASC LIMIT 10";
  $r = mysqli_query($con, $q);
  $sn = 1;
  if(mysqli_num_rows($r) > 0)
  {//show table
    while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
    {

      echo '<tr>
      <td class="text-nowrap">
      <div>'.$sn.'</div>
      </td>
      <td class="text-nowrap">'.get_student_fullname($con, $row['student_id']).'</td>
      <td class="text-nowrap">'.get_student_mat_no($con, $row['student_id']).'</td>
      <td class="text-center"><b>'.'N'.number_format($row['amount'],2).'</b></td>
      <td class="text-center"><div>'.$row['date_added'].'</div></td>
      </tr>';
      $sn++;
    }
  }
  else
  {//show the msg

      echo
           '<div class="alert alert-danger alert-dismissable col-md-12">
          <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
          <img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
           </div>';


  }
?>
</tbody>
</table>
</div>
</div>
</div>

</div>
<div class="col-md-6 d-flex">

<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Recent Application Fee Payments</h5>
</div>
<?php

$q = "SELECT id, applicant_id,
      DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added,amount

    FROM  applicants_fee_payments WHERE session='$session' ORDER BY date_added ASC LIMIT 10";
$r = mysqli_query($con, $q);
$sn = 1;
if(mysqli_num_rows($r) > 0)
{//show table
  while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
  {

    echo '<tr>
    <td class="text-nowrap">
    <div>'.$sn.'</div>
    </td>
    <td class="text-nowrap">'.get_applicant_fullname($con, $row['applicant_id']).'</td>
    <td class="text-nowrap">'.get_applicant_application_number($con, $row['applicant_id']).'</td>
    <td class="text-center"><b>'.'N'.number_format($row['amount'],2).'</b></td>
    <td class="text-center"><div>'.$row['date_added'].'</div></td>
    </tr>';
    $sn++;
  }
}
else
{//show the msg

    echo
         '<div class="alert alert-danger alert-dismissable col-md-12">
        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
        <img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
         </div>';


}
?>
</div>

</div>
</div>
