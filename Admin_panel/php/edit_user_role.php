<?php
include_once('../db_connect/db.php');
$title = mysqli_real_escape_string($con, $_POST['title']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$status = mysqli_real_escape_string($con, $_POST['status']);
$user_id = mysqli_real_escape_string($con, $_POST['user_id']);

  $q=mysqli_query($con, "UPDATE desgnations SET title='$title',
                      description ='$description', status ='1',
                      date_modified=NOW(), modified_by='admin'
                      WHERE id = '$user_id'" ) ;
if($q){
$errors= '1';
}else{
$errors = 'Error, Record not Updated';
}

echo $errors;
?>
