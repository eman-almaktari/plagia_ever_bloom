
<!DOCTYPE html>

<html lang="">
<head>
<title>Plagia</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        
   
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
</head>
<body id="top">
<div class="wrapper row0">
  <nav id="mainav" class="hoc clear"> 
    <ul class="clear">
      <li><a href="index.php">Home</a></li>
    </ul>
  </nav>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 

    <h1><a href="./index.html">Plagia Ever Bloom</a></h1>
    <p>Plagiarism Detection Tool</p>

  </header>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="content"> 
      <?php		
			/* include script that callls web services and print result*/
			include './backscript_JSON.php';
    
			/* print buttons */
			if (isset($_POST['username'])){
				echo "<br/> <br/> <br/> <br/>";
				echo '   <div style="float: right;"><a href="plagchecker.php?username='.$_POST['username'].'&type='.$_POST['type'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span> Wanna Try Again !</button></a></div>    ';
			
				echo '   <div style=""><a href="logout.php"><button class="btn btn-success"><span class="glyphicon glyphicon-repeat"></span> logout </button></a></div>   ';
			}
	  ?>
				    
    
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


