<?php
//include the headers resources
require_once('includes/functions.php');
require_once('../db_connect/db.php');
//collec the id
echo $id = $_POST['id'];

//collect the user id
$user = $applicant_id;

//query$
$q = "UPDATE applicant SET final_submission = '$id' WHERE id = '1'";
$r = mysqli_query($con, $q);




?>
