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
	<div class = "header">
		<h1><center> Search Results: </center></h1>
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
<?php
    $con= new mysqli("localhost","root","","loginDB");
    $search = $_POST['search'];
    
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM review
    WHERE name LIKE '%{$search}%' OR location LIKE '%{$search}%' OR tag LIKE '%{$search}%'");
	
	while ($row = mysqli_fetch_array($result))
         {
		 $restid = $row['ID'];
		 			 
        echo '<h3> <a href="review_details.php?id='.$restid.'">'.$row['name']. '</a></h3><p>'; ?>
	<form method = "get" action= "commentserver.php">
		<input type="hidden" name="id" value= "<?php echo $restid;?>">
	</form>
	<?php
		echo '<u>Location:</u> '. $row['location']  .'<p>'. $row['review'] . '</p>' . '<h5> Tag: ' . $row['tag'] . '</h5>';

        
         }
     
    

    ?>