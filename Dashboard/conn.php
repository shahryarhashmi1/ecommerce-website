<?php
     $host = "localhost";
     $user = "root";
     $password = "";
     $database = "tzw_website";

     // Create connection
    $conn = new mysqli($host, $user, $password, $database);
     
     mysqli_select_db($conn, 'tzw_website');

     // Check connection
     // if ($conn->connect_error)
     // {
     // die("Connection failed: " . $conn->connect_error);
     // }
     // echo "Connected successfully";
?>