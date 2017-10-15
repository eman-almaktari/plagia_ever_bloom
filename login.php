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
		<li class="active"><a href="index.php">Home</a></li>
	</ul>
</nav>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <h1><a href="index.html">Plagia Ever Bloom</a></h1>
    <p>Plagiarism Detection Tool</p>
    
  </header>
</div>

<div class="wrapper bgded overlay light" style="background-image:url('images/bg.jpg');">
  <div id="pageintro" class="hoc clear"> 

	
    <article>    
	  <div class="wrapper row2">
	  <center>
		<section class="hoc container clear"> 
		  <div class="group">
		  <?php 
			if(isset($_GET['msg']))
				echo "<strong style='color: red;' >**".$_GET['msg']." </strong><br/>";
		  ?>
		  <figure class="one_quarter first">
		    
			<form method="POST" action="./loginscript.php">
			  <strong>Please Login</strong>
			  <input class="btmspace-15" type="text" name="username" placeholder="Username" required>
			  <input class="btmspace-15" type="password" name="password" id="inputPassword" placeholder="Password" required>
			  <button type="submit" value="submit">Login</button></li>
			
			</form>
		  </figure>
		  
		  </div>
		</section>
	  </center>
	</div>
    </article>
    
  </div>
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