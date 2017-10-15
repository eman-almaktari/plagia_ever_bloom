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
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content">
			
			<form method="POST" action="./usersscript.php">
			  
			  
			  <strong>Delete User</strong>
			  
			  <div class='alert alert-danger fade in'>Are you sure you want to delete user 
				<?php echo "<b>".$_GET['user']."</b>? <br/>";?>
			  </div>
			  
			  <input type="hidden" name="methode" value="DELETE"/>
			  <?php
					echo '<input type="hidden" name="username" value="'.$_GET['username'].'"/>'; 
					echo '<input type="hidden" name="id" value="'.$_GET['id'].'"/>'; 
			  ?>
			  
			  <button type="submit" value="submit">Delete</button>
			
			</form>
	</div>
		
   </main>
</div>

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
