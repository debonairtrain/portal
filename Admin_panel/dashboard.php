
<?php
session_start();
include_once('db_connect/db.php');
include_once('hubs/functions.php');
include_once('hubs/applicants_functions.php');

$session = get_current_session($con, $id = 1);
if(isset($_SESSION['staff_id'])){

	$staff_id=$_SESSION['staff_id'];
	$admin_role_id=$_SESSION['admin_role_id'];
	$last_time=$_SESSION['last_time'];
	include_once('php/get_admin_by_id.php');
  
}else{
    	header('Location: index');
}
if((time() - $_SESSION['last_time']) > 500){
	header('Location:hubs/php/logout');
}else{
	$_SESSION['last_time'] = time();
}

?>

<?php
    for($i=0;$i<1000000;$i++){
        echo "\n";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Admin - Dashboard</title>
<link rel="shortcut icon" href="assets/images/logo.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
</head>
<body>
<div class="main-wrapper">
<?php include_once('hubs/scripts/header.php'); ?>


<?php include_once('hubs/scripts/nav.php'); ?>


<div class="page-wrapper">
<div class="content container-fluid">


<?php
        if(isset($_GET['hubs'])){
            $page=$_GET['hubs'];
            include('hubs/scripts/'.$page.'.php');
        }else{
            include('hubs/scripts/home.php');
        }
    ?>
</div>

<footer>
<p class="text-center">Copyright © 2022 <a href="https://www.debonairtraining.com">Debonair Training Ltd</a> ||  Developed by Abbas Umaru</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Oct 2022 19:10:20 GMT -->
</html>
