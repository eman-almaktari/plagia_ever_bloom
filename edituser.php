<?php
    include 'Includes/include.php';
?>
<!DOCTYPE html>

<html lang="">
<head>
<title>Plagia</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <nav id="mainav" class="hoc clear"> 
    
    <ul class="clear">
      <li><a href="index.php">Home</a></li>
	  <li><a href="logout.php">Logout</a></li>
    </ul>
    
  </nav>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <h1><a href="../index.html">Plagia Ever Bloom</a></h1>
    <p>Plagiarism Detection Tool</p>
    
  </header>
</div>

	<article>    
	  <div class="wrapper row2">
	  <center>
		<section class="hoc container clear"> 
		  <div class="group">
		  <figure class="one_quarter first">
		    
			<form method="POST" action="./usersscript.php">
			  
			  
			  <strong>Edit User</strong>
			  
			  <?php 
				$query = "SELECT * FROM users WHERE `id` = ".$_GET['id'].";"; 
				$db_string = mysqli_query($con, $query);
				$arr = mysqli_fetch_array($db_string);
			  ?>
			  <input class="btmspace-15" type="text" name="edituser" placeholder="<?php echo $arr['user']?>" required>
			  <input class="btmspace-15" type="text" name="editpass" id="inputPassword" placeholder="<?php echo $arr['user']?>" required>
			  <select class="btmspace-15" name="type">
				  <option value="0">Admin</option>
				  <option value="1">Doctor</option>
			  </select>
			  
			  <input type="hidden" name="methode" value="EDIT"/>
			  <?php
				echo '<input type="hidden" name="username" value="'.$_GET['username'].'"/>'; 
				echo '<input type="hidden" name="id" value="'.$_GET['id'].'"/>'; 
			  ?>
			  
			  <button type="submit" value="submit">EDIT</button>
			
			</form>
			</figure>
		  
		  </div>
		</section>
	  </center>
	  </div>
    </article>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Plagia Ever Bloom</a></p>
    
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
