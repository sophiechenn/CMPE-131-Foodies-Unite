<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="headerstyle.css" />
		<style>
			.btn{
				padding: 8px 13px;
				color: white;
				background: #DAA520;
				text-align: center;
				border: 2px solid rgba (33, 68, 72, 0.59);
				font-size: 13px;
				cursor: pointer;
				margin-top: 5px;
			}
			</style>
	</head>

	<body>
	<div class="header">
	<h1><center> Write a Review</center></h1>
	</div>
	<div class = "column">
		<div class = "col-2 menu">
			<ul>
				<li><a href = "index.php">Home</a></li>
				<li><a href = "search.php">Search</a></li>
				<li><a href = "aboutus.html">About Us</a></li>
				<li><a href = "contactus.php">Contact Us</a></li>
				<li><a href = "writereview.php">Write a Review</a></li>			
			</ul>
		</div>
		<div class = "col-8 menu">
		<h3> Fill out the form below to submit a review! </h3>	
	<form method="post" action="writereview.php" enctype="multipart/form-data">
		Restaurant Name: <br>
		<input type="text" name="name" value="<?php echo $name; ?>" required>
		<br> <br>
		Location: City, Zip code (Ex. San Jose, 95121): <br>
		<input type="text" name="location" value="<?php echo $location; ?>" required>
		<br> <br>
		Review: <br>
		<textarea name = "review" rows"50" cols="40" value="<?php echo $review; ?>" required></textarea>
		<br> <br>	
		Image (.png, .jpeg, and .jpg only please!): <br>
  
  	  <input type="file" name="image" id="image">
  	
  	<br><br>
  		
		Tag: <br>
		<input type="text" name="tag" value="<?php echo $tag; ?>" required>
		<br><br>
		
	<button type="submit" class="btn" name="post_review">Submit</button>
	<input type="hidden" name="ID" value="actual_ID" id="ID">
	</form>
	</body>
</html>