<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="headerstyle.css" />
		<style>
			.btn{
				padding: 5px 13px;
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
<div class = "header">
	<h1><center> Search </center></h1>
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
	<br>
	<div class = "col-8 menu">
    	<div class="from">
    	<form action = "searchserver.php" method="post">
        	<label for="mysearch">What are you looking for today? </label> <br>
        	<input type="text" name="search"/>
        	<br> <br>*Note: If you click "Go!" and nothing is there, that means there's no reviews :-( You can be the first one to write a review for the restaurant! 
        	<button class="btn" name="search_restaurant" type="submit">Go!</button>
        </form>
    </body>
</html>