<?php
include_once('../../db_connect/db.php');
 $stu_id = mysqli_real_escape_string($con,$_POST['stu_id']);
$highest = mysqli_real_escape_string($con,$_POST['highest_qualification']);
$institution = mysqli_real_escape_string($con, $_POST['institution_obtained']);
$graduation= mysqli_real_escape_string($con, $_POST['graduation_year']);

$q = "UPDATE `students` SET  `highest_qualification`='$highest', `institution_obtained`='$institution',`pre_year_of_graduation`='$graduation'
   WHERE id = '$stu_id'"; //`programme_type_applied_for`='$programme_type',


$r = mysqli_query($con, $q);

if($r)
{
echo "1";
}
else
{
echo 'Contact not updated due to a system error. We apologize for any inconvenience.';
}

?>
