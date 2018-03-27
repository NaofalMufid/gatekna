<?php
if ($_POST['user']=='deke' AND $_POST['sandi']=='ngapaya') {
 	session_start();
 	$_SESSION['nama'] = "Oragenah";
 	header("location:../index.php");
 } else {
 	header("location:../login.php");
 }
  
if ($_GET['act'] == 'metu') {
	session_start();
	session_destroy();
 	header("location:../login.php");
}
?>