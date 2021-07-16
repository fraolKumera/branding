<?php
include 'functions.php';
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phppoll";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// If the GET request "id" exists (poll id)...

   
        if (isset($_POST['submit'])) {
            $color = $_POST['color'];
            $logo = $_POST['logo'];
            
            // Update and increase the vote for the answer the user voted for
            $stmt = "UPDATE poll_answers SET votes = votes + 1 WHERE id = $color OR id = $logo ";
            if (mysqli_query($conn, $stmt)) {
                echo "Record updated successfully";
              } else {
                echo "Error updating record: " . mysqli_error($conn);
              }
        }


?>
