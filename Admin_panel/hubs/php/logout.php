<?php
session_start();

if(isset($_SESSION['admin_id'])){

$admin_id=$_SESSION['admin_id'];



unset($_SESSION['admin_id']);
session_destroy();
header('Location:../../index.php');
}

unset($_SESSION['admin_id']);
session_destroy();
header('Location:../../index.php');

?>
