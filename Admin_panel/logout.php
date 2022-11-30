<?php
session_start();

if(isset($_SESSION['staff_id'])){

$staff_id=$_SESSION['staff_id'];



unset($_SESSION['staff_id']);
session_destroy();
header('Location:index.php');
}

unset($_SESSION['staff_id']);
session_destroy();
header('Location:index.php');

?>