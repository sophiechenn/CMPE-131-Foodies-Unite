<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login2.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	header("location: login2.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="headerstyle.css">
</head>

<body>
	<div class = "header">
		<h1><center> Foodies Unite </center></h1>
	</div>
	
	<div class="content">
	  	<!-- notification message -->
	  	<?php if (isset($_SESSION['success'])) : ?>
	      <div class="error success" >
	      	<h3>
	          <?php 
	          	echo $_SESSION['success']; 
	          	unset($_SESSION['success']);
	          ?>
	      	</h3>
	      </div>
	  	<?php endif ?>

	    <!-- logged in user information -->
	    <?php  if (isset($_SESSION['username'])) : ?>
			<div align = "right">
	    		<p class = "ex1"> Welcome <strong><?php echo $_SESSION['username']; ?></strong>! <br>
	    			<a href="index.php?logout='1'" style="color: red;">Logout</a>
				</p>
			</div>
	    <?php endif ?>
	</div>

	<div class = "column">
		<div class = "col-3 menu">
			<ul>
				<li><a href = "search.php">Search</a></li>
				<li><a href = "aboutus.html">About Us</a></li>
				<li><a href = "contactus.php">Contact Us</a></li>
				<li><a href = "writereview.php">Write a Review</a></li>			
			</ul>
		</div>

		<!-- Photo Grid -->
		<div class="row"> 
  			<div class="column">
    			<img src="food1.jpg" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="food19.jpg" style="width:100%">
  			</div>  
  			<div class="column">
    			<img src="food12.jpg" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="food4.jpg" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="food8.jpg" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="food5.jpg" style="width:100%">
  			</div>
		</div>
	</div>

</body>
</html>