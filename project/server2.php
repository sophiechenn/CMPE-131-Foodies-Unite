<?php
session_start();

// initializing variables
$name = "";
$location    = "";
$review = ""; 
$tag = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'loginDB');


if (isset($_POST['post_review'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $review = mysqli_real_escape_string($db, $_POST['review']);
  $tag = mysqli_real_escape_string($db, $_POST['tag']);
  // Get image name
  $image = $_FILES['image']['name'];
  
  // image file directory
  $target = "images/".basename($image);
  
  
  
  $query = "INSERT INTO review (name, location, review, tag, image) 
  			  VALUES('$name', '$location', '$review', '$tag', '$image')";
  	
  mysqli_query($db, $query);
  header('location: submit.html');
  
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
  {
  		$msg = "Image uploaded successfully";
  }else{
  		$msg = "Failed to upload image";
  }

}
$result = mysqli_query($db, "SELECT * FROM images");
?>