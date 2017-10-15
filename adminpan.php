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
	  
      <li><a href="plagchecker.php?username=<?php echo "".$_GET['username']; ?>&type=0">Plagia</a></li>
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
			<table>
				<tr>
					<th></th>
					<th></th>
					
					<th>user</th>
					<th>pass</th>
					<th>type</th>
				</tr>
				<?php 
					/* get users from DB and display in table */
					
					$query = "SELECT * FROM users";
					$db_string = mysqli_query($con, $query);
					
					while($arr = mysqli_fetch_array($db_string)){
						echo "<tr>
								<td><a href = './edituser.php?id=".$arr['id']."&username=".$_GET['username']."'>Edit</a></td>
								<td><a href = './deleteuser.php?user=".$arr['user']."&username=".$_GET['username']."&id=".$arr['id']."'>Delete</a></td>
								
								<td>".$arr['user']."</td>
								<td>".$arr['pass']."</td>";
								if($arr['type'] == 0)
									echo "<td> admin </td>";
								elseif ($arr['type'] == 1)
									echo  "<td> doctor </td>";
						echo "</tr>";
					}
				?>
			</table>
			<fieldset>
				<form  method="POST" action="./adduser.php">
					
					<?php echo '<input type="hidden" name="username" value="'.$_GET['username'].'"/>'; ?>
					<button style="float: right;" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span>
							Add New User</button>
					
				</form>
			</fieldset>
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
