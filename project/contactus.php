<?php include('reportserver.php')?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="headerstyle.css"/>
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
	<div class ="header">
		<h1><center> Contact Us! </center></h1>
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
	<h4> QUESTIONS: </h4>
	Have any questions? Contact us by filling out the form below and we will reply to you within a couple of days. This includes if you were redirected here through the forgotten password login page.
	<br><h4> REPORTS: </h4>
	If you have any problems with a review for a certain restaurant, you can report it to us through this form here as well. Make sure to include the restaurant name, the user that posted the review, and the content of the review that you are reporting. We will review it and get back to you within a couple of days. 
			<br></br> <br>
	<form method="post" action="contactus.php">
		Name: <br>
		<input type="text" name="name" value="<?php echo $name; ?>" required>
		<br> <br>
		Email: <br>
		<input type="email" name="email" value="<?php echo $email; ?>" required>
		<br><br>
		Questions/Report: <br>
		**Please limit to one report per form. <br>
		<textarea name = "content" rows"50" cols="40" value="<?php echo $content; ?>" required></textarea>
		<br> <br>
	
	<button type="submit" class="btn" name="submit_report">Submit</button>

	</form>
	</body>
</html>