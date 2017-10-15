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
	  <?php 
	    /* if user is admin add link to admin pannel */
		if ($_GET['type'] == 0){
			echo "<li><a href='adminpan.php?username=".$_GET['username']."&type=0'>Admin</a></li>";
		}
	  ?>
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
      
      
      <p>Use Plagia EVER Bloom for plagiarism detection with immediate results<br />To use this tool, please copy and paste your content in the box below, and then click on the big button that says “Check Plagiarism” then sit back and watch as your article is scanned for duplicated content.</p>
	  
	  <div id="comments">
	  <form  method="POST" action="result_JSON.php">
          <div class="block clear">
            <label for="comment">Paste Text Here: </label>
            
			
                            <textarea id="text_input" name="input"  cols="25" rows="10"></textarea><br /><br />
							
                            <button style="float: right;" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span>
							Check Plagiarism</button>
							<?php echo '<input type="hidden" name="username" value="'.$_GET['username'].'"/>'; ?>
							<?php echo '<input type="hidden" name="type" value="'.$_GET['type'].'"/>'; ?>
          </div>
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
