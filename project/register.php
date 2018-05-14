<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="headerstyle.css"/>
	<link rel="stylesheet" type="text/css" href="loginstylesheet.css"/>	
	<style>
		body, html {
		    height: 100%;
		    margin: 0;
		}

		.bg {
		    /* The image used */
		    background-image: url("food19.jpg");

		    /* Full height */
		    height: 100%; 

		    /* Center and scale the image nicely */
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		    opacity: 0.4;
		}
		.btn {
			margin-left: 250px;
		}

		input[type=email] {
		 color: #777;
		 padding-left: 10px;
		 margin: 10px;
		 margin-top: 10px;
		 margin-left: 45px;
		 width: 290px;
		 height: 35px;
		 border: 1px solid #c7d0d2;
		 border-radius: 2px;
		 box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
		}

	</style>
</head>
<body>
	<div class="bg"> 
	</div>
  <div class="center">
  	<h1><center>Register</center></h1>
  </div>
  <div class= "center1">
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username:</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email:</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password:</label>
  	  <input type="password" name="password">
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">I'm ready to browse!</button>
  	</div>
  		<label><p> Already a member? <a href="login2.php">Sign in</a></p></label>
  </form>
</div>
</body>
</html>