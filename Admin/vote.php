<?php
include 'functions.php';
// Connect to MySQL
$servername = "db4free.net";
$username = "php_poll";
$password = "72766000000@f";
$dbname = "php_poll";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// If the GET request "id" exists (poll id)...

   
        if (isset($_POST['submit'])) {
            $color = $_POST['color'];
            $logo = $_POST['logo'];
            
            // Update and increase the vote for the answer the user voted for
            $stmt = "UPDATE poll_answers SET votes = votes + 1 WHERE id = $color OR id = $logo ";
            if (mysqli_query($conn, $stmt)) {
              ?>
              <script>alert('Your Choice is Successfully Submitted.');
              window.location.href='../index.php';
              </script><?php
              } else {
                echo "Error updating record: " . mysqli_error($conn);
              }
        }


?>
