<?php
    include 'Includes/include.php';
	
	
	if ($_POST['methode'] == "ADD"){
		$query = "INSERT INTO `users` (`id`, `user`, `pass`, `type`) VALUES (NULL, '".$_POST['adduser']."', '".$_POST['addpass']."', '".$_POST['type']."');";
		
		$db_string = mysqli_query($con, $query);
		header("location:adminpan.php?username=".$_POST['username']);
	}
	elseif ($_POST['methode'] == "EDIT"){
		$query = "UPDATE `users` SET `user`='".$_POST['edituser']."', `pass`='".$_POST['editpass']."', `type`='".$_POST['type']."' WHERE `id` = ".$_POST['id'].";";
		 
		 //echo "".$query;
		$db_string = mysqli_query($con, $query);
		header("location:adminpan.php?username=".$_POST['username']);
	}
	elseif($_POST['methode'] == "DELETE"){
		$query = "DELETE FROM `users` WHERE `id` = ".$_POST['id'].";";
		
		$db_string = mysqli_query($con, $query);
		header("location:adminpan.php?username=".$_POST['username']);
	}
?>