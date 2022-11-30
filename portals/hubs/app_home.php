<h1 class="h2">Dashboard</h1>

<div class="card border-left-3 border-left-primary card-2by1">
    <div class="card-body">
        <div class="media flex-wrap align-items-center">
            <div class="media-left">
                <i class="material-icons text-muted-light">credit_card</i>
            </div>
            <div class="media-body"
                 style="min-width: 280px; font-size:20px;">
                CURRENT DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><?php echo  date("Y/m/d"); ?></strong>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Upload Image
</button>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-2">

  </div>
<div class="card col-md-8">
  <div class="card-header">
    <h4 class="text-primary text-center"><?php echo get_user_application_number($con, $user_id); ?></h4>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <?php echo $student_image; ?>
      </div>
      <div class="col-md-8">
        <p>Email: <strong> <?php echo $email; ?> </strong></p>
        <p>Phone No.: <strong><?php echo $phone_no; ?></strong></p>
        <p>School: <strong><?php echo get_school_title_by_id($con, $school_applied_for); ?></strong></p>
        <p>Department: <strong><?php echo get_department_title($con, $department_applied_for); ?></strong></p>
        <p>Programme: <strong><?php echo get_programme_title($con, $programme_applied_for); ?></strong></p>
        <p>Gender: <strong><?php echo $gender; ?></strong></p>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <a href="logout" type="submit" name="button" class="btn btn-danger">Logout</a>
  </div>
</div>
</div>
