<?php 

	$servername = "localhost";
    $username = "root";
    $password = "";
    $db = 'communitywardrobe';
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . $conn->connect_error);
    }

 ?>