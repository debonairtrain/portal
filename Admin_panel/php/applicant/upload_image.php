<?php
include_once('../../db_connect/db.php');
$app_id = mysqli_real_escape_string($con, $_POST['app_id']);
$file_name = $_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
@$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

$expensions= array("jpeg","jpg","png");

if(in_array($file_ext,$expensions)=== false){
   $errors ="extension not allowed, please choose a JPEG or PNG file.";

}

if($file_size > 100000){
   $errors ='File size must be exatly 100KB or less';

}


//prevent overwritten
$now = date('Y-m-d-His');

if(empty($errors)==true){
$file_name=$app_id.'.'.$file_ext;
$file_name = $now.$file_name;
   move_uploaded_file($file_tmp,"https://applicant.gschstg.sch.ng/uploads/".$file_name);
  $q=mysqli_query($con, "UPDATE applicant SET image='$file_name' WHERE id=$app_id") ;
if($q){
$errors= '1';
}else{
$errors = 'Passport not uploaded';
}


}
echo $errors;
?>
