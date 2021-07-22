<?php

if(!empty($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$content = $_POST["message"];

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "phppoll";
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   $stmt= "INSERT INTO contact ('name', 'email', 'content') VALUES ('" . $name. "', '" . $email. "','" . $content. "')";
  
   if (mysqli_query($conn, $stmt)) {
   $message = "Your contact information is saved successfully";
	}
   else {
      echo "Error updating record: " . mysqli_error($conn);
   }
}

?>