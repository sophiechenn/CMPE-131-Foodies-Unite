<?php
 session_start();

 // initializing variables
 $name = "";
 $email = "";
 $content = ""; 
 $errors = array(); 

 // connect to the database
 $db = mysqli_connect('localhost', 'root', '', 'loginDB');


 if (isset($_POST['submit_report'])) {
   // receive all input values from the form
   $name = mysqli_real_escape_string($db, $_POST['name']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $content = mysqli_real_escape_string($db, $_POST['content']);

   // form validation: ensure that the form is correctly filled ...
   // by adding (array_push()) corresponding error unto $errors array
   if (empty($name)) { array_push($errors, "Name is required"); }
   if (empty($email)) { array_push($errors, "Email is required"); }
   if (empty($content)) { array_push($errors, "Please enter a question or a report."); }
	
	$query = "INSERT INTO contactus (name, email, content) 
   			  VALUES('$name', '$email', '$content')";
   	mysqli_query($db, $query);
   	header('location: submitreview.html');
 }

 ?>