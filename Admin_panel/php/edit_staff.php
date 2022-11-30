<?php
include_once('../db_connect/db.php');
$f_name = mysqli_real_escape_string($con, $_POST['f_name']);
$m_name = mysqli_real_escape_string($con, $_POST['m_name']);
$l_name = mysqli_real_escape_string($con, $_POST['l_name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$tel = mysqli_real_escape_string($con, $_POST['tel']);
$ms = mysqli_real_escape_string($con, $_POST['ms']);
$faculty_id = mysqli_real_escape_string($con, $_POST['faculty_id']);
$department_id = mysqli_real_escape_string($con, $_POST['department_id']);
$staff_type = mysqli_real_escape_string($con, $_POST['staff_type']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$religion = mysqli_real_escape_string($con, $_POST['religion']);
$staff_number = mysqli_real_escape_string($con, $_POST['staff_id']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$country = mysqli_real_escape_string($con, $_POST['country']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$lga = mysqli_real_escape_string($con, $_POST['lga']);
$role = mysqli_real_escape_string($con, $_POST['role']);
$status = mysqli_real_escape_string($con, $_POST['status']);
$user_status = mysqli_real_escape_string($con, $_POST['user_status']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$user_id = mysqli_real_escape_string($con, $_POST['user_id']);
$password = md5('12345');
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
$file_name=$staff_number.'.'.$file_ext;
$file_name = $now.$file_name;
   move_uploaded_file($file_tmp,"../../uploads/".$file_name);
  $q=mysqli_query($con, "UPDATE staffs SET admin_group_id='2', faculty_id='$faculty_id',
                      department_id = '$department_id', staff_type_id = '$staff_type',
                      religion ='$religion', marital_status ='$ms', first_name ='$f_name',
                      middle_name = '$m_name', last_name='$l_name', gender='$gender', staff_number='$staff_number',
                      password ='$password', email='$email',birthdate='$dob', phone_number ='$tel',
                      address ='$address', image='$file_name', country_id='$country', status ='1',
                      state_id='$state', lga_id='$lga', date_modified=NOW(), modified_by='admin'
                      WHERE id = '$user_id'" ) ;
if($q){
$errors= '1';
}else{
$errors = 'Error, Record not Updated';
}


}
echo $errors;
?>
