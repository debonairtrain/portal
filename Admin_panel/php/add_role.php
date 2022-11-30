<?php
include_once('../db_connect/db.php');
$title = mysqli_real_escape_string($con, $_POST['title']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$status = mysqli_real_escape_string($con, $_POST['status']);

   $q=mysqli_query($con, "INSERT INTO desgnations(id,title,description,date_added,added_by,status)
  VALUES(NULL,'$title','$description',NOW(),'ghost','1')") ;
if($q){
$errors= '1';
}else{
$errors = 'Error, Record not Inserted';
}

echo $errors;
?>
