
<?php 
 //session_start();
 
 /* include DB connection */
 include 'Includes/include.php';
 
/* get user and pass from login form */
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];

/* select similar user and pass from DB */
$query = "SELECT * FROM `users` WHERE user='$username' and pass='$password'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

/* if user exists login to plagia tool*/
if ($count == 1){
$result_arr = mysqli_fetch_array($result);
	
	/* check if he is admin or doctor*/
	if ($result_arr['type'] == 0)
		header("location:adminpan.php?username=".$username."&type=0");

	if ($result_arr['type'] == 1)
		header("location:plagchecker.php?username=".$username."&type=1");

	/* else return to login*/
}else{
	$fmsg = "invalid login credentials";
	header("location:login.php?msg=".$fmsg);
}
}
?>