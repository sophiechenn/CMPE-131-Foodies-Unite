<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="headerstyle.css"/>
	<link rel="stylesheet" type="text/css" href="loginstylesheet.css"/>
<style>
	body, html {
	    height: 100%;
	    margin: 0;
	}

	.bg {
	    /* The image used */
	    background-image: url("food7.jpg");

	    /* Full height */
	    height: 100%; 

	    /* Center and scale the image nicely */
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
	    opacity: 0.4;
	}
	
	.btn {
		margin-left: 310px;
	}
</style>
</head>
<body>
	<div class ="bg">
	</div>	
	<div class = "center">
	  	<h1><center>Login</center></h1>
	</div>
	<div class = "center1">
        <form method="post" action="login2.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username:</label>
			<input type="text" name="username">
			<input type="hidden" name="id" value= "<?php echo $user_id;?>">
  		</div>
  		<div class="input-group">
  			<label>Password:</label>
			<input type="password" name="password">
			<p><a href="contactus.php"> Forgot your password?</a></p>
 	       	</div>
  		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Let's Eat!</button>
  		</div>
  		<label> <p>Not yet a member? <a href="register.php"> Sign up</a></p></label>
	</form>
	<form method="post" action="review_details.php">
		<input type="hidden" name="username" value="">
	</div>
</body>
</html>