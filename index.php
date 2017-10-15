<?php
if (isset($_GET['username']) || isset($_POST['username']))
	header("location:plagchecker.php");
else
	header("location:login.php");
 ?>
